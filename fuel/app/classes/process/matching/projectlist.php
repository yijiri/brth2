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
		$v_condition = $v_req_base->v_dto_network_condition;
		$s_network_name = $v_condition->s_network_name;
		$v_listcommon = $v_req_base->v_dto_listcommon;
		$i_display_num = $v_listcommon->i_display_num;
		$i_current_page = $v_listcommon->i_current_page;
		$i_jogai_rec_num = ($v_listcommon->i_current_page - 1) * $i_display_num;

		$s_sql = '';
		$s_sql .= 'SELECT ';
		$s_sql .= 'network_id, ';
		$s_sql .= 'network_name, ';
		$s_sql .= 'enabled_flag ';
		$s_sql .= 'FROM ';
		$s_sql .= 'network_mst ';
		$s_sql .= 'WHERE ';
		$s_sql .= '1 = 1 ';


		//ネットワーク名に指定がない場合、条件なし
		if($s_network_name != null)
		{
			$s_sql .= 'and ';
			$s_sql .= 'network_name like :NETWORK_NAME ';
		}
		$s_sql .= 'order by network_name asc ';
		$s_sql .= 'limit ' .$i_display_num.' offset ' .$i_jogai_rec_num;

		return $s_sql;
	}


	/**
	 * バインド変数をセット
	 * @see process_listbase::set_bind_value()
	 */
	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
		$v_condition = $v_req_base->v_dto_network_condition;
		$s_network_name = $v_condition->s_network_name;

		$v_pdostatement = $v_util_dbaccessor->v_pdo->prepare($s_sql);
		if ($s_network_name != '') {
			$v_util_dbaccessor->set_bind_value($v_pdostatement, 'NETWORK_NAME', '%'.util_dbaccessor::get_decode_data($s_network_name).'%');
		}

		return $v_pdostatement;
	}


	/**
	 * セッションをセット
	 * @see process_listbase::set_session()
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_NETWORK_LIST, $v_res_base);
	}


	/**
	 * レスポンスを作成
	 * @see process_listbase::make_response()
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base)
	{
		// 取得したデータを配列につめる
		$a_dto_network_row = $this->_set_result($v_pdostatement);

		$v_resultlist = new res_network_resultlist();
		$v_resultlist->v_dto_network_condition = $v_req_base->v_dto_network_condition;
		$v_resultlist->a_dto_network_row = $a_dto_network_row;
		$v_resultlist->v_dto_listcommon = $v_req_base->v_dto_listcommon;

		// 1レコードもヒットしなかったときは、エラーメッセージを表示する
		if (count($a_dto_network_row) == 0) {
			$v_dto_common_inputerror = new dto_common_inputerror();
			$v_dto_common_inputerror->s_col_name = '';
			$v_dto_common_inputerror->s_error_msg = str_replace('%param1', 'ネットワーク', ERROR_NO_RECORD);;
			array_push($v_resultlist->v_dto_rescommon->a_error_msg, $v_dto_common_inputerror);
		}

		return $v_resultlist;
	}


	/**
	 * レスポンスの一覧をセット
	 * @param PDOStatement $v_pdostatement	PDOステートメント
	 * @return レスポンスの一覧:
	 */
	private function _set_result(PDOStatement $v_pdostatement)
	{
		$a_dto_network_row = array();

		while($result = $v_pdostatement->fetch(PDO::FETCH_ASSOC)){
			$v_resultrow = new dto_network_resultrow();

			$v_resultrow->s_network_id = util_dbaccessor::get_encode_data($result, 'network_id');
			$v_resultrow->s_network_name = util_dbaccessor::get_encode_data($result, 'network_name');
			$v_resultrow->s_enabled_flag = util_dbaccessor::get_encode_data($result, 'enabled_flag');
			$v_resultrow->s_enabled_name = util_decord::enable_decord(util_dbaccessor::get_encode_data($result, 'enabled_flag'));
			$v_resultrow->s_enabled_name = util_dbaccessor::get_encode_data($result, 'enabled_flag');
			array_push ($a_dto_network_row, $v_resultrow);
		}

		return $a_dto_network_row;
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
		return VIEW_NETWORK_LIST;
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