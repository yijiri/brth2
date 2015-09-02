<?php

/**
 * 区分：PDF出力
 * 概要：PDFに出力する値(ヘッダ)
 */
class dto_pdf_header extends dto_base
{
	/**
	 * @var チャンネル番号
	 */
	public $s_channel_no;


	/**
	 * @var 依頼書作成日
	 */
	public $s_iraisho_create_date;


	/**
	 * @var 承認者会社名(甲)
	 */
	public $s_shonin_company_name_kou;


	/**
	 * @var 承認者電話番号(甲)
	 */
	public $s_shonin_tel_kou;


	/**
	 * @var 承認者FAX(甲)
	 */
	public $s_shonin_fax_kou;


	/**
	 * @var 承認者名(甲)
	 */
	public $s_shonin_user_name_kou;


	/**
	 * @var 承認者会社名(乙)
	 */
	public $s_shonin_company_name_otsu;


	/**
	 * @var 承認者電話番号(乙)
	 */
	public $s_shonin_tel_otsu;


	/**
	 * @var 承認者FAX(乙)
	 */
	public $s_shonin_fax_otsu;


	/**
	 * @var 承認者名(乙)
	 */
	public $s_shonin_user_name_otsu;


	/**
	 * @var 承認者会社名(丙)
	 */
	public $s_shonin_company_name_hei;


	/**
	 * @var 承認者電話番号(丙)
	 */
	public $s_shonin_tel_hei;


	/**
	 * @var 承認者FAX(丙)
	 */
	public $s_shonin_fax_hei;


	/**
	 * @var 承認者名(丙)
	 */
	public $s_shonin_user_name_hei;


	/**
	 * @var 番組名
	 */
	public $s_channel_name;


	/**
	 * @var 本サービス開始日
	 * @var 加入者向け有料サービス開始日
	 */
	public $s_broadcast_s_date;


	/**
	 * @var 受信機利用場所の住所
	 */
	public $s_headend_address;


	/**
	 * @var ヘッドエンド動作確認試験開始日
	 */
	public $s_lock_date;


	/**
	 * @var 加入者向け試験サービス開始日
	 */
	public $s_broadcast_t_date;

}