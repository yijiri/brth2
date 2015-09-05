<?php

/**
 * 区分：ネットワーク管理
 * 概要：新規画面表示
 */
class process_network_newindex extends process_base {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_network_newindex($b_db_flg = true){
		// 親のコンストラクタをコール
		parent::process_base($b_db_flg);
	}


	/**
	* プロセスを実行
	* @see process_base::process()
	*/
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
		// セッション削除
		Session::delete(SESSION_NETWORK_DETAIL);

		$v_res_network_detail = new res_network_detail();
		$v_res_network_detail->v_dto_network_detail = $v_req_base->v_dto_network_detail;

		Session::set(SESSION_NETWORK_DETAIL, $v_res_network_detail);

		return $this->get_view_name($v_req_base);
	}


	/**
	 * 表示するViewの名前を返す
	 * @see process_base::get_view_name()
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{
		return VIEW_NETWORK_DETAIL;
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