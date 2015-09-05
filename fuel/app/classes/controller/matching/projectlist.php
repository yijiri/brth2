<?php

/**
 * 区分：xx
 * 画面：xx
 */
class Controller_Matching_projectlist extends Controller_Listbase
{

	public function action_index()
	{
		// 初期表示で検索しないので、Viewを返す
		$this->set_view("matching/projectlist");
	}


	/**
	 * リクエストのインスタンス(初期表示用)を取得
	 * @see Controller_Listbase::get_index_request()
	 */
	protected function get_index_request()
	{
		// 初期表示で検索なし
	}


	/**
	 * リクエストのインスタンス(検索用)を取得
	 * @see Controller_Listbase::get_search_request()
	 */
	protected function get_search_request()
	{
		return new process_matching_projectlist();
	}


	/**
	 * プロセスのインスタンス(初期表示用)を取得
	 * @see Controller_Listbase::get_index_process()
	 */
	protected function get_index_process()
	{
		// 初期表示で検索なし
	}


	/**
	 * プロセスのインスタンス(検索用)を取得
	 * @see Controller_Listbase::get_search_process()
	 */
	protected function get_search_process()
	{
		return new process_matching_projectlist();
	}


	/**
	 * プロセスのインスタンス(戻る用)を取得
	 * @see Controller_Listbase::get_back_process()
	 */
	protected function get_back_process()
	{
		//return new process_network_listback();
	}


	/**
	 * プロセスのインスタンス(DDL実行後に戻る用)を取得
	 * @see Controller_Listbase::get_backv2_process()
	 */
	protected function get_backv2_process()
	{
		//return new process_network_listbackv2();
	}


	/**
	 * 画面で入力された検索条件をセット
	 * @see Controller_Listbase::set_input_param()
	 */
	protected function set_input_param(req_listbase $v_req_listbase)
	{
		// 検索条件DTO
		$v_dto_matching_condition = new dto_matching_condition();
 		$v_req_listbase->v_dto_matching_condition = $v_dto_network_condition;

		$a_input_param = Input::post();
		if ($a_input_param == null)
		{
			return;
		}

		$v_dto_matching_condition->s_human_id = $a_input_param['s_human_id'];
		$v_dto_matching_condition->s_human_name = $a_input_param['s_human_name'];
	}
}
