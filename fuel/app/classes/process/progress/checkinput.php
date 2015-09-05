<?php

/**
 * 区分：ネットワーク管理
 * 概要：入力チェックプロセス
 */
class process_network_checkinput extends process_base {


	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_network_checkinput($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_base($b_db_flg);
	}


	/**
	 * insert処理を実行
	 * @see process_base::process()
	 */
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
		// バリデーションチェック
		$a_msg = $this->_check_val($v_req_base);

		// レスポンスに値をセット
		$v_res_base = $this->_make_response($v_req_base, $a_msg);

		// セッションに格納
		$this->set_session($v_res_base);

		return $this->get_view_name($v_req_base);
	}


	/**
	 * バリデーションチェック
	 * @param req_base $v_req_base		リクエスト
	 */
	private function _check_val(req_base $v_req_base)
	{
		$b_network_name_flg = false;
		$b_enabled_flag = false;
		$a_msg = array();

		$v_dto_network_confirm = $v_req_base->v_dto_network_confirm;

		// ネットワーク名：必須
		$s_mst = util_validate::check_empty($v_dto_network_confirm->s_network_name, 'ネットワーク名');
		if ($s_mst != "") {
			$v_dto_common_inputerror = new dto_common_inputerror();
			$v_dto_common_inputerror->s_col_name = "s_network_name";
			$v_dto_common_inputerror->s_error_msg = $s_mst;
			array_push($a_msg, $v_dto_common_inputerror);
			$b_network_name_flg = true;
		}

		if ($b_network_name_flg === false)
		{
			// ネットワーク名：文字長チェック
			$s_mst = util_validate::check_limit_upper($v_dto_network_confirm->s_network_name, 60, 'ネットワーク名', '全角30文字、半角60文字以内');
			if ($s_mst != "") {
				$v_dto_common_inputerror = new dto_common_inputerror();
				$v_dto_common_inputerror->s_col_name = "s_network_name";
				$v_dto_common_inputerror->s_error_msg = $s_mst;
				array_push($a_msg, $v_dto_common_inputerror);

				$b_network_name_flg = true;
			}

		}

		// 有効無効フラグ：必須
		$s_mst = util_validate::check_empty($v_dto_network_confirm->s_enabled_flag, '有効無効フラグ');
		if ($s_mst != "") {
			$v_dto_common_inputerror = new dto_common_inputerror();
			$v_dto_common_inputerror->s_col_name = "s_enabled_flag";
			$v_dto_common_inputerror->s_error_msg = $s_mst;
			array_push($a_msg, $v_dto_common_inputerror);

			$b_enabled_flag = true;
		}


		if ($b_enabled_flag === false && $v_dto_network_confirm->s_enabled_flag == '0')
		{
			// 有効無効フラグ：使われているチャンネルがあるかチェック
			$v_process_network_checkchannel = new process_network_checkchannel();
			$v_process_network_checkchannel->execute_process($v_req_base);
			$v_res_network_count = util_sessionaccessor::get_session(SESSION_NETWORK_CHECK_CHANNEL);

			if($v_res_network_count->v_dto_network_count->i_count != 0)
			{
				$v_dto_common_inputerror = new dto_common_inputerror();
				$v_dto_common_inputerror->s_col_name = "s_enabled_flag";
				$v_dto_common_inputerror->s_error_msg = str_replace('%param1', 'チャンネル', ERROR_NOT_CHANGE);
				array_push($a_msg, $v_dto_common_inputerror);

				$b_enabled_flag = true;
			}
		}


		if ($b_enabled_flag === false && $v_dto_network_confirm->s_enabled_flag == '0')
		{
			// 有効無効フラグ：使われているオペレータがあるかチェック
			$v_process_network_checkoperator = new process_network_checkoperator();
			$v_process_network_checkoperator->execute_process($v_req_base);
			$v_res_network_count = util_sessionaccessor::get_session(SESSION_NETWORK_CHECK_OPERATOR);

			if($v_res_network_count->v_dto_network_count->i_count != 0)
			{
				$v_dto_common_inputerror = new dto_common_inputerror();
				$v_dto_common_inputerror->s_col_name = "s_enabled_flag";
				$v_dto_common_inputerror->s_error_msg = str_replace('%param1', 'オペレータ', ERROR_NOT_CHANGE);
				array_push($a_msg, $v_dto_common_inputerror);

				$b_enabled_flag = true;
			}
		}

		return $a_msg;
	}


	/**
	 * レスポンスに値をセット
	 * @param req_base $v_req_base		リクエスト
	 * @param unknown $a_msg
	 */
	private function _make_response(req_base $v_req_base, $a_msg)
	{
		$v_dto_network_confirm = $v_req_base->v_dto_network_confirm;

		$v_dto_network_detail = new dto_network_detail();
		$v_dto_network_detail->s_network_id = $v_dto_network_confirm->s_network_id;
		$v_dto_network_detail->s_network_name = $v_dto_network_confirm->s_network_name;
		$v_dto_network_detail->s_enabled_flag = $v_dto_network_confirm->s_enabled_flag;
		$v_dto_network_detail->s_enabled_name = $v_dto_network_confirm->s_enabled_name;
		$v_dto_network_detail->s_update_time = $v_dto_network_confirm->s_update_time;

		$v_res_network_detail = new res_network_detail();
		$v_res_network_detail->v_dto_network_detail = $v_dto_network_detail;
		$v_res_network_detail->v_dto_rescommon->a_error_msg = $a_msg;

		return $v_res_network_detail;
	}


	/**
	 * セッションをセット
	 * @param res_base $v_res_base	レスポンス
	 */
	protected function set_session(res_base $v_res_base)
	{
		Session::set(SESSION_NETWORK_DETAIL, $v_res_base);
	}


	/**
	 * 表示するViewを返す
	 * @see process_base::get_view_name()
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base = null)
	{
		// エラーがあったとき用に、自画面を返す
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