<?php

/**
 * 区分：検索
 * 画面：検索結果
 * 概要：ネットワーク明細画面用DTO
 */

class dto_network_detail extends dto_base
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