
function swapImg(image,obj) {

	// 選択されている機能の画像なら何もしない
	if(obj.src.slice(-5) == 'A.gif'){
		return;
	}
	obj.src = image;
	return;
}


// 一覧の左端のチェックボックスで選ばれた行のIP_CODEを配列につめて返す
function getIds(tblname)
{
	var ret = [];

	// 選択行の行IDを配列で取得
    var selrows = jQuery(tblname).getGridParam('selarrrow');
    var msg = "";

    if (selrows.length > 0)
    {
        for (var i = 0; i < selrows.length; i++)
        {
            // 選択行
            var row = $(tblname).getRowData(selrows[i]);
            var val = $(row.s_ip_code).text();

            if (val == '') {
            	val = row.s_ip_code;
            }
            ret.push(val);
        }
    }
    else
    {
        alert("行を選択してください。");
    }
    return ret;
}


/**
 *  一覧でリンク表示するときのフォーマットを定義。
 	リンクがクリックされると「clickListLink」関数に、
 		第一引数：セルの値
		第一引数：RowID
 	セットされてコールされる
 */

function myLinkFormat(cellvalue, options, rowObject)
{
	// セルの値
	var cVal = cellvalue;
	cVal = returnedSingleQort(cVal)
	cVal = returnedBackSlash(cVal);

	if (cellvalue != '空欄' && cellvalue != '未定' && cellvalue != 'なし') {
		return '<a href="javascript:clickListLink(\'' + cVal + '\',' + returnedSingleQort(options.rowId) + ',\'' + returnedSingleQort(options.colModel.name) + '\')">' + cellvalue + '</a>';
	} else {
		return cellvalue;
	}
}

/**
 * コード化されているシングルコーテーションを戻す
 * 「\」でエスケープする
 * @param str
 * @returns
 */
function returnedSingleQort(str)
{
	return str.split('&apos;').join('\\');
}


/**
 * コード化されているバックスラッシュを戻す
 * 「\」でエスケープする
 * @param str
 * @returns
 */
function returnedBackSlash(str)
{
	return str.split('&#092;').join('\\\\');
}


/**
 * 「\」でエスケープする
 * @param str
 * @returns
 */
function escapeSingleQort(str)
{
	return str.split("'").join("&#092;'");
}


/**
 * ダブルコーテーションをコードにする
 * @param str
 * @returns
 */
function replaceDoubleQort(str)
{
	return str.split('"').join("&quot;");
}


/**
 * 「\」をエスケープする
 * @param str
 * @returns
 */
function escapeBackSlash(str)
{
	return str.split('\\').join('\\\\');
}


/**
 * 文字列のバイト数を返す
 * @param 文字列
 * @returns バイト数
 */
function countLength(str) {
    var r = 0;
    for (var i = 0; i < str.length; i++) {
        var c = str.charCodeAt(i);
        // Shift_JIS: 0x0 ～ 0x80, 0xa0 , 0xa1 ～ 0xdf , 0xfd ～ 0xff
        // Unicode : 0x0 ～ 0x80, 0xf8f0, 0xff61 ～ 0xff9f, 0xf8f1 ～ 0xf8f3
        if ( (c >= 0x0 && c < 0x81) || (c == 0xf8f0) || (c >= 0xff61 && c < 0xffa0) || (c >= 0xf8f1 && c < 0xf8f4)) {
            r += 1;
        } else {
            r += 2;
        }
    }
    return r;
}


/**
 * 先月を取得
 * @param 		形式
 * @returns		先月
 */
function getPreMonth(retType){

	var nowDate = new Date();
	nowDate.setDate(0);

	var y;
	var m;
	var pre_month;

	switch (retType)
	{
		case '0':
			// YYMM
			y = String(nowDate.getFullYear()).substr(2,2);
			m = String(100 + nowDate.getMonth() + 1).substr(1,2);
			pre_month = y + m;
			break;
		case '1':
			// YYYY/MM
			y = String(nowDate.getFullYear());
			m = String(100 + nowDate.getMonth() + 1).substr(1,2);
			pre_month = y + '/' + m;
			break;
	}

	return pre_month;
}


