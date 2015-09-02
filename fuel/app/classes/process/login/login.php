<?php

/**
 * 区分：ログイン
 * 画面：ログイン
 * 概要：初期データ取得プロセス
 */
class process_login_login extends process_base {
	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_login_login($b_db_flg = true) {
		// 親のコンストラクタをコール
		parent::process_base($b_db_flg);
	}


	/**
	* プロセスを実行（画面に表示するレコードを取得してセッションにつめる）
	* @param util_db	$v_util_db		DB接続
	* @param req_base	$v_req			画面リクエスト
	* @return 遷移先の画面
	*/
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
		// セッション削除
 		Session::delete(SESSION_LOGIN);

		// ログイン認証プロセス
		$v_process_login_auth = new process_login_auth();
		$s_view_name = $v_process_login_auth->execute_process($v_req_base, $v_util_dbaccessor);

		$v_dto_common = util_sessionaccessor::get_session(SESSION_COMMON);
		if ($v_dto_common->s_login_id != '')
		{
			// ログインできるかチェック
			$s_error_msg = $this->_login_check($v_dto_common);
			if ($s_error_msg != '')
			{
				$v_res_base = new res_login();
				$a_error_msg = array();
				array_push($a_error_msg, $s_error_msg);
				$v_res_base->v_dto_rescommon->a_error_msg = $a_error_msg;
				$v_res_base->v_dto_login_selectcondition->s_login_id = $v_req_base->v_dto_login_selectcondition->s_login_id;
				Session::set(SESSION_LOGIN, $v_res_base);
				if ($s_error_msg == ERROR_LOGIN){
					// セッション削除
					Session::delete(SESSION_COMMON);
				}
				// パスワード変更エラーのときは、パスワード画面用のセッションも作成する
				if ($s_error_msg == ERROR_UPDATE_PASSWORD)
				{
					// ログイン不可状態をセット
					$v_dto_common->b_login_flg = false;

					// パスワード画面用セッション
					$v_res_password_exec = new res_password_exec();
					$a_error_msg = array();
					array_push($a_error_msg, $s_error_msg);
					$v_res_password_exec->v_dto_rescommon->a_error_msg = $a_error_msg;
					Session::set(SESSION_PASSWORD_EDIT, $v_res_password_exec);

					// 共通DTOセッション
					Session::set(SESSION_COMMON, $v_dto_common);
				}

				return VIEW_LOGIN;
			}
		} else {
			// データが取得できなかったので、ログインできない
			$v_res_base = new res_login();
			$a_error_msg = array();
			array_push($a_error_msg, ERROR_LOGIN);
			$v_res_base->v_dto_rescommon->a_error_msg = $a_error_msg;
			$v_res_base->v_dto_login_selectcondition->s_login_id = $v_req_base->v_dto_login_selectcondition->s_login_id;
			Session::set(SESSION_LOGIN, $v_res_base);
			return VIEW_LOGIN;
		}

		// ログインレスポンス用セッション
		Session::set(SESSION_LOGIN, new res_base());

		return $this->get_view_name($v_req_base);
	}


	/**
	 * ログインが可能かをチェックする
	 * @param 	dto_common	$v_dto_common		共通DTO
	 */
	private function _login_check(dto_common $v_dto_common)
	{
	/*
		// IPフィルタ
		$v_res_ipfilter = util_sessionaccessor::get_session(SESSION_LOGIN_IPFILTER);
		$a_dto_ipfilterrow = $v_res_ipfilter->a_dto_ipfilterrow;

		if ($s_ip == '')
		{
			return ERROR_IPADDRESS;
		}

		$b_ipfilter_flg = true;
		$s_ip = util_ip::convert_ip2hex($s_ip);
		foreach ($a_dto_ipfilterrow as $v_dto_ipfilterrow)
		{
			if ($v_dto_ipfilterrow->s_ipstart <= $s_ip && $v_dto_ipfilterrow->s_ipend >= $s_ip)
			{
				$b_ipfilter_flg = true;
				break;
			} else {
				$b_ipfilter_flg = false;
			}
		}

		if ($b_ipfilter_flg === false)
		{
			return ERROR_LOGIN;
		}

		// 最後にパスワードを更新して90日経過していないかチェック
		$d_pwupt_date = $v_dto_common->s_pwupt_date;
		$d_pwupt_date90 = date("Y-m-d", strtotime($d_pwupt_date. ' +90 day'));
		if (strtotime(date('Y-m-d')) > strtotime($d_pwupt_date90))
		{
			return ERROR_UPDATE_PASSWORD;
		}

	*/
		return '';
	}


	/**
	 * 表示するViewの名前を返す
	 * @param req_base		$v_req_base		リクエスト
	 * @param res_base		$v_res_base		レスポンス
	 * @return 表示するViewの名前)
	 */
	protected function get_view_name(req_base $v_req_base, res_base $v_res_base =null)
	{
		return VIEW_TOP_MAIN;
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
