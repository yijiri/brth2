<!DOCTYPE html>
<html lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>鍵開け管理システム</title>

	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('jquery-ui.css'); ?>
	<?php echo Asset::css('glayer.css'); ?>
	<?php echo Asset::css('jquery_notification.css'); ?>
	<?php echo Asset::css('app.css'); ?>
	<?php echo Asset::js('jquery-1.11.3.min.js'); ?>
	<?php echo Asset::js('jquery.cookie.min.js'); ?>
	<?php echo Asset::js('jquery-ui.min.js'); ?>
	<?php echo Asset::js('glayer.js'); ?>
	<?php echo Asset::js('jquery_notification_v.1.js'); ?>

</head>

<body>

	<?php echo $header; ?>
	<div class="container">
		<div class="row">
			<!-- 各アクションの内容を読み込む -->
			<?php echo $menu; ?>
			<div class="col-xs-10">
				<!-- 各アクションの内容を読み込む -->
				<?php echo $content; ?>
			</div>
		</div>
	</div>

    <footer>
        <!-- footer.phpファイルを読み込む-->
        <?php echo $footer; ?>
    </footer>

    <!-- ダブルクリック防止用フォーム -->
	<?php echo Form::Open(array('action' => '', 'name' => 'formFlg'))."\n"?>
	<?php echo Form::hidden('executeFlg')."\n"?>
	<?php echo Form::Close()."\n"?>
</body>

</html>


<?php

/**
 * パンくず作成
 */
function make_breadcrumb()
{
	$s_breadcrumb = '';

	$v_dto_common = Session::get(SESSION_COMMON);

	if ($v_dto_common != null)
	{
		$a_breadcrumb = $v_dto_common->a_breadcrumb;
		for ($i=0; $i<count($a_breadcrumb); $i++)
		{
			if ($a_breadcrumb[$i]->s_link != '' && $i != count($a_breadcrumb)-1)
			{
				$s_breadcrumb .= '<li><a href=\''.Uri::base().$a_breadcrumb[$i]->s_link.'\'>';
				$s_breadcrumb .= $a_breadcrumb[$i]->s_title;
				$s_breadcrumb .= '</a> <span class="divider"></span></li>';

			} else {
				$s_breadcrumb .= '<li class="active"><strong>' .$a_breadcrumb[$i]->s_title. '</strong></li>';
			}
		}
	}
	return $s_breadcrumb;
}

/**
 * ページャ作成
 */
function make_pager($l_current_page, $l_back_page, $i_page_num, $i_display_num)
{
	$s_pager = '';

	// カレントページが1ページの場合、1ページのまま
	if($l_current_page <= 1)
	{
		$l_back_page = 1;
	}
	else
	{
		$l_back_page = $l_current_page - 1;
	}
	$s_pager .= '<li><a href="javascript:void(0);" current_page="'.$l_back_page. '" class="paging">←前の' .$i_display_num.'件へ</a></li>';

	for($i = 1; $i <= $i_page_num; $i++ )
	{
		if($i == $l_current_page)
		{
			$s_pager .= '<li class="active"><a href="javascript:void(0);">'.$i.'</a></li>';
		}
		else
		{
			$s_pager .= '<li><a href="javascript:void(0);" current_page="' .$i.'" class="paging">' .$i. '</a></li>';
		}
	}
	// カレントページが最終ページの場合、最終ページのまま
	if($l_current_page >= $i_page_num)
	{
		$l_next_page = $i_page_num;
	}
	else
	{
		$l_next_page = $l_current_page + 1;
	}

	$s_pager .= '<li><a href="javascript:void(0);" current_page="' .$l_next_page. '" class="paging">→次の' .$i_display_num. '件へ</a></li>';

	return $s_pager;
}

?>