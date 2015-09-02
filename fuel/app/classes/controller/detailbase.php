<?php

/**
 *  概要：詳細系画面ControllerのSuperクラス
 */
class Controller_Detailbase extends Controller_Base
{

	/**
	 * 初期表示(新規画面)
	 */
	public function action_new()
	{
		try {
			// リクエストを作成
			$v_req_detailbase = $this->get_request();

			// リクエストに値をセット
			$this->set_newindex_request_param($v_req_detailbase);

			// パンくずをセット
			$this->set_breadcrumb();

			// プロセス実行
			$this->_execute_newindex_process($v_req_detailbase);

		} catch (\Exception $e) {
			// エラー画面に遷移
			$this->setActionError(get_class($this), Request::active()->action);
		}

	}


	/**
	 * 初期表示(更新画面)
	 */
	public function action_index()
	{
		try {
			// リクエスト作成
			$v_req_detailbase = $this->get_request();

			// レコードの取得条件をセット
			$this->set_request_param($v_req_detailbase);

			// パンくずをセット
			$this->set_breadcrumb();

			// プロセス実行
			$this->_execute_process($v_req_detailbase);

		} catch (\Exception $e) {
			// エラー画面に遷移
			$this->setActionError(get_class($this), Request::active()->action);
		}

	}


	/**
	 * [次へ]ボタンクリック
	 */
	public function action_next()
	{
		try {
			// リクエスト
			$v_req_confirm = $this->get_confirm_request();

			// リクエストに値をセット
			$this->set_confirm_request_param($v_req_confirm);

			// 入力チェックプロセスを実行
			$v_process_base = $this->get_checkinput_process();
			$s_view_name = $v_process_base->execute_process($v_req_confirm, false);

			// エラーの値を取得
			$a_error_msg = $this->get_error_array();

			if (count($a_error_msg) != 0) {
				// 入力チェックエラーがあれば、自画面を再表示
			} else {
				// 確認プロセスを実行
				$v_process_network_confirm = new process_network_confirm();
				$s_view_name = $v_process_network_confirm->execute_process($v_req_confirm, false);
			}

			// パンくずをセット
			$this->set_confirm_breadcrumb();

			$this->set_view($s_view_name);

		} catch (\Exception $e) {
			// エラー画面に遷移
			$this->setActionError(get_class($this), Request::active()->action);
		}
	}


	/**
	 * [実行]ボタンクリック
	 */
	public function action_exec()
	{
		try {

			// リクエストを作成
			$v_req_execbase = $this->get_exec_request();

			// リクエストに値をセット
			$this->set_exec_request_param($v_req_execbase);

			// プロセス実行
			// 非表示項目でネットワークIDが指定されている場合、更新処理
			// 指定されていない場合、登録処理
			$s_network_id = $v_req_execbase->v_dto_network_execcondition->s_network_id;

			if($s_network_id == '')
			{
				$v_process_network_exec = new process_network_ins();
			}
			else
			{
				$v_process_network_exec = new process_network_edit();
			}
			$s_view_name = $v_process_network_exec->execute_process($v_req_execbase);
print_r($this->get_exec_result());
			// 実行結果がOKなら一覧画面にリダイレクト
			if ($this->get_exec_result() === false) {
				$this->set_view($s_view_name);
			} else {
				Response::redirect($this->get_redirect_url());
			}

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
			$v_req_detailbase = $this->get_request();

			// パンくずをセット
			$this->set_breadcrumb();

			// プロセス実行
			$this->_execute_back_process($v_req_detailbase);

		} catch (\Exception $e) {
			// エラー画面に遷移
			$this->setActionError(get_class($this), Request::active()->action);
		}
	}





	/**
	 * プロセスを実行
	 * @param $v_req_listbase	詳細リクエストベース
	 */
	private function _execute_process(req_detailbase $v_req_detailbase)
	{
		$v_process_detailbase = $this->get_process();
		$s_view_name = $v_process_detailbase->execute_process($v_req_detailbase);
		$this->set_view($s_view_name);
	}


