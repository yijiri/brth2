<?php

	use Fuel\Core\Html;
	$s_error_msg = '';
	$s_code = '';
	$s_login_id = '';
	// Sessionから値を取得
	$v_res_base = Session::get(SESSION_LOGIN);
	if ($v_res_base != null) {
		// エラーメッセージ
		$s_error_msg = util_list::change_array2str($v_res_base->v_dto_rescommon->a_error_msg);
		$v_dto_login_selectcondition = $v_res_base->v_dto_login_selectcondition;
		$s_login_id = $v_dto_login_selectcondition->s_login_id;
	}
?>
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

<script>
	function setAction()
	{
		if (document.formFlg.executeFlg.value == true){
			return;
		} else {

			document.formFlg.executeFlg.value = true;
			document.formIn.submit();
			document.formFlg.executeFlg.value = false;
		}
	}

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

	function setLogin() {
		var f = document.formLogin;
		f.submit();
	}

	function putPDF() {
		document.formPDF.submit();
	}

	function putCSV() {
		document.formCSV.submit();
	}

</script>

</head>

<body>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
    		<?php echo Html::anchor(URL_LOGIN_LOGIN, '鍵開け管理システム',array('class' => 'navbar-brand'))."\n"?>
		</div>
	</div>
</nav>
<div id='login'>
	<div class="container">
		<div class="row">
			<div class="col-xs-offset-3 col-xs-6">
				<div class="login">
					<?php echo Form::Open(array('action' => URL_LOGIN_LOGIN, 'name' => 'formIn', ' class' => 'form-horizontal well'))."\n"?>
					<h4 style="margin-bottom:20px;">ログイン</h4>
					<!-- エラーメッセージ -->
					<div id='error'>
						<?php print $s_error_msg; ?>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<input type="text" name="s_login_id" value="" placeholder="ユーザID(メールアドレス)を入力してください" class="form-control"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<input type="password" name="s_password" value="" placeholder="パスワードを入力してください" class="form-control"/>
						</div>
					</div>
					<div class="login-button">
						<span class="group-btn">
							<input type="submit" name="login" value="ログイン" class="btn btn-default btn-md">
							<input type="button" name="pdf" value="PDF出力" class="btn btn-default btn-md" onclick="putPDF();">
							<input type="button" name="csv" value="CSV出力" class="btn btn-default btn-md" onclick="putCSV();">
						</span>
					</div>
					<?php echo Form::Close()?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo Form::Open(array('action' => "pdf/index", 'name' => 'formPDF'))."\n"?>
<?php echo Form::Close()?>

<?php echo Form::Open(array('action' => "csv/index", 'name' => 'formCSV'))."\n"?>
<?php echo Form::Close()?>

</body>