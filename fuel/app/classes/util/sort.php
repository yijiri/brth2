<?php

/**
 * ソート
 */
class util_sort
{
	/**
	 * ソートを行う
	 * @param unknown $a_row			レコードが入った配列
	 * @param unknown $s_sort_item		ソート項目
	 * @param unknown $s_sort_order		ソート順
	 * @return ソートされたレコードが入った配列
	 */
	public static function sort($a_row, $s_sort_item, $s_sort_order)
	{
		// ソート項目を配列につめる
		$a_buf = array();

		for ($i=0; $i<count($a_row); $i++)
		{
			array_push($a_buf, $a_row[$i]->$s_sort_item);
		}

		// ソート
		if ($s_sort_order == 'asc')
		{
			asort($a_buf);
		} else {
			arsort($a_buf);
		}

		// 元データを並び替える
		$a_row_after = array();
		foreach ($a_buf as $key => $val) {
			array_push($a_row_after,$a_row[$key]);
		}

		return $a_row_after;
	}
}