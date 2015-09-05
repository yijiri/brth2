<?php

/**
 * 区分：マッチング
 * 概要：xx
 */
class process_matching_projectlist extends process_listbase {

	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_matching_projectlist($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_listbase($b_db_flg);
	}


	/**
	 * SQLを作成
	 * @see process_listbase::make_sql()
	 */
	protected function make_sql(req_base $v_req_base)
	{
		$v_dto_matching_projectlistcondition = $v_req_base->v_dto_matching_projectlistcondition;
		$s_human_id = $v_dto_matching_projectlistcondition->s_human_id;

		$s_sql = '';
		$s_sql .= 'SELECT * from PROJECT_MST ';
		$s_sql .= 'WHERE ';
		$s_sql .= '1 = 1 ';


/* 		if($s_human_name != null)
		{
			$s_sql .= 'and ';
			$s_sql .= 'HUMAN_NAME like :HUMAN_NAME ';
		} */
		$s_sql .= 'order by PROJECT_ID asc ';


		return $s_sql;
	}


	/**
	 * バインド変数をセット
	 * @see process_listbase::set_bind_value()
	 */
	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
		$v_dto_matching_projectlistcondition = $v_req_base->v_dto_matching_projectlistcondition;
		$s_human_id = $v_dto_matching_projectlistcondition->s_human_id;

		$v_pdostatement = $v_util_dbaccessor->v_pdo->prepare($s_sql);
/* 		if ($s_human_name != '') {
			$v_util_dbaccessor->set_bind_value($v_pdostatement, 'HUMAN_NAME', '%'.util_dbaccessor::get_decode_data($s_human_name).'%');
		} */

		return $v_pdostatement;
	}


	/**
	 * セッションをセット
	 * @see process_listbase::set_session()
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_MATCHING_PROJECT_LIST, $v_res_base);
	}


	/**
	 * レスポンスを作成
	 * @see process_listbase::make_response()
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base)
	{
		// 取得したデータを配列につめる
		$a_dto_matching_projectrow = $this->_set_result($v_pdostatement);

		$v_res_matching_projectlist = new res_matching_projectlist();

		$v_res_matching_projectlist->a_dto_matching_projectrow = $a_dto_matching_projectrow;

		// ヘッダ
		//$v_res_matching_searchhuman->v_dto_columnheader = $this->_set_header();


		return $v_res_matching_projectlist;
	}


	/**
	 * レスポンスの一覧をセット
	 * @param PDOStatement $v_pdostatement	PDOステートメント
	 * @return レスポンスの一覧:
	 */
	private function _set_result(PDOStatement $v_pdostatement)
	{
		$a_dto_matching_projectrow = array();

		while($result = $v_pdostatement->fetch(PDO::FETCH_ASSOC)){
			$v_dto_matching_projectrow = new dto_matching_projectrow();

			$v_dto_matching_projectrow->s_project_id = util_dbaccessor::get_encode_data($result, 'PROJECT_ID');
			$v_dto_matching_projectrow->s_project_name = util_dbaccessor::get_encode_data($result, 'PROJECT_NAME');
			$v_dto_matching_projectrow->s_project_location = util_dbaccessor::get_encode_data($result, 'PROJECT_LOCATION');
			array_push ($a_dto_matching_projectrow, $v_dto_matching_projectrow);
		}

		return $a_dto_matching_projectrow;
	}


	/**
	 * ページャーの情報をセットする
	 * @see process_listbase::set_pager()
	 */
	protected function set_pager(req_base $v_req_base)
	{
		$v_process_network_pager = new process_network_pager();
		$v_process_network_pager->execute_process($v_req_base);
	}


	/**
	 * 表示するViewの名前を返す
	 * @see process_base::get_view_name()
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{
		return VIEW_MATCHING_PROJECTLIST;
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