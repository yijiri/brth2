<?php

/**
 * 概要：一覧系共通DTO
 */
class dto_listcommon extends dto_base
{
	/**
	 * @var 全件数
	 */
	public $l_rec_num = 0;


	/**
	 * @var 1ページの表示件数
	 */
	public $i_display_num = DEFAULT_NUM;


	/**
	 * @var 現在ページNo
	 */
	public $i_current_page = 1;


	/**
	 * @var 全ページ数
	 */
	public $i_page_num = 0;
}