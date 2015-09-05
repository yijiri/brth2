<?php

/**
 * 区分：ネットワーク管理
 * 画面：ネットワーク管理
 * 概要：詳細情報取得レスポンス
 */

class res_network_detail extends res_detailbase
{
	/**
	 * @var 表示する明細
	 * @param dto_network_detail $v_dto_network_detail
	 */
	public $v_dto_network_detail;


	/**
	 * コンストラクタ
	 */
	public function res_network_detail()
	{
		parent::res_detailbase();
		$this->v_dto_network_detail = new dto_network_detail();
	}
}