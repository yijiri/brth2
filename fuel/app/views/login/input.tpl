<!DOCTYPE html>
<html lang="ja">
	<head>
		{include file='common/meta.tpl'}
		{include file='common/import.tpl'}
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
            			<form action="/login/company" method="post" class="form-horizontal well">
            				<h4 style="margin-bottom:20px;">ログイン</h4>
            				<div class="form-group">
								<div class="col-xs-12">
									<input type="text" name="" value="" placeholder="ユーザID(メールアドレス)を入力してください" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-12">
									<input type="password" name="" value="" placeholder="パスワードを入力してください" class="form-control"/>
								</div>
							</div>
							<div class="login-button">
						        <span class="group-btn">
						        	<input type="submit" name="login" value="ログイン" class="btn btn-default btn-md">
						    	</span>
					    	</div>
           				</form>
            		</div>
        		</div>
    		</div>
		</div>
		{include file='common/after.tpl'}
	</body>
</html>