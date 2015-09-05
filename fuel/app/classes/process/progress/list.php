<?php

/**
 * 区分：進捗管理
 * 概要：一覧取得プロセス
 */
class process_progress_list extends process_listbase {

	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_progress_list($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_listbase($b_db_flg);
	}


	/**
	 * SQLを作成
	 * @see process_listbase::make_sql()
	 */
	protected function make_sql(req_base $v_req_base)
	{
		$v_condition = $v_req_base->v_dto_progress_condition;
		$v_listcommon = $v_req_base->v_dto_listcommon;
		$i_display_num = $v_listcommon->i_display_num;
		$i_current_page = $v_listcommon->i_current_page;
		$i_jogai_rec_num = ($v_listcommon->i_current_page - 1) * $i_display_num;

		$s_sql = '';
		$s_sql .= 'SELECT ';

		//TRN
		$s_sql .= 'TRN.STATUS STATUS, ';
		//PROJECT
		$s_sql .= 'PM.PROJECT_NAME PROJECT_NAME ';

		$s_sql .= 'FROM ';
		$s_sql .= 'PROGRESS_TRN TRN ';
		$s_sql .= 'LEFT OUTER JOIN PROJECT_MST PM ';
		$s_sql .= 'ON TRN.PROJECT_ID = PM.PROJECT_ID ';

		return $s_sql;
	}


	/**
	 * バインド変数をセット
	 * @see process_listbase::set_bind_value()
	 */
	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
		$v_condition = $v_req_base->v_dto_progress_condition;
		$v_pdostatement = $v_util_dbaccessor->v_pdo->prepare($s_sql);

		return $v_pdostatement;
	}


	/**
	 * セッションをセット
	 * @see process_listbase::set_session()
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_PROGRESS_LIST, $v_res_base);
	}


	/**
	 * レスポンスを作成
	 * @see process_listbase::make_response()
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base)
	{
		// 取得したデータを配列につめる
		$a_dto_progress_row = $this->_set_result($v_pdostatement);

		$v_resultlist = new res_progress_resultlist();
		$v_resultlist->v_dto_progress_condition = $v_req_base->v_dto_progress_condition;
		$v_resultlist->a_dto_progress_row = $a_dto_progress_row;
		$v_resultlist->v_dto_listcommon = $v_req_base->v_dto_listcommon;

		// 1レコードもヒットしなかったときは、エラーメッセージを表示する
		if (count($a_dto_progress_row) == 0) {
			$v_dto_common_inputerror = new dto_common_inputerror();
			$v_dto_common_inputerror->s_col_name = '';
			$v_dto_common_inputerror->s_error_msg = str_replace('%param1', '人材案件情報はありません。', ERROR_NO_RECORD);;
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
		$a_dto_progress_row = array();

		while($result = $v_pdostatement->fetch(PDO::FETCH_ASSOC)){
			$v_resultrow = new dto_progress_resultrow();

			$v_resultrow->STATUS = util_dbaccessor::get_encode_data($result, 'STATUS');
			$v_resultrow->PROJECT_NAME = util_dbaccessor::get_encode_data($result, 'PROJECT_NAME');

			array_push ($a_dto_progress_row, $v_resultrow);
		}

		return $a_dto_progress_row;
	}


	/**
	 * ページャーの情報をセットする
	 * @see process_listbase::set_pager()
	 */
	protected function set_pager(req_base $v_req_base)
	{
		$v_process_progress_pager = new process_progress_pager();
		$v_process_progress_pager->execute_process($v_req_base);
	}


	/**
	 * 表示するViewの名前を返す
	 * @see process_base::get_view_name()
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{
		return VIEW_PROGRESS_LIST;
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