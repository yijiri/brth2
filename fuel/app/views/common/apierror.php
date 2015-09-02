<?php
	$s_url = Uri::create(URL_SEARCH_RESULT_BACK);
?>

<div align='center'>

内部エラーが発生しました。

<div style='padding-bottom: 10px;'></div>
<?php print Asset::img('btn_close.gif', array('onClick' => 'window.parent.closeMsgPop(\'' .$s_url. '\');')); ?>

</div>

