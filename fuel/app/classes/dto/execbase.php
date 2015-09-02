<?php

/**
 * 概要：UPDATEやINSERTの実行結果
 */
class dto_execbase extends dto_base
{
	/**
	 * @var 実行結果
	 */
	public $b_execute_flg;


	/**
	 * @var 実行モード(INSERT or UPDATE)
	 */
	public $s_mode;
}