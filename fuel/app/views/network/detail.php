<?php

	use Fuel\Core\Uri;

	// Sessionから共通情報を取得
	$s_error_msg = '';
	$v_res_network_detail = Session::get(SESSION_NETWORK_DETAIL);

	$s_network_id = '';
	$s_network_name = '';
	$s_enabled_flag = '';
	$s_update_time  = '';
	$s_enable_true_str = "";
	$s_enable_false_str = "";


	$s_error_network_name = "";
	$s_error_enabled_flag = "";
	$s_error_hole = "";

	$s_errordiv_network_name = "";
	$s_errordiv_enabled_flag = "";

	if ($v_res_network_detail != null) {

		// エラーメッセージ
		$a_error_msg = $v_res_network_detail->v_dto_rescommon->a_error_msg;
		if (count($a_error_msg) != 0)
		{
			for ($i=0; $i<count($a_error_msg); $i++)
			{
				$s_col_name = $a_error_msg[$i]->s_col_name;
				$s_error_msg = $a_error_msg[$i]->s_error_msg;
				switch ($s_col_name)
				{
					case "s_network_name":
						$s_error_network_name = $s_error_msg;
						$s_errordiv_network_name = ERROR_DIV_STR;
						break;
					case "s_enabled_flag":
						$s_error_enabled_flag = $s_error_msg;
						$s_errordiv_enabled_flag = ERROR_DIV_STR;
						break;
					default:
						$s_error_hole = $s_error_msg;
						break;
				}
			}
		}

		$s_network_id = $v_res_network_detail->v_dto_network_detail->s_network_id;

		$s_network_name = $v_res_network_detail->v_dto_network_detail->s_network_name;
		$s_enabled_flag = $v_res_network_detail->v_dto_network_detail->s_enabled_flag;
		$s_enabled_name = $v_res_network_detail->v_dto_network_detail->s_enabled_name;
		$s_update_time = $v_res_network_detail->v_dto_network_detail->s_update_time;
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
			var f = document.formDetail;

			switch (f.s_enabled_flag.value){
				case "0":f.s_enabled_name.value = "無効"; break;
				case "1":f.s_enabled_name.value = "有効"; break;
			}

			document.formDetail.submit();
			document.formFlg.executeFlg.value = false;
		}

		return false;
	});

	// [やり直し]ボタン
	$("#reset").click(function(){
		if (document.formFlg.executeFlg.value == true){
			return;
		} else {

			document.formFlg.executeFlg.value = true;
			document.formDetail.s_network_name.value = "";
			document.formDetail.s_enabled_flag.selectedIndex = 1;
			document.formFlg.executeFlg.value = false;
		}
	});
});

// 項目別ではないエラーのとき
<?php if ($s_error_hole != "") {?>
	showNotification({message: '<?php echo $s_error_hole; ?>',autoClose: true,duration: 2});
<?php } ?>

</script>


<!-- パンくず -->
<ul class="breadcrumb">
	<?php print make_breadcrumb();?>
</ul>

<?php echo Form::Open(array('action' => URL_NETWORK_DETAIL_NEXT, 'name' => 'formDetail', 'class' => 'form-horizontal well'))."\n"?>
<div class="form-group <?php echo $s_errordiv_network_name; ?>">
	<label class="col-xs-3 control-label" style="text-align: left;">ネットワーク名<span style="color:red;">※</span></label>
		<div class="col-xs-9">
			<input type="text" name="s_network_name" value="<?php echo $s_network_name;?>" placeholder="ネットワーク名を入力してください" class="form-control"/>
			<?php
			if ($s_error_network_name != "")
			{
				echo '<span class="help-block">' .$s_error_network_name. '</span>';
			}
			?>

		</div>
	</div>
	<div class="form-group <?php echo $s_errordiv_enabled_flag; ?>">
		<label class="col-xs-3 control-label" style="text-align: left;">有効無効フラグ<span style="color:red;">※</span></label>
		<div class="col-xs-9">

<?php
	switch ($s_enabled_flag)
	{
		case '0':$s_enable_false_str = " selected"; break;
		case '1':$s_enable_true_str = " selected"; break;
	}
?>
	<select name="s_enabled_flag" class="form-control">
			<option value="">有効無効フラグを選択してください</option>
			<option value="1" <?php echo $s_enable_true_str; ?>>有効</option>
			<option value="0" <?php echo $s_enable_false_str; ?>>無効</option>
		</select>
<?php
		if ($s_error_enabled_flag != "")
		{
			echo '<span class="help-block">' .$s_error_enabled_flag. '</span>';
		}
?>
	</div>
</div>


	<div class="form-group">
		<div class="col-xs-offset-3 col-xs-9">
			<input type="button" id="next" value="次へ" class="btn btn-default btn-md">

			<!-- 新規のときだけ[やり直し]ボタンを表示 -->
			<?php if($s_network_id == null || $s_network_id == '') {?>
			<input type="button" id="reset" value="やり直し" class="btn btn-default btn-md">'
			<?php } ?>
			<input type="button" id="back" value="戻る" class="btn btn-default btn-md">
		</div>
	</div>

	<input type="hidden" name="s_update_time" value="<?php echo $s_update_time; ?>">
	<input type="hidden" name="s_network_id" value="<?php echo $s_network_id; ?>">
	<input type="hidden" name="s_enabled_name" value="">
<?php echo Form::Close()?>

<!-- 戻るボタン対応 -->
<?php echo Form::Open(array('action' => URL_NETWORK_LIST_BACK, 'name' => 'formBack'))."\n"?>
<?php echo Form::Close()?>

