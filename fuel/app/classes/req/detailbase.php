<?php

/**
 * 詳細系リクエストのSuperクラス
 */
class req_detailbase extends req_base
{

	/**
	 * @var 詳細系共通DTO
	 */
	public $v_dto_detailcommon;


	/**
	 * コンストラクタ
	 */
	public function req_detailbase()
	{
		parent::req_base();

		$this->v_dto_detailcommon = new dto_detailcommon();
	}
}