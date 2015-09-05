<?php

/**
 * 区分：検索
 * 画面：検索（進捗）
 * 概要：一覧情報取得リクエスト
 */
class res_progress_resultlist extends res_listbase
{
	/**
	 * @var 検索条件
	 */
	public $v_dto_progress_condition;


	/**
	 * @var 検索結果
	 */
	public $a_dto_progress_resultrow;


	/**
	 * コンストラクタ
	 */
	public function res_progress_resultlist()
	{
		parent::res_listbase();
		$this->v_dto_progress_condition = new dto_progress_condition();
	}
}
