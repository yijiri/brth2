<?php

require('fpdf/japanese.php');

/**
 * 依頼書PDF出力Superクラス
 */
class process_pdf_output extends process_base {

	/**
	 * コンストラクタ
	 * @param boolean $b_db_flg		true:DB接続あり
	 */
	public function process_pdf_output($b_db_flg = true){
		// 親のコンストラクタをコール
		parent::process_base($b_db_flg);
	}


	/**
	* 画面表示に関する処理を実行
	* @see process_base::process()
	*/
	protected function process(util_dbaccessor $v_util_dbaccessor, req_base $v_req_base)
	{
		// ヘッダ情報を取得
		$v_dto_pdf_header = $this->get_header_info();

		// 明細情報(本線機)を取得
		$v_dto_pdf_row_honsen = $this->get_honsen_row_info();

		// 明細情報(予備機)を取得
		$a_dto_pdf_row_yobi = $this->get_yobi_row_info();

		// PDF出力
		$this->_output_pdf($v_dto_pdf_header, $v_dto_pdf_row_honsen, $a_dto_pdf_row_yobi);

		// 画面表示をしないので、何も返さない
		return '';
	}


	/**
	 * ヘッダ情報を取得
	 * @return ヘッダ情報(dto_pdf_header)
	 */
	protected function get_header_info()
	{
		// Sessionからヘッダ情報を取得
	}


	/**
	 * 明細情報(本線機)を取得
	 * @return 明細情報(dto_pdf_row)
	 */
	protected function get_honsen_row_info()
	{
		// Sessionから明細情報を取得
	}


	/**
	 * 明細情報(予備機)を取得
	 * @return 明細情報(dto_pdf_rowの配列)
	 */
	protected function get_yobi_row_info()
	{
		// Sessionから明細情報を取得
	}


	/**
	 * PDFのデフォルトファイル名を取得
	 * @return ファイル名
	 */
	protected function get_file_name()
	{
	}


	/**
	 * PDF出力
	 */
	private function _output_pdf($v_dto_pdf_header, $v_dto_pdf_row_honsen, $a_dto_pdf_row_yobi)
	{
		// 左位置
		$i_x = 21;
		$i_y = 15;

		define("PDF_BIKO", "※システム参照");
		define("PDF_FONT_SIZE", "8");
		define("PDF_OPEN_FILE_NAME", "keyopen.pdf");

		// PDFのデフォルトファイル名を取得
		$s_file_name = $this->get_file_name();

		$pdf = new PDF_Japanese("L", "mm", "A4");
		$pdf->AddSJISFont();
		$pdf->SetMargins(0, 0, 0, 0);
		$pdf->SetLineWidth(0.4);
		$pdf->AddPage();

		$pdf->SetFont('SJIS');
		$pdf->SetFontSize(PDF_FONT_SIZE);

		$x = $pdf->GetX();

		// ヘッダ
		$pdf->SetXY($i_x, $i_y);
		$pdf->Write(8, util_str::change_str_for_pdf('オペレータ様→サプライヤー様→JDS'));
		$pdf->SetXY($i_x, $i_y + 6);
		$pdf->Cell(10, 5, util_str::change_str_for_pdf($v_dto_pdf_header->s_channel_no), 1, 0, 'C', 0);

		// 日付
		$pdf->SetXY($i_x + 225, $i_y);
		$pdf->Cell(30, 10, util_str::change_str_for_pdf($v_dto_pdf_header->s_iraisho_create_date), 0, 0, 'R', 0);

		// タイトル
		$pdf->SetXY(0, $i_y + 10);
		$pdf->SetFontSize(PDF_FONT_SIZE + 5);
		$pdf->Cell(297, 10, util_str::change_str_for_pdf('デジタルプログラムヘッドエンドサービス（i-HITSサービス）　鍵開け依頼書'), 0, 0, 'C', 0);

		// 甲
		$pdf->SetXY($i_x, $i_y + 24);
		$pdf->SetFontSize(PDF_FONT_SIZE);
		$pdf->Cell(180, 5, util_str::change_str_for_pdf('甲：　' .$v_dto_pdf_header->s_shonin_company_name_kou), 'B', 0, 'L', 0);

		$pdf->SetXY($i_x + 150, $i_y + 24);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('（オペレータ様）'), 0, 0, 'L', 0);

