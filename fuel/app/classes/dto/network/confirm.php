<?php

/**
 * 区分：ネットワーク管理
 * 画面：ネットワーク管理(確認)
 * 概要：
 */
class dto_network_confirm extends dto_base
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
	 * @var 有効無効名
	 */
	public $s_enabled_name;


	/**
	 * @var 更新時刻
	 */
	public $s_update_time;
}
