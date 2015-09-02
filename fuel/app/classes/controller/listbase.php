<?php

/**
 *  概要：一覧系画面ControllerのSuperクラス
 */
class Controller_Listbase extends Controller_Base
{

	/**
	 * 初期表示
	 */
	public function action_index()
	{
		try {
			// リクエスト作成
			$v_req_listbase = $this->get_index_request();

			// 検索条件をセット
			$this->set_input_param($v_req_listbase);

			// パンくずをセット
			$this->set_breadcrumb();

			// プロセス実行
			$this->_execute_index_process($v_req_listbase);

		} catch (\Exception $e) {
			// エラー画面に遷移
			$this->setActionError(get_class($this), Request::active()->action);
		}
	}


	/**
	 * 検索
	 */
	public function action_search()
	{
		try {
			// リクエスト作成
			$v_req_listbase = $this->get_search_request();

			// 検索条件をセット
			$this->set_input_param($v_req_listbase);

			// 検索条件(ページ)をセット
			$this->_set_input_param_page($v_req_listbase);

			// プロセス実行
			$this->_execute_search_process($v_req_listbase);
		} catch (\Exception $e) {
			// エラー画面に遷移
			$this->setActionError(get_class($this), Request::active()->action);
		}
	}


	/**
	 * 別画面からこの画面に戻ってきたとき
	 */
	public function action_back()
	{
		try {
			// リクエスト取得
			$v_req_listbase = $this->get_index_request();

			// パンくずをセット
			$this->set_breadcrumb();

			// プロセス実行
			$this->_execute_back_process($v_req_listbase);

		} catch (\Exception $e) {
			// エラー画面に遷移
			$this->setActionError(get_class($this), Request::active()->action);
		}
	}


	/**
	 * 別画面からこの画面に戻ってきたとき(DDL発行後によばれるとき)
	 */
	public function action_backv2()
	{
		try {
			// リクエスト取得
			$v_req_listbase = $this->get_index_request();

			// パンくずをセット
			$this->set_breadcrumb();

			// プロセス実行
			$this->_execute_backv2_process($v_req_listbase);

		} catch (\Exception $e) {
			// エラー画面に遷移
			$this->setActionError(get_class($this), Request::active()->action);
		}
	}


	/**
	 * 初期表示で表示するViewの名前を取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_index_view()
	{
	}


	/**
	 * リクエストのインスタンス(検索用)を取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_search_request()
	{
	}


	/**
	 * リクエストのインスタンス(初期表示用)を取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_index_request()
	{
	}


	/**
	 * リクエストのインスタンス(検索用)を取得
	 * 継承先でオーバーライドされる
	 */
	protected function set_input_param(req_listbase $v_req_listbase)
	{
	}


	/**
	 * プロセスのインスタンス(初期表示用)を取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_index_process()
	{
	}


	/**
	 * プロセスのインスタンス(検索用)を取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_search_process()
	{
	}


	/**
	 * プロセスのインスタンス(戻る用)を取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_back_process()
	{
	}


	/**
	 * プロセスのインスタンス(DDL実行後に戻る用)を取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_backv2_process()
	{
	}


	/**
	 * 初期表示用プロセスを実行
	 * @param $v_req_listbase	一覧リクエストベース
	 */
	private function _execute_index_process(req_listbase $v_req_listbase)
	{
		$v_process_listbase = $this->get_index_process();
		$s_view_name = $v_process_listbase->execute_process($v_req_listbase);
		$this->set_view($s_view_name);
	}


	/**
	 * 検索用プロセスを実行
	 * @param $v_req_listbase	一覧リクエストベース
	 */
	private function _execute_search_process(req_listbase $v_req_listbase)
	{
		$v_process_listbase = $this->get_search_process();
		$s_view_name = $v_process_listbase->execute_process($v_req_listbase);
		$this->set_view($s_view_name);
	}


	/**
	 * 戻る用プロセスを実行
	 * @param $v_req_listbase	一覧リクエストベース
	 */
	private function _execute_back_process(req_listbase $v_req_listbase)
	{
		$v_process_listbase = $this->get_back_process();
		$s_view_name = $v_process_listbase->execute_process($v_req_listbase);
		$this->set_view($s_view_name);
	}


	/**
	 * 戻る用プロセスを実行(DDL実行後)
	 * @param $v_req_listbase	一覧リクエストベース
	 */
	private function _execute_backv2_process(req_listbase $v_req_listbase)
	{
		$v_process_listbase = $this->get_backv2_process();
		$s_view_name = $v_process_listbase->execute_process($v_req_listbase);

		$this->set_view($s_view_name);
	}


	/**
	 * 画面で入力されたページ情報をセット
	 * @param $v_req_listbase	一覧リクエストベース
	 */
	private function _set_input_param_page(req_listbase $v_req_listbase)
	{
		// ページャDTO
		$a_input_param = Input::post();
		if ($a_input_param == null)
		{
			return;
		}

		$v_req_listbase->v_dto_listcommon->i_current_page = $a_input_param['i_current_page'];
	}

}

