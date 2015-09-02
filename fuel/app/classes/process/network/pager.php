<?php

/**
 * 区分：ネットワーク管理
 * 概要：一覧画面の全件数取得
 */
class process_network_pager extends process_detailbase {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_network_pager($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_detailbase($b_db_flg);
	}


	/**
	 * SQLを作成
	 * @see process_detailbase::make_sql()
	 */
	protected function make_sql(req_base $v_req_base)
	{
		$v_condition = $v_req_base->v_dto_network_condition;
		$s_network_name = $v_condition->s_network_name;

		$s_sql = '';
		$s_sql .= 'SELECT ';
		$s_sql .= 'count(*) cnt ';
		$s_sql .= 'FROM ';
		$s_sql .= 'network_mst ';
		$s_sql .= 'WHERE ';
		$s_sql .= '1 = 1 ';


		//ネットワーク名に指定がない場合、条件なし
		if($s_network_name != null)
		{
			$s_sql .= 'and ';
			$s_sql .= 'network_name like :NETWORK_NAME ';
		}

		return $s_sql;
	}


	/**
	 * バインド変数をセット
	 * @see process_detailbase::set_bind_value()
	 */
	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
		$v_condition = $v_req_base->v_dto_network_condition;
		$s_network_name = $v_condition->s_network_name;

		$v_pdostatement = $v_util_dbaccessor->v_pdo->prepare($s_sql);
		if ($s_network_name != '') {
			$v_util_dbaccessor->set_bind_value($v_pdostatement, 'NETWORK_NAME', '%'.util_dbaccessor::get_decode_data($s_network_name).'%');
		}

		return $v_pdostatement;
	}


	/**
	 * セッションをセット
	 * @see process_detailbase::set_session()
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_NETWORK_LIST, $v_res_base);
	}


	/**
	 * レスポンスにセット
	 * @see process_detailbase::make_response()
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base)
	{
		// Sessionから一覧のレスポンスを取得
		$v_res_network_resultlist = util_sessionaccessor::get_session(SESSION_NETWORK_LIST);

		// レスポンスに件数をセット
		if ($result = $v_pdostatement->fetch(PDO::FETCH_ASSOC)){
			$l_rec_num = util_dbaccessor::get_encode_data($result, 'cnt');
			$v_dto_listcommon = $v_res_network_resultlist->v_dto_listcommon;

			$v_dto_listcommon->l_rec_num = $l_rec_num;
			$v_dto_listcommon->i_page_num = (int)(($l_rec_num + ($v_dto_listcommon->i_display_num - 1)) / $v_dto_listcommon->i_display_num);
			$v_dto_listcommon->i_current_page = $v_req_base->v_dto_network_condition->i_current_page;
		}

		return $v_res_network_resultlist;
	}


	/**
	 * 表示するViewの名前を返す
	 * @see process_base::get_view_name()
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{
		// 使用なし
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