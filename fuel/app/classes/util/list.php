<?php

/**
 * 一覧表示
 */
class util_list
{

	/**
	 * 一覧のカラムヘッダ名称を取得
	 * @param	 unknown $v_dto_columnheader		カラムヘッダ情報
	 * @return 「"名称1","名称2","名称3"」←の形式の文字列
	 */
	public static function get_column_name($v_dto_columnheader)
	{
		$s_ret = '';
		$a_sorted_header = util_sort::sort($v_dto_columnheader->a_dto_columninfo, 'i_col_order', 'asc');

		for ($i=0; $i<count($a_sorted_header); $i++)
		{
			if ($s_ret != '')
			{
				$s_ret .= ',';
			}
			$s_ret .= '"' .$a_sorted_header[$i]->s_title. '"';
		}
		return $s_ret;
	}


	/**
	 * カラムヘッダ情報を取得
	 * @param 		unknown $v_dto_columnheader		カラムヘッダ情報
	 * @return 		string	json形式の文字列
	 */
	public static function get_column_info($v_dto_columnheader)
	{
		$s_ret = '';
		$a_sorted_header = util_sort::sort($v_dto_columnheader->a_dto_columninfo, 'i_col_order', 'asc');

		for ($i=0; $i<count($a_sorted_header); $i++)
		{
			if ($s_ret != '')
			{
				$s_ret .= ',';
			}

			$s_ret .= '{name:"'.$a_sorted_header[$i]->s_id.'",';
			$s_ret .= 'index:"'.$a_sorted_header[$i]->s_id.'_idx",';
			$s_ret .= 'width:"'.$a_sorted_header[$i]->s_width.'",';
			$s_ret .= 'align:"'.$a_sorted_header[$i]->s_align.'",';

			// 特定の文字があったら、文字の色を変える
			$s_ret .= 'cellattr: function(rowId, val, rawObject, cm, rdata, name){
							if (val == \'' .EMPTY_MEMBER_NAME.'\' || val == \'' .EMPTY_OTHER.'\' || val == \'' .EMPTY_AGENCY_NAME.'\' || val == \'' .EMPTY_NOLIMIT.'\')
							{
								return\' style="color: #CFCFCF;"\'
							}';

			if($a_sorted_header[$i]->s_id == 's_credit_exp')
			{
				// 有効期限の値が前月以前だったら赤色で表示
				$s_ret .= 'if (val <= getPreMonth(\'1\'))
							{
								return\' style="color: #FF0000;"\'
							}';
			}

			if($a_sorted_header[$i]->s_id == 's_exp')
			{
				// 有効期限の値が前月以前だったら赤色で表示
				$s_ret .= 'if (val <= getPreMonth(\'0\'))
							{
								return\' style="color: #FF0000;"\'
							}';
			}

			$s_ret .= '	},';

			// リンク
			if ($a_sorted_header[$i]->i_link_flg == 1)
			{
				$s_ret .= 'formatter:myLinkFormat,';
			}

			// hidden
			if ($a_sorted_header[$i]->b_hidden === true)
			{
				$s_ret .= 'hidden:true,';
			}


			// ソート
			if ($a_sorted_header[$i]->b_sort_flg === true)
			{
				$s_ret .= 'sortable:true,';
			} else {
				$s_ret .= 'sortable:false,';
			}


			// 数字でソート
			if ($a_sorted_header[$i]->b_num_flg === true)
			{
				$s_ret .= 'sorttype: function(cell) { var str = cell; ';
				$s_ret .= 'str = str.replace("\\\\", ""); ';
				$s_ret .= 'str = str.replace("<font color=\'#FF0000\'>", ""); ';
				$s_ret .= 'str = str.replace("</font>", ""); ';
				$s_ret .= 'str = str.replace(",", ""); ';
				$s_ret .= 'str = str.replace("' .EMPTY_OTHER. '", ""); ';
				$s_ret .= 'return Number(str); } ,';
			}


			$s_ret .= 'classes:""}';
		}
		return $s_ret;
	}


	/**
	 * レコードを取得
	 * @param 	unknown 	$v_res_base				レスポンスベース
	 * @param 	unknown 	$v_dto_columnheader		カラムヘッダ情報
	 * @return 	string		json形式の文字列
	 */
	public static function get_record($v_res_base, $v_dto_columnheader, $s_dto_name)
	{
		$s_ret = '';
		$v_res_base->$s_dto_name;
		$a_sorted_header = util_sort::sort($v_dto_columnheader->a_dto_columninfo, 'i_col_order', 'asc');

		foreach ($v_res_base->$s_dto_name as $v_dto_base)
		{
			if ($s_ret != '')
			{
				$s_ret .= ',';
			}

			for ($i=0; $i<count($a_sorted_header); $i++)
			{
				if ($i == 0)
				{
					$s_ret .= '{';
				} else {
					$s_ret .= ',';
				}

				$s_key = $a_sorted_header[$i]->s_id;
				$s_val = $v_dto_base->$s_key;

				// 改行コードを削除
				$s_val = util_str::replaceLineFeedCode($s_val);

				// 表示用にエスケープ
				$s_val = util_str::replaceForDisp($s_val);

				$s_ret .= $s_key.'_idx:"'.$s_val.'",';

				if ($s_val == '')
				{
					// 加盟店名のときは「未定」、その他のときは「空欄」と表示
					if ($s_key == 's_member_name')
					{
						$s_val = EMPTY_MEMBER_NAME;
					}
					elseif ($s_key == 's_agency_name')
					{
						$s_val = EMPTY_AGENCY_NAME;
					}
					elseif ($s_key == 's_info_tbl_limit_date')
					{
						$s_val = EMPTY_NOLIMIT;
					}
					else {
						$s_val = EMPTY_OTHER;
					}
				} elseif ($s_val == EMPTY_MEMBER_NAME){
					$s_val .= ' ';
				} elseif ($s_val == EMPTY_AGENCY_NAME){
					$s_val .= ' ';
				} elseif ($s_val == EMPTY_NOLIMIT){
					$s_val .= ' ';
				} elseif ($s_val == EMPTY_OTHER){
					$s_val .= ' ';
				}

				$s_ret .= $s_key.':"'.$s_val.'"';
			}
			$s_ret .= '}';
		}
		return $s_ret;
	}


	/**
	 * テーブル全体の幅を取得
	 * @param	unknown		$v_dto_columnheader		カラムヘッダ情報
	 * @return	number		テーブル全体の幅
	 */
	public static function get_table_width($v_dto_columnheader)
	{
		$table_width = 0;
		$a_sorted_header = $v_dto_columnheader->a_dto_columninfo;

		for ($i=0; $i<count($a_sorted_header); $i++)
		{
			$table_width += (int)$a_sorted_header[$i]->s_width;
		}
		return $table_width+1;
	}



	/**
	 * 配列を改行タグでつないだ文字列にする
	 * @param unknown $a_array			配列
	 * @return string					文字列
	 */
	public static function change_array2str($a_array)
	{
		$s_ret = '';
		for ($i=0; $i<count($a_array); $i++)
		{
			if ($i != 0)
			{
				$s_ret .= '<br>';
			}
			$s_ret .= $a_array[$i];
		}

		return $s_ret;
	}


	/**
	 * 一覧の表示件数を取得
	 * @param unknown $s_display_id		画面ID
	 * @return 一覧の表示件数
	 */
	public static function get_listnum($s_display_id)
	{
		$s_list_row = DEFAULT_NUM;
		$a_listnum = Session::get(SESSION_COMMON_LISTNUM);

		if ($a_listnum == null){
			$s_list_row = DEFAULT_NUM;
		} else {
			for ($i=0; $i<count($a_listnum); $i++)
			{
				$v_dto_common_listnum = $a_listnum[$i];
				if ($v_dto_common_listnum->s_display_id == $s_display_id)
				{
					$s_list_row = $v_dto_common_listnum->i_listnum;
					break;
				}
			}
		}

		return $s_list_row;
	}
}
