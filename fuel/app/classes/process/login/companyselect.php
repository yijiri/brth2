<?php

/**
 * 区分：ログイン
 * 画面：ログイン
 * 概要：認証プロセス
 */
class process_login_companyselect extends process_base {

	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_login_companyselect($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_base($b_db_flg);
	}


	/**
	 * 画面表示に関する処理を実行
	 * 継承先でオーバーライドされる
	 * @param util_db	$v_util_db	DBアクセッサ
	 * @param req_base	$v_req		画面リクエスト
	 * @return 遷移先の画面
	 */
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base  $v_req_base)
	{
		// 入力チェック
		$b_ret = $this->_check_val($v_req_base);
		if ($b_ret === false)
		{
			$this->_set_session(new dto_common);
			return '';
		}

		// SQL作成
		$s_sql = $this->_make_sql($v_req_base);

		// バインド変数の値をセット
		$v_pdostatement = $this->_set_bind_value($s_sql, $v_req_base, $v_util_dbaccessor);

		// SQLの実行
		$i_ret = $v_util_dbaccessor->execute_sql($v_pdostatement);

		if ($i_ret === -1)
		{
			$v_dto_error = new dto_error();
			$v_dto_error->s_error_msg = ERROR_EXECUTE_SQL;
			Session::delete(SESSION_COMMON);
			Session::set(SESSION_ERROR, $v_dto_error);
			return VIEW_ERROR;
		}

		// 取得結果を共通DTOに格納
		$v_dto_common = $this->_make_common($v_pdostatement, $v_req_base);

		// セッションに格納
		$this->_set_session($v_dto_common);

		return VIEW_TOP_MAIN;
	}


	/**
	 * 入力チェック
	 * @param req_base $v_req_base
	 */
	private function _check_val(req_base $v_req_base)
	{
		$v_dto_login = $v_req_base->v_dto_login_selectcondition;
		$s_company_id = $v_dto_login->s_company_id;

		if ($s_company_id == '') {
			return false;
		}

		return true;
	}


	/**
	 * SQLを作成
	 * 継承先でオーバーライドされる
	 * @param req_base $v_req_base	リクエスト
	 */
	private function _make_sql(req_base $v_req_base)
	{
		$v_dto_login = $v_req_base->v_dto_login_selectcondition;
		$s_company_id = $v_dto_login->s_company_id;

		$s_sql = '';
		$s_sql .= 'SELECT ';
		$s_sql .= 'company_id, ';
		$s_sql .= 'company_name, ';
		$s_sql .= 'company_type ';
		$s_sql .= 'FROM ';
		$s_sql .= 'company_mst ';
		$s_sql .= 'WHERE ';
		$s_sql .= 'enabled_flag is true ';
		$s_sql .= 'AND ';
		$s_sql .= 'company_id=:COMPANY_ID ';

		return $s_sql;
	}


	/**
	 * バインド変数をセット
	 * 継承先でオーバーライドされる
	 * @param unknown $s_sql						SQL
	 * @param req_base $v_req_base					リクエスト
	 * @param util_dbaccessor $v_util_dbaccessor	DBアクセッサ
	 */
	private function _set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
		$v_dto_login_selectcondition = $v_req_base->v_dto_login_selectcondition;
		$s_company_id = $v_dto_login_selectcondition->s_company_id;
		$v_pdostatement = $v_util_dbaccessor->v_pdo->prepare($s_sql);
		if ($s_company_id != '') {
			$v_util_dbaccessor->set_bind_value($v_pdostatement, 'COMPANY_ID', util_dbaccessor::get_decode_data($s_company_id));
		}
		return $v_pdostatement;
	}



	/**
	 * セッションをセット
	 * @param res_base $v_res_base	レスポンス
	 */
	private function _set_session(dto_base $v_dto_common)
	{
		// 共通DTOセッション
		Session::set(SESSION_COMMON, $v_dto_common);
	}


	/**
	 * レスポンスを作成
	 * 継承先でオーバーライドされる
	 * @param PDOStatement		$v_pdostatement		PDOステートメント
	 * @param req_base			$v_req_base			リクエスト
	 */
	private function _make_common(PDOStatement $v_pdostatement, req_base $v_req_base)
	{
		$v_dto_common = new dto_common();
		$v_dto_common = $this->_set_result($v_pdostatement,$v_req_base);
		return $v_dto_common;
	}


	/**
	 * レスポンスの一覧をセット
	 * @param PDOStatement $v_pdostatement	PDOステートメント
	 * @return レスポンスの一覧:
	 */
	private function _set_result(PDOStatement $v_pdostatement, req_base $v_req_base)
	{
		$v_dto_common = util_sessionaccessor::get_session(SESSION_COMMON);
		if ($result = $v_pdostatement->fetch(PDO::FETCH_ASSOC))
		{
			$v_dto_common->s_company_id = util_dbaccessor::get_encode_data($result, 'company_id');
			$v_dto_common->s_company_name = util_dbaccessor::get_encode_data($result, 'company_name');
			$v_dto_common->s_company_type = util_dbaccessor::get_encode_data($result, 'company_type');

			$v_dto_common->b_login_flg = true;
		} else {
			$v_dto_common->b_login_flg = false;
		}

		return $v_dto_common;
	}


	/**
	 * 実行してよい権限を返す
	 * @see process_base::get_auth()
	 */
	protected function get_auth()
	{
		return '1111';
	}
}
