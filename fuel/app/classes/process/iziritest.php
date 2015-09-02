<?php

/**
 * 依頼書PDF出力のサンプル
 */
class process_iziritest extends process_pdf_output {

	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_iziritest($b_db_flg = true){
		// 親のコンストラクタをコール
		parent::process_pdf_output($b_db_flg);
	}


	/**
	 * ヘッダ情報を取得
	 * @return ヘッダ情報(dto_pdf_header)
	 */
	protected function get_header_info()
	{
		$v_dto_pdf_header = new dto_pdf_header();

		// TODO:ほんとはSessionから詰め替えてください！！！！

		$v_dto_pdf_header->s_channel_no = "243";
		$v_dto_pdf_header->s_iraisho_create_date = "2015年5月15日";

		$v_dto_pdf_header->s_shonin_company_name_kou = "ああああああああああああああああああああああああああああああ";
		$v_dto_pdf_header->s_shonin_tel_kou = "0120-333-999";
		$v_dto_pdf_header->s_shonin_fax_kou = "0120-333-222";
		$v_dto_pdf_header->s_shonin_user_name_kou = "ああああああああああああああああああああああああああああああ";

		/* $v_dto_pdf_header->s_shonin_company_name_kou = "株式会社ニューメディア";
		$v_dto_pdf_header->s_shonin_tel_kou = "0120-333-999";
		$v_dto_pdf_header->s_shonin_fax_kou = "0120-333-222";
		$v_dto_pdf_header->s_shonin_user_name_kou = "中川宏生";
		 */
		$v_dto_pdf_header->s_shonin_company_name_otsu = "ウォルト・ディズニー・ジャパン株式会社";
		$v_dto_pdf_header->s_shonin_tel_otsu = "0120-111-999";
		$v_dto_pdf_header->s_shonin_fax_otsu = "0120-222-222";
		$v_dto_pdf_header->s_shonin_user_name_otsu = "柳沢雅之";

		$v_dto_pdf_header->s_shonin_company_name_hei = "日本デジタル配信";
		$v_dto_pdf_header->s_shonin_tel_hei = "0120-555-999";
		$v_dto_pdf_header->s_shonin_fax_hei = "0120-666-222";
		$v_dto_pdf_header->s_shonin_user_name_hei = "藁谷隆直";

		$v_dto_pdf_header->s_channel_name = "ディズニーXD";
		$v_dto_pdf_header->s_broadcast_s_date = "2015年6月1日";

		$v_dto_pdf_header->s_headend_address = "山形県米沢市春日4-2-75";

		$v_dto_pdf_header->s_lock_date = "2015年5月18日";
		$v_dto_pdf_header->s_broadcast_t_date = "2015年5月19日";
		$v_dto_pdf_header->s_broadcast_s_date = "2015年5月20日";

		return $v_dto_pdf_header;
	}


	/**
	 * 明細情報(本線機)を取得
	 * @return 明細情報(dto_pdf_row)
	 */
	protected function get_honsen_row_info()
	{
		// TODO:ほんとはSessionから詰め替えてください！！！！

		$v_dto_pdf_row = new dto_pdf_row();
		$v_dto_pdf_row->s_t_id = "549692002086";
		$v_dto_pdf_row->s_lock_date = "2015年5月18日";
		$v_dto_pdf_row->s_lock_biko = "xxxx";
		$v_dto_pdf_row->s_shonin_date_otsu = "2015年5月21日";
		$v_dto_pdf_row->s_biko_otsu = "xxxx";
		$v_dto_pdf_row->s_shonin_date_hei = "2015年5月2日";
		$v_dto_pdf_row->s_biko_hei = "xxxx";

		return $v_dto_pdf_row;
	}


	/**
	 * 明細情報(予備機)を取得
	 * @return 明細情報(dto_pdf_rowの配列)
	 */
	protected function get_yobi_row_info()
	{
		$a_dto_pdf_row = array();

		for ($i=0; $i<6; $i++)
		{
			$v_dto_pdf_row = new dto_pdf_row();
			$v_dto_pdf_row->s_t_id = "549692002086";
			$v_dto_pdf_row->s_lock_date = "2015年5月18日";
			$v_dto_pdf_row->s_lock_biko = "xxxx";
			$v_dto_pdf_row->s_shonin_date_otsu = "2015年5月21日";
			$v_dto_pdf_row->s_biko_otsu = "xxxx";
			$v_dto_pdf_row->s_shonin_date_hei = "2015年5月22日";
			$v_dto_pdf_row->s_biko_hei = "xxxx";

			array_push($a_dto_pdf_row, $v_dto_pdf_row);
		}

		return $a_dto_pdf_row;
	}


	/**
	 * PDFのデフォルトファイル名を取得
	 * @return ファイル名
	 */
	protected function get_file_name()
	{
		return PDF_OPEN_FILE_NAME;
	}
}