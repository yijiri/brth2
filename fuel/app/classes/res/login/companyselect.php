<?php

/**
 * 区分：xxx
 * 画面：ログイン
 * 概要：ログイン・ログアウト時のレスポンス
 */
class res_login_companyselect extends req_base
{
	/**
	 * @var 登録内容DTO
	 */
	public $v_dto_login_selectcondition;


	public function res_login_companyselect()
	{
		parent::req_base();
		$this->v_dto_login_selectcondition = new dto_login_selectcondition();
	}
}