		$pdf->SetXY($i_x, $i_y + 32);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('TEL：' .$v_dto_pdf_header->s_shonin_tel_kou), 0, 0, 'L', 0);

		$pdf->SetXY($i_x + 35, $i_y + 32);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('FAX：' .$v_dto_pdf_header->s_shonin_fax_kou), 0, 0, 'L', 0);

		$pdf->SetXY($i_x + 70, $i_y + 32);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('連絡担当者：' .$v_dto_pdf_header->s_shonin_user_name_kou), 0, 0, 'L', 0);

		// 乙
		$pdf->SetXY($i_x, $i_y + 43);
		$pdf->Cell(180, 5, util_str::change_str_for_pdf('乙：　' .$v_dto_pdf_header->s_shonin_company_name_otsu), 'B', 0, 'L', 0);

		$pdf->SetXY($i_x + 150, $i_y + 43);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('（サプライヤ様）'), 0, 0, 'L', 0);

		$pdf->SetXY($i_x, $i_y + 51);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('TEL：' .$v_dto_pdf_header->s_shonin_tel_otsu), 0, 0, 'L', 0);

		$pdf->SetXY($i_x + 35, $i_y + 51);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('FAX：' .$v_dto_pdf_header->s_shonin_fax_otsu), 0, 0, 'L', 0);

		$pdf->SetXY($i_x + 70, $i_y + 51);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('連絡担当者：' .$v_dto_pdf_header->s_shonin_user_name_otsu), 0, 0, 'L', 0);

		// 丙
		$pdf->SetXY($i_x, $i_y + 62);
		$pdf->Cell(180, 5, util_str::change_str_for_pdf('丙：　'.$v_dto_pdf_header->s_shonin_company_name_hei), 'B', 0, 'L', 0);

		$pdf->SetXY($i_x + 150, $i_y + 62);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('（ＪＤＳ様）'), 0, 0, 'L', 0);

		$pdf->SetXY($i_x, $i_y + 70);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('TEL：'.$v_dto_pdf_header->s_shonin_tel_hei), 0, 0, 'L', 0);

		$pdf->SetXY($i_x + 35, $i_y + 70);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('FAX：'.$v_dto_pdf_header->s_shonin_fax_hei), 0, 0, 'L', 0);

		$pdf->SetXY($i_x + 70, $i_y + 70);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('連絡担当者：'.$v_dto_pdf_header->s_shonin_user_name_hei), 0, 0, 'L', 0);

		// 番組名
		$pdf->SetXY($i_x, $i_y + 82);
		$pdf->Cell(180, 5, util_str::change_str_for_pdf('番組名：　' .$v_dto_pdf_header->s_channel_name), 'B', 0, 'L', 0);

		// 本サービス開始
		$pdf->SetXY($i_x, $i_y + 93);
		$pdf->Cell(255, 5, util_str::change_str_for_pdf('本サービス開始日：　' .$v_dto_pdf_header->s_broadcast_s_date), 'B', 0, 'L', 0);

		$pdf->SetXY($i_x + 80, $i_y + 93);
		$pdf->Cell(150, 5, util_str::change_str_for_pdf('（※本サービス開始日とは視聴者への課金を開始する日、またはそれを準ずる日とします。）'), 0, 0, 'L', 0);

		$pdf->SetXY($i_x, $i_y + 101);
		$pdf->SetFontSize(PDF_FONT_SIZE -1);
		$pdf->Cell(250, 5, util_str::change_str_for_pdf('甲と乙は、丙が執り行う標記サービスにて乙の配信する番組を甲が受信開始するため、番組受信用の受信機の番号を下記のとおりに丙に連絡し、丙に対して受信機の鍵（スクランブル）開けを依頼します。'), 0, 0, 'L', 0);

		$pdf->SetXY($i_x, $i_y + 109);
		$pdf->SetFontSize(PDF_FONT_SIZE);
		$pdf->Cell(125, 5, util_str::change_str_for_pdf('甲　記入欄'), 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 125, $i_y + 109);
		$pdf->Cell(65, 5, util_str::change_str_for_pdf('乙　記入欄'), 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 190, $i_y + 109);
		$pdf->Cell(65, 5, util_str::change_str_for_pdf('丙　記入欄'), 1, 0, 'C', 0);

		$pdf->SetXY($i_x, $i_y + 114);
		$pdf->Cell(60, 5, util_str::change_str_for_pdf('受信機番号（TID）'), 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 60, $i_y + 114);
		$pdf->Cell(40, 5, util_str::change_str_for_pdf('鍵開け希望日'), 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 100, $i_y + 114);
		$pdf->Cell(25, 5, util_str::change_str_for_pdf('備考'), 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 125, $i_y + 114);
		$pdf->Cell(40, 5, util_str::change_str_for_pdf('サプライヤ確認日'), 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 125 + 40, $i_y + 114);
		$pdf->Cell(25, 5, util_str::change_str_for_pdf('備考'), 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 190, $i_y + 114);
		$pdf->Cell(40, 5, util_str::change_str_for_pdf('作業完了日'), 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 190 + 40, $i_y + 114);
		$pdf->Cell(25, 5, util_str::change_str_for_pdf('備考'), 1, 0, 'C', 0);

		// 本線機
		$pdf->SetXY($i_x, $i_y + 119);
		$pdf->Cell(10, 5, util_str::change_str_for_pdf('本線機'), 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 10, $i_y + 119);
		$pdf->Cell(50, 5, util_str::change_str_for_pdf($v_dto_pdf_row_honsen->s_t_id), 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 60, $i_y + 119);
		$pdf->Cell(40, 5, util_str::change_str_for_pdf($v_dto_pdf_row_honsen->s_lock_date), 1, 0, 'C', 0);

		if ($v_dto_pdf_row_honsen->s_lock_biko != "")
		{
			$pdf->SetXY($i_x + 100, $i_y + 119);
			$pdf->Cell(25, 5, util_str::change_str_for_pdf(PDF_BIKO), 1, 0, 'C', 0);
		}

		$pdf->SetXY($i_x + 125, $i_y + 119);
		$pdf->Cell(40, 5, util_str::change_str_for_pdf($v_dto_pdf_row_honsen->s_shonin_date_otsu), 1, 0, 'C', 0);

		if ($v_dto_pdf_row_honsen->s_biko_otsu != "")
		{
			$pdf->SetXY($i_x + 125 + 40, $i_y + 119);
			$pdf->Cell(25, 5, util_str::change_str_for_pdf(PDF_BIKO), 1, 0, 'C', 0);
		}

		$pdf->SetXY($i_x + 190, $i_y + 119);
		$pdf->Cell(40, 5, util_str::change_str_for_pdf($v_dto_pdf_row_honsen->s_shonin_date_hei), 1, 0, 'C', 0);

		if ($v_dto_pdf_row_honsen->s_biko_hei != "")
		{
			$pdf->SetXY($i_x + 190 + 40, $i_y + 119);
			$pdf->Cell(25, 5, util_str::change_str_for_pdf(PDF_BIKO), 1, 0, 'C', 0);
		}

		// 予備機(枠線のみ)
		$pdf->SetXY($i_x + 10, $i_y + 124);
		$pdf->Cell(50, 25, '', 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 60, $i_y + 124);
		$pdf->Cell(40, 25, '', 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 100, $i_y + 124);
		$pdf->Cell(25, 25, '', 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 125, $i_y + 124);
		$pdf->Cell(40, 25, '', 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 165, $i_y + 124);
		$pdf->Cell(25, 25, '', 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 190, $i_y + 124);
		$pdf->Cell(40, 25, '', 1, 0, 'C', 0);

		$pdf->SetXY($i_x + 230, $i_y + 124);
		$pdf->Cell(25, 25, '', 1, 0, 'C', 0);

		// 予備機
		$pdf->SetXY($i_x, $i_y + 124);
		$pdf->Cell(10, 25, util_str::change_str_for_pdf('予備機'), 1, 0, 'C', 0);

		// 予備機：備考
		$b_biko_kou = false;
		$b_biko_otsu = false;
		$b_biko_hei = false;
		foreach ($a_dto_pdf_row_yobi as $v_dto_pdf_row)
		{
			if ($v_dto_pdf_row->s_lock_biko != "") {
				$b_biko_kou = true;
			}
			if ($v_dto_pdf_row->s_biko_otsu != "") {
				$b_biko_otsu = true;
			}
			if ($v_dto_pdf_row->s_biko_hei != "") {
				$b_biko_hei = true;
			}
		}
		if ($b_biko_kou === true) {
			$pdf->SetXY($i_x + 100, $i_y + 124);
			$pdf->Cell(25, 5, util_str::change_str_for_pdf(PDF_BIKO), 0, 0, 'C', 0);
		}

		if ($b_biko_otsu === true) {
			$pdf->SetXY($i_x + 125 + 40, $i_y + 124);
			$pdf->Cell(25, 5, util_str::change_str_for_pdf(PDF_BIKO), 0, 0, 'C', 0);
		}

		if ($b_biko_hei === true) {
			$pdf->SetXY($i_x + 190 + 40, $i_y + 124);
			$pdf->Cell(25, 5, util_str::change_str_for_pdf(PDF_BIKO), 0, 0, 'C', 0);
		}

		// 予備機：備考以外のデータ
		for($i=0; $i<4; $i++)
		{
			if (count($a_dto_pdf_row_yobi) > $i) {
				$v_dto_pdf_row = $a_dto_pdf_row_yobi[$i];

				// 甲
				$pdf->SetXY($i_x + 10, $i_y + (124 + $i*5));
				$pdf->Cell(50, 5, util_str::change_str_for_pdf($v_dto_pdf_row->s_t_id), 0, 0, 'C', 0);

				$pdf->SetXY($i_x + 60, $i_y + (124 + $i*5));
				$pdf->Cell(40, 5, util_str::change_str_for_pdf($v_dto_pdf_row->s_lock_date), 0, 0, 'C', 0);

				// 乙
				$pdf->SetXY($i_x + 125, $i_y + (124 + $i*5));
				$pdf->Cell(40, 5, util_str::change_str_for_pdf($v_dto_pdf_row->s_shonin_date_otsu), 0, 0, 'C', 0);

				// 丙
				$pdf->SetXY($i_x + 190, $i_y + (124 + $i*5));
				$pdf->Cell(40, 5, util_str::change_str_for_pdf($v_dto_pdf_row->s_shonin_date_hei), 0, 0, 'C', 0);
			} else {
				break;
			}
		}

		// 5件以上あるときは「他xx件」を表示
		if (count($a_dto_pdf_row_yobi) >= 5) {
			$i_cnt = count($a_dto_pdf_row_yobi) - 4;
			$pdf->SetXY($i_x + 10, $i_y + 144);
			$pdf->Cell(50, 5, util_str::change_str_for_pdf("※他 " .$i_cnt." 件"), 0, 0, 'C', 0);
		}

		$pdf->SetXY($i_x, $i_y + 149);
		$pdf->SetFontSize(7);
		$pdf->Cell(250, 5, util_str::change_str_for_pdf('※受信機番号：上記の各チャンネルを受信するために甲に設置してある受信機の12桁の数字を入力してください'), 0, 0, 'L', 0);

		$pdf->SetXY($i_x, $i_y + 152);
		$pdf->Cell(250, 5, util_str::change_str_for_pdf('※予備機：通常サービスに利用している「本線機」に支障が出た場合に、一時的に利用する受信機'), 0, 0, 'L', 0);

		$pdf->SetXY($i_x, $i_y + 160);
		$pdf->SetFontSize(PDF_FONT_SIZE);
		$pdf->Cell(250, 5, util_str::change_str_for_pdf('受信機利用場所の住所：'), 0, 0, 'L', 0);

		$pdf->SetXY($i_x + 35, $i_y + 160);
		$pdf->Cell(250, 5, util_str::change_str_for_pdf($v_dto_pdf_header->s_headend_address), 0, 0, 'L', 0);

		$pdf->SetXY($i_x, $i_y + 168);
		$pdf->SetFontSize(PDF_FONT_SIZE);
		$pdf->Cell(250, 5, util_str::change_str_for_pdf('依頼区分：'), 0, 0, 'L', 0);

		$pdf->SetXY($i_x + 35, $i_y + 168);
		$pdf->Cell(250, 5, util_str::change_str_for_pdf('新規番組供給契約締結による鍵開け依頼'), 0, 0, 'L', 0);

		// 備考
		$pdf->SetXY($i_x + 140, $i_y + 153);
		$pdf->Cell(90, 4, util_str::change_str_for_pdf('＜備考＞'), 'LRT', 0, 'L', 0);

		$pdf->SetXY($i_x + 140, $i_y + 157);
		$pdf->Cell(90, 4, util_str::change_str_for_pdf('今後のスケジュール'), 'LR', 0, 'L', 0);

		$pdf->SetXY($i_x + 140, $i_y + 161);
		$pdf->Cell(90, 4, util_str::change_str_for_pdf('・ヘッドエンド動作確認試験開始日'), 'L', 0, 'L', 0);

		$pdf->SetXY($i_x + 140, $i_y + 165);
		$pdf->Cell(90, 4, util_str::change_str_for_pdf('・加入者向け試験サービス開始日'), 'L', 0, 'L', 0);

		$pdf->SetXY($i_x + 140, $i_y + 169);
		$pdf->Cell(90, 4, util_str::change_str_for_pdf('・加入者向け有料サービス開始日'), 'LB', 0, 'L', 0);

		$pdf->SetXY($i_x + 140 + 60, $i_y + 161);
		$pdf->Cell(30, 4, util_str::change_str_for_pdf($v_dto_pdf_header->s_lock_date), 'R', 0, 'L', 0);

		$pdf->SetXY($i_x + 140 + 60, $i_y + 165);
		$pdf->Cell(30, 4, util_str::change_str_for_pdf($v_dto_pdf_header->s_broadcast_t_date), 'R', 0, 'L', 0);

		$pdf->SetXY($i_x + 140 + 60, $i_y + 169);
		$pdf->Cell(30, 4, util_str::change_str_for_pdf($v_dto_pdf_header->s_broadcast_s_date), 'RB', 0, 'L', 0);

		$pdf->SetXY($i_x + 245, $i_y + 169);
		$pdf->Cell(10, 4, util_str::change_str_for_pdf('以上'), 0, 0, 'R', 0);

		// TODO:デバック用(何も聞かれずにファイル出力する)
		//$pdf->Output('C:\Users\musui\Desktop\doc.pdf', 'F');
		$pdf->Output($s_file_name, 'D');

	}


	/**
	 * 実行してよい権限を返す
	 * @see process_base::get_auth()
	 */
	protected function get_auth()
	{
		return '1111';
	}

}