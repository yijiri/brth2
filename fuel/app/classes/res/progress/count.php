<?php

/**
 * 区分：ネットワーク管理
 * 概要：該当する件数を取得
 */
class res_network_count extends res_base
{

	/**
	 * @var 件数
	 */
	public $v_dto_network_count;


	/**
	 * コンストラクタ
	 */
	public function res_network_count()
	{
		parent::res_base();
		$this->v_dto_network_count = new dto_network_count();
	}
}
