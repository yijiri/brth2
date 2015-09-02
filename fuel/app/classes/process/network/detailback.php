<?php

/**
 * 区分：ネットワーク管理
 * 概要：別画面から戻ったときのプロセス
 */
class process_network_detailback extends process_network_detail
{

	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 * @param string  $s_db_type	DB_REFERENCE:参照用DB、DB_UPDATE:更新用DB
	 */
	public function process_network_detailback($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_network_detail($b_db_flg);
	}


	/**
	 * プロセスを実行（画面に表示するレコードを取得してセッションにつめる）
	 * @param util_db	$v_util_db		DB接続
	 * @param req_base	$v_req			画面リクエスト
	 * @return 遷移先の画面
	 */
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
		// 何もしない

		return VIEW_NETWORK_DETAIL;
	}
}