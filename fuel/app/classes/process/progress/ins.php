<?php

/**
 * 区分：検索 or クレジット管理
 * 画面：項目設定
 * 概要：項目設定登録プロセス
 */
class process_network_ins extends process_execbase {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_network_ins($b_db_flg = true){
		// 親のコンストラクタをコール
		parent::process_base($b_db_flg);
	}


	/**
	 * SQLを作成
	 * 継承先でオーバーライドされる
	 * @param req_base $v_req_base	リクエスト
	 */
	protected function make_sql(req_base $v_req_base)
	{

		$s_sql = '';
		$s_sql .= ' INSERT INTO NETWORK_MST (';
		$s_sql .= '   NETWORK_ID';
		$s_sql .= '  ,NETWORK_NAME';
		$s_sql .= '  ,ENABLED_FLAG';
		$s_sql .= '  ,REGIST_TIME';
		$s_sql .= '  ,REGIST_USER';
		$s_sql .= '  ,UPDATE_TIME';
		$s_sql .= '  ,UPDATE_USER';
		$s_sql .= ' )  ';
		$s_sql .= ' VALUES (';
		$s_sql .= ' (SELECT ifnull(right(concat(\'000000\', MAX( network_id ) +1 ),6),  \'000001\') network_id FROM network_mst sub), ';
		$s_sql .= ' :NETWORK_NAME, ';
		$s_sql .= ' :ENABLED_FLAG, ';
		$s_sql .= '  NOW(), ';
		$s_sql .= ' :REGIST_USER, ';
		$s_sql .= '  NOW(), ';
		$s_sql .= ' :UPDATE_USER';
		$s_sql .= ' ) ';

		return $s_sql;
	}


	/**
	 * バインド変数をセット
	 * 継承先でオーバーライドされる
	 * @param unknown $s_sql						SQL
	 * @param req_base $v_req_base					リクエスト
	 * @param util_dbaccessor $v_util_dbaccessor	DBアクセッサ
	 */
 	protected function set_bind_value($s_sql, req_base $v_req_base, util_dbaccessor $v_util_dbaccessor)
	{
		$v_dto_network_execcondition = $v_req_base->v_dto_network_execcondition;
		$v_pdostatement = $v_util_dbaccessor->v_pdo->prepare($s_sql);

		$s_network_name = $v_dto_network_execcondition->s_network_name;
		$s_enabled_flag = $v_dto_network_execcondition->s_enabled_flag;
		$s_network_id = $v_dto_network_execcondition->s_network_id;

		//ログイン状態により分岐
		$v_dto_common = util_sessionaccessor::get_session(SESSION_COMMON);
		$s_login_id = $v_dto_common->s_login_id;


		$v_util_dbaccessor->set_bind_value($v_pdostatement, 'NETWORK_NAME', util_dbaccessor::get_decode_data($s_network_name));
		$v_util_dbaccessor->set_bind_value($v_pdostatement, 'ENABLED_FLAG', util_dbaccessor::get_decode_data($s_enabled_flag));
		$v_util_dbaccessor->set_bind_value($v_pdostatement, 'REGIST_USER', util_dbaccessor::get_decode_data($s_login_id));
		$v_util_dbaccessor->set_bind_value($v_pdostatement, 'UPDATE_USER', util_dbaccessor::get_decode_data($s_login_id));

		return $v_pdostatement;
	}


	/**
	 * セッションをセット
	 * 継承先でオーバーライドされる
	 * @param res_base $v_res_base	レスポンス
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_NETWORK_DETAIL_EXEC, $v_res_base);
	}


	/**
	 * レスポンスを作成
	 * 継承先でオーバーライドされる
	 * @param PDOStatement		$v_pdostatement		PDOステートメント
	 * @param req_base			$v_req_base			リクエスト
	 * @param boolean 			$i_ret				処理されたレコードの数
	 */
	protected function make_response(PDOStatement $v_pdostatement, req_base $v_req_base, $i_ret)
	{
		$v_res_network_exec = new res_network_exec();
		$v_res_network_exec->v_dto_network_execcondition = $v_req_base->v_dto_network_execcondition;
		$v_dto_network_exec = $v_res_network_exec->v_dto_network_exec;
		$v_dto_network_exec->s_mode = EXEC_MODE_INSERT;

		switch ($i_ret)
		{
			case -1:
				// SQL実行エラー
				$v_dto_network_exec->b_execute_flg = false;
				$v_res_network_detail = util_sessionaccessor::get_session(SESSION_NETWORK_DETAIL);
				$v_dto_common_inputerror = new dto_common_inputerror();
				$v_dto_common_inputerror->s_col_name = '';
				$v_dto_common_inputerror->s_error_msg = ERROR_SQL_EXEPTION;
				array_push($v_res_network_detail->v_dto_rescommon->a_error_msg, $v_dto_common_inputerror);
				break;

			default:
				$v_dto_network_exec->b_execute_flg = true;

				// Sessionにメッセージをセット。
				$v_res_network_exec->v_dto_rescommon->s_msg = str_replace('%param1', $v_req_base->v_dto_network_execcondition->s_network_name, MSG_INSERT_SUCCESS);
				break;
		}

		return $v_res_network_exec;
	}


	/**
	 * レスポンスにセットする(入力チェックがあった場合)
	 * @see process_execbase::set_error_msg()
	 */
	protected function set_error_msg(req_base $v_req_base, $a_msg)
	{
		// 入力チェックなし
	}


	/**
	 * 表示するViewを返す
	 * @see process_base::get_view_name()
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{
		$v_dto_network_exec = $v_res_base->v_dto_network_exec;

		if ($v_dto_network_exec->b_execute_flg === false) {
			// エラーあり
			return VIEW_NETWORK_DETAIL;
		} else {
			// エラーなし
			return VIEW_NETWORK_LIST;
		}
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