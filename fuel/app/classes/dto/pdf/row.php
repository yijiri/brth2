<?php

/**
 * 区分：PDF出力
 * 概要：PDFに出力する値(明細)
 */
class dto_pdf_row extends dto_base
{
	/**
	 * @var TID
	 */
	public $s_t_id;


	/**
	 * @var 鍵開け希望日
	 */
	public $s_lock_date;


	/**
	 * @var 備考(甲)
	 */
	public $s_lock_biko;


	/**
	 * @var サプライヤ確認日
	 */
	public $s_shonin_date_otsu;


	/**
	 * @var 備考(乙)
	 */
	public $s_biko_otsu;


	/**
	 * @var 作業完了日
	 */
	public $s_shonin_date_hei;


	/**
	 * @var 備考(丙)
	 */
	public $s_biko_hei;
}