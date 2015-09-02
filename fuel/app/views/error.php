<div id='errorDisplay'>

<?php
	$v_dto_error = util_sessionaccessor::get_session(SESSION_ERROR);
	print ERROR_TOP;
	print '<br>';
	print $v_dto_error->s_error_msg;
?>

</div>