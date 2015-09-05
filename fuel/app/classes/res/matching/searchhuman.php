<?php

/**
 * 区分：マッチング
 * 画面：xx
 * 概要：xx
 */
class res_matching_searchhuman extends res_listbase
{

	/**
	 * @var 検索結果行
	 */
	public $a_dto_matching_searchhumanrow;


	public function res_matching_searchhuman()
	{
		parent::res_listbase();
		$this->a_dto_matching_searchhumanrow = array();
	}
}
