<?php

use \DB;
use \LOG;

/**
 * プロセスのSuperクラス
 */
class process_base{


	/**
	 * @var boolean	true:DB接続あり
	 */
	public $b_db_flg;



	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 * @param string  $s_db_type	DB_REFERENCE:参照用DB、DB_UPDATE:更新用DB
	 */
	public function process_base($b_db_flg = true)
	{
		$this->b_db_flg = $b_db_flg;
	}


	/**
	 * プロセスを実行するメソッドをコールする
	 * @param req_base 		$v_req_base			リクエスト
	 * @return 遷移先の画面
	 */
	public function execute_process(req_base $v_req_base, $v_util_dbaccessor = null) {

		if ($v_util_dbaccessor == null)
		{
			$v_util_dbaccessor = new util_dbaccessor();
		}

		try {
			Log::debug('プロセス開始::'.get_class($this));

			// 共通セッションの存在チェック(タイムアウトしていないか確認)
			util_sessionaccessor::get_session(SESSION_COMMON);

			// このプロセスの実行権限がなければエラーをレスポンスにセットしてreturn
			$b_ret = $this->_check_auth();

			if ($b_ret === false)
			{
				$v_dto_error = new dto_error();
				$v_dto_error->s_error_msg = ERROR_AUTH;
				Session::delete(SESSION_COMMON);
				Session::set(SESSION_ERROR, $v_dto_error);
				return VIEW_ERROR;
			}

			if ($this->b_db_flg === true)
			{
				// DBコネクション作成
				$b_ret = $v_util_dbaccessor->create_connection();
				if ($b_ret === null) {
					// TODO:共通エラー画面に遷移？
					return;
				}

				// トランザクションを開始する
				$v_util_dbaccessor->begin_transaction();
			}

			// プロセス実行
			$s_view_name = $this->process($v_util_dbaccessor, $v_req_base);

			if ($this->b_db_flg === true)
			{
				// コミット
				$v_util_dbaccessor->commit_transaction();

				// コネクション破棄
				$v_util_dbaccessor->despose_connection();
			}

			Log::debug('プロセス終了::'.get_class($this));

			return $s_view_name;

		} catch (\Exception $e) {

			if ($v_util_dbaccessor != null)
			{
				Log::error($e->getMessage());

				$v_util_dbaccessor->rollback_transaction();

				// コネクション破棄
				$v_util_dbaccessor->despose_connection();
			}
			return;
		}
	}


	/**
	 * プロセスを実行
	 * 継承先でオーバーライドされる
	 * @param util_dbaccessor	$v_util_dbaccessor	DBアクセッサ
	 * @param req_base 			$v_req_base			リクエスト
	 */
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
	}


	/**
	 * 表示するViewの名前を返す
	 * 継承先でオーバーライドされる
	 * @param req_base		$v_req_base		リクエスト
	 * @param res_base		$v_res_base		レスポンス
	 * @return 表示するViewの名前
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{
	}


	/**
	 * 実行してよい権限を返す
	 * 継承先でオーバーライドされる
	 * @param なし
	 * @return 権限
	 */
	protected function get_auth()
	{
		// 以下の順で、権限があるときは「1」ないときは「0」を設定
		// ADM
		// REQ
		// PVL
		// SUP
	}


	/**
	 * ログインユーザにプロセスを実行する権限があるかチェック
	 * @return チェック結果(false:権限なし)
	 */
	private function _check_auth()
	{
		// ログインユーザの権限
		$v_dto_reqcommon = Session::get(SESSION_COMMON);

		$s_company_type = $v_dto_reqcommon->s_company_type;
		$s_process_auth = $this->get_auth();

		$i_auth = -1;
		switch ($s_company_type){
			case AUTH_ADM:$i_auth = (int)substr($s_process_auth, 0, 1); break;
			case AUTH_REQ:$i_auth = (int)substr($s_process_auth, 1, 1); break;
			case AUTH_PVL:$i_auth = (int)substr($s_process_auth, 2, 1); break;
			case AUTH_SUP:$i_auth = (int)substr($s_process_auth, 3, 1); break;
		}

		// 権限でチェック
		if ($i_auth == 0)
		{
			return false;
		}

		return true;
	}
}