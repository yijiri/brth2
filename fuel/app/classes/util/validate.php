<?php

/**
 * バリデートチェック
 */
class util_validate
{

	/**
	 * 未入力チェック
	 * @param unknown $s_val			入力された値
	 * @param unknown $s_col_name		項目名
	 */
	public static function check_empty($s_val, $s_col_name, $s_rownum = '')
	{
		$s_val = str_replace(' ', '', $s_val);
		$s_val = str_replace('　', '', $s_val);

		$s_error_msg = ERROR_VALIDATE_EMPTY;

		// TODO:これを削除するときは、引数からも消す
		/*
		if ($s_rownum != '')
		{
			$s_error_msg = $s_rownum .'行目：'. $s_error_msg;
		}
		*/

		if ($s_val == ''){
			return str_replace('%param1', $s_col_name, $s_error_msg);
		}

		return '';
	}


	/**
	 * 入力上限チェック
	 * @param unknown 	$s_val				入力された値
	 * @param unknown 	$i_limit_upper		上限バイト数
	 * @param unknown 	$s_col_name			列名
	 * @return mixed|string
	 */
	public static function check_limit_upper($s_val, $i_limit_upper, $s_col_name, $s_col_str, $s_rownum = '')
	{
		if ($s_val == ''){return '';}

		$s_error_msg = ERROR_VALIDATE_GENERAL;

		// TODO:これを削除するときは、引数からも消す
/* 		if ($s_rownum != '')
		{
			$s_error_msg = $s_rownum .'行目：'. $s_error_msg;
		} */

		//TODO:get_decode_dataでutf8からutf8に変える処理になっているので、正しくバイト数のチェックが行えない。古賀さんにどうするか確認する。
		//$s_val = util_dbaccessor::get_decode_data($s_val);
		$s_val = mb_convert_encoding($s_val, 'sjis', 'utf-8');

		if (strlen($s_val) > $i_limit_upper){
			$s_error_msg =  str_replace('%param1', $s_col_name, $s_error_msg);
			$s_error_msg =  str_replace('%param2', $s_col_str, $s_error_msg);
			return $s_error_msg;
		}

		return '';
	}


	/**
	 * 入力下限チェック
	 * @param unknown 	$s_val				入力された値
	 * @param unknown 	$i_limit_lower		下限バイト数
	 * @param unknown 	$s_col_name			列名
	 * @return mixed|string
	 */
	public static function check_limit_lower($s_val, $i_limit_lower, $s_col_name, $s_rownum = '')
	{
		if ($s_val == ''){return '';}

		$s_error_msg = ERROR_VALIDATE_LIMIT_LOWPER;
		if ($s_rownum != '')
		{
			$s_error_msg = $s_rownum .'行目：'. $s_error_msg;
		}
		$s_val = util_dbaccessor::get_decode_data($s_val);
		if (strlen($s_val) < $i_limit_lower){
			$s_error_msg =  str_replace('%param1', $s_col_name, $s_error_msg);
			$s_error_msg =  str_replace('%param2', $i_limit_lower, $s_error_msg);
			return $s_error_msg;
		}

		return '';
	}


	/**
	 * 半角チェック
	 * @param unknown $s_val			入力された値
	 * @param unknown $s_col_name		列名
	 * @return 半角以外が含まれていたらエラーメッセージを返す
	 */
	public static function check_hankaku($s_val, $s_col_name, $s_rownum = '')
	{
		if ($s_val == ''){return '';}

		$s_error_msg = ERROR_VALIDATE_HANKAKU;
		if ($s_rownum != '')
		{
			$s_error_msg = $s_rownum .'行目：'. $s_error_msg;
		}

		if (strlen($s_val) != mb_strlen($s_val))
		{
			return str_replace('%param1', $s_col_name, $s_error_msg);
		}

		return '';
	}


	/**
	 * 半角カタカナチェック
	 * @param unknown $s_val			入力された値
	 * @param unknown $s_col_name		列名
	 * @return 半角カタカナが含まれていたらエラーメッセージを返す
	 */
	public static function check_hankana($s_val, $s_col_name, $s_rownum = '')
	{
		if ($s_val == ''){return '';}

		$s_error_msg = ERROR_VALIDATE_HANKANA;
		if ($s_rownum != '')
		{
			$s_error_msg = $s_rownum .'行目：'. $s_error_msg;
		}

		if (preg_match('/[ｱ-ﾝﾞﾟｧ-ｫｬ-ｮｰ]+/u', $s_val) )
		{
			return str_replace('%param1', $s_col_name, $s_error_msg);
		}

		return '';
	}


	/**
	 * IPコード形式チェック
	 * @param unknown $s_val			入力された値
	 * @param unknown $s_col_name		列名
	 * @return boolean
	 */
	public static function check_ip($s_val, $s_col_name, $s_rownum = '')
	{
		if ($s_val == ''){return '';}

		$b_error_flg = true;

		$s_error_msg = ERROR_VALIDATE_IP;
		if ($s_rownum != '')
		{
			$s_error_msg = $s_rownum .'行目：'. $s_error_msg;
		}

		$a_value = explode(".", $s_val);
		if (is_array($a_value) && count($a_value) == 4) {
			for ($n=0; $n<4; $n++) {

				// 半角数字か
				if (!preg_match("/^[0-9]+$/", $a_value[$n])) {
					$b_error_flg = false;
					break;
				}

				// 0～255
				if ($a_value[$n] < 0 || $a_value[$n] > 255)
				{
					$b_error_flg = false;
					break;
				}
			}
		} else {
			$b_error_flg = false;
		}

		if ($b_error_flg === false)
		{
			return str_replace('%param1', $s_col_name, $s_error_msg);
		}
		return '';
	}


