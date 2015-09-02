<?php

/**
 * 区分：共通
 * 概要：会社名一覧を取得
  */
class process_common_combocompany extends process_combobase {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_common_combocompany($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_combobase($b_db_flg);
	}


	/**
	 * SQLを作成
	 * @see process_listbase::make_sql()
	 */
	protected function make_sql(req_base $v_req_base)
	{
		$s_sql = '';
		$s_sql .= 'SELECT COMPANY_ID AS ID, COMPANY_NAME AS STR from COMPANY_MST ';
		$s_sql .= 'ORDER BY COMPANY_TYPE';

		return $s_sql;
	}

	/**
	 * セッションをセット
	 * @see process_listbase::set_session()
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_COMMON_COMPANY_COMBO, $v_res_base);
	}
}