<?php
	use Fuel\Core\Uri;

	$s_human_name = '';
	$s_rec = "";
	$s_column_name = "";
	$s_column_info = "";
	$table_width = 100;
	$s_list_row = "";
	$a_dto_matching_searchhumanrow = null;

	// Sessionから値を取得
	$v_res_matching_projectlist = Session::get(SESSION_MATCHING_PROJECT_LIST);

	if ($v_res_matching_projectlist != null) {

		$a_dto_matching_projectrow = $v_res_matching_projectlist->a_dto_matching_projectrow;

/* 		// 一覧ヘッダ
		$v_dto_columnheader = $v_res_matching_searchhuman->v_dto_columnheader;
		// エラーメッセージ
		//$s_error_msg = util_list::change_array2str($v_res_search_main->v_dto_rescommon->a_error_msg);

		// カラムヘッダ名を取得
		$s_column_name = util_list::get_column_name($v_dto_columnheader);
		// カラムヘッダ情報を取得
		$s_column_info = util_list::get_column_info($v_dto_columnheader);
		// レコードを取得
		$s_rec = util_list::get_record($v_res_matching_searchhuman, $v_dto_columnheader, 'a_dto_matching_searchhumanrow');
		// テーブルの幅を取得
		$table_width = util_list::get_table_width($v_dto_columnheader);
		$table_width += 51; */
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


//[検索]ボタン
function setSearch()
{
	if (document.formFlg.executeFlg.value == true){
		return;
	} else {
		document.formFlg.executeFlg.value = true;
		document.formSearch.submit();
		document.formFlg.executeFlg.value = false;
	}
}


function setDetail(id)
{
	if (document.formFlg.executeFlg.value == true){
		return;
	} else {
		document.formFlg.executeFlg.value = true;
		document.formDetail.s_human_id.value = id;
		document.formDetail.submit();
		document.formFlg.executeFlg.value = false;
	}
}


$(function(){


	// [検索]ボタン
/* 	$("#search").click(function(){
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
	}); */
});

</script>


<?php echo Form::Open(array('action' => URL_MATCHING_SEARCH_HUMAN_LIST, 'name' => 'formSearch', 'class' => 'form-horizontal well'))."\n"?>
	<div class="row">
		<div class="col-xs-6">
			<div class="form-group col-xs-12">
				<input type="button" id="search" value="マッチング！" style="width:100px" onclick="setSearch();">
			</div>
		</div>
	</div>
</table>

<br>
<br>
<?php echo Form::Close()?>

<center>
	<table class="table table-bordered table-hover table-condensed" style="width:50%">
	<thead>
		<tr>
			<th width="20"></th>
			<th>プロジェクトID</th>
			<th>プロジェクト名</th>
			<th>勤務地</th>
		</tr>
	</thead>
	<tbody>

	<!-- 一覧 -->
<?php
	if ($a_dto_matching_projectrow != null && count($a_dto_matching_projectrow) != 0) {

		foreach ($a_dto_matching_projectrow as $v_dto_matching_projectrow)
		{
			echo '<tr>';
			//echo '<td><a href="javascript:void(0);" class="record" id="' .$v_dto_network_row->s_network_id. '">' .$v_dto_network_row->s_network_name. '</a></td>';
			echo '	<td><input type="checkbox"></td>';
			echo '	<td>' .$v_dto_matching_projectrow->s_project_id. '</td>';
			echo '	<td>' .$v_dto_matching_projectrow->s_project_name. '</td>';
			echo '	<td>' .$v_dto_matching_projectrow->s_project_location. '</td>';
			echo '<tr>';
		}
	}
?>
	</tbody>
</table>


				<input type="button" id="search" value="紹介" style="width:80px" onclick="setSearch();">
				<input type="button" id="search" value="戻る" style="width:80px" onclick="setBack();">
</center>

<!-- 明細画面表示用 -->
<?php echo Form::Open(array('action' => URL_MATCHING_PROJECT_LIST, 'name' => 'formDetail'))."\n"?>
	<input type="hidden" name="s_human_id" value="">
<?php echo Form::Close()?>

<!-- [戻る]ボタン用 -->
<?php echo Form::Open(array('action' => URL_MATCHING_SEARCH_HUMAN_LIST, 'name' => 'formBack'))."\n"?>
<?php echo Form::Close()?>
