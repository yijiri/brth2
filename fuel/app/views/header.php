<?php
	use Fuel\Core\Uri;

	// Sessionから共通情報を取得
	$v_dto_common = Session::get(SESSION_COMMON);
	$s_display = '';
	$s_login_tab_display = '';
	$s_kubun_tab_display = '';
	$s_time = '';
	$s_name = '';
	$s_store_name = '';
	$s_current_kubun = '';

	$s_login_auth = '';
	$s_role = '';
	$s_company_name = '';

	if ($v_dto_common == null || $v_dto_common->b_login_flg !== true) {
		$s_display = 'none';
		$s_login_tab_display = 'block';
		$s_kubun_tab_display = 'none';
	} else {
		$s_display = 'block';
		$s_login_tab_display = 'none';
		$s_kubun_tab_display = 'block';

		$s_name = $v_dto_common->s_login_name;
		$s_company_name = $v_dto_common->s_company_name;
		$s_time = date('Y/m/d H:i:s');
	}
?>

<script>

function setHeaderAction(val) {
	var f1 = document.formHeader;

	switch (val) {
		case 0:
			f1.action = 'login';
			break;
		case 1:
			f1.action = '<?php print Uri::base(); ?>password/main/';
			break;
		case 2:
			f1.action = '<?php print Uri::base(); ?>login/logout';
			break;
	}

	f1.submit();
}


function setKubun(kubunName, imageID, image) {
	// 区分タブ切り替え用のフォームをsubmit
	var f = document.formKubunTab;
	f.kubun.value = kubunName;
	f.submit();
}


function setLogin() {
	var f = document.formLogin;
	f.submit();
}


</script>

<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php print Uri::base().URL_HOME_MAIN; ?>">鍵開け管理システム</a>
		</div>
		<ul class="nav navbar-nav navbar-right hidden-xs">
			<li><a href="#"><?php print $s_company_name; ?></a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php print $s_name; ?><span class="caret"></span></a>

				<ul class="dropdown-menu">
    				<li><a href="/mypage/detail">マイページ</a></li>
    				<li class="divider"></li>
    				<li><a href="<?php print Uri::base().URL_LOGIN_LOGIN; ?>">会社選択</a></li>
    				<li class="divider"></li>
    				<li><a href="/logout/logout">ログアウト</a></li>
				</ul>
			<li>
		</ul>
	</div>
</nav>

