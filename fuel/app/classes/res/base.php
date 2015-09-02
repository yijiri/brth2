<?php

/**
 * レスポンスのSuperクラス
 */
class res_base
{
	public $v_dto_rescommon;

	/**
	 * コンストラクタ
	 */
	public function res_base()
	{
		$this->v_dto_rescommon = new dto_rescommon();
		$this->v_dto_rescommon->a_error_msg = array();
	}
}