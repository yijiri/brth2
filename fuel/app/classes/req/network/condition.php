<?php

/**
 * 区分：検索
 * 画面：検索（ネットワーク）
 * 概要：検索条件リクエスト
 */
class req_network_condition extends req_listbase
{

	/**
	 * @var 検索条件DTO
	 */
	public $v_dto_network_condition;


	public function req_network_condition()
	{
		parent::req_listbase();
		$this->v_dto_network_condition = new dto_network_condition();
	}
}
