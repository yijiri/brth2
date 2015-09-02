<?php

/**
 * 区分：検索
 * 画面：検索（ネットワーク）
 * 概要：一覧情報取得リクエスト
 */
class res_network_resultlist extends res_listbase
{
	/**
	 * @var 検索条件
	 */
	public $v_dto_network_condition;


	/**
	 * @var 検索結果
	 */
	public $a_dto_network_resultrow;


	/**
	 * コンストラクタ
	 */
	public function res_network_resultlist()
	{
		parent::res_listbase();
		$this->v_dto_network_condition = new dto_network_condition();
	}
}
