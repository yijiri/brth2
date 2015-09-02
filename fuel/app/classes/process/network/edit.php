<?php

/**
 * 区分：ネットワーク管理
 * 概要：更新プロセス
 */
class process_network_edit extends process_execbase {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_network_edit($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_execbase($b_db_flg);
	}


	/**
	 * SQLを作成
	 * @see process_executebase::make_sql()
	 */
	protected function make_sql(req_base $v_req_base)
	{
		$s_sql = '';
		$s_sql .= 'UPDATE network_mst SET ';
		$s_sql .= 'network_name = :NETWORK_NAME, ';
		$s_sql .= 'enabled_flag = :ENABLED_FLAG, ';
		$s_sql .= 'update_time = now(), ';
		$s_sql .= 'update_user = :LOGIN_ID ';
		$s_sql .= 'WHERE ';
		$s_sql .= 'network_id = :NETWORK_ID ';
		$s_sql .= 'AND ';
		$s_sql .= 'DATE_FORMAT(UPDATE_TIME, \'%Y%m%d%H%i%s%f\') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), \'%Y%m%d%H%i%s%f\')';
		$s_sql .= ';';

		return $s_sql;
	}


	/**
	 * バインド変数をセット
	 * @see process_executebase::set_bind_value()
	 */
 	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
		$v_dto_network_execcondition = $v_req_base->v_dto_network_execcondition;
		$v_pdostatement = $v_util_dbaccessor->v_pdo->prepare($s_sql);

		$s_network_name = $v_dto_network_execcondition->s_network_name;
		$s_enabled_flag = $v_dto_network_execcondition->s_enabled_flag;
		$s_update_time = $v_dto_network_execcondition->s_update_time;
		$s_network_id = $v_dto_network_execcondition->s_network_id;

		//ログイン状態により分岐
		$v_dto_common = util_sessionaccessor::get_session(SESSION_COMMON);
		$s_login_id = $v_dto_common->s_login_id;

		$v_util_dbaccessor->set_bind_value($v_pdostatement, 'NETWORK_NAME', util_dbaccessor::get_decode_data($s_network_name));
		$v_util_dbaccessor->set_bind_value($v_pdostatement, 'ENABLED_FLAG', util_dbaccessor::get_decode_data($s_enabled_flag));
		$v_util_dbaccessor->set_bind_value($v_pdostatement, 'LOGIN_ID', util_dbaccessor::get_decode_data($s_login_id));
		$v_util_dbaccessor->set_bind_value($v_pdostatement, 'NETWORK_ID', util_dbaccessor::get_decode_data($s_network_id));
		$v_util_dbaccessor->set_bind_value($v_pdostatement, 'UPDATE_TIME', util_dbaccessor::get_decode_data($s_update_time));

		return $v_pdostatement;
	}


	/**
	 * セッションをセット
	 * @see process_executebase::set_session()
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_NETWORK_DETAIL_EXEC, $v_res_base);
	}


	/**
	 * レスポンスを作成
	 * @see process_executebase::make_response()
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base, $i_ret)
	{
		$v_res_network_exec = new res_network_exec();
		$v_res_network_exec->v_dto_network_execcondition = $v_req_base->v_dto_network_execcondition;
		$v_dto_network_exec = $v_res_network_exec->v_dto_network_exec;
		$v_dto_network_exec->s_mode = EXEC_MODE_UPDATE;

		switch ($i_ret)
		{
			case -1:
				// SQL実行エラー
				$v_dto_network_exec->b_execute_flg = false;
				$v_res_network_detail = util_sessionaccessor::get_session(SESSION_NETWORK_DETAIL);
				$v_dto_common_inputerror = new dto_common_inputerror();
				$v_dto_common_inputerror->s_col_name = '';
				$v_dto_common_inputerror->s_error_msg = ERROR_SQL_EXEPTION;
				array_push($v_res_network_detail->v_dto_rescommon->a_error_msg, $v_dto_common_inputerror);
				break;

			case 0:
				// 処理件数が0件だったら、エラーにする。
				$v_dto_network_exec->b_execute_flg = false;

				// 詳細画面のSessionにエラーメッセージをセット。
				$v_res_network_detail = util_sessionaccessor::get_session(SESSION_NETWORK_DETAIL);
				$v_dto_common_inputerror = new dto_common_inputerror();
				$v_dto_common_inputerror->s_col_name = '';

				$s_msg = ERROR_EXCLUSION;
				$s_msg = str_replace('%param1', 'ネットワーク名', $s_msg);
				$s_msg = str_replace('%param2', $v_req_base->v_dto_network_execcondition->s_network_name, $s_msg);
				$v_dto_common_inputerror->s_error_msg = $s_msg;
				array_push($v_res_network_detail->v_dto_rescommon->a_error_msg, $v_dto_common_inputerror);
				break;

			default:
				$v_dto_network_exec->b_execute_flg = true;

				// Sessionにメッセージをセット。
				$v_res_network_exec->v_dto_rescommon->s_msg = str_replace('%param1', $v_req_base->v_dto_network_execcondition->s_network_name, MSG_UPDATE_SUCCESS);
				break;
		}

		return $v_res_network_exec;
	}


	/**
	 * 表示するViewを返す
	 * @see process_base::get_view_name()
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{

		$v_dto_network_exec = $v_res_base->v_dto_network_exec;

		if ($v_dto_network_exec->b_execute_flg === false) {
			// エラーあり
			return VIEW_NETWORK_DETAIL;
		} else {
			// エラーなし
			return VIEW_NETWORK_LIST;
		}
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