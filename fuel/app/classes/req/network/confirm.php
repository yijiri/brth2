<?php

/**
 * 区分：ネットワーク管理
 * 画面：ネットワーク管理(確認)
 * 概要：入力内容確認リクエスト
 */
class req_network_confirm extends req_detailbase
{

	/**
	 * @var 確認用に画面に表示する値＆DBに登録するのに必要な値
	 * @param dto_network_confirm $v_dto_network_confirm
	 */
	public $v_dto_network_confirm;


	public function req_network_confirm()
	{
		parent::req_detailbase();
		$v_dto_network_confirm = new dto_network_confirm();
	}
}