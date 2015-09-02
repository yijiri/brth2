<?php
	use Fuel\Core\Uri;

	// Sessionから共通情報を取得
	$s_msg = '';
	$s_error_msg = '';
	$v_res_network_list = Session::get(SESSION_NETWORK_LIST);

	// ページャ
	$l_current_page = '';
	$l_back_page = '';
	$i_page_num = '';
	$i_display_num = '';

	// 検索条件
	$s_network_name = '';

	// 一覧データ
	$a_dto_network_row = array();

	if ($v_res_network_list != null) {

		// メッセージ
		$s_msg = $v_res_network_list->v_dto_rescommon->s_msg;

		// エラーメッセージ
		$a_error_msg = $v_res_network_list->v_dto_rescommon->a_error_msg;
		if (count($a_error_msg) != 0) {
			$s_error_msg = $a_error_msg[0]->s_error_msg;
		}

		$v_dto_network_condition = $v_res_network_list->v_dto_network_condition;
		$s_network_name = $v_dto_network_condition->s_network_name;
		$a_dto_network_row = $v_res_network_list->a_dto_network_row;

		// カレントページ
		$l_current_page = $v_res_network_list->v_dto_listcommon->i_current_page;
		// 全ページ数
		$i_page_num = $v_res_network_list->v_dto_listcommon->i_page_num;
		// 1ページの表示件数
		$i_display_num = $v_res_network_list->v_dto_listcommon->i_display_num;
	}
?>

<script type="text/javascript">
// [送信]ボタン
function setAction()
{
	if (document.formFlg.executeFlg.value == true){
		return;
	} else {

		document.formFlg.executeFlg.value = true;
		document.formEdit.submit();
		document.formFlg.executeFlg.value = false;
	}
}


// [戻る]ボタン
function setBack()
{
	if (document.formFlg.executeFlg.value == true){
		return;
	} else {
		document.formFlg.executeFlg.value = true;
		document.formBack.submit();
		document.formFlg.executeFlg.value = false;
	}
}

$(function(){
	// ページャー
	$(".paging").click(function(){
		if (document.formFlg.executeFlg.value == true){
			return;
		} else {
			document.formFlg.executeFlg.value = true;
			document.formSearch.i_current_page.value = $(this).attr("current_page");
			document.formSearch.submit();
			document.formFlg.executeFlg.value = false;
		}

		return false;
	});

	// [検索]ボタン
	$("#search").click(function(){
		if (document.formFlg.executeFlg.value == true){
			return;
		} else {
			document.formFlg.executeFlg.value = true;
			document.formSearch.i_current_page.value = 1;
			document.formSearch.submit();
			document.formFlg.executeFlg.value = false;
		}

		return false;
	});

	// [明細]へ遷移するリンク
	$(".record").click(function(){
		if (document.formFlg.executeFlg.value == true){
			return;
		} else {
			document.formFlg.executeFlg.value = true;
			document.formDetail.s_network_id.value = $(this).attr("id")
			document.formDetail.submit();
			document.formFlg.executeFlg.value = false;
		}

		return false;
	});
});


// メッセージ
<?php if ($s_msg != "") {?>
	showNotification({message: '<?php echo $s_msg; ?>',autoClose: true,duration: 2});
<?php } ?>

// エラーメッセージ
<?php if ($s_error_msg != "") {?>
	showNotification({message: '<?php echo $s_error_msg; ?>',autoClose: true,duration: 2});
<?php } ?>

</script>

<!-- パンくず -->
<ul class="breadcrumb">
	<?php print make_breadcrumb();?>
</ul>

<?php echo Form::Open(array('action' => URL_NETWORK_LIST_SEARCH, 'name' => 'formSearch', 'class' => 'form-horizontal well'))."\n"?>
	<div class="row">
		<div class="col-xs-6">
			<div class="form-group col-xs-12">
				<label class="control-label" style="text-align: left;">ネットワーク名</label>
					<div class="">
						<input type="text" name="s_network_name" value="<?php echo $s_network_name; ?>" placeholder="ネットワーク名を入力してください" class="form-control"/>
					</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6">
			<div class="form-group col-xs-12">
				<input type="button" id="search" value="検索" class="btn btn-default btn-md">
			</div>
		</div>
	</div>

	<input type="hidden" name="i_current_page" value="<?php echo $l_current_page;?>">
<?php echo Form::Close()?>

<table class="table table-bordered table-hover table-condensed">
	<thead>
		<tr>
			<th>ネットワーク名</th>
			<th>有効無効フラグ</th>
		</tr>
	</thead>
	<tbody>

	<!-- 一覧 -->
<?php
	if ($a_dto_network_row != null && count($a_dto_network_row) != 0) {

		foreach ($a_dto_network_row as $v_dto_network_row)
		{
			echo '<tr>';
			echo '<td><a href="javascript:void(0);" class="record" id="' .$v_dto_network_row->s_network_id. '">' .$v_dto_network_row->s_network_name. '</a></td>';
			echo '	<td>' .util_decord::enable_decord($v_dto_network_row->s_enabled_flag). '</td>';
			echo '<tr>';
		}
	}
?>
	</tbody>
</table>

<!-- ページャー -->
<div class="text-center">
    <ul class="pagination">
	    <?php print make_pager($l_current_page, $l_back_page, $i_page_num, $i_display_num);?>
	</ul>
</div>


<!-- 明細画面表示用 -->
<?php echo Form::Open(array('action' => URL_NETWORK_DETAIL, 'name' => 'formDetail'))."\n"?>
	<input type="hidden" name="s_network_id" value="">
<?php echo Form::Close()?>

<!-- [戻る]ボタン用 -->
<?php echo Form::Open(array('action' => URL_HOME_MAIN, 'name' => 'formBack'))."\n"?>
<?php echo Form::Close()?>
