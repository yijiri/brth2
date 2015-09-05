<?php
	use Fuel\Core\Uri;

	//$s_human_name = '';
	$s_rec = "";
	$s_column_name = "";
	$s_column_info = "";
	$table_width = 100;
	$s_list_row = "";

	// Sessionから値を取得
	$v_res_matching_projectlist = Session::get(SESSION_MATCHING_PROJECT_LIST);

	if ($v_res_matching_projectlist != null) {

		// 一覧ヘッダ
		$v_dto_columnheader = $v_res_matching_projectlist->v_dto_columnheader;
		// エラーメッセージ
		//$s_error_msg = util_list::change_array2str($v_res_search_main->v_dto_rescommon->a_error_msg);

		// カラムヘッダ名を取得
		$s_column_name = util_list::get_column_name($v_dto_columnheader);
		// カラムヘッダ情報を取得
		$s_column_info = util_list::get_column_info($v_dto_columnheader);
		// レコードを取得
		$s_rec = util_list::get_record($v_res_matching_projectlist, $v_dto_columnheader, 'a_dto_matching_projectrow');
		// テーブルの幅を取得
		$table_width = util_list::get_table_width($v_dto_columnheader);
		$table_width += 51;

	}


/* 	// Sessionから共通情報を取得
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
	} */
?>

<script type="text/javascript">


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

</script>


<?php echo Form::Open(array('action' => URL_MATCHING_SEARCH_HUMAN_LIST, 'name' => 'formSearch', 'class' => 'form-horizontal well'))."\n"?>
	<table>
		<tr>
			<td>人材名</td>
			<td><input type="text" name="s_human_name" value="<?php echo $s_human_name; ?>" placeholder="人材名を入力してください" /></td>
		</tr>
	</table>

	<br>
	<br>

	<div class="row">
		<div class="col-xs-6">
			<div class="form-group col-xs-12">
				<input type="button" id="search" value="検索" style="width:80px">
			</div>
		</div>
	</div>
</table>

<br>
<br>

	<script type="text/javascript">
		jQuery(document).ready(function()
		{
			// レコード
			var records = [<?php print $s_rec; ?>];
			// ヘッダ名
			var colNames = [<?php print $s_column_name; ?>];
			// ヘッダ情報
			var colModelSettings= [<?php print $s_column_info; ?>];

			jQuery("#searchTable").jqGrid({
				data:records,
				datatype : "local",
				colNames : colNames,
				colModel : colModelSettings,
				rowNum : <?php print DEFAULT_NUM; ?>,
				rowList : [<?php print DISPLAY_NUM; ?>],
				height : '100%',
				width : <?php print $table_width; ?>,
				pager : 'pager',
				shrinkToFit : false,
				multiselect: true,
				viewrecords: true
			});

			//var rowNum = jQuery("#searchTable").jqGrid("getGridParam", "rowNum");

		});
	</script>


<!-- 明細画面表示用 -->
<?php echo Form::Open(array('action' => URL_NETWORK_DETAIL, 'name' => 'formDetail'))."\n"?>
	<input type="hidden" name="s_network_id" value="">
<?php echo Form::Close()?>

<!-- [戻る]ボタン用 -->
<?php echo Form::Open(array('action' => URL_HOME_MAIN, 'name' => 'formBack'))."\n"?>
<?php echo Form::Close()?>