	/**
	 * [作成]画面表示用のプロセスを実行
	 * @param $v_req_listbase	詳細リクエストベース
	 */
	private function _execute_newindex_process(req_detailbase $v_req_detailbase)
	{
		$v_process_detailbase = $this->get_newindex_process();
		$s_view_name = $v_process_detailbase->execute_process($v_req_detailbase);
		$this->set_view($s_view_name);
	}


	/**
	 * 戻る用プロセスを実行
	 * @param $v_req_listbase	詳細リクエストベース
	 */
	private function _execute_back_process(req_detailbase $v_req_detailbase)
	{
		$v_process_detailbase = $this->get_back_process();
		$s_view_name = $v_process_detailbase->execute_process($v_req_detailbase);
		$this->set_view($s_view_name);
	}


	/**
	 * 「次へ」ボタン押下用プロセスを実行
	 * @param $v_req_listbase	詳細リクエストベース
	 */
	private function _execute_confirm_process(req_detailbase $v_req_detailbase)
	{
		$v_process_detailbase = $this->get_back_process();
		$s_view_name = $v_process_detailbase->execute_process($v_req_detailbase);
		$this->set_view($s_view_name);
	}


	/**
	 * リクエストを取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_request()
	{
	}


	/**
	 * リクエストを取得(確認画面用)
	 * 継承先でオーバーライドされる
	 */
	protected function get_confirm_request()
	{
	}


	/**
	 * リクエストを取得(実行用)
	 * 継承先でオーバーライドされる
	 */
	protected function get_exec_request()
	{
	}


	/**
	 * レコードの取得条件をセット
	 * 継承先でオーバーライドされる
	 * @param req_detailbase	$v_req_detailbase	詳細リクエストベース
	 */
	protected function set_request_param(req_detailbase $v_req_detailbase)
	{
	}


	/**
	 * 初期表示用のパラメータをセット
	 * 継承先でオーバーライドされる
	 * @param req_detailbase	$v_req_detailbase	詳細リクエストベース
	 */
	protected function set_newindex_request_param(req_detailbase $v_req_detailbase)
	{
	}


	/**
	 * 確認画面用のパラメータをセット
	 * 継承先でオーバーライドされる
	 * @param req_detailbase	$v_req_detailbase	詳細リクエストベース
	 */
	protected function set_confirm_request_param(req_detailbase $v_req_detailbase)
	{
	}


	/**
	* 実行用のパラメータをセット
	* 継承先でオーバーライドされる
	* @param req_base	$v_req_base	リクエストベース
	*/
	protected function set_exec_request_param(req_base $v_req_base)
	{
	}


	/**
	 * プロセスを取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_process()
	{
	}


	/**
	 * [作成]画面表示用のプロセスのインスタンスを取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_newindex_process()
	{
	}


	/**
	 * 戻る用プロセスのインスタンスを取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_back_process()
	{
	}


	/**
	 * 入力チェックプロセスのインスタンスを取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_checkinput_process()
	{
	}


	/**
	 * 「次へ」ボタン押下用プロセスのインスタンスを取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_confirm_process()
	{
	}


	/**
	 * 一覧画面の画面IDを取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_list_display_id()
	{
	}



	/**
	 * パンくずをセット(区分)
	 * 継承先でオーバーライドされる
	 */
	protected function set_kubun_breadcrumb(req_detailbase $v_req_detailbase)
	{
	}


	/**
	 * パンくずをセット(新規)
	 * 継承先でオーバーライドされる
	 */
	protected function set_new_breadcrumb(req_detailbase $v_req_detailbase)
	{
	}

	/**
	 * セッションからエラー配列を取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_error_array()
	{
	}


	/**
	 * パンくず(確認画面用)セット
	 * 継承先でオーバーライドされる
	 */
	protected function set_confirm_breadcrumb()
	{
	}


	/**
	 * SQLの実行結果をSessionから取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_exec_result()
	{
	}


	/**
	 * SQLの実行結果がOKだったときのリダイレクト先を取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_redirect_url()
	{
	}
}

