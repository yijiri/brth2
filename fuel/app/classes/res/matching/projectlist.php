<?php

/**
 * 区分：マッチング
 * 画面：xx
 * 概要：xx
 */
class res_matching_projectlist extends req_listbase
{

	/**
	 * @var 検索結果行
	 */
	public $a_dto_matching_projectrow;


	public function res_matching_projectlist()
	{
		parent::req_listbase();
		$this->a_dto_matching_projectrow = array();
	}
}
