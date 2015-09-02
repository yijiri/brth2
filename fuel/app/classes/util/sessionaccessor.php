<?php

/**
 * Sessionにアクセス
 */
class util_sessionaccessor
{
	/**
	 * セッションの値を取得
	 * セッションキーがない場合 or セッションの値がない場合はログインページにリダイレクトする
	 * @param unknown $s_session_name		セッション名
	 * @return boolean
	 */
	public static function get_session($s_session_name)
	{

		if (isset($s_session_name) === false || Session::get($s_session_name) == null)
		{
			Log::error(ERROR_SESSION_NULL);

			Response::redirect(URL_LOGIN);
			return false;
		}
		return Session::get($s_session_name);
	}
}