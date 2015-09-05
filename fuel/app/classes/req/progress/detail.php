<?php

/**
 * 区分：検索
 * 画面：検索（ネットワーク）
 * 概要：検索条件リクエスト
 */
class req_network_detail extends req_detailbase
{

	/**
	 * @var 画面で入力された値
	 * @param dto_network_detailcondition $v_dto_network_detailcondition
	 */
	public $v_dto_network_detailcondition;


	public function req_network_detail()
	{
		parent::req_detailbase();
		$this->v_dto_network_detailcondition = new dto_network_detailcondition();
	}
}
