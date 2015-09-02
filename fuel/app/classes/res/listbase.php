<?php

/**
 * 一覧系レスポンスのSuperクラス
 */
class res_listbase extends res_base
{
	/**
	 * @var 一覧系共通DTO
	 */
	public $v_dto_listcommon;


	/**
	 * @var 一覧のヘッダ
	 */
	//public $v_dto_columnheader;


	/**
	 * コンストラクタ
	 */
	public function res_listbase()
	{
		parent::res_base();
		$this->v_dto_listcommon = new dto_listcommon();
	}
}