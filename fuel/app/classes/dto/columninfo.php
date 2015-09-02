<?php

/**
 * 概要：一覧の列情報DTO
 */
class dto_columninfo extends dto_base
{
	/**
	 * @var タイトル
	 */
	public $s_title;


	/**
	 * @var タイトルID
	 */
	public $s_id;


	/**
	 * @var 列幅
	 */
	public $s_width;


	/**
	 * @var 配置
	 */
	public $i_align_id;


	/**
	 * @var 列順
	 */
	public $i_col_order;


	/**
	 * @var リンク表示するか(1:リンク表示)
	 */
	public $i_link_flg = false;


	/**
	 * @var 表示するカラムか(true:表示する)
	 */
	public $b_hidden = false;


	/**
	 * @var ソートするか(true:ソートする)
	 */
	public $b_sort_flg = true;


	/**
	 * @var 数値のとしてソートするか(true:数値としてソートする)
	 */
	public $b_num_flg = false;
}