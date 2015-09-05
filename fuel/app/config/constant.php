<?php

use Fuel\Core\Uri;

define('URL_MATCHING_SEARCH_HUMAN_LIST', 'matching/searchhuman/search');

// グリッドの表示件数
define('DISPLAY_NUM', '10,20,30,50');

define('SESSION_MATCHING_SEARCH_HUMAN', 'MATCHING_SEARCH_HUMAN');
define('SESSION_MATCHING_PROJECT_LIST', 'MATCHING_PROJECT_LIST');

define('VIEW_MATCHING_SEARCHHUMAN', 'matching/searchhuman');



// Session：共通
define('SESSION_COMMON', 'COMMON');
define('SESSION_ERROR', 'ERROR');

// Session：ログイン
define('SESSION_LOGIN', 'LOGIN');
define('SESSION_LOGIN_COMPANY', 'LOGIN_COMPANY');

// Session：ネットワーク
define('SESSION_NETWORK_LIST', 'NETWORK_LIST');
define('SESSION_NETWORK_DETAIL', 'NETWORK_DETAIL');
define('SESSION_NETWORK_CONFIRM', 'NETWORK_CONFIRM');
define('SESSION_NETWORK_DETAIL_EXEC', 'NETWORK_DETAIL_EXEC');
define('SESSION_NETWORK_CHECK_OPERATOR', 'NETWORK_CHECK_OPERATOR');
define('SESSION_NETWORK_CHECK_CHANNEL', 'NETWORK_CHECK_CHANNEL');

// Session：サプライヤー
define('SESSION_SUPPLIER_LIST', 'SUPPLIER_LIST');
define('SESSION_SUPPLIER_DETAIL', 'SUPPLIER_DETAIL');
define('SESSION_SUPPLIER_CONFIRM', 'SUPPLIER_CONFIRM');
define('SESSION_SUPPLIER_DETAIL_EXEC', 'SUPPLIER_DETAIL_EXEC');
define('SESSION_SUPPLIER_CHECK_OPERATOR', 'SUPPLIER_CHECK_OPERATOR');
define('SESSION_SUPPLIER_CHECK_CHANNEL', 'SUPPLIER_CHECK_CHANNEL');

// Session：ユーザ
define('SESSION_USER_LIST', 'USER_LIST');
define('SESSION_USER_DETAIL', 'USER_DETAIL');
define('SESSION_USER_CONFIRM', 'USER_CONFIRM');
define('SESSION_USER_DETAIL_EXEC', 'USER_DETAIL_EXEC');
define('SESSION_USER_CHECK_OPERATOR', 'USER_CHECK_OPERATOR');
define('SESSION_USER_CHECK_CHANNEL', 'USER_CHECK_CHANNEL');

// View：共通
define('VIEW_COMMON_WAITING', 'common/waiting');
define('VIEW_COMMON_MSG', 'common/msg');
define('VIEW_COMMON_APIERROR', 'common/apierror');
define('VIEW_ERROR', 'error');

// View：ホーム
// TODO:ホーム画面ができたらパスを修正
define('VIEW_HOME_LIST', 'network/list');

// View：ログイン
define('VIEW_LOGIN', 'login');
define('VIEW_LOGIN_COMPANY', 'login/company');

// View：ネットワーク
define('VIEW_NETWORK_LIST', 'network/list');
define('VIEW_NETWORK_DETAIL', 'network/detail');
define('VIEW_NETWORK_CONFIRM', 'network/confirm');

// View：サプライヤー
define('VIEW_SUPPLIER_LIST', 'supplier/list');
define('VIEW_SUPPLIER_DETAIL', 'supplier/detail');
define('VIEW_SUPPLIER_CONFIRM', 'supplier/confirm');

// View：ユーザ
define('VIEW_UESR_LIST', 'user/list');
define('VIEW_UESR_DETAIL', 'user/detail');
define('VIEW_UESR_CONFIRM', 'user/confirm');


