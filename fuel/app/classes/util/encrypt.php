<?php

/**
 * 概要：暗号化・複合化
 *       (お客様ご提供ソースのカスタマイズ)
 */
class util_encrypt
{

	private static $s_key;

	/**
	 * 暗号化
	 * @param unknown $key
	 * @param unknown $text
	 * @return string
	 */
	public static function encode($text) {

		// 暗号化キー取得
		$key = util_encrypt::get_key();

		$td = mcrypt_module_open(MCRYPT_BLOWFISH, '', MCRYPT_MODE_ECB, '');
		$text = util_encrypt::pkcs5_pad($text,8);
		$size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($size, MCRYPT_RAND);
		mcrypt_generic_init($td, $key, $iv);
		$bin = pack('H*', bin2hex($text) );
		$encrypted = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, $bin, MCRYPT_MODE_ECB, $iv);
		mcrypt_generic_deinit($td);

		return base64_encode($encrypted);
	}


	/**
	 * 複合化
	 * @param unknown $key
	 * @param unknown $text
	 * @return string
	 */
	public static function decode($text) {

		// 複合化キー取得
		$key = util_encrypt::get_key();

		$size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($size, MCRYPT_RAND);
		$bin = pack('H*', bin2hex( base64_decode($text)) );
		$decrypted = mcrypt_decrypt(MCRYPT_BLOWFISH, $key, $bin, MCRYPT_MODE_ECB, $iv);

		return rtrim( util_encrypt::pkcs5_unpad($decrypted) );
	}


	/**
	 * パディング
	 * @param unknown $text
	 * @param unknown $blocksize
	 * @return string
	 */
	public static function pkcs5_pad($text, $blocksize) {
		$pad = $blocksize - (strlen($text) % $blocksize);
		return $text . str_repeat(chr($pad), $pad);
	}


	/**
	 * アンパディング
	 * @param unknown $text
	 * @return boolean|string
	 */
	public static function pkcs5_unpad($text)
	{
		$pad = ord($text{strlen($text)-1});
		if ($pad > strlen($text)) return false;
		if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) return false;
		return substr($text, 0, -1 * $pad);
	}


	/**
	 * 暗号化・複合化に使うキーを取得
	 * TODO:ステージング環境でテストするときはRUN_MODE=1にする
	 */
	public static function get_key()
	{
		if (RUN_MODE == '0')
		{
			if ((string)util_encrypt::$s_key == '')
			{
				$file= fopen("http://" .ENCRYPT_HOST. "/decrypt/Req/getCommKey.do?PASS=" .ENCRYPT_PASSWORD,"r");
				util_encrypt::$s_key = fgets($file,100);

				Log::debug('暗号化キー取得');
			}

		} else {
			util_encrypt::$s_key = 'brc';
		}
		return util_encrypt::$s_key;
	}



	/**
	 * クレジット番号向けの暗号化を行う
	 * @param unknown $s_credit_no	共通鍵で暗号化した文字列
	 */
	public static function encode_for_credit_no($s_credit_no)
	{
		if (RUN_MODE == '0')
		{
			$file= fopen("http://" .ENCRYPT_HOST. "/decrypt/Req/encryptCard.do?PASS=" .ENCRYPT_PASSWORD. "&SRC=" .$s_credit_no, "r");
			$s_encrypt_credit_no = fgets($file,500);
		} else {
			$s_encrypt_credit_no = $s_credit_no;
		}

		return $s_encrypt_credit_no;
	}


	// お客様からいただいたソース
/* 	function encode($key,$text) {
		$td = mcrypt_module_open(MCRYPT_BLOWFISH, '', MCRYPT_MODE_ECB, '');
		$text = pkcs5_pad($text,8);
		$size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($size, MCRYPT_RAND);
		mcrypt_generic_init($td, $key, $iv);
		$bin = pack('H*', bin2hex($text) );
		$encrypted = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, $bin, MCRYPT_MODE_ECB, $iv);
		mcrypt_generic_deinit($td);
		return base64_encode($encrypted);
	}
	function decode($key,$text) {
		$size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($size, MCRYPT_RAND);
		$bin = pack('H*', bin2hex( base64_decode($text)) );
		$decrypted = mcrypt_decrypt(MCRYPT_BLOWFISH, $key, $bin, MCRYPT_MODE_ECB, $iv);
		return rtrim( pkcs5_unpad($decrypted) );
	}

	function pkcs5_pad($text, $blocksize) {
		$pad = $blocksize - (strlen($text) % $blocksize);
		return $text . str_repeat(chr($pad), $pad);
	}

	function pkcs5_unpad($text) {
		$pad = ord($text{strlen($text)-1});
		if ($pad > strlen($text)) return false;
		if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) return false;
		return substr($text, 0, -1 * $pad);
	}
	//共通鍵取得
	$file= fopen("http://復号化ホスト名/Decrypt/Req/getCommKey.do?PASS=hogehoge","r");
	$k = fgets($file,100); //数値はサイズにあわせて変更してください
	print("key=".$k."\r\n");
	//$k = "2xtKWGeKqwFBSl8K";

	//固定文字列をEncode
	$p = encode($k,"東京都新宿区あいうえおかきくけこさしすせそたち");
	print("\r\n encorded = ");
	print($p);
	print("\r\n decoded = ");
	print(decode($k,$p));
	//第１引数をEncode
	print("\r\n\r\n argv[1] encode start\r\n src = ".$argv[1]);
	print("\r\n encoded = ");
	print(encode($k,$argv[1]));

	//第２引数をDencode
	print("\r\n\r\n argv[2] decord start\r\n src = ".$argv[2]);
	print("\r\n decoded = ");
	print(decode($k,$argv[2]));
	print("\r\n"); */
}