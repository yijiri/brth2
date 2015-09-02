<?php

/**
 * デコード
  */
class util_decord
{
	/**
	 * 権限のデコードを行う
	 * @param unknown $s_code			コード値
	 * @return デコード値
	 */
	public static function role_decord($s_code)
	{
		$s_str = '';

		switch($s_code)
		{
			case AUTH_ADM: 	$s_str = '管理者'; break;
			case AUTH_REQ: 	$s_str = 'オペレータ申請者'; break;
			case AUTH_PVL:	$s_str = 'オペレータ承認者'; break;
			case AUTH_SUP:	$s_str = 'サプライヤー'; break;
		}

		return $s_str;
	}


	/**
	 * 有効のデコードを行う
	 * @param unknown $s_code			コード値
	 * @return デコード値
	 */
	public static function enable_decord($s_code)
	{
		$s_str = '';

		switch($s_code)
		{
			case '0': $s_str = '無効'; break;
			case '1': $s_str = '有効'; break;
		}
		return $s_str;
	}
}