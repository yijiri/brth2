<?php
	use Fuel\Core\Uri;

	// Sessionから共通情報を取得
	$v_dto_common = Session::get(SESSION_COMMON);
	$s_display = '';
	$s_login_tab_display = '';
	$s_kubun_tab_display = '';
	$s_time = '';
	$s_name = '';
	$s_store_name = '';
	$s_current_kubun = '';

	$s_login_auth = '';
	$s_role = '';

	if ($v_dto_common == null || $v_dto_common->b_login_flg !== true) {
		$s_display = 'none';
		$s_login_tab_display = 'block';
		$s_kubun_tab_display = 'none';
	} else {
		$s_display = 'block';
		$s_login_tab_display = 'none';
		$s_kubun_tab_display = 'block';

		$s_name = $v_dto_common->s_login_name;
		$s_time = date('Y/m/d H:i:s');
		/*
		$s_current_kubun = $v_dto_common->s_current_kubun;
		$s_login_auth = $v_dto_common->s_login_auth;
		$s_role = $v_dto_common->s_role;

		switch ($s_login_auth)
		{
			case LOGIN_AUTH_PD;	//PDの場合
			case LOGIN_AUTH_AGENCY;	//代理店の場合
				$s_store_name = $v_dto_common->s_agency_name;
				break;
			case LOGIN_AUTH_MEMBER;	//加盟店の場合
				$s_store_name = $v_dto_common->s_member_name;
				break;
		}
		*/
	}
?>


<div class="col-xs-2 sidebar">
	<ul class="nav nav-sidebar list-group">
		<li class="list-group-item"><a href="/home/list">ホーム</a></li>
		<li class="list-group-item">
    		<a data-toggle="collapse" href="#menu1" class="accordion-title">チャンネル申請</a>
    		<div id="menu1" class="panel-collapse collapse accordion-body">
      			<div class="panel-body">
        			<ul class="list-group">
        				<li class="list-group-item"><a href="/offer/regist/input">利用申請</a></li>
          				<li class="list-group-item"><a href="/offer/update/input">変更申請</a></li>
          				<li class="list-group-item"><a href="/offer/close/input">終了申請</a></li>
          				<li class="list-group-item"><a href="/offer/search/list">申請照会</a></li>
          				<li class="list-group-item"><a href="/offer/approve/list">変更申請承認</a></li>
        			</ul>
      			</div>
    		</div>
  		</li>
  		<li class="list-group-item">
    		<a data-toggle="collapse" href="#menu2" class="accordion-title">MDR変更申請</a>
    		<div id="menu2" class="panel-collapse collapse accordion-body">
      			<div class="panel-body">
        			<ul class="list-group">
        				<li class="list-group-item"><a href="/change/channel/list">チャンネルごとの変更</a></li>
          				<li class="list-group-item"><a href="/change/sub/list">共通予備の変更</a></li>
          				<li class="list-group-item"><a href="/change/switch/list">本線予備切替</a></li>
        			</ul>
      			</div>
    		</div>
  		</li>
  		<li class="list-group-item">
    		<a data-toggle="collapse" href="#menu3" class="accordion-title">鍵開け依頼<span id="home_badge" class="badge text-right"></span></a>
    		<div id="menu3" class="panel-collapse collapse accordion-body">
      			<div class="panel-body">
        			<ul class="list-group">
        				<li class="list-group-item"><a href="/request/regist/list">依頼書作成</a></li>
          				<li class="list-group-item"><a href="/request/approve/list">依頼書承認<span id="home_badge" class="badge text-right"></span></a></li>
          				<li class="list-group-item"><a href="/request/search/list">依頼書照会</a></li>
        			</ul>
      			</div>
    		</div>
  		</li>
		<li class="list-group-item">
    		<a data-toggle="collapse" href="#menu4" class="accordion-title">オペレータ管理</a>
    		<div id="menu4" class="panel-collapse collapse accordion-body">
      			<div class="panel-body">
        			<ul class="list-group">
        				<li class="list-group-item"><a href="/operator/main">照会 / 変更</a></li>
          				<li class="list-group-item"><a href="/operator/detail">作成</a></li>
        			</ul>
      			</div>
    		</div>
  		</li>
  		<li class="list-group-item">
    		<a data-toggle="collapse" href="#menu5" class="accordion-title">サプライヤ管理</a>
    		<div id="menu5" class="panel-collapse collapse accordion-body">
      			<div class="panel-body">
        			<ul class="list-group">
        				<li class="list-group-item"><a href="/supplier/list">照会 / 変更</a></li>
          				<li class="list-group-item"><a href="/supplier/input">作成</a></li>
        			</ul>
      			</div>
    		</div>
  		</li>
  		<li class="list-group-item">
    		<a data-toggle="collapse" href="#menu6" class="accordion-title">ユーザー管理</a>
    		<div id="menu6" class="panel-collapse collapse accordion-body">
      			<div class="panel-body">
        			<ul class="list-group">
        				<li class="list-group-item"><a href="/user/list">照会 / 変更</a></li>
          				<li class="list-group-item"><a href="/user/input">作成</a></li>
        			</ul>
      			</div>
    		</div>
  		</li>
  		<li class="list-group-item">
    		<a data-toggle="collapse" href="#menu7" class="accordion-title">MDR管理</a>
    		<div id="menu7" class="panel-collapse collapse accordion-body">
      			<div class="panel-body">
        			<ul class="list-group">
        				<li class="list-group-item"><a href="/mdr/list">照会 / 変更</a></li>
          				<li class="list-group-item"><a href="/mdr/input">作成</a></li>
        			</ul>
      			</div>
    		</div>
  		</li>
  		<li class="list-group-item">
    		<a data-toggle="collapse" href="#menu8" class="accordion-title">チャンネル管理</a>
    		<div id="menu8" class="panel-collapse collapse accordion-body">
      			<div class="panel-body">
        			<ul class="list-group">
        				<li class="list-group-item"><a href="/channel/list">照会 / 変更</a></li>
          				<li class="list-group-item"><a href="/channel/input">作成</a></li>
        			</ul>
      			</div>
    		</div>
  		</li>
  		<li class="list-group-item">
    		<a data-toggle="collapse" href="#menu9" class="accordion-title">ネットワーク管理</a>
    		<div id="menu9" class="panel-collapse collapse accordion-body">
      			<div class="panel-body">
        			<ul class="list-group">
        				<li class="list-group-item"><a href="/keyman/network/list">照会 / 変更</a></li>
          				<li class="list-group-item"><a href="/keyman/network/detail/new">作成</a></li>
        			</ul>
      			</div>
    		</div>
  		</li>
  		<li class="list-group-item">
    		<a data-toggle="collapse" href="#menu10" class="accordion-title">ヘッドエンド管理</a>
    		<div id="menu10" class="panel-collapse collapse accordion-body">
      			<div class="panel-body">
        			<ul class="list-group">
        				<li class="list-group-item"><a href="/headend/list">照会 / 変更</a></li>
          				<li class="list-group-item"><a href="/headend/input">作成</a></li>
        			</ul>
      			</div>
    		</div>
  		</li>
	</ul>
</div>

