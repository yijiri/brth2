<?php

/**
 * 区分：人材照会管理システム
 * 画面：進捗管理
 */
class Controller_Progress_List extends Controller_Listbase
{
	/**
	 * リクエストのインスタンス(初期表示用)を取得
	 * @see Controller_Listbase::get_index_request()
	 */
	protected function get_index_request()
	{
		// 初期表示で検索するので、検索用のリクエストを返す
		return new req_progress_condition;
	}


	/**
	 * リクエストのインスタンス(検索用)を取得
	 * @see Controller_Listbase::get_search_request()
	 */
	protected function get_search_request()
	{
		return new req_progress_condition;
	}


	/**
	 * プロセスのインスタンス(初期表示用)を取得
	 * @see Controller_Listbase::get_index_process()
	 */
	protected function get_index_process()
	{
		return new process_progress_index();
	}


	/**
	 * プロセスのインスタンス(検索用)を取得
	 * @see Controller_Listbase::get_search_process()
	 */
	protected function get_search_process()
	{
		return new process_progress_list();
	}


	/**
	 * プロセスのインスタンス(戻る用)を取得
	 * @see Controller_Listbase::get_back_process()
	 */
	protected function get_back_process()
	{
		return new process_progress_listback();
	}


	/**
	 * プロセスのインスタンス(DDL実行後に戻る用)を取得
	 * @see Controller_Listbase::get_backv2_process()
	 */
	protected function get_backv2_process()
	{
		return new process_progress_listbackv2();
	}


	/**
	 * 画面で入力された検索条件をセット
	 * @see Controller_Listbase::set_input_param()
	 */
	protected function set_input_param(req_listbase $v_req_listbase)
	{
		// 検索条件DTO
		$v_dto_progress_condition = new dto_progress_condition();
		$v_req_listbase->v_dto_progress_condition = $v_dto_progress_condition;

		$a_input_param = Input::post();
		if ($a_input_param == null)
		{
			return;
		}

		$v_dto_progress_condition->s_progress_name = $a_input_param['s_progress_name'];
		$v_dto_progress_condition->i_current_page = $a_input_param['i_current_page'];
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
		util_breadcrumb::get_breadcrumb(KUBUN_PROGRESS, BREADCRUMB_PROGRESS_MAIN);
		util_breadcrumb::get_breadcrumb(KUBUN_PROGRESS, BREADCRUMB_PROGRESS_LIST);
	}


}
