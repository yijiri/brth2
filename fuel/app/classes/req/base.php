<?php

/**
 * リクエストのSuperクラス
 */
class req_base
{

	/**
	 * @var リクエスト共通DTO
	 */
	public $v_dto_reqcommon;


	/**
	 * @var パンくず情報
	 */
	public $v_dto_breadcrumb;


	/**
	 * コンストラクタ
	 */
	public function req_base()
	{
		$this->v_dto_reqcommon = new dto_reqcommon();
		$this->v_dto_breadcrumb = new dto_breadcrumb();
	}
}