<?php
	use Fuel\Core\Html;
	$s_error_msg = '';
	$s_code = '';
	$s_login_id = '';
	// Sessionから値を取得
	$v_res_base = Session::get(SESSION_LOGIN_COMPANY);
	// エラーメッセージ
	$s_error_msg = util_list::change_array2str($v_res_base->v_dto_rescommon->a_error_msg);
	$v_dto_login_selectcondition = $v_res_base->v_dto_login_selectcondition;
	$a_dto_login_company = $v_res_base->a_dto_login_company;
	$s_login_id = $v_dto_login_selectcondition->s_login_id;
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
	// 選択した会社IDを取得
	function getSelCompany(){
		var select = document.forms[0].sel_company.selectedIndex;
	    var options = document.forms[0].sel_company.options;
	    var value = options.item(select).value;

		document.forms[0].s_company_id.value = value;
	}
</script>

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
	    		<a class="navbar-brand" href="javascript:void(0)">鍵開け管理システム</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-xs-offset-3 col-xs-6">
				<div class="login">
					<?php echo Form::Open(array('action' => URL_COMPANY_SELECT, 'name' => 'formIn', ' class' => 'form-horizontal well'))."\n"?>
					<h4 style="margin-bottom:20px;">ログイン</h4>
						<div class="form-group">
							<div class="col-xs-12">
								<select name="sel_company" class="form-control" onchange="getSelCompany()">
									<option value="">会社を選択してください</option>
									<?php
										for ($i = 0; $i < count($a_dto_login_company); $i++)
										{
											print '<option value="' .$a_dto_login_company[$i]->s_company_id. '">' .$a_dto_login_company[$i]->s_company_name. '</option>';
										}
									?>
								</select>
							</div>
						</div>
						<div class="login-button">
							<span class="group-btn">
								<input type="submit" name="select" value="選択" class="btn btn-default btn-md">
					        	<input type="submit" name="back" value="戻る" class="btn btn-default btn-md">
					    	</span>
				    	</div>
						<input type="hidden" name="s_company_id">
					<?php echo Form::Close()?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>