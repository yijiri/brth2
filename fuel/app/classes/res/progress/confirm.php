<?php

/**
 * 区分：ネットワーク管理
 * 画面：ネットワーク管理
 * 概要：確認画面用レスポンス
 */
class res_network_confirm extends res_base
{

	/**
	 * @var 登録・変更画面で入力された値
	 * @param dto_network_confirm $v_dto_network_confirm
	 */
	public $v_dto_network_confirm;


	/**
	 * コンストラクタ
	 */
	public function res_network_confirm()
	{
		parent::res_base();
		$this->v_dto_network_confirm = new dto_network_confirm();
	}
}
