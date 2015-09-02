<?php
/**
 * 区分：ログイン
 * 画面：ログイン
 */
class Controller_Login extends Controller_Base
{

	/**
	 * 初期表示
	 * @return Response
	 */
	public function action_index()
	{
		try {
			// セッション破棄
			Session::destroy();

			$db = new util_dbaccessor();
			$conn = $db->create_connection();
			var_dump($conn);


			return "ブライソン2";

			// テンプレートを使用しないために、Responseを自作
			//return new Response(View::forge(VIEW_LOGIN, null));

		} catch (\Exception $e) {
			// エラー画面に遷移
			$this->setActionError(get_class($this), Request::active()->action);
		}
	}


	/**
	 * [ログイン]ボタンクリック
	 * @return Response
	 */
	public function action_login()
	{
	}


	/**
	 * [ログアウト]ボタンクリック
	 */
	public function action_logout()
	{
		/*
		try {
			// ログイン情報更新用のリクエストを作成
			$v_req_login_infoexec = new req_login_infoexec();
			$v_req_login_infoexec->v_dto_login_infoexeccondition->i_history_type = HISTORY_TYPE_LOGOUT;

			// プロセス実行
			$v_process_login_logout = new process_login_logout(true, DB_UPDATE);
			$s_view_name = $v_process_login_logout->execute_process($v_req_login_infoexec);

			$this->set_view($s_view_name);
		} catch (\Exception $e) {
			// エラー画面に遷移
			$this->setActionError(get_class($this), Request::active()->action);
		}
		*/
	}
}


