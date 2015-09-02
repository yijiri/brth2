<?php

/**
 * 一覧系ベースプロセス
 */
class process_listbase extends process_base {

	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_listbase($b_db_flg = true){
		// 親のコンストラクタをコール
		parent::process_base($b_db_flg);
	}


	/**
	* 画面表示に関する処理を実行
	* @see process_base::process()
	*/
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
		// バリデーションチェック
		$a_msg = $this->check_val($v_req_base);
		if (count($a_msg) != 0)
		{
			$this->set_error_msg($v_req_base, $a_msg);
			return $this->get_error_view_name();
		}

		// SQL作成
		$s_sql = $this->make_sql($v_req_base);

		// バインド変数の値をセット
		$v_pdostatement = $this->set_bind_value($s_sql, $v_req_base, $v_util_dbaccessor);

		// SQLの実行
		$v_util_dbaccessor->execute_sql($v_pdostatement);

		// 検索結果をレスポンスにセット
		$v_res_base = $this->make_response($v_pdostatement, $v_req_base);

		// セッションに格納
		$this->set_session($v_res_base);

		// ページャ情報セット
		$this->set_pager($v_req_base);

		return $this->get_view_name($v_req_base);
	}


	/**
	 * ページャーの情報をセットする
	 * 継承先でオーバーライドされる
	 * @param req_base 	$v_req_base		リクエスト
	 */
	protected function set_pager(req_base $v_req_base)
	{
	}


	/**
	 * 入力チェックを行う
	 * @param req_base $v_req_base		リクエスト
	 */
	protected function check_val(req_base $v_req_base)
	{
	}


	/**
	 * SQLを作成
	 * 継承先でオーバーライドされる
	 * @param req_base $v_req_base	リクエスト
	 */
	protected function make_sql(req_base $v_req_base)
	{
	}


	/**
	 * バインド変数をセット
	 * 継承先でオーバーライドされる
	 * @param unknown $s_sql						SQL
	 * @param req_base $v_req_base					リクエスト
	 * @param util_dbaccessor $v_util_dbaccessor	DBアクセッサ
	 */
 	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
	}


	/**
	 * セッションをセット
	 * 継承先でオーバーライドされる
	 * @param res_base $v_res_base	レスポンス
	 */
	protected function set_session(res_base $v_res_base)
	{
	}


	/**
	 * レスポンスを作成
	 * 継承先でオーバーライドされる
	 * @param PDOStatement		$v_pdostatement		PDOステートメント
	 * @param req_base			$v_req_base			リクエスト
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base)
	{
	}


	/**
	 * レスポンスにセットする(入力チェックがあった場合)
	 * @param req_base 	$v_req_base		リクエスト
	 * @param unknown 	$s_msg			エラーメッセージ
	 */
	protected function set_error_msg(req_base $v_req_base, $a_msg)
	{
	}


	/**
	 * 入力チェックでエラーになったときに表示するViewの名前を返す
	 * TODO:入力チェック以外での使用もあるのなら、親クラスに持っていく。
	 */
	protected function get_error_view_name()
	{
	}
}