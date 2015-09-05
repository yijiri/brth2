<?php

/**
 * 区分：マッチング
 * 概要：xx
 */
class process_matching_humansearch extends process_listbase {

	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_matching_humansearch($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_listbase($b_db_flg);
	}


	/**
	 * SQLを作成
	 * @see process_listbase::make_sql()
	 */
	protected function make_sql(req_base $v_req_base)
	{
		$v_dto_matching_searchhumancondition = $v_req_base->v_dto_matching_searchhumancondition;
		$s_human_name = $v_dto_matching_searchhumancondition->s_human_name;

		$s_sql = '';
		$s_sql .= 'SELECT * from HUMAN_MST ';
		$s_sql .= 'WHERE ';
		$s_sql .= '1 = 1 ';


		if($s_human_name != null)
		{
			$s_sql .= 'and ';
			$s_sql .= 'HUMAN_NAME like :HUMAN_NAME ';
		}
		$s_sql .= 'order by HUMAN_ID asc ';

		return $s_sql;
	}


	/**
	 * バインド変数をセット
	 * @see process_listbase::set_bind_value()
	 */
	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
		$v_dto_matching_searchhumancondition = $v_req_base->v_dto_matching_searchhumancondition;
		$s_human_name = $v_dto_matching_searchhumancondition->s_human_name;

		$v_pdostatement = $v_util_dbaccessor->v_pdo->prepare($s_sql);
		if ($s_human_name != '') {
			$v_util_dbaccessor->set_bind_value($v_pdostatement, 'HUMAN_NAME', '%'.util_dbaccessor::get_decode_data($s_human_name).'%');
		}

		return $v_pdostatement;
	}


	/**
	 * セッションをセット
	 * @see process_listbase::set_session()
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_MATCHING_SEARCH_HUMAN, $v_res_base);
	}


	/**
	 * レスポンスを作成
	 * @see process_listbase::make_response()
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base)
	{
		// 取得したデータを配列につめる
		$a_dto_matching_searchhumanrow = $this->_set_result($v_pdostatement);

		$v_res_matching_searchhuman = new res_matching_searchhuman();

		$v_res_matching_searchhuman->a_dto_matching_searchhumanrow = $a_dto_matching_searchhumanrow;

		// ヘッダ
		$v_res_matching_searchhuman->v_dto_columnheader = $this->_set_header();

		//$v_resultlist->v_dto_listcommon = $v_req_base->v_dto_listcommon;

		// 1レコードもヒットしなかったときは、エラーメッセージを表示する
/* 		if (count($a_dto_network_row) == 0) {
			$v_dto_common_inputerror = new dto_common_inputerror();
			$v_dto_common_inputerror->s_col_name = '';
			$v_dto_common_inputerror->s_error_msg = str_replace('%param1', 'ネットワーク', ERROR_NO_RECORD);;
			array_push($v_resultlist->v_dto_rescommon->a_error_msg, $v_dto_common_inputerror);
		} */

		return $v_res_matching_searchhuman;
	}


	/**
	 * 一覧のヘッダをセット
	 * @return レスポンスのヘッダ
	 */
	private function _set_header()
	{
		$v_dto_columnheader = new dto_columnheader();

		$v_dto_columninfo = new dto_columninfo();
		$v_dto_columninfo->s_title = '人材ID';
		$v_dto_columninfo->s_id = 's_human_id';
		$v_dto_columninfo->s_width = '10px';
		$v_dto_columninfo->s_align = 'left';
		$v_dto_columninfo->i_col_order = '1';
		$v_dto_columninfo->i_link_flg = 0;
		$v_dto_columninfo->b_hidden = false;
		array_push($v_dto_columnheader->a_dto_columninfo, $v_dto_columninfo);

		$v_dto_columninfo = new dto_columninfo();
		$v_dto_columninfo->s_title = '人材名';
		$v_dto_columninfo->s_id = 's_human_name';
		$v_dto_columninfo->s_width = '300px';
		$v_dto_columninfo->s_align = 'left';
		$v_dto_columninfo->i_col_order = '2';
		array_push($v_dto_columnheader->a_dto_columninfo, $v_dto_columninfo);

		return $v_dto_columnheader;
	}



	/**
	 * レスポンスの一覧をセット
	 * @param PDOStatement $v_pdostatement	PDOステートメント
	 * @return レスポンスの一覧:
	 */
	private function _set_result(PDOStatement $v_pdostatement)
	{
		$a_dto_matching_searchhumanrow = array();

		while($result = $v_pdostatement->fetch(PDO::FETCH_ASSOC)){
			$v_dto_matching_searchhumanrow = new dto_matching_searchhumanrow();

			$v_dto_matching_searchhumanrow->s_human_id = util_dbaccessor::get_encode_data($result, 'HUMAN_ID');
			$v_dto_matching_searchhumanrow->s_human_name = util_dbaccessor::get_encode_data($result, 'HUMAN_NAME');
			$v_dto_matching_searchhumanrow->s_update_time = util_dbaccessor::get_encode_data($result, 'ENTRY_DATE');
			array_push ($a_dto_matching_searchhumanrow, $v_dto_matching_searchhumanrow);
		}

		return $a_dto_matching_searchhumanrow;
	}


	/**
	 * 表示するViewの名前を返す
	 * @see process_base::get_view_name()
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{
		return VIEW_MATCHING_SEARCHHUMAN;
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