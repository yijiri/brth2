<?php

/**
 * コンボボックスの値をセット
 */
class res_common_combo extends res_listbase
{
	public $a_dto_common_comborow;

	/**
	 * コンストラクタ
	 */
	public function res_base()
	{
		$this->a_dto_common_comborow = array();
	}
}