<?php

/**
* パンくず
*/
class util_breadcrumb
{
	/**
	 * パンくずを追加
	 * @param dto_breadcrumb $v_dto_breadcrumb		パンくずDTO
	 */
	public static function add_breadcrumb(dto_breadcrumb $v_dto_breadcrumb)
	{
		// Sessionのパンくず情報を取得
		 $v_dto_common = util_sessionaccessor::get_session(SESSION_COMMON);

		if ($v_dto_common !== false){
			array_push($v_dto_common->a_breadcrumb, $v_dto_breadcrumb);
		}
	}



	/**
	 * パンくず削除（指定された数字分、後ろから削除する）
	 * @param unknown $i_delcnt
	 */
	public static function del_breadcrumb($i_delcnt)
	{
		// Sessionのパンくず情報
		$v_dto_common = util_sessionaccessor::get_session(SESSION_COMMON);
		$a_breadcrumb = $v_dto_common->a_breadcrumb;

		if ($v_dto_common == null || count($a_breadcrumb) < $i_delcnt)
		{
			return;
		}

		for ($i=0; $i<$i_delcnt; $i++) {
			unset($a_breadcrumb[count($a_breadcrumb)-1]);
		}

		// TODO:セットしなおさないと反映されない。要調査。
		$v_dto_common->a_breadcrumb = $a_breadcrumb;
	}


	/**
	 * パンくずデータを全部削除
	 */
	public static function del_breadcrumb_all()
	{
		// Sessionのパンくず情報
		$v_dto_common = util_sessionaccessor::get_session(SESSION_COMMON);
		$a_breadcrumb = $v_dto_common->a_breadcrumb;

		if ($v_dto_common == null)
		{
			return;
		}

		$v_dto_common->a_breadcrumb = array();
	}


	/**
	 * パンくずのインスタンスを取得
	 * @param unknown $i_delcnt
	 */
	public static function get_breadcrumb($s_kubun, $s_title)
	{

		// ホーム
		if ($s_kubun == KUBUN_HOME)
		{
			switch ($s_title)
			{
				case BREADCRUMB_HOME_MAIN:
					// ホーム
					$v_dto_breadcrumb = new dto_breadcrumb();
					$v_dto_breadcrumb->s_title = BREADCRUMB_HOME_MAIN;
					$v_dto_breadcrumb->s_link = URL_HOME_MAIN;
					util_breadcrumb::add_breadcrumb($v_dto_breadcrumb);
					break;
			}
		}

		// ネットワーク管理
		if ($s_kubun == KUBUN_NETWORK)
		{
			switch ($s_title)
			{
				// ネットワーク管理
				case BREADCRUMB_NETWORK_MAIN:
					$v_dto_breadcrumb = new dto_breadcrumb();
					$v_dto_breadcrumb->s_title = BREADCRUMB_NETWORK_MAIN;
					$v_dto_breadcrumb->s_link = URL_NETWORK_LIST_BACK;
					util_breadcrumb::add_breadcrumb($v_dto_breadcrumb);
					break;

				// 照会 変更
				case BREADCRUMB_NETWORK_LIST:
					$v_dto_breadcrumb = new dto_breadcrumb();
					$v_dto_breadcrumb->s_title = BREADCRUMB_NETWORK_LIST;
					$v_dto_breadcrumb->s_link = URL_NETWORK_LIST_BACK;
					util_breadcrumb::add_breadcrumb($v_dto_breadcrumb);
					break;

				// 作成
				case BREADCRUMB_NETWORK_EDIT:
					$v_dto_breadcrumb = new dto_breadcrumb();
					$v_dto_breadcrumb->s_title = BREADCRUMB_NETWORK_EDIT;
					$v_dto_breadcrumb->s_link = URL_NETWORK_DETAIL_BACK;
					util_breadcrumb::add_breadcrumb($v_dto_breadcrumb);
					break;

				// 確認
				case BREADCRUMB_NETWORK_CONFIRM:
					$v_dto_breadcrumb = new dto_breadcrumb();
					$v_dto_breadcrumb->s_title = BREADCRUMB_NETWORK_CONFIRM;
					// 確認画面がリンクになることはないので設定しない
					$v_dto_breadcrumb->s_link = '';
					util_breadcrumb::add_breadcrumb($v_dto_breadcrumb);
					break;
			}
		}
	}
}