// パンくず：ホーム
define('BREADCRUMB_HOME_MAIN', 'ホーム');

// パンくず：ネットワーク
define('BREADCRUMB_NETWORK_MAIN', 'ネットワーク管理');
define('BREADCRUMB_NETWORK_LIST', '照会 変更');
define('BREADCRUMB_NETWORK_EDIT', '作成');
define('BREADCRUMB_NETWORK_CONFIRM', '確認');

// パンくず：サプライヤー
define('BREADCRUMB_SUPPLIER_MAIN', 'ネットワーク管理');
define('BREADCRUMB_SUPPLIER_LIST', '照会 変更');
define('BREADCRUMB_SUPPLIER_EDIT', '作成');
define('BREADCRUMB_SUPPLIER_CONFIRM', '確認');

// パンくず：ユーザ
define('BREADCRUMB_USER_MAIN', 'ネットワーク管理');
define('BREADCRUMB_USER_LIST', '照会 変更');
define('BREADCRUMB_USER_EDIT', '作成');
define('BREADCRUMB_USER_CONFIRM', '確認');

// URL：ホーム
define('URL_HOME_MAIN', 'xxxxxxx');

// URL：ログイン
define('URL_LOGIN', 'login/index');
define('URL_LOGIN_LOGIN', 'login/login');
define('URL_COMPANY_SELECT', 'login/company/select');

// URL：ネットワーク
define('URL_NETWORK_LIST', 'network/list');
define('URL_NETWORK_LIST_BACK', 'network/list/back');
define('URL_NETWORK_LIST_BACKV2', 'network/list/backv2');
define('URL_NETWORK_LIST_SEARCH', 'network/list/search');
define('URL_NETWORK_DETAIL', 'network/detail/');
define('URL_NETWORK_DETAIL_EXEC', 'network/detail/exec');
define('URL_NETWORK_DETAIL_NEXT', 'network/detail/next');
define('URL_NETWORK_DETAIL_BACK', 'network/detail/back');
define('URL_NETWORK_DETAIL_NEW', 'network/detail/new');

// URL：ユーザ
define('URL_SUPPLIER_LIST', 'supplier/list');
define('URL_SUPPLIER_LIST_BACK', 'supplier/list/back');
define('URL_SUPPLIER_LIST_BACKV2', 'supplier/list/backv2');
define('URL_SUPPLIER_LIST_SEARCH', 'supplier/list/search');
define('URL_SUPPLIER_DETAIL', 'supplier/detail/');
define('URL_SUPPLIER_DETAIL_EXEC', 'supplier/detail/exec');
define('URL_SUPPLIER_DETAIL_NEXT', 'supplier/detail/next');
define('URL_SUPPLIER_DETAIL_BACK', 'supplier/detail/back');
define('URL_SUPPLIER_DETAIL_NEW', 'supplier/detail/new');

// URL：ユーザ
define('URL_USER_LIST', 'user/list');
define('URL_USER_LIST_BACK', 'user/list/back');
define('URL_USER_LIST_BACKV2', 'user/list/backv2');
define('URL_USER_LIST_SEARCH', 'user/list/search');
define('URL_USER_DETAIL', 'user/detail/');
define('URL_USER_DETAIL_EXEC', 'user/detail/exec');
define('URL_USER_DETAIL_NEXT', 'user/detail/next');
define('URL_USER_DETAIL_BACK', 'user/detail/back');
define('URL_USER_DETAIL_NEW', 'user/detail/new');


// コンボボックス種別
define('SESSION_COMMON_COMPANY_COMBO', 'COMMON_COMPANY_TYPE_COMBO');

// 権限
define('AUTH_ADM', 'ADM');
define('AUTH_REQ', 'REQ');
define('AUTH_PVL', 'PVL');
define('AUTH_SUP', 'SUP');


// 画像URL
// TODO：いらないかも
define('IMAGE_PATH', Uri::base().'public/assets/img/');


