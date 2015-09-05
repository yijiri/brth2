<?php

/**
 * 区分：登録更新
 * 画面：ネットワーク
 * 概要：登録・変更用リクエスト
 */
class req_network_exec extends req_base
{

	/**
	 * @var 画面で入力された値
	 * @param dto_network_execcondition $v_dto_network_execcondition
	 */
	public $v_dto_network_execcondition;


	public function req_network_exec()
	{
		parent::req_base();
		$this->v_dto_network_execcondition = new dto_network_execcondition();
	}
}