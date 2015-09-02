<?php
/**
 * 区分：ログイン
 * 画面：ログイン
 */
class Controller_Login_Company extends Controller_Base
{

	/**
	 * [選択]ボタン
	 */
	public function action_select()
	{
		try {
			// リクエストテスト
			$v_req_login_companyselect = new req_login_companyselect();

			// 画面で入力された値を取得
			$this->_get_input_param($v_req_login_companyselect);

			// プロセス実行
			$v_process_login_companyselect = new process_login_companyselect();
			$s_view_name = $v_process_login_companyselect->execute_process($v_req_login_companyselect);

			// TODO:ほんとは[ホーム]タブができたら、そっちを表示する。
			Response::redirect(VIEW_NETWORK_LIST);
			//Response::redirect($s_view_name);

		} catch (\Exception $e) {
			// エラー画面に遷移
			$this->setActionError(get_class($this), Request::active()->action);
		}
	}


	/**
	 * 画面で入力された値を取得
	 */
	private function _get_input_param(req_login_companyselect $v_req_login_companyselect)
	{
		// 検索条件DTO
		$v_dto_login_selectcondition = new dto_login_selectcondition();

		// 画面で入力された値を取得
		$a_input_param = Input::post();
		if ($a_input_param == null){return;}

		$v_dto_login_selectcondition->s_company_id = $a_input_param['s_company_id'];

		$v_req_login_companyselect->v_dto_login_selectcondition = $v_dto_login_selectcondition;
	}

}


