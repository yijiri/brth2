<?php

/**
 * 概要：共通DTO
 */
class dto_common extends dto_base
{
	/**
	 * @var ログインID
	 */
	public $s_login_id;


	/**
	 * @var ログインユーザ名
	 */
	public $s_login_name;


	/**
	 * @var 所属会社種別
	 */
	public $s_company_type;


	/**
	 * @var 所属会社ID
	 */
	public $s_company_id;


	/**
	 * @var 所属会社名
	 */
	public $s_company_name;


	/**
	 * @var ログインフラグ
	 */
	public $b_login_flg;


	/**
	 * @var パンくず配列
	 */
	public $a_breadcrumb;
}