<?php

/**
 * 概要：入力チェックエラーの情報
 */
class dto_common_inputerror
{

	/**
	 * @var エラーになった項目の名前(viewのコントロールの名前)
	 */
	public $s_col_name;


	/**
	 * @var エラー内容
	 */
	public $s_error_msg;
}