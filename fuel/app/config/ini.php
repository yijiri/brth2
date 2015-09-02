<?php

use Fuel\Core\Uri;

// 暗号化API：ホストIP
define('ENCRYPT_HOST', 'localhost');

// 暗号化API：パスワード
define('ENCRYPT_PASSWORD', 'c8c6h1e1ck');

// サイトURL(publicフォルダを移動したことによりUriクラスで取得できなくなったため定義)
define('URL_BASE', 'http://localhost');

// PD USER_ID
define('PD_USER_ID', 'paydesign_autoauth');

// APIタイムアウト(ミリ秒)
define('API_TIMEOUT', '10000');

// 一覧の表示件最大数
define('MAX_RECORDS', '200');

// API実行時に選択可能な件数
define('MAX_API_RECORDS', '10');

// デフォルトCSVファイル名：[検索結果]画面
define('CSV_SEARCH_RESULT', 'search');

// デフォルトCSVファイル名：[集計]画面
define('CSV_SUM_MAIN', 'sum');

// デフォルトCSVファイル名：[クレジット管理結果]画面
define('CSV_CREDIT_CREDIT_RESULT', 'credit');

// デフォルトCSVファイル名：[ユーザーID管理]画面
define('CSV_CREDIT_USER_MAIN', 'user');

// 実行モード(0:本番/1:デバック)
define('RUN_MODE', '1');

// API：ホストIP
define('API_HOST', 'localhost');

// API：DLLパス
define('APIPATH_CANCEL', '/manage/Fixation/can_cvs.dll');
define('APIPATH_USERINS', '/manage/Fixation/makeUserCrTbl.dll');
define('APIPATH_USERDEL', '/settle_api/crdelete/crdelete.php');
define('APIPATH_CANAUTH', '/manage/Fixation/canauthp.dll');
define('APIPATH_CANTORI', '/manage/Fixation/cantorip.dll');
define('APIPATH_PAYMENT', '/manage/settlex/credit2.dll');
define('APIPATH_FIX', '/manage/Fixation/crDkakutei.dll');


