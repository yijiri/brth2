<?php

/**
 * 区分：ネットワーク管理
 * 概要：別画面から戻ったときのプロセス(DDL実行後にコールされる)
 */
class process_network_listbackv2 extends process_network_index
{

	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_network_listbackv2($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_network_index($b_db_flg);
	}


	/**
	 * プロセスを実行（画面に表示するレコードを取得してセッションにつめる）
	 * @see process_base::process()
	 */
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
		// リクエストにはセッションの値をつめる
		$v_res_network_list = Session::get(SESSION_NETWORK_LIST);
		$v_req_base->v_dto_network_condition = $v_res_network_list->v_dto_network_condition;

		$s_view_name = parent::process($v_util_dbaccessor, $v_req_base);

		// DDLの発行結果をメッセージにつめる
		$v_res_network_exec = Session::get(SESSION_NETWORK_DETAIL_EXEC);
		$v_res_network_list = Session::get(SESSION_NETWORK_LIST);
		$v_res_network_list->v_dto_rescommon->s_msg = $v_res_network_exec->v_dto_rescommon->s_msg;

		return $s_view_name;
	}
}