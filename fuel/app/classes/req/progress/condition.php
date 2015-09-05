<?php

/**
 * 区分：検索
 * 画面：検索（進捗）
 * 概要：検索条件リクエスト
 */
class req_progress_condition extends req_listbase
{

	/**
	 * @var 検索条件DTO
	 */
	public $v_dto_progress_condition;


	public function req_progress_condition()
	{
		parent::req_listbase();
		$this->v_dto_progress_condition = new dto_progress_condition();
	}
}