// 区分
// TODO：タブ分設定
define('KUBUN_LOGIN', 'LOGIN');
define('KUBUN_TOP', 'TOP');
define('KUBUN_SEARCH', 'SEARCH');
define('KUBUN_SHOP', 'SHOP');
define('KUBUN_SUM', 'SUM');
define('KUBUN_MANAGE_CREDIT','CREDIT');
define('KUBUN_SETUP', 'SETUP');
define('KUBUN_SYSTEM', 'SYSTEM');

define('KUBUN_HOME', 'HOME');
define('KUBUN_NETWORK', 'NETWORK');


// メッセージ
define('MSG_INSERT_SUCCESS', '「%param1」の情報を登録しました。');
define('MSG_UPDATE_SUCCESS', '「%param1」の情報を更新しました。');


// エラーメッセージ
define('ERROR_NOCOMPANY', '所属会社がありません。');
define('ERROR_ACTION', '不正なアクセスです。');
define('ERROR_TOP', 'エラーが発生しました。');
define('ERROR_SESSION_NULL', 'SESSIONの値が取得できませんでした。');
define('ERROR_SQL_EXEPTION', 'SQLの実行に失敗しました。');
define('ERROR_MAIL_VALIDATE', 'バリデーションに失敗しました。');
define('ERROR_SELECT', 'データの取得に失敗しました。');
define('ERROR_VIEW', 'VIEWの取得に失敗しました。');
define('ERROR_NO_RECORD', '対象の%param1が存在しません。');
define('ERROR_EXCLUSION', '%param1：「%param2」は他のユーザに更新されました。一覧画面からやり直してください。');
define('ERROR_NOT_CHANGE', '使用されている%param1があるため無効にできません。');

// メッセージ(入力チェック)
// TOOD:いらないものがあるかもしれないので、精査が必要
define('ERROR_VALIDATE_EMPTY', '%param1を入力して下さい。');
define('ERROR_VALIDATE_GENERAL', '%param1は%param2で入力して下さい。');

define('ERROR_VALIDATE_LIMIT_UPPER', '%param1は%param2バイト以内で入力して下さい。');
define('ERROR_VALIDATE_LIMIT_LOWPER', '%param1は%param2バイト以上で入力して下さい。');
define('ERROR_VALIDATE_CONFIRM_PASSWORD', '再入力したパスワードが違います。');
define('ERROR_VALIDATE_HANKAKU', '%param1は半角英数で入力して下さい。');
define('ERROR_VALIDATE_DUPLICATION', '%param1が重複しています。');
define('ERROR_VALIDATE_DUPLICATION_ID', '%param1が重複しています。（%param2：%param3）');
define('ERROR_VALIDATE_DUPLICATION_INPUT', '画面内の%param1が重複しています。（%param2：%param3）');
define('ERROR_VALIDATE_HANKANA', '%param1は半角カタカナ以外で入力してください。');
define('ERROR_VALIDATE_IP', '%param1が不正です。');
define('ERROR_VALIDATE_DATE', '%param1が日付形式ではありません。');
define('ERROR_VALIDATE_ALPHA_NUM', '%param1が英数混合ではありません。');
define('ERROR_VALIDATE_KATA', '%param1が正しくありません。');
define('ERROR_VALIDATE_EMAIL', '%param1が正しくありません。');
define('ERROR_VALIDATE_HANKAKU_NUM', '%param1が半角数字ではありません。');
define('ERROR_VALIDATE_TIME', '%param1の形式が正しくありません。');
define('ERROR_VALIDATE_CMPAREDATE', '%param1と%param2の大小関係が誤っています。');
define('ERROR_VALIDATE_CHECK_EXIST', '%param1が選択されていません。%param1を選択してください。');

define('ERROR_DIV_STR', 'has-error');

// 実行モード
define('EXEC_MODE_INSERT', 'INSERT');
define('EXEC_MODE_UPDATE', 'UPDATE');

// 一覧1ページの表示件数
define('DEFAULT_NUM', '10');



