
<div align='center'>

<?php
	$s_session_name = '';
	$s_param_name = '';
	$s_url = '';

/* 	$v_dto_common = Session::get(SESSION_COMMON);

	switch ($v_dto_common->s_display_id)
	{
		// [検索]区分：取消
		case 'SEARCH_CANCEL':
			$s_session_name = 'SEARCH_CANCEL';
			$s_param_name = 'a_dto_search_cancel';
			break;
	} */

	$s_session_name = 'SESSION_SEARCH_CANCEL';
	$s_param_name = 'a_dto_search_cancelparam';
	$s_url = Uri::create(URL_SEARCH_RESULT_BACK);

	$v_res_base = Session::get($s_session_name);

	if ($v_res_base != null)
	{
		$a_dto_search_cancelparam = $v_res_base->$s_param_name;
		//var_dump($v_res_base);
		foreach ($a_dto_search_cancelparam as $v_dto_search_cancelparam) {
			print $v_dto_search_cancelparam->s_sid;
			print '&nbsp;&nbsp;';
			print $v_dto_search_cancelparam->s_ret;
			print '<br>';
		}
	}
?>

<div style='padding-bottom: 10px;'></div>
<?php print Asset::img('btn_close.gif', array('onClick' => 'window.parent.closeMsgPop(\'' .$s_url. '\');')); ?>

</div>

