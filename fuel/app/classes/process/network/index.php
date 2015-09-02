<?php

/**
 * 区分：ネットワーク管理
 * 概要：一覧初期表示プロセス
 */
class process_network_index extends process_base {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_network_index($b_db_flg = true){
		// 親のコンストラクタをコール
		parent::process_base($b_db_flg);
	}


	/**
	* プロセスを実行（画面に表示するレコードを取得してセッションにつめる）
	* @see process_base::process()
	*/
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
		// セッション削除
		Session::delete(SESSION_NETWORK_LIST);

		// レコード取得
		$v_process_network_list = new process_network_list();
		$s_view_name = $v_process_network_list->execute_process($v_req_base, $v_util_dbaccessor);

		return $s_view_name;
	}


	/**
	 * 表示するViewの名前を返す
	 * @see process_base::get_view_name()
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{
		// プロセスから返ってくるものを使用する
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