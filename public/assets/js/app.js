$(window).load(function() {

	//アコーディオンを開いた時
	$(".collapse").on('show.bs.collapse', function(){
		 var key = $(this).attr('id');
		 $.cookie(key, "open");

    });

	//アコーディオンを閉じた時
	$(".collapse").on('hide.bs.collapse', function(){
		 var key = $(this).attr('id');
		 $.cookie(key,'',{expires:-1});
    });

	//アコーディオンの状態保持
//	$.each($.cookie(), function(key, val) {
//		if(key.indexOf("menu") > -1){
//			$("#" + key).collapse();
//		}
//	});

//  //アコーディオンのタイトルをクリック時
//  $('.accordion-title').on('click', function() {
//  	var index = $('.accordion-title').index(this);
//  	//open -> close
//  	if($('.accordion-body:eq('+ index +')').hasClass("in")){
//  		 $.cookie($('.accordion-body:eq('+ index +')').attr("id"),'',{expires:-1});
//  	//close -> open
//  	}else{
//  		$.cookie($('.accordion-body:eq('+ index +')').attr("id"), "open");
//  	}
//
//  });
//
//	//アコーディオンの状態保持
//  $('.accordion-body').each(function(k, v) {
//      var key = $(v).attr('id');
//      if ($.cookie(key) == "open") {
//      	$(v).addClass("in");
//      }else{
//      	$(v).removeClass("in");
//      }
//  });

//    function get_cookies() {
//    	var result = "";
//    	if (document.cookie) {
//    		var cookies = document.cookie.split("; ");
//    		for	(var i = 0; i < cookies.length; i++) {
//    			var	tokens = cookies[i].split("=");
//    			var n = tokens[0];
//    			var v = unescape(tokens[1]);
//    			result += n + " = " + v + "<br/>\n";
//    		}
//    	}
//    	return result;
//    }
//
//    function update_display() {
//    	var c = get_cookies();
//    	c = new Date() + "<br/><br/>\n" + c;
//    	var e = document.getElementById("realtime");
//    	e.innerHTML = c;
//    }
//
//    update_display();
//    timer = setTimeout(timer_handler, 500);
//
//    function timer_handler() {
//    	update_display();
//    	timer = setTimeout(timer_handler, 500);
//    }

	//ページング
	$('.paging').on('click', function() {
		$("form").append($('<input/>',{type:'hidden',name:'current_page',value:$(this).attr('current_page')}));
		$("[name=search]").trigger('click');
	});

	//カレンダー
	$.datepicker.regional['ja'] = {
		closeText: '閉じる',
		prevText: '&#x3c;前',
		nextText: '次&#x3e;',
		currentText: '今日',
		monthNames: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
		monthNamesShort: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
		dayNames: ['日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日'],
		dayNamesShort: ['日','月','火','水','木','金','土'],
		dayNamesMin: ['日','月','火','水','木','金','土'],
		weekHeader: '週',
		dateFormat: 'yy-mm-dd',
		firstDay: 0,
		isRTL: false,
		showMonthAfterYear: true,
		yearSuffix: '年'
	};
	$.datepicker.setDefaults($.datepicker.regional['ja']);
	$(".datepicker").datepicker();

	//完了メッセージ
    var url = location.href;
    if(url.indexOf("?") > -1){
    	var parameters = url.split("?");
    	var params = parameters[1].split("&");
    	for (i=0;i< params.length;i++ ) {
    		var neet = params[i].split("=");
    	    if(neet[0] == 'type'){
    	    	switch (neet[1]){
    	    		case 'regist':
    	    			showNotification({message: '登録処理が完了しました',autoClose: true,duration: 2});
    	    			break;
    	    		case 'update':
    	    			showNotification({message: '更新処理が完了しました',autoClose: true,duration: 2});
    	    			break;
    	    		case 'login':
    	    			showNotification({message: 'ログインが完了しました',autoClose: true,duration: 2});
    	    			break;
    	    		case 'logout':
    	    			showNotification({message: 'ログアウトが完了しました',autoClose: true,duration: 2});
    	    			break;
    	    	}
    	    }
    	}
    }

});