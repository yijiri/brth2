<?php

/**
 * 区分：ログイン
 * 画面：ログイン
 * 概要：ログイン結果レスポンス
 */
class res_login extends res_base
{
	/**
	 * @var ログイン検索条件
	 */
	public $v_dto_login_selectcondition;

	/**
	 * @var 所属会社リスト
	 */
	public $a_dto_login_company;

	/**
	 * コンストラクタ
	 */
	public function res_login()
	{
		parent::res_base();
		$this->v_dto_login_selectcondition = new dto_login_selectcondition();
		$this->a_dto_login_company = array();
	}
}