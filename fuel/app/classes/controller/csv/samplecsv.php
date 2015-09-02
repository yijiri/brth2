<?php

use Fuel\Core\Controller_Rest;

/**
 * 区分：xxx
 * 画面：xxx
 */
class Controller_Csv_Samplecsv extends Controller_Csvbase
{

	/**
	 * 出力するCSVのファイル名を取得
	 * @see Controller_Csvbase::get_filename()
	 */
	protected function get_filename()
	{
		return "xxxx.csv";
	}


	/**
	 * CSVに出力するデータを取得
	 * @see Controller_Csvbase::get_csvdata()
	 */
	protected function get_csvdata()
	{
		$a_all_data = array();

		// リクエスト作成
		$v_req_network_condition = new req_network_condition();

		// プロセス実行
		$v_process_network_list = new process_network_list();
		$v_process_network_list->execute_process($v_req_network_condition);

		// データ取得
		$v_res_network_resultlist = util_sessionaccessor::get_session(SESSION_NETWORK_LIST);

		foreach ($v_res_network_resultlist->a_dto_network_row as $v_dto_network_resultrow)
		{
			$a_data = array();
			array_push($a_data, util_str::change_str_for_csv($v_dto_network_resultrow->s_network_name));
			array_push($a_data, util_str::change_str_for_csv($v_dto_network_resultrow->s_enabled_flag));
			array_push($a_all_data, $a_data);
		}

		return $a_all_data;
	}


	/**
	 * CSVに出力するデータの列情報を取得
	 * @see Controller_Csvbase::get_headerinfo()
	 */
	protected function get_headerinfo()
	{
		$a_header = array();
		array_push($a_header, util_str::change_str_for_csv("得意先コード"));
		array_push($a_header, util_str::change_str_for_csv("商品コード"));
		array_push($a_header, util_str::change_str_for_csv("商品名"));
		array_push($a_header, util_str::change_str_for_csv("従量単価"));
		array_push($a_header, util_str::change_str_for_csv("割戻開始率"));
		array_push($a_header, util_str::change_str_for_csv("割戻対象額"));
		array_push($a_header, util_str::change_str_for_csv("削除区分"));
		array_push($a_header, util_str::change_str_for_csv("商品名称"));
		array_push($a_header, util_str::change_str_for_csv("入力区分"));
		array_push($a_header, util_str::change_str_for_csv("更新者"));
		array_push($a_header, util_str::change_str_for_csv("登録者"));
		array_push($a_header, util_str::change_str_for_csv("更新日付"));
		array_push($a_header, util_str::change_str_for_csv("登録日付"));
		array_push($a_header, util_str::change_str_for_csv("得意先略称"));

		return $a_header;
	}
}