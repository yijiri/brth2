<?php

/**
 * 区分：ネットワーク管理
 * 概要：チャンネルで設定されていないかチェック
 */
class process_network_checkchannel extends process_detailbase {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_network_checkchannel($b_db_flg = true) {
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
		$s_sql .= 'SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_MST MST ';
		$s_sql .= 'INNER JOIN CHANNEL_DETAIL_NETWORK_REL REL1 ';
		$s_sql .= 'ON MST.CHANNEL_DETAIL_ID = REL1.CHANNEL_DETAIL_ID ';
		$s_sql .= 'WHERE REL1.NETWORK_ID = :NETWORK_ID ';
		$s_sql .= 'AND MST.ENABLED_FLAG IS TRUE; ';

		return $s_sql;
	}


	/**
	 * バインド変数をセット
	 * @see process_detailbase::set_bind_value()
	 */
	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
		$v_dto_network_confirm = $v_req_base->v_dto_network_confirm;
		$v_pdostatement = $v_util_dbaccessor->v_pdo->prepare($s_sql);

		$v_util_dbaccessor->set_bind_value($v_pdostatement, 'NETWORK_ID',  $v_dto_network_confirm->s_network_id);

		return $v_pdostatement;
	}


	/**
	 * セッションをセット
	 * @see process_detailbase::set_session()
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_NETWORK_CHECK_CHANNEL, $v_res_base);
	}


	/**
	 * レスポンスを作成
	 * @see process_detailbase::make_response()
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base)
	{
		$v_res_network_count = new res_network_count();
		$v_dto_network_count = new dto_network_count;

		if ($result = $v_pdostatement->fetch(PDO::FETCH_ASSOC)){
			$v_dto_network_count->i_count = util_dbaccessor::get_encode_data($result, 'CNT');
		}
		$v_res_network_count->v_dto_network_count = $v_dto_network_count;

		return $v_res_network_count;
	}


	/**
	 * 表示するViewの名前を返す
	 * @see process_base::get_view_name()
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{
		// 画面表示なし
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