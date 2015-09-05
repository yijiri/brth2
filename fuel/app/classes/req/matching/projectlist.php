<?php

/**
 * 区分：マッチング
 * 画面：xx
 * 概要：xx
 */
class req_matching_projectlist extends req_listbase
{

	/**
	 * @var 検索条件DTO
	 */
	public $v_dto_matching_projectlistcondition;


	public function req_matching_projectlist()
	{
		parent::req_listbase();
		$this->v_dto_matching_projectlistcondition = new dto_matching_projectlistcondition();
	}
}
