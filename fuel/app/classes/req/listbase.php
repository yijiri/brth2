<?php

/**
 * 一覧系リクエストのSuperクラス
 */
class req_listbase extends req_base
{
	/**
	 * @var 一覧系共通DTO
	 */
	public $v_dto_listcommon;


	/**
	 * コンストラクタ
	 */
	public function req_listbase()
	{
		parent::req_base();

		$this->v_dto_listcommon = new dto_listcommon();
	}
}