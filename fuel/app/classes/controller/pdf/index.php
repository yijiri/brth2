<?php

/**
 * 区分：xxx
 * 画面：xxx
 */
class Controller_Pdf_index extends Controller_Base
{

	/**
	 * PDFサンプル
	 * @return string
	 */
	public function action_index()
	{
		// ↓↓↓↓↓ログインしてれば必要ないです。
		Session::set(SESSION_COMMON, new dto_common());

		$a = new process_iziritest();
		$a->execute_process(new req_base());

		return "";
	}
}
