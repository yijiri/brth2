<?php

/**
 * 区分：ネットワーク管理
 * 概要：確認画面に表示する情報を取得するプロセス
 */
class process_network_confirm extends process_base {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_network_confirm($b_db_flg = true)
	{
		// 親のコンストラクタをコール
		parent::process_base($b_db_flg);
	}


	/**
	 * プロセスを実行（画面に表示するレコードを取得してセッションにつめる）
	 * @param util_db	$v_util_db		DB接続
	 * @param req_base	$v_req			画面リクエスト
	 * @return 遷移先の画面
	 */
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
		// リクエストの値をレスポンスにつめる
		$v_res_base = $this->_make_response($v_req_base);

		// セッションに格納
		$this->set_session($v_res_base);

		return $this->get_view_name($v_req_base);
	}


	/**
	 * セッションにセット
	 * @param res_base	$v_res_base		レスポンス
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_NETWORK_CONFIRM, $v_res_base);
	}


	/**
	 * レスポンスを作成
	 * @param req_base	$v_req_base		リクエスト
	 */
	protected function _make_response(req_base $v_req_base) {
		$v_res_network_confirm = new res_network_confirm();
		$v_res_network_confirm->v_dto_network_confirm = $v_req_base->v_dto_network_confirm;

		return $v_res_network_confirm;
	}


	/**
	 * 表示するViewの名前を返す
	 * @see process_base::get_view_name()
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{
		return VIEW_NETWORK_CONFIRM;
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