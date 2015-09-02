<?php

/**
 * 区分：ログイン
 * 画面：ログイン
 * 概要：ログインプロセス
 */
class req_login extends req_base
{

	/**
	 * @var DTO
	 */
	public $v_dto_login_selectcondition;

	public function req_login()
	{
		parent::req_base();
		$this->v_dto_login_selectcondition = new dto_login_selectcondition();
	}
}