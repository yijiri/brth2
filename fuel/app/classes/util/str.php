<?php

/**
 * 文字列操作
 */
class util_str
{
	/**
	 * ダブルクォーテーションのエスケープ文字に置換
	 * @param unknown $s_str			文字列
	 * @return エスケープ後の文字列
	 */
	public static function replaceDoubleQort($s_str)
	{
		return str_replace('"','&quot;',$s_str);
	}


	/**
	 * シングルクォーテーションのエスケープ文字に置換
	 * @param unknown $s_str			文字列
	 * @return エスケープ後の文字列
	 */
	public static function replaceSingleQort($s_str)
	{
		return str_replace("'",'&apos;',$s_str);
	}


	/**
	 * シングルクォーテーションのエスケープ文字に置換
	 * @param unknown $s_str			文字列
	 * @return エスケープ後の文字列
	 */
	public static function replaceBackSlash($s_str)
	{
		return str_replace("\\", '&#092;', $s_str);
	}


	/**
	 * 改行コードを削除
	 * @param unknown $s_str			文字列
	 * @return 改行コードがなくなった文字列
	 */
	public static function replaceLineFeedCode($s_str)
	{
		$s_str = str_replace("\n", '', $s_str);
		$s_str = str_replace("\r", '', $s_str);

		return $s_str;
	}


	/**
	 * 表示用にエスケープする
	 * @param unknown $s_str
	 * @return エスケープ後の文字
	 */
	public static function replaceForDisp($s_str)
	{
		$s_ret = $s_str;
		$s_ret = util_str::replaceBackSlash($s_ret);
		$s_ret = util_str::replaceDoubleQort($s_ret);
		$s_ret = util_str::replaceSingleQort($s_ret);

		return $s_ret;
	}


	/**
	 * PDF出力用にSJISに変換
	 * @param unknown $s_str
	 * @return string
	 */
	public static function change_str_for_pdf($s_str){
		return mb_convert_encoding($s_str, 'sjis', 'utf-8');
	}


	/**
	 * CSV出力用にSJISに変換
	 * @param unknown $s_str
	 * @return string
	 */
	public static function change_str_for_csv($s_str){
		return mb_convert_encoding($s_str, 'sjis', 'utf-8');
	}
}