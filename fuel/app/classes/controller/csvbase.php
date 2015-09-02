<?php

use Fuel\Core\Controller_Rest;

/**
 * 概要：CSV出力のSuperクラス
 */
class Controller_Csvbase extends Controller_Rest
{

	public function get_csv()
	{
		// 出力データ
		$a_header = $this->get_headerinfo();
		$a_rec = $this->get_csvdata();
		array_unshift($a_rec,$a_header);

		$s_filename = $this->get_filename();
		$this->response->set_header('Content-Disposition', 'attachment; filename=' .$s_filename);
		$this->response($a_rec);
	}


	/**
	 * 出力するCSVのファイル名を取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_filename()
	{
	}


	/**
	 * CSVに出力するデータの列情報を取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_headerinfo()
	{
	}

	/**
	 * CSVに出力するデータを取得
	 * 継承先でオーバーライドされる
	 */
	protected function get_csvdata()
	{
	}


	/**
	 * ヘッダを出力するかどうかのフラグを取得。
	 * デフォルトはtrue(出力)を返すので、ヘッダを出力したくない場合は、オーバーライドしてfalseを返す。
	 * @return boolean
	 */
	protected function get_header_flg()
	{
		return true;
	}
}