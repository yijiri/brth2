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
		$s_sql .= 'TRN.HUMAN_ID HUMAN_ID, ';
		$s_sql .= 'TRN.PROJECT_ID PROJECT_ID, ';
		$s_sql .= 'TRN.STATUS STATUS, ';
		$s_sql .= 'TRN.REMARKS REMARKS, ';
		$s_sql .= 'TRN.ENABLED_FLAG ENABLED_FLAG, ';
		$s_sql .= 'TRN.REGIST_TIME REGIST_TIME, ';
		$s_sql .= 'TRN.REGIST_USER REGIST_USER, ';
		$s_sql .= 'TRN.UPDATE_TIME UPDATE_TIME, ';
		$s_sql .= 'TRN.UPDATE_USER UPDATE_USER, ';

		//HUMAN
		$s_sql .= 'HM.ENTRY_DATE ENTRY_DATE, ';
		$s_sql .= 'HM.HUMAN_NAME HUMAN_NAME, ';
		$s_sql .= 'HM.HUMAN_SEX HUMAN_SEX, ';
		$s_sql .= 'HM.HUMAN_BIRTH HUMAN_BIRTH, ';
		$s_sql .= 'HM.TEL TEL, ';
		$s_sql .= 'HM.MAIL MAIL, ';
		$s_sql .= 'HM.POST POST, ';
		$s_sql .= 'HM.ADDRESS1 ADDRESS1, ';
		$s_sql .= 'HM.ADDRESS2 ADDRESS2, ';
		$s_sql .= 'HM.PROJECT_SKILL1 PROJECT_SKILL1, ';
		$s_sql .= 'HM.PROJECT_SKILL2 PROJECT_SKILL2, ';
		$s_sql .= 'HM.PROJECT_SKILL3 PROJECT_SKILL3, ';
		$s_sql .= 'HM.PROJECT_SKILL4 PROJECT_SKILL4, ';
		$s_sql .= 'HM.PROJECT_SKILL5 PROJECT_SKILL5, ';
		$s_sql .= 'HM.APPEAL_POINT APPEAL_POINT, ';
		$s_sql .= 'HM.WEAK_POINT WEAK_POINT, ';
		$s_sql .= 'HM.AGREEMENT_STATUS AGREEMENT_STATUS, ';

		//CAREER
		$s_sql .= 'CR.START_DATE START_DATE, ';
		$s_sql .= 'CR.END_DATE END_DATE, ';
		$s_sql .= 'CR.CAREER CAREER, ';
		$s_sql .= 'CR.ROLE ROLE, ';
		$s_sql .= 'CR.PROJECT_SCALE PROJECT_SCALE, ';

		//案件側からのSKILL
		$s_sql .= 'PM_SKILL1.SKILL_TYPE PM_SKILL1_TYPE, ';
		$s_sql .= 'PM_SKILL1.SKILL_NAME PM_SKILL1_NAME, ';
		$s_sql .= 'PM_SKILL2.SKILL_TYPE PM_SKILL2_TYPE, ';
		$s_sql .= 'PM_SKILL2.SKILL_NAME PM_SKILL2_NAME, ';
		$s_sql .= 'PM_SKILL3.SKILL_TYPE PM_SKILL3_TYPE, ';
		$s_sql .= 'PM_SKILL3.SKILL_NAME PM_SKILL3_NAME, ';
		$s_sql .= 'PM_SKILL4.SKILL_TYPE PM_SKILL4_TYPE, ';
		$s_sql .= 'PM_SKILL4.SKILL_NAME PM_SKILL4_NAME, ';
		$s_sql .= 'PM_SKILL5.SKILL_TYPE PM_SKILL5_TYPE, ';
		$s_sql .= 'PM_SKILL5.SKILL_NAME PM_SKILL5_NAME, ';

		//人材側からのSKILL
		$s_sql .= 'HM_SKILL1.SKILL_TYPE HM_SKILL1_TYPE, ';
		$s_sql .= 'HM_SKILL1.SKILL_NAME HM_SKILL1_NAME, ';
		$s_sql .= 'HM_SKILL2.SKILL_TYPE HM_SKILL2_TYPE, ';
		$s_sql .= 'HM_SKILL2.SKILL_NAME HM_SKILL2_NAME, ';
		$s_sql .= 'HM_SKILL3.SKILL_TYPE HM_SKILL3_TYPE, ';
		$s_sql .= 'HM_SKILL3.SKILL_NAME HM_SKILL3_NAME, ';
		$s_sql .= 'HM_SKILL4.SKILL_TYPE HM_SKILL4_TYPE, ';
		$s_sql .= 'HM_SKILL4.SKILL_NAME HM_SKILL4_NAME, ';
		$s_sql .= 'HM_SKILL5.SKILL_TYPE HM_SKILL5_TYPE, ';
		$s_sql .= 'HM_SKILL5.SKILL_NAME HM_SKILL5_NAME, ';

		//PROJECT
		$s_sql .= 'PM.PROJECT_NAME PROJECT_NAME, ';
		$s_sql .= 'PM.PROJECT_STILE PROJECT_STILE, ';
		$s_sql .= 'PM.PROJECT_LOCATION PROJECT_LOCATION, ';
		$s_sql .= 'PM.PROJECT_MANEY PROJECT_MANEY, ';
		$s_sql .= 'PM.PROJECT_PERIOD PROJECT_PERIOD, ';
		$s_sql .= 'PM.PROJECT_PERSONS PROJECT_PERSONS, ';
		$s_sql .= 'PM.WANTEDEND_FLG WANTEDEND_FLG , ';

		//COMPANY
		$s_sql .= 'CM.COMPANY_TYPE, ';
		$s_sql .= 'CM.COMPANY_NAME, ';
		$s_sql .= 'CM.KEYMAN_NAME, ';
		$s_sql .= 'CM.KEYMAN_TEL, ';
		$s_sql .= 'CM.KEYMAN_MAIL, ';
		$s_sql .= 'CM.COMPANY_TEL, ';
		$s_sql .= 'CM.COMPANY_FAX ';

		$s_sql .= 'FROM ';
		$s_sql .= 'PROGRESS_TRN TRN ';
		$s_sql .= 'LEFT OUTER JOIN HUMAN_MST HM ';
		$s_sql .= 'ON TRN.HUMAN_ID = HM.HUMAN_ID ';
		$s_sql .= 'LEFT OUTER JOIN HUMAN_MST HM ';
		$s_sql .= 'ON TRN.HUMAN_ID = HM.HUMAN_ID ';
		$s_sql .= 'LEFT OUTER JOIN CAREER_MST CR ';
		$s_sql .= 'ON HM.HUMAN_ID = CR.HUMAN_ID ';
		$s_sql .= 'LEFT OUTER JOIN PROJECT_MST PM ';
		$s_sql .= 'ON TRN.PROJECT_ID = PM.PROJECT_ID ';
		$s_sql .= 'LEFT OUTER JOIN COMPANY_MST CM ';
		$s_sql .= 'ON PM.COMPANY_ID = CM.COMPANY_ID ';
		$s_sql .= 'LEFT OUTER JOIN SKILL_MST PM_SKILL1 ';
		$s_sql .= 'ON PM.PROJECT_SKILL1 = PM_SKILL1.SKILL_ID ';
		$s_sql .= 'LEFT OUTER JOIN SKILL_MST PM_SKILL2 ';
		$s_sql .= 'ON PM.PROJECT_SKILL2 = PM_SKILL2.SKILL_ID ';
		$s_sql .= 'LEFT OUTER JOIN SKILL_MST PM_SKILL3 ';
		$s_sql .= 'ON PM.PROJECT_SKILL3 = PM_SKILL3.SKILL_ID ';
		$s_sql .= 'LEFT OUTER JOIN SKILL_MST PM_SKILL4 ';
		$s_sql .= 'ON PM.PROJECT_SKILL4 = PM_SKILL4.SKILL_ID ';
		$s_sql .= 'LEFT OUTER JOIN SKILL_MST PM_SKILL5 ';
		$s_sql .= 'ON PM.PROJECT_SKILL5 = PM_SKILL5.SKILL_ID ';

		$s_sql .= 'LEFT OUTER JOIN SKILL_MST HM_SKILL1 ';
		$s_sql .= 'ON HM_PROJECT_SKILL1 = HM_SKILL1.SKILL_ID ';
		$s_sql .= 'LEFT OUTER JOIN SKILL_MST HM_SKILL2 ';
		$s_sql .= 'ON HM_PROJECT_SKILL2 = HM_SKILL2.SKILL_ID ';
		$s_sql .= 'LEFT OUTER JOIN SKILL_MST HM_SKILL3 ';
		$s_sql .= 'ON HM_PROJECT_SKILL3 = HM_SKILL3.SKILL_ID ';
		$s_sql .= 'LEFT OUTER JOIN SKILL_MST HM_SKILL4 ';
		$s_sql .= 'ON HM_PROJECT_SKILL4 = HM_SKILL4.SKILL_ID ';
		$s_sql .= 'LEFT OUTER JOIN SKILL_MST HM_SKILL5 ';
		$s_sql .= 'ON HM_PROJECT_SKILL5 = HM_SKILL5.SKILL_ID ';

		$s_sql .= 'WHERE ';
		$s_sql .= '1 = 1 ';

		$s_sql .= 'order by HUMAN_ID, PROJECT_ID asc ';

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
		$a_dto_progress_row = array();

		while($result = $v_pdostatement->fetch(PDO::FETCH_ASSOC)){
			$v_resultrow = new dto_progress_resultrow();

			$v_resultrow->HUMAN_ID = util_dbaccessor::get_encode_data($result, 'HUMAN_ID');
			$v_resultrow->PROJECT_ID = util_dbaccessor::get_encode_data($result, 'PROJECT_ID');
			$v_resultrow->STATUS = util_dbaccessor::get_encode_data($result, 'STATUS');
			$v_resultrow->REMARKS = util_dbaccessor::get_encode_data($result, 'REMARKS');
			$v_resultrow->HUMAN_NAME = util_dbaccessor::get_encode_data($result, 'HUMAN_NAME');
			$v_resultrow->PROJECT_ID = util_dbaccessor::get_encode_data($result, 'PROJECT_ID');
			$v_resultrow->HUMAN_SEX = util_dbaccessor::get_encode_data($result, 'HUMAN_SEX');
			$v_resultrow->HUMAN_BIRTH = util_dbaccessor::get_encode_data($result, 'HUMAN_BIRTH');
			$v_resultrow->TEL = util_dbaccessor::get_encode_data($result, 'TEL');
			$v_resultrow->MAIL = util_dbaccessor::get_encode_data($result, 'MAIL');
			$v_resultrow->POST = util_dbaccessor::get_encode_data($result, 'POST');
			$v_resultrow->ADDRESS1 = util_dbaccessor::get_encode_data($result, 'ADDRESS1');
			$v_resultrow->ADDRESS1 = util_dbaccessor::get_encode_data($result, 'ADDRESS2');
			$v_resultrow->APPEAL_POINT = util_dbaccessor::get_encode_data($result, 'APPEAL_POINT');
			$v_resultrow->WEAK_POINT = util_dbaccessor::get_encode_data($result, 'WEAK_POINT');
			$v_resultrow->AGREEMENT_STATUS = util_dbaccessor::get_encode_data($result, 'AGREEMENT_STATUS');
			$v_resultrow->START_DATE = util_dbaccessor::get_encode_data($result, 'START_DATE');
			$v_resultrow->END_DATE = util_dbaccessor::get_encode_data($result, 'END_DATE');
			$v_resultrow->PROJECT_ID = util_dbaccessor::get_encode_data($result, 'PROJECT_ID');
			$v_resultrow->CAREER = util_dbaccessor::get_encode_data($result, 'CAREER');
			$v_resultrow->ROLE = util_dbaccessor::get_encode_data($result, 'ROLE');
			$v_resultrow->PROJECT_SCALE = util_dbaccessor::get_encode_data($result, 'PROJECT_SCALE');
			$v_resultrow->PM_SKILL1_TYPE = util_dbaccessor::get_encode_data($result, 'PM_SKILL1_TYPE');
			$v_resultrow->PM_SKILL1_NAME = util_dbaccessor::get_encode_data($result, 'PM_SKILL1_NAME');
			$v_resultrow->PM_SKILL2_TYPE = util_dbaccessor::get_encode_data($result, 'PM_SKILL2_TYPE');
			$v_resultrow->PM_SKILL2_NAME = util_dbaccessor::get_encode_data($result, 'PM_SKILL2_NAME');
			$v_resultrow->PM_SKILL3_TYPE = util_dbaccessor::get_encode_data($result, 'PM_SKILL3_TYPE');
			$v_resultrow->PM_SKILL3_NAME = util_dbaccessor::get_encode_data($result, 'PM_SKILL3_NAME');
			$v_resultrow->PM_SKILL4_TYPE = util_dbaccessor::get_encode_data($result, 'PM_SKILL4_TYPE');
			$v_resultrow->PM_SKILL4_NAME = util_dbaccessor::get_encode_data($result, 'PM_SKILL4_NAME');
			$v_resultrow->PM_SKILL5_TYPE = util_dbaccessor::get_encode_data($result, 'PM_SKILL5_TYPE');
			$v_resultrow->PM_SKILL5_NAME = util_dbaccessor::get_encode_data($result, 'PM_SKILL5_NAME');
			$v_resultrow->PM_SKILL1_TYPE = util_dbaccessor::get_encode_data($result, 'PM_SKILL1_TYPE');
			$v_resultrow->HM_SKILL1_TYPE = util_dbaccessor::get_encode_data($result, 'HM_SKILL1_TYPE');
			$v_resultrow->HM_SKILL1_NAME = util_dbaccessor::get_encode_data($result, 'HM_SKILL1_NAME');
			$v_resultrow->HM_SKILL2_TYPE = util_dbaccessor::get_encode_data($result, 'HM_SKILL2_TYPE');
			$v_resultrow->HM_SKILL2_NAME = util_dbaccessor::get_encode_data($result, 'HM_SKILL2_NAME');
			$v_resultrow->HM_SKILL3_TYPE = util_dbaccessor::get_encode_data($result, 'HM_SKILL3_TYPE');
			$v_resultrow->HM_SKILL3_NAME = util_dbaccessor::get_encode_data($result, 'HM_SKILL3_NAME');
			$v_resultrow->HM_SKILL4_TYPE = util_dbaccessor::get_encode_data($result, 'HM_SKILL4_TYPE');
			$v_resultrow->HM_SKILL4_NAME = util_dbaccessor::get_encode_data($result, 'HM_SKILL4_NAME');
			$v_resultrow->HM_SKILL5_TYPE = util_dbaccessor::get_encode_data($result, 'HM_SKILL5_TYPE');
			$v_resultrow->HM_SKILL5_NAME = util_dbaccessor::get_encode_data($result, 'HM_SKILL5_NAME');

			$v_resultrow->PROJECT_NAME = util_dbaccessor::get_encode_data($result, 'PROJECT_NAME');
			$v_resultrow->PROJECT_STILE = util_dbaccessor::get_encode_data($result, 'PROJECT_STILE');
			$v_resultrow->PROJECT_LOCATION = util_dbaccessor::get_encode_data($result, 'HM_SKILL5_NAME');
			$v_resultrow->PROJECT_MANEY = util_dbaccessor::get_encode_data($result, 'PROJECT_MANEY');
			$v_resultrow->PROJECT_PERIOD = util_dbaccessor::get_encode_data($result, 'PROJECT_PERIOD');
			$v_resultrow->WANTEDEND_FLG = util_dbaccessor::get_encode_data($result, 'WANTEDEND_FLG');

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