	/**
	 * 日付形式チェック
	 * @param 	unknown $s_val			入力された値
	 * @param 	unknown $s_col_name		列名
	 * @return 	日付形式でなければエラーメッセージを返す
	 */
	public static function check_date($s_val, $s_col_name, $s_rownum = '')
	{
		if ($s_val == ''){return '';}

		$b_error_flg = true;
		$s_date_pattern = "/(\d{4})-(\d{2}|\d)-(\d{2}|\d)/";

		$s_error_msg = ERROR_VALIDATE_DATE;
		if ($s_rownum != '')
		{
			$s_error_msg = $s_rownum .'行目：'. $s_error_msg;
		}

		// 入力された値の「/」を「-」に変える
		$s_val = str_replace('/', '-', $s_val);

		if (preg_match($s_date_pattern, $s_val, $a_date))
		{
			if(!checkdate($a_date[2], $a_date[3], $a_date[1]))
			{
				$b_error_flg = false;
			}
		} else {
			$b_error_flg = false;
		}

		if ($b_error_flg === false)
		{
			return str_replace('%param1', $s_col_name, $s_error_msg);
		}
		return '';
	}


	/**
	 * 英数混合チェック
	 * @param 	unknown $s_val			入力された値
	 * @param 	unknown $s_col_name		列名
	 * @return 	英数混合でなければエラーメッセージを返す
	 */
	public static function check_alpaha_num($s_val, $s_col_name, $s_rownum = '')
	{
		if ($s_val == ''){return '';}

		$b_error_flg = true;

		$s_error_msg = ERROR_VALIDATE_ALPHA_NUM;
		if ($s_rownum != '')
		{
			$s_error_msg = $s_rownum .'行目：'. $s_error_msg;
		}

		// 半角英数か
		$s_msg = util_validate::check_hankaku($s_val, '');
		if ($s_msg != '')
		{
			$b_error_flg = false;
		}

		// 数字のみではないか
		if (preg_match('/^[0-9]+$/', $s_val))
		{
			$b_error_flg = false;
		}

		// 英語のみではないか
		if (preg_match('/^[a-zA-Z-+.,!#$%&()~|_*]+$/', $s_val))
		{
			$b_error_flg = false;
		}

		if ($b_error_flg === false)
		{
			return str_replace('%param1', $s_col_name, $s_error_msg);
		}
		return '';
	}


	/**
	 * e-mailチェック
	 * @param 	unknown $s_val1			入力された値
	 * @param 	unknown $s_val2			入力された値
	 * @param 	unknown $s_col_name		列名
	 * @return 	e-mail形式でなければエラーメッセージを返す
	 */
	public static function check_email($s_val1, $s_val2, $s_col_name, $s_rownum = '')
	{
		if ($s_val1 == '' && $s_val2 == ''){return '';}

		$b_error_flg = true;

		$s_error_msg = ERROR_VALIDATE_EMAIL;
		if ($s_rownum != '')
		{
			$s_error_msg = $s_rownum .'行目：'. $s_error_msg;
		}

		if ($s_val1 == '' || $s_val2 == '')
		{
			$b_error_flg = false;
		}

		// 半角英数+ピリオド+ハイフン+アンダースコア
		if (!preg_match("/^[a-zA-Z0-9._-]+$/",$s_val1) || !preg_match("/^[a-zA-Z0-9._-]+$/",$s_val2))
		{
			$b_error_flg = false;
		}

		if ($b_error_flg === false)
		{
			return str_replace('%param1', $s_col_name, $s_error_msg);
		}
		return '';
	}


	/**
	 * 半角数字チェック
	 * @param 	unknown $s_val			入力された値
	 * @param 	unknown $s_col_name		列名
	 * @return 	半角数字でなければエラーメッセージを返す
	 */
	public static function check_hankaku_num($s_val, $s_col_name, $s_rownum = '')
	{
		if ($s_val == ''){return '';}

		$s_error_msg = ERROR_VALIDATE_HANKAKU_NUM;
		if ($s_rownum != '')
		{
			$s_error_msg = $s_rownum .'行目：'. $s_error_msg;
		}

		if (!preg_match("/^[0-9]+$/",$s_val))
		{
			return str_replace('%param1', $s_col_name, $s_error_msg);
		}
		return '';
	}


	/**
	 * 時間チェック
	 * @param 	unknown $s_val			入力された値
	 * @param 	unknown $s_col_name		列名
	 * @return 	半角数字でなければエラーメッセージを返す
	 */
	public static function check_time($s_val, $s_col_name, $s_rownum = '')
	{
		if ($s_val == ''){return '';}

		$b_error_flg = true;

		$s_error_msg = ERROR_VALIDATE_TIME;
		if ($s_rownum != '')
		{
			$s_error_msg = $s_rownum .'行目：'. $s_error_msg;
		}

		$a_time = explode(':', $s_val);

		if (count($a_time) != 2)
		{
			$b_error_flg = false;
		} else {
			if (util_validate::check_hankaku_num($a_time[0], '') != '' || util_validate::check_hankaku_num($a_time[1], '') != '')
			{
				$b_error_flg = false;
			} else {
				if ((int)$a_time[0] < 0 || (int)$a_time[0] >= 24)
				{
					$b_error_flg = false;
				}
				if ((int)$a_time[1] < 0 || (int)$a_time[1] >= 60)
				{
					$b_error_flg = false;
				}
			}
		}

		if ($b_error_flg === false)
		{
			return str_replace('%param1', $s_col_name, $s_error_msg);
		}
		return '';
	}
}


