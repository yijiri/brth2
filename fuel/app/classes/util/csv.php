<?php

/**
 * CSV
 */
class util_csv
{
	/**
	 * CSVに出力する用にデータを整形する
	 * @param unknown $a_data			CSVに出力する
	 * @param unknown $a_header			ヘッダ情報
	 * @param unknown $b_header_flg		ヘッダを出力するか(true:出力する)
	 * @return CSCVに出力するデータの配列
	 */
	public static function make_csv($a_data, $a_header, $b_header_flg)
	{

		$a_recs = array();

		// ヘッダ
/* 		$a_csvheader = array();
		for ($j=0; $j<count($a_header); $j++)
		{
			$v_dto_columninfo = $a_header[$j];
			$key = $v_dto_columninfo->s_id;

			// 文字コード変換
			$s_str = util_dbaccessor::get_decode_data($v_dto_columninfo->s_title);
			array_push($a_csvheader, $s_str);
		} */

		// ヘッダを出力するなら配列にpush
		if ($b_header_flg === true)
		{
			//array_push($a_recs, $a_csvheader);
			array_push($a_recs, $a_header);
		}

		// レコード
		for ($i=0; $i<count($a_data); $i++)
		{
			$v_dto_base = $a_data[$i];

			$a_rec = array();
			for ($j=0; $j<count($a_header); $j++)
			{
				/* $v_dto_columninfo = $a_header[$j];
				$key = $v_dto_columninfo->s_id;

				// 文字コード変換
				$s_str = util_dbaccessor::get_decode_data($v_dto_base->$key);
				array_push($a_rec, $s_str); */
			}

			array_push($a_recs, $a_rec);
		}

		return $a_recs;
	}
}