

<script>

// function setHeaderAction(val) {
// 	var f1 = document.formHeader;

// 	switch (val) {
// 		case 0:
// 			f1.action = 'login';
// 			break;
// 		case 1:
//			f1.action = '<?php print Uri::base(); ?>password/main/';
// 			break;
// 		case 2:
//			f1.action = '<?php print Uri::base(); ?>login/logout';
// 			break;
// 	}

// 	f1.submit();
// }


// function setKubun(kubunName, imageID, image) {
// 	// 区分タブ切り替え用のフォームをsubmit
// 	var f = document.formKubunTab;
// 	f.kubun.value = kubunName;
// 	f.submit();
// }


// function setLogin() {
// 	var f = document.formLogin;
// 	f.submit();
// }


</script>

<div id='header'>
	<?php echo Form::Open(array('action' => '', 'name' => 'formHeader'))."\n"?>

	<table class='tablebase' style='width:100%'>
    	<tr>
    		<td bgcolor="#483D8B" width="100%">
    			<table class='tablebase' style='width:100%'>
    				<tr>
    					<td rowspan='2'>
    						<a href="<?php print Uri::base().URL_LOGIN; ?>">ジョブ・マリッジ～Job Marriage～</a>
    					</td>
       				</tr>
       			</table>
    		</td>
    	</tr>

    </table>

    <?php echo Form::Close()?>



	<!-- ログイン用Form -->
   	<?php echo Form::Open(array('action' => URL_LOGIN, 'name' => 'formLogin'))."\n"?>
    <?php echo Form::Close()?>

</div>

