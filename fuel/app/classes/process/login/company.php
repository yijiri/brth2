<?php

/**
 * 区分：検索
 * 画面：
 * 概要：所属会社取得プロセス
 */
class process_login_company extends process_base {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_login_company($b_db_flg = true) {
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
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
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

		return $this->get_view_name($v_req_base);
	}


	/**
	 * SQLを作成
	 * @see process_listbase::make_sql()
	 */
	protected function make_sql(req_base $v_req_base)
	{
		$v_dto_login = $v_req_base->v_dto_login_selectcondition;
		$s_login_id = $v_dto_login->s_login_id;

		$s_sql = '';
		$s_sql .= 'SELECT ';
		$s_sql .= 'company.company_id, ';
		$s_sql .= 'company.company_name, ';
		$s_sql .= 'company.company_type ';
		$s_sql .= 'FROM ';
		$s_sql .= 'user_mst user, ';
		$s_sql .= 'user_company_rel rel, ';
		$s_sql .= 'company_mst company ';
		$s_sql .= 'WHERE ';
		$s_sql .= 'user.user_id=:LOGIN_ID ';
		$s_sql .= 'AND ';
		$s_sql .= 'user.user_id=rel.user_id ';
		$s_sql .= 'AND ';
		$s_sql .= 'company.company_id=rel.company_id ';
		$s_sql .= 'AND ';
		$s_sql .= 'user.enabled_flag is true ';
		$s_sql .= 'AND ';
		$s_sql .= 'company.enabled_flag is true ';

		return $s_sql;
	}



	/**
	 * バインド変数をセット
	 * @see process_listbase::set_bind_value()
	 */
	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
		$v_dto_login_selectcondition = $v_req_base->v_dto_login_selectcondition;
		$v_pdostatement = $v_util_dbaccessor->v_pdo->prepare($s_sql);

		$v_dto_common = util_sessionaccessor::get_session(SESSION_COMMON);
		$v_util_dbaccessor->set_bind_value($v_pdostatement, 'LOGIN_ID', util_dbaccessor::get_decode_data($v_dto_common->s_login_id));

		return $v_pdostatement;
	}


	/**
	 * セッションをセット
	 * @see process_listbase::set_session()
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_LOGIN, $v_res_base);
	}


	/**
	 * レスポンスを作成
	 * @see process_listbase::make_response()
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base)
	{
		// 取得したデータを配列につめる
		$a_dto_login_company = $this->_set_result($v_pdostatement);

		$v_res_login = new res_login();

		$v_res_login->v_dto_login_selectcondition = $v_req_base->v_dto_login_selectcondition;
		$v_res_login->a_dto_login_company = $a_dto_login_company;

		//所属会社がない場合はエラー
		if (count($a_dto_login_company) == 0)
		{
			$s_error_msg = ERROR_NOCOMPANY;
			$a_error_msg = array();
			array_push($a_error_msg, $s_error_msg);
			$v_res_login->v_dto_rescommon->a_error_msg = $a_error_msg;
		}
		else if (count($a_dto_login_company) == 1)
		{
			//セッションに保持
			$v_dto_common = util_sessionaccessor::get_session(SESSION_COMMON);
			$v_dto_common->s_company_id = $a_dto_login_company[0]->s_company_id;
			$v_dto_common->s_company_name = $a_dto_login_company[0]->s_company_name;
			$v_dto_common->s_company_type = $a_dto_login_company[0]->s_company_type;
			// 共通DTOセッション
			Session::set(SESSION_COMMON, $v_dto_common);
		}
		else if (count($a_dto_login_company) > 1)
		{
			// DTOセッション
			Session::set(SESSION_LOGIN_COMPANY, $v_res_login);
		}

		return $v_res_login;
	}


	/**
	 * レスポンスの一覧をセット
	 * @param PDOStatement $v_pdostatement	PDOステートメント
	 * @return レスポンスの一覧:
	 */
	private function _set_result(PDOStatement $v_pdostatement)
	{
		$a_dto_login_company = array();

		while($result = $v_pdostatement->fetch(PDO::FETCH_ASSOC)){
			$v_dto_login_company = new dto_login_company();

			$v_dto_login_company->s_company_id = util_dbaccessor::get_encode_data($result, 'company_id');
			$v_dto_login_company->s_company_name = util_dbaccessor::get_encode_data($result, 'company_name');
			$v_dto_login_company->s_company_type = util_dbaccessor::get_encode_data($result, 'company_type');
			array_push ($a_dto_login_company, $v_dto_login_company);
		}

		return $a_dto_login_company;
	}


	/**
	 * 表示するViewの名前を返す
	 * @param req_base		$v_req_base		リクエスト
	 * @param res_base		$v_res_base		レスポンス
	 * @return 表示するViewの名前
	 */
 	protected function get_view_name(req_base $v_req_base,res_base $v_res_base = null)
	{
		return VIEW_LOGIN_COMPANY;
	}
}