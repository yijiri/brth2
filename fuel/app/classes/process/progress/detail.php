<?php

/**
 * 区分：ネットワーク管理
 * 概要：詳細画面のレコードを取得するプロセス
 */
class process_network_detail extends process_detailbase {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_network_detail($b_db_flg = true)
	{
		// 親のコンストラクタをコール
		parent::process_detailbase($b_db_flg);
	}


	/**
	 * SQLを作成
	 * @see process_detailbase::make_sql()
	 */
	protected function make_sql(req_base $v_req_base)
	{
		$s_sql = '';
		$s_sql .= 'SELECT  ';
		$s_sql .= 'network_id,  ';
		$s_sql .= 'network_name,  ';
		$s_sql .= 'enabled_flag,  ';
		$s_sql .= 'date_format(update_time, \'%Y%m%d%H%i%s%f\') update_time ';
		$s_sql .= 'FROM  ';
		$s_sql .= 'network_mst  ';
		$s_sql .= 'WHERE  ';
		$s_sql .= 'network_id = :NETWORK_ID ';

		return $s_sql;
	}


	/**
	 * バインド変数をセット
	 * @see process_detailbase::set_bind_value()
	 */
	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
		$v_dto_network_detailcondition = $v_req_base->v_dto_network_detailcondition;
		$v_pdostatement = $v_util_dbaccessor->v_pdo->prepare($s_sql);
		$s_network_id = $v_dto_network_detailcondition->s_network_id;
		$v_util_dbaccessor->set_bind_value($v_pdostatement, 'NETWORK_ID', util_dbaccessor::get_decode_data($s_network_id));
		return $v_pdostatement;
	}


	/**
	 * セッションにセット
	 * @see process_detailbase::set_session()
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_NETWORK_DETAIL, $v_res_base);
	}


	/**
	 * レスポンスを作成
	 * @see process_detailbase::make_response()
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base) {
		$v_res_network_detail = new res_network_detail();
		$v_res_network_detail->v_dto_network_detail = $this->_set_result($v_pdostatement);
		return $v_res_network_detail;
	}


	/**
	 * 詳細情報をセット
	 * @return dto_network_detail
	 */
	private function _set_result(PDOStatement $v_pdostatement)
	{
		$v_dto_network_detail = new dto_network_detail();

		if ($result = $v_pdostatement->fetch(PDO::FETCH_ASSOC)){
  			$v_dto_network_detail->s_network_id = util_dbaccessor::get_encode_data($result, 'network_id');
 			$v_dto_network_detail->s_network_name = util_dbaccessor::get_encode_data($result, 'network_name');
 			$v_dto_network_detail->s_enabled_flag = util_dbaccessor::get_encode_data($result, 'enabled_flag');
 			$v_dto_network_detail->s_enabled_name = util_decord::enable_decord(util_dbaccessor::get_encode_data($result, 'enabled_flag'));
 			$v_dto_network_detail->s_update_time = util_dbaccessor::get_encode_data($result, 'update_time');
 		}

		return $v_dto_network_detail;
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