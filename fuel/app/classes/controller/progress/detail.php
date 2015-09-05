<?php

/**
 * 区分：ネットワーク管理
 * 画面：ネットワーク管理(詳細)
 */
class Controller_Network_Detail extends Controller_Detailbase
{

	/**
	 * パラメータをセット(新規用)
	 * @param req_detailbase	$v_req_detailbase	詳細リクエストベース
	 * @see Controller_Detailbase::set_newindex_request_param()
	 */
	protected function set_newindex_request_param(req_detailbase $v_req_detailbase)
	{
		$v_dto_network_detail = new dto_network_detail();

		$v_dto_network_detail->s_enabled_flag = "1";
		$v_dto_network_detail->s_enabled_name = "有効";
		$v_req_detailbase->v_dto_network_detail = $v_dto_network_detail;
	}


	/**
	 * パラメータをセット(更新用)
	 * @see Controller_Detailbase::set_request_param()
	 */
	protected function set_request_param(req_detailbase $v_req_detailbase)
	{
		$a_input_param = Input::post();

		if ($a_input_param == null)
		{
			return;
		}

		$v_dto_network_detailcondition = new dto_network_detailcondition();
		$v_dto_network_detailcondition->s_network_id = $a_input_param['s_network_id'];

		$v_req_detailbase->v_dto_network_detailcondition = $v_dto_network_detailcondition;
	}


	/**
	 * パラメータをセット(実行用)
	 * @see Controller_Detailbase::set_exec_request_param()
	 */
	protected function set_exec_request_param(req_base $v_req_base)
	{
		$a_input_param = Input::post();

		if ($a_input_param == null){return;}
		$v_dto_network_execcondition = new dto_network_execcondition();

		// 画面の値をセット
		if (array_key_exists('s_network_id', $a_input_param))
		{
			$v_dto_network_execcondition->s_network_id = $a_input_param['s_network_id'];
			$v_dto_network_execcondition->s_network_name = $a_input_param['s_network_name'];
			$v_dto_network_execcondition->s_enabled_flag = $a_input_param['s_enabled_flag'];
			$v_dto_network_execcondition->s_update_time = $a_input_param['s_update_time'];

			$v_req_base->v_dto_network_execcondition = $v_dto_network_execcondition;
		}
	}


	/**
	 * パラメータをセット(確認画面用)
	 * @see Controller_Detailbase::set_confirm_request_param()
	 */
	protected function set_confirm_request_param(req_detailbase $v_req_detailbase)
	{
		$a_input_param = Input::post();

		if ($a_input_param == null){return;}

		$v_dto_network_confirm = new dto_network_confirm();

		// 画面の値をセット
		if (array_key_exists('s_network_id', $a_input_param))
		{
			$v_dto_network_confirm = new dto_network_confirm();
			$v_dto_network_confirm->s_network_id = $a_input_param['s_network_id'];
			$v_dto_network_confirm->s_network_name = $a_input_param['s_network_name'];
			$v_dto_network_confirm->s_enabled_flag = $a_input_param['s_enabled_flag'];
			$v_dto_network_confirm->s_enabled_name = $a_input_param['s_enabled_name'];
			$v_dto_network_confirm->s_update_time = $a_input_param['s_update_time'];

			$v_req_detailbase->v_dto_network_confirm = $v_dto_network_confirm;
		}
	}


	/**
	 * リクエストのインスタンス(新規・更新用)を取得
	 * @see Controller_Detailbase::get_request()
	 */
	protected function get_request()
	{
		return new req_network_detail();
	}


	/**
	 * リクエストのインスタンス(確認用)を取得
	 * @see Controller_Detailbase::get_confirm_request()
	 */
	protected function get_confirm_request()
	{
		return new req_network_confirm();
	}


	/**
	 * リクエストのインスタンス(実行用)を取得
	 * @see Controller_Detailbase::get_exec_request()
	 */
	protected function get_exec_request()
	{
		return new req_network_exec();
	}


	/**
	 * プロセスのインスタンス(新規用)を取得
	 * @see Controller_Detailbase::get_newindex_process()
	 */
	protected function get_newindex_process()
	{
		return new process_network_newindex();
	}


	/**
	 * プロセスのインスタンス(更新用)を取得
	 * @see Controller_Detailbase::get_process()
	 */
	protected function get_process()
	{
		return new process_network_detail();
	}


	/**
	 * プロセスのインスタンス(戻る用)を取得
	 * @see Controller_Detailbase::get_back_process()
	 */
	protected function get_back_process()
	{
		return new process_network_detailback();
	}


	/**
	 * プロセスのインスタンス(入力チェック用)を取得
	 * see Controller_Detailbase::get_checkinput_process()
	 */
	protected function get_checkinput_process()
	{
		return new process_network_checkinput();
	}


	/**
	 * セッションからエラー配列を取得
	 * @see Controller_Detailbase::get_error_array()
	 */
	protected function get_error_array()
	{
		$v_res_network_detail = util_sessionaccessor::get_session(SESSION_NETWORK_DETAIL);
		return $v_res_network_detail->v_dto_rescommon->a_error_msg;
	}


	/**
	 * パンくずをセット
	 * @see Controller_Base::set_breadcrumb()
	 */
	protected function set_breadcrumb()
	{
		// パンくずを全部クリア
		util_breadcrumb::del_breadcrumb_all();

		// パンくず追加
		util_breadcrumb::get_breadcrumb(KUBUN_HOME, BREADCRUMB_HOME_MAIN);
		util_breadcrumb::get_breadcrumb(KUBUN_NETWORK, BREADCRUMB_NETWORK_MAIN);
		util_breadcrumb::get_breadcrumb(KUBUN_NETWORK, BREADCRUMB_NETWORK_EDIT);
	}


	/**
	 * パンくず(確認用)セット
	 * @see Controller_Detailbase::set_confirm_breadcrumb()
	 */
	protected function set_confirm_breadcrumb()
	{
		// パンくずを全部クリア
		util_breadcrumb::del_breadcrumb_all();

		// パンくず追加
		util_breadcrumb::get_breadcrumb(KUBUN_HOME, BREADCRUMB_HOME_MAIN);
		util_breadcrumb::get_breadcrumb(KUBUN_NETWORK, BREADCRUMB_NETWORK_MAIN);
		util_breadcrumb::get_breadcrumb(KUBUN_NETWORK, BREADCRUMB_NETWORK_EDIT);
		util_breadcrumb::get_breadcrumb(KUBUN_NETWORK, BREADCRUMB_NETWORK_CONFIRM);
	}


	/**
	 * SQLの実行結果をSessionから取得
	 * @see Controller_Detailbase::get_exec_result()
	 */
	protected function get_exec_result()
	{
		$v_res_network_exec = util_sessionaccessor::get_session(SESSION_NETWORK_DETAIL_EXEC);
		return $v_res_network_exec->v_dto_network_exec->b_execute_flg;
	}


	/**
	 * SQLの実行結果がOKだったときのリダイレクト先を取得
	 * @see Controller_Detailbase::get_redirect_url()
	 */
	protected function get_redirect_url()
	{
		return URL_NETWORK_LIST_BACKV2;
	}
}