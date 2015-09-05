<?php

/**
 * 区分：明細
 * 画面：ネットワーク
 * 概要：登録、更新用レスポンス
 */
class res_network_exec extends res_base
{
	/**
	 * @var 実行結果
	 * @param dto_network_exec $v_dto_network_exec
	 */
	public $v_dto_network_exec;


	/**
	 * @var 登録・変更画面で入力された値
	 * @param dto_network_execcondition $dto_network_execcondition
	 */
	public $v_dto_network_execcondition;


	/**
	 * コンストラクタ
	 */
	public function res_network_exec()
	{
		parent::res_base();
		$this->v_dto_network_exec = new dto_network_exec();
	}
}
