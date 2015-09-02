<?php

/**
 * 区分：xxx
 * 画面：xxx
 */
class Controller_Csv_index extends Controller_Base
{

	/**
	 * CSVサンプル
	 */
	public function action_index()
	{
		// ↓↓↓↓↓ログインしてれば必要ないです。
		Session::set(SESSION_COMMON, new dto_common());

		Response::redirect("csv/samplecsv/csv.csv");
	}

}
