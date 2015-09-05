<?php

/**
 * 区分：検索
 * 画面：ネットワーク検索
 * 概要：検索条件DTO
 */
class dto_network_execcondition extends dto_base
{

	/**
	 * @var ネットワークID
	 */
	public $s_network_id;


	/**
	 * @var ネットワーク名
	 */
	public $s_network_name;


	/**
	 * @var 有効無効フラグ
	 */
	public $s_enabled_flag;


	/**
	 * @var 更新時刻
	 */
	public $s_update_time;
}
