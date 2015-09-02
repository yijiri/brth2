<?php

/**
 *  概要：全ControllerのSuperクラス
 */
class Controller_Base extends Controller_Template
{

	public function before()
	{
		parent::before();

		$this->template->menu = View::forge('menu');
		$this->template->header = View::forge('header');
		$this->template->footer = View::forge('footer');
	}

	public function after($response)
	{
		$response = parent::after($response);
		return $response;
	}


	/**
	 * コンテンツにViewを出力
	 * @param unknown $s_view_name	Viewの名前
	 */
	protected function set_view($s_view_name)
	{
		if ($s_view_name == '')
		{
			$v_dto_error = new dto_error();
			$v_dto_error->s_error_msg = ERROR_VIEW;
			Session::delete(SESSION_COMMON);
			Session::set(SESSION_ERROR, $v_dto_error);
			$s_view_name = VIEW_ERROR;
		}
		$this->template->content = View::forge($s_view_name);
	}


	/**
	 * 画面IDを取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_display_id()
	{
	}


	/**
	 * パンくずをセット
	 * 継承先でオーバーライドされる
	 */
	protected function set_breadcrumb()
	{
	}


	/**
	 * 画面IDを取得
	 * (区分のメイン画面。画面自体は一覧画面と同じだけど、IDだけ変える)
	 * 継承先でオーバーライドされる
	 */
/* 	protected function get_main_display_id()
	{
	}
 */

	public function action_kubuntab()
	{
		try {
			// 選択された機能を取得
			$a_input_param = Input::post();
			$s_kubun_name = $a_input_param['kubun'];

			// セッションに選択された機能をセット
			$v_dto_common = util_sessionaccessor::get_session(SESSION_COMMON);
			$v_dto_common->s_current_kubun = $s_kubun_name;

			// 選択された機能タブに応じて画面遷移
			// TODO:メニュー分記載が必要
			switch ($s_kubun_name)
			{
				case KUBUN_LOGIN:
					Response::redirect(URL_LOGIN);
					break;
				case KUBUN_TOP:
					Response::redirect(URL_TOP_MAIN);
					break;
				case KUBUN_SEARCH:
					Response::redirect(URL_SEARCH_MAIN);
					break;
				case KUBUN_SUM:
					Response::redirect(URL_SUM_MAIN);
					break;
				case KUBUN_SHOP:
					Response::redirect(URL_STORE_MEMBER_SEQMAIN);
					break;
				case KUBUN_MANAGE_CREDIT:
					Response::redirect(URL_CREDIT_CREDIT_MAIN);
					break;
				case KUBUN_SETUP:
					Response::redirect(URL_SETTING_ACCOUNT_MAIN);
					break;
				case KUBUN_SYSTEM:
					Response::redirect(URL_SYSTEM_MEMBER_MAIN);
					break;
				default:
					$this->template->content = null;
			}
		} catch (\Exception $e) {
			// エラー画面に遷移
			$this->setActionError(get_class($this), Request::active()->action);
		}
	}


	/**
	 * システムエラー画面に遷移する
	 * @param unknown $s_class_name			クラス名
	 * @param unknown $s_action_name		アクション名
	 */
	protected function setActionError($s_class_name, $s_action_name)
	{
		$v_dto_error = new dto_error();
		$v_dto_error->s_error_msg = ERROR_ACTION;

		Log::error(ERROR_ACTION.('(クラス名：' .$s_class_name .'/アクション名：'. $s_action_name. ')'));
		Session::delete(SESSION_COMMON);
		Session::set(SESSION_ERROR, $v_dto_error);

		$this->set_view(VIEW_ERROR);
	}

}

