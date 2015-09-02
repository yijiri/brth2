<?php
	use Fuel\Core\Uri;

	// Sessionから共通情報を取得
	$s_error_msg = '';
	$v_res_network_confirm = Session::get(SESSION_NETWORK_CONFIRM);

	$s_network_id = '';
	$s_network_name = '';
	$s_enabled_flag = '';
	$s_enabled_name = '';
	$s_update_time  = '';

	if ($v_res_network_confirm != null) {
		// エラーメッセージ
		$s_network_id = $v_res_network_confirm->v_dto_network_confirm->s_network_id;
		$s_network_name = $v_res_network_confirm->v_dto_network_confirm->s_network_name;
		$s_enabled_flag = $v_res_network_confirm->v_dto_network_confirm->s_enabled_flag;
		$s_enabled_name = $v_res_network_confirm->v_dto_network_confirm->s_enabled_name;
		$s_update_time = $v_res_network_confirm->v_dto_network_confirm->s_update_time;
	}
?>

<script type="text/javascript">
$(function(){

	// [戻る]ボタン
	$("#back").click(function(){

		if (document.formFlg.executeFlg.value == true){
			return;
		} else {
			document.formFlg.executeFlg.value = true;
			document.formBack.submit();
			document.formFlg.executeFlg.value = false;
		}
		return false;
	});

	// [次へ]ボタン
	$("#next").click(function(){
		if (document.formFlg.executeFlg.value == true){
			return;
		} else {
			document.formFlg.executeFlg.value = true;
			document.formDetail.submit();
			document.formFlg.executeFlg.value = false;
		}
		return false;
	});
});
</script>

<!-- パンくず -->
<ul class="breadcrumb">
	<?php print make_breadcrumb();?>
</ul>

<p>以下の内容でよろしければ、実行ボタンを押してください。</p>
<?php echo Form::Open(array('action' => URL_NETWORK_DETAIL_EXEC, 'name' => 'formDetail', 'class' => 'form-horizontal well'))."\n"?>

	<div class="form-group">
		<label class="col-xs-3" style="text-align: left;">ネットワーク名</label>
		<div class="col-xs-9"><?php echo $s_network_name;?></div>
	</div>
	<div class="form-group">
		<label class="col-xs-3" style="text-align: left;">有効無効フラグ</label>
		<div class="col-xs-9"><?php echo $s_enabled_name;?></div>
	</div>
	<div class="form-group">
		<div class="col-xs-offset-3 col-xs-9">
			<input type="button" id="next" value="実行" class="btn btn-default btn-md">
			<input type="button" id="back" value="戻る" class="btn btn-default btn-md">
		</div>
	</div>
	<input type="hidden" name="s_network_id" value="<?php echo $s_network_id; ?>">
	<input type="hidden" name="s_network_name" value="<?php echo $s_network_name; ?>">
	<input type="hidden" name="s_enabled_flag" value="<?php echo $s_enabled_flag; ?>">
	<input type="hidden" name="s_update_time" value="<?php echo $s_update_time; ?>">
<?php echo Form::Close()?>

<!-- 戻るボタン対応 -->
<?php echo Form::Open(array('action' => URL_NETWORK_DETAIL_BACK, 'name' => 'formBack'))."\n"?>
<?php echo Form::Close()?>

