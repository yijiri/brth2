<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

INFO - 2015-08-05 09:18:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-05 09:18:38 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:18:38 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-08-05 09:18:38 --> SESSIONの値が取得できませんでした。
INFO - 2015-08-05 09:18:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/index"
INFO - 2015-08-05 09:18:38 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:18:38 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-05 09:18:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-05 09:18:47 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:18:47 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:18:47 --> プロセス開始::process_login_login
DEBUG - 2015-08-05 09:18:47 --> コネクション作成
DEBUG - 2015-08-05 09:18:48 --> トランザクション開始
DEBUG - 2015-08-05 09:18:48 --> プロセス開始::process_login_auth
DEBUG - 2015-08-05 09:18:48 --> コネクション作成
DEBUG - 2015-08-05 09:18:49 --> トランザクション開始
DEBUG - 2015-08-05 09:18:49 --> SQL実行
INFO - 2015-08-05 09:18:49 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-05 09:18:49 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-05 09:18:49 --> バインド値(PASSWORD)::koga
DEBUG - 2015-08-05 09:18:49 --> コミット
DEBUG - 2015-08-05 09:18:49 --> コネクション破棄
DEBUG - 2015-08-05 09:18:49 --> プロセス終了::process_login_auth
ERROR - 2015-08-05 09:18:49 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-05 09:18:49 --> ロールバック
DEBUG - 2015-08-05 09:18:49 --> コネクション破棄
DEBUG - 2015-08-05 09:18:49 --> プロセス開始::process_login_company
DEBUG - 2015-08-05 09:18:49 --> コネクション作成
DEBUG - 2015-08-05 09:18:51 --> トランザクション開始
DEBUG - 2015-08-05 09:18:51 --> SQL実行
INFO - 2015-08-05 09:18:51 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-05 09:18:51 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
DEBUG - 2015-08-05 09:18:51 --> コミット
DEBUG - 2015-08-05 09:18:51 --> コネクション破棄
DEBUG - 2015-08-05 09:18:51 --> プロセス終了::process_login_company
INFO - 2015-08-05 09:18:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/company/select"
INFO - 2015-08-05 09:18:53 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:18:53 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:18:53 --> プロセス開始::process_login_companyselect
DEBUG - 2015-08-05 09:18:54 --> コネクション作成
DEBUG - 2015-08-05 09:18:55 --> トランザクション開始
DEBUG - 2015-08-05 09:18:55 --> SQL実行
INFO - 2015-08-05 09:18:55 --> SQL:::SELECT company_id, company_name, company_type FROM company_mst WHERE enabled_flag is true AND company_id=:COMPANY_ID 
INFO - 2015-08-05 09:18:55 --> バインド値(COMPANY_ID)::A00001
ERROR - 2015-08-05 09:18:55 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-05 09:18:55 --> ロールバック
DEBUG - 2015-08-05 09:18:55 --> コネクション破棄
INFO - 2015-08-05 09:18:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-05 09:18:55 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:18:55 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:18:55 --> プロセス開始::process_network_index
DEBUG - 2015-08-05 09:18:55 --> コネクション作成
DEBUG - 2015-08-05 09:18:56 --> トランザクション開始
DEBUG - 2015-08-05 09:18:56 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:18:56 --> コネクション作成
DEBUG - 2015-08-05 09:18:57 --> トランザクション開始
DEBUG - 2015-08-05 09:18:57 --> SQL実行
INFO - 2015-08-05 09:18:57 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 09:18:57 --> プロセス開始::process_network_count
DEBUG - 2015-08-05 09:18:57 --> コネクション作成
DEBUG - 2015-08-05 09:18:58 --> トランザクション開始
DEBUG - 2015-08-05 09:18:58 --> SQL実行
INFO - 2015-08-05 09:18:58 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:18:58 --> コミット
DEBUG - 2015-08-05 09:18:58 --> コネクション破棄
DEBUG - 2015-08-05 09:18:58 --> プロセス終了::process_network_count
DEBUG - 2015-08-05 09:18:58 --> コミット
DEBUG - 2015-08-05 09:18:58 --> コネクション破棄
DEBUG - 2015-08-05 09:18:58 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 09:18:58 --> コミット
DEBUG - 2015-08-05 09:18:58 --> コネクション破棄
DEBUG - 2015-08-05 09:18:58 --> プロセス終了::process_network_index
INFO - 2015-08-05 09:19:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-05 09:19:03 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:19:03 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:19:03 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:19:03 --> コネクション作成
INFO - 2015-08-05 09:19:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-05 09:19:04 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:19:04 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:19:04 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:19:04 --> コネクション作成
DEBUG - 2015-08-05 09:19:04 --> トランザクション開始
DEBUG - 2015-08-05 09:19:04 --> SQL実行
INFO - 2015-08-05 09:19:04 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-05 09:19:04 --> プロセス開始::process_network_count
DEBUG - 2015-08-05 09:19:04 --> コネクション作成
DEBUG - 2015-08-05 09:19:05 --> トランザクション開始
DEBUG - 2015-08-05 09:19:05 --> SQL実行
INFO - 2015-08-05 09:19:05 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-05 09:19:05 --> プロセス開始::process_network_count
DEBUG - 2015-08-05 09:19:05 --> コネクション作成
DEBUG - 2015-08-05 09:19:05 --> トランザクション開始
DEBUG - 2015-08-05 09:19:05 --> SQL実行
INFO - 2015-08-05 09:19:05 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:19:05 --> コミット
DEBUG - 2015-08-05 09:19:05 --> コネクション破棄
DEBUG - 2015-08-05 09:19:05 --> プロセス終了::process_network_count
DEBUG - 2015-08-05 09:19:05 --> コミット
DEBUG - 2015-08-05 09:19:05 --> コネクション破棄
DEBUG - 2015-08-05 09:19:05 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 09:19:06 --> トランザクション開始
DEBUG - 2015-08-05 09:19:06 --> SQL実行
INFO - 2015-08-05 09:19:06 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:19:06 --> コミット
DEBUG - 2015-08-05 09:19:06 --> コネクション破棄
DEBUG - 2015-08-05 09:19:06 --> プロセス終了::process_network_count
DEBUG - 2015-08-05 09:19:06 --> コミット
DEBUG - 2015-08-05 09:19:06 --> コネクション破棄
DEBUG - 2015-08-05 09:19:06 --> プロセス終了::process_network_list
INFO - 2015-08-05 09:19:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-05 09:19:14 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:19:14 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:19:14 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:19:14 --> コネクション作成
DEBUG - 2015-08-05 09:19:15 --> トランザクション開始
DEBUG - 2015-08-05 09:19:15 --> SQL実行
INFO - 2015-08-05 09:19:15 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 10
DEBUG - 2015-08-05 09:19:15 --> プロセス開始::process_network_count
DEBUG - 2015-08-05 09:19:15 --> コネクション作成
DEBUG - 2015-08-05 09:19:16 --> トランザクション開始
DEBUG - 2015-08-05 09:19:16 --> SQL実行
INFO - 2015-08-05 09:19:16 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:19:16 --> コミット
DEBUG - 2015-08-05 09:19:16 --> コネクション破棄
DEBUG - 2015-08-05 09:19:16 --> プロセス終了::process_network_count
DEBUG - 2015-08-05 09:19:16 --> コミット
DEBUG - 2015-08-05 09:19:16 --> コネクション破棄
DEBUG - 2015-08-05 09:19:16 --> プロセス終了::process_network_list
INFO - 2015-08-05 09:19:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-05 09:19:17 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:19:17 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:19:17 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:19:17 --> コネクション作成
DEBUG - 2015-08-05 09:19:18 --> トランザクション開始
DEBUG - 2015-08-05 09:19:18 --> SQL実行
INFO - 2015-08-05 09:19:18 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 09:19:18 --> プロセス開始::process_network_count
DEBUG - 2015-08-05 09:19:18 --> コネクション作成
DEBUG - 2015-08-05 09:19:19 --> トランザクション開始
DEBUG - 2015-08-05 09:19:19 --> SQL実行
INFO - 2015-08-05 09:19:19 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:19:19 --> コミット
DEBUG - 2015-08-05 09:19:19 --> コネクション破棄
DEBUG - 2015-08-05 09:19:19 --> プロセス終了::process_network_count
DEBUG - 2015-08-05 09:19:19 --> コミット
DEBUG - 2015-08-05 09:19:19 --> コネクション破棄
DEBUG - 2015-08-05 09:19:19 --> プロセス終了::process_network_list
INFO - 2015-08-05 09:21:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-05 09:21:16 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:21:16 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:21:16 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:21:16 --> コネクション作成
DEBUG - 2015-08-05 09:21:17 --> トランザクション開始
DEBUG - 2015-08-05 09:21:17 --> SQL実行
INFO - 2015-08-05 09:21:17 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 09:21:17 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 09:21:17 --> コネクション作成
DEBUG - 2015-08-05 09:21:18 --> トランザクション開始
DEBUG - 2015-08-05 09:21:18 --> SQL実行
INFO - 2015-08-05 09:21:18 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:21:18 --> コミット
DEBUG - 2015-08-05 09:21:18 --> コネクション破棄
DEBUG - 2015-08-05 09:21:18 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 09:21:18 --> コミット
DEBUG - 2015-08-05 09:21:18 --> コネクション破棄
DEBUG - 2015-08-05 09:21:18 --> プロセス終了::process_network_list
INFO - 2015-08-05 09:21:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-05 09:21:21 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:21:21 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:21:21 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:21:21 --> コネクション作成
DEBUG - 2015-08-05 09:21:22 --> トランザクション開始
DEBUG - 2015-08-05 09:21:22 --> SQL実行
INFO - 2015-08-05 09:21:22 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-05 09:21:22 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 09:21:22 --> コネクション作成
DEBUG - 2015-08-05 09:21:23 --> トランザクション開始
DEBUG - 2015-08-05 09:21:23 --> SQL実行
INFO - 2015-08-05 09:21:23 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:21:23 --> コミット
DEBUG - 2015-08-05 09:21:23 --> コネクション破棄
DEBUG - 2015-08-05 09:21:23 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 09:21:23 --> コミット
DEBUG - 2015-08-05 09:21:23 --> コネクション破棄
DEBUG - 2015-08-05 09:21:23 --> プロセス終了::process_network_list
INFO - 2015-08-05 09:21:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-05 09:21:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:21:24 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:21:24 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:21:24 --> コネクション作成
DEBUG - 2015-08-05 09:21:25 --> トランザクション開始
DEBUG - 2015-08-05 09:21:25 --> SQL実行
INFO - 2015-08-05 09:21:25 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 10
DEBUG - 2015-08-05 09:21:25 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 09:21:25 --> コネクション作成
DEBUG - 2015-08-05 09:21:26 --> トランザクション開始
DEBUG - 2015-08-05 09:21:26 --> SQL実行
INFO - 2015-08-05 09:21:26 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:21:26 --> コミット
DEBUG - 2015-08-05 09:21:26 --> コネクション破棄
DEBUG - 2015-08-05 09:21:26 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 09:21:26 --> コミット
DEBUG - 2015-08-05 09:21:26 --> コネクション破棄
DEBUG - 2015-08-05 09:21:26 --> プロセス終了::process_network_list
INFO - 2015-08-05 09:21:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-05 09:21:27 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:21:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:21:27 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:21:27 --> コネクション作成
DEBUG - 2015-08-05 09:21:28 --> トランザクション開始
DEBUG - 2015-08-05 09:21:28 --> SQL実行
INFO - 2015-08-05 09:21:28 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-05 09:21:28 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 09:21:28 --> コネクション作成
DEBUG - 2015-08-05 09:21:29 --> トランザクション開始
DEBUG - 2015-08-05 09:21:29 --> SQL実行
INFO - 2015-08-05 09:21:29 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:21:29 --> コミット
DEBUG - 2015-08-05 09:21:29 --> コネクション破棄
DEBUG - 2015-08-05 09:21:29 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 09:21:29 --> コミット
DEBUG - 2015-08-05 09:21:29 --> コネクション破棄
DEBUG - 2015-08-05 09:21:29 --> プロセス終了::process_network_list
INFO - 2015-08-05 09:23:34 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-05 09:23:34 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:23:34 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:23:34 --> プロセス開始::process_network_detail
DEBUG - 2015-08-05 09:23:34 --> コネクション作成
DEBUG - 2015-08-05 09:23:35 --> トランザクション開始
DEBUG - 2015-08-05 09:23:35 --> SQL実行
INFO - 2015-08-05 09:23:35 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-05 09:23:35 --> バインド値(NETWORK_ID)::000028
DEBUG - 2015-08-05 09:23:35 --> コミット
DEBUG - 2015-08-05 09:23:35 --> コネクション破棄
DEBUG - 2015-08-05 09:23:35 --> プロセス終了::process_network_detail
INFO - 2015-08-05 09:23:37 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 09:23:37 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:23:37 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:23:37 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 09:23:37 --> コネクション作成
DEBUG - 2015-08-05 09:23:38 --> トランザクション開始
DEBUG - 2015-08-05 09:23:38 --> コミット
DEBUG - 2015-08-05 09:23:38 --> コネクション破棄
DEBUG - 2015-08-05 09:23:38 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-05 09:23:38 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-05 09:23:38 --> コネクション作成
DEBUG - 2015-08-05 09:23:39 --> トランザクション開始
DEBUG - 2015-08-05 09:23:39 --> コミット
DEBUG - 2015-08-05 09:23:39 --> コネクション破棄
DEBUG - 2015-08-05 09:23:39 --> プロセス終了::process_network_confirm
INFO - 2015-08-05 09:23:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-05 09:23:40 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:23:40 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:23:40 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-05 09:23:40 --> コネクション作成
DEBUG - 2015-08-05 09:23:41 --> トランザクション開始
DEBUG - 2015-08-05 09:23:41 --> コミット
DEBUG - 2015-08-05 09:23:41 --> コネクション破棄
DEBUG - 2015-08-05 09:23:41 --> プロセス終了::process_network_detailback
INFO - 2015-08-05 09:23:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 09:23:43 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:23:43 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:23:43 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 09:23:43 --> コネクション作成
DEBUG - 2015-08-05 09:23:44 --> トランザクション開始
DEBUG - 2015-08-05 09:23:44 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-05 09:23:44 --> コネクション作成
DEBUG - 2015-08-05 09:23:45 --> トランザクション開始
DEBUG - 2015-08-05 09:23:45 --> SQL実行
INFO - 2015-08-05 09:23:45 --> SQL:::SELECT COUNT(*) AS CNT FROM COMPANY_MST MST INNER JOIN OPERATOR_NETWORK_REL REL1 ON MST.COMPANY_ID = REL1.COMPANY_ID WHERE  NETWORK_ID = :NETWORK_ID AND     MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 09:23:45 --> バインド値(NETWORK_ID)::000028
DEBUG - 2015-08-05 09:23:45 --> コミット
DEBUG - 2015-08-05 09:23:45 --> コネクション破棄
DEBUG - 2015-08-05 09:23:45 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-05 09:23:45 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-05 09:23:45 --> コネクション作成
DEBUG - 2015-08-05 09:23:46 --> トランザクション開始
DEBUG - 2015-08-05 09:23:46 --> SQL実行
INFO - 2015-08-05 09:23:46 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-05 09:23:46 --> バインド値(NETWORK_ID)::000028
DEBUG - 2015-08-05 09:23:46 --> コミット
DEBUG - 2015-08-05 09:23:46 --> コネクション破棄
DEBUG - 2015-08-05 09:23:46 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-05 09:23:46 --> コミット
DEBUG - 2015-08-05 09:23:46 --> コネクション破棄
DEBUG - 2015-08-05 09:23:46 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-05 09:23:46 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-05 09:23:46 --> コネクション作成
DEBUG - 2015-08-05 09:23:47 --> トランザクション開始
DEBUG - 2015-08-05 09:23:47 --> コミット
DEBUG - 2015-08-05 09:23:47 --> コネクション破棄
DEBUG - 2015-08-05 09:23:47 --> プロセス終了::process_network_confirm
INFO - 2015-08-05 09:23:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-05 09:23:48 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:23:48 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:23:48 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-05 09:23:48 --> コネクション作成
DEBUG - 2015-08-05 09:23:49 --> トランザクション開始
DEBUG - 2015-08-05 09:23:49 --> コミット
DEBUG - 2015-08-05 09:23:49 --> コネクション破棄
DEBUG - 2015-08-05 09:23:49 --> プロセス終了::process_network_detailback
INFO - 2015-08-05 09:23:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 09:23:51 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:23:51 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:23:51 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 09:23:51 --> コネクション作成
DEBUG - 2015-08-05 09:23:52 --> トランザクション開始
DEBUG - 2015-08-05 09:23:52 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-05 09:23:52 --> コネクション作成
DEBUG - 2015-08-05 09:23:52 --> トランザクション開始
DEBUG - 2015-08-05 09:23:52 --> SQL実行
INFO - 2015-08-05 09:23:52 --> SQL:::SELECT COUNT(*) AS CNT FROM COMPANY_MST MST INNER JOIN OPERATOR_NETWORK_REL REL1 ON MST.COMPANY_ID = REL1.COMPANY_ID WHERE  NETWORK_ID = :NETWORK_ID AND     MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 09:23:52 --> バインド値(NETWORK_ID)::000028
DEBUG - 2015-08-05 09:23:52 --> コミット
DEBUG - 2015-08-05 09:23:52 --> コネクション破棄
DEBUG - 2015-08-05 09:23:52 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-05 09:23:52 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-05 09:23:53 --> コネクション作成
DEBUG - 2015-08-05 09:23:53 --> トランザクション開始
DEBUG - 2015-08-05 09:23:53 --> SQL実行
INFO - 2015-08-05 09:23:53 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-05 09:23:53 --> バインド値(NETWORK_ID)::000028
DEBUG - 2015-08-05 09:23:53 --> コミット
DEBUG - 2015-08-05 09:23:53 --> コネクション破棄
DEBUG - 2015-08-05 09:23:53 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-05 09:23:53 --> コミット
DEBUG - 2015-08-05 09:23:53 --> コネクション破棄
DEBUG - 2015-08-05 09:23:53 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-05 09:23:53 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-05 09:23:53 --> コネクション作成
DEBUG - 2015-08-05 09:23:54 --> トランザクション開始
DEBUG - 2015-08-05 09:23:54 --> コミット
DEBUG - 2015-08-05 09:23:54 --> コネクション破棄
DEBUG - 2015-08-05 09:23:54 --> プロセス終了::process_network_confirm
INFO - 2015-08-05 09:23:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-05 09:23:55 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:23:55 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:23:55 --> プロセス開始::process_network_edit
DEBUG - 2015-08-05 09:23:55 --> コネクション作成
DEBUG - 2015-08-05 09:23:56 --> トランザクション開始
DEBUG - 2015-08-05 09:23:56 --> SQL実行
INFO - 2015-08-05 09:23:56 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-05 09:23:56 --> バインド値(NETWORK_NAME)::ネットワーク２６
INFO - 2015-08-05 09:23:56 --> バインド値(ENABLED_FLAG)::0
INFO - 2015-08-05 09:23:56 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-05 09:23:56 --> バインド値(NETWORK_ID)::000028
INFO - 2015-08-05 09:23:56 --> バインド値(UPDATE_TIME)::20150729074521000000
DEBUG - 2015-08-05 09:23:56 --> コミット
DEBUG - 2015-08-05 09:23:56 --> コネクション破棄
DEBUG - 2015-08-05 09:23:56 --> プロセス終了::process_network_edit
INFO - 2015-08-05 09:23:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-05 09:23:56 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:23:56 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:23:56 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-05 09:23:56 --> コネクション作成
DEBUG - 2015-08-05 09:23:57 --> トランザクション開始
DEBUG - 2015-08-05 09:23:57 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:23:57 --> コネクション作成
DEBUG - 2015-08-05 09:23:58 --> トランザクション開始
DEBUG - 2015-08-05 09:23:58 --> SQL実行
INFO - 2015-08-05 09:23:58 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 09:23:58 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 09:23:58 --> コネクション作成
DEBUG - 2015-08-05 09:23:59 --> トランザクション開始
DEBUG - 2015-08-05 09:23:59 --> SQL実行
INFO - 2015-08-05 09:23:59 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:23:59 --> コミット
DEBUG - 2015-08-05 09:23:59 --> コネクション破棄
DEBUG - 2015-08-05 09:23:59 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 09:23:59 --> コミット
DEBUG - 2015-08-05 09:23:59 --> コネクション破棄
DEBUG - 2015-08-05 09:23:59 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 09:23:59 --> コミット
DEBUG - 2015-08-05 09:23:59 --> コネクション破棄
DEBUG - 2015-08-05 09:23:59 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-05 09:39:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-05 09:39:42 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:39:42 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:39:42 --> プロセス開始::process_network_detail
DEBUG - 2015-08-05 09:39:42 --> コネクション作成
DEBUG - 2015-08-05 09:39:43 --> トランザクション開始
DEBUG - 2015-08-05 09:39:43 --> SQL実行
INFO - 2015-08-05 09:39:43 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-05 09:39:43 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-05 09:39:43 --> コミット
DEBUG - 2015-08-05 09:39:43 --> コネクション破棄
DEBUG - 2015-08-05 09:39:43 --> プロセス終了::process_network_detail
INFO - 2015-08-05 09:40:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 09:40:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:40:00 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:40:00 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 09:40:00 --> コネクション作成
DEBUG - 2015-08-05 09:40:01 --> トランザクション開始
DEBUG - 2015-08-05 09:40:01 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-05 09:40:01 --> コネクション作成
DEBUG - 2015-08-05 09:40:02 --> トランザクション開始
DEBUG - 2015-08-05 09:40:02 --> SQL実行
INFO - 2015-08-05 09:40:02 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_MST MST INNER JOIN CHANNEL_DETAIL_NETWORK_REL REL1 ON MST.CHANNEL_DETAIL_ID = REL1.CHANNEL_DETAIL_ID WHERE REL1.NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 09:40:02 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-05 09:40:02 --> コミット
DEBUG - 2015-08-05 09:40:02 --> コネクション破棄
DEBUG - 2015-08-05 09:40:02 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-05 09:40:02 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-05 09:40:02 --> コネクション作成
DEBUG - 2015-08-05 09:40:03 --> トランザクション開始
DEBUG - 2015-08-05 09:40:03 --> SQL実行
INFO - 2015-08-05 09:40:03 --> SQL:::SELECT COUNT(*) AS CNT FROM COMPANY_MST MST INNER JOIN OPERATOR_NETWORK_REL REL1 ON MST.COMPANY_ID = REL1.COMPANY_ID WHERE  NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 09:40:03 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-05 09:40:03 --> コミット
DEBUG - 2015-08-05 09:40:03 --> コネクション破棄
DEBUG - 2015-08-05 09:40:03 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-05 09:40:03 --> コミット
DEBUG - 2015-08-05 09:40:03 --> コネクション破棄
DEBUG - 2015-08-05 09:40:03 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-05 09:40:03 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-05 09:40:03 --> コネクション作成
DEBUG - 2015-08-05 09:40:04 --> トランザクション開始
DEBUG - 2015-08-05 09:40:04 --> コミット
DEBUG - 2015-08-05 09:40:04 --> コネクション破棄
DEBUG - 2015-08-05 09:40:04 --> プロセス終了::process_network_confirm
INFO - 2015-08-05 09:40:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-05 09:40:17 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:40:17 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:40:17 --> プロセス開始::process_network_edit
DEBUG - 2015-08-05 09:40:17 --> コネクション作成
DEBUG - 2015-08-05 09:40:18 --> トランザクション開始
DEBUG - 2015-08-05 09:40:18 --> SQL実行
INFO - 2015-08-05 09:40:18 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-05 09:40:18 --> バインド値(NETWORK_NAME)::ネットワークB
INFO - 2015-08-05 09:40:18 --> バインド値(ENABLED_FLAG)::0
INFO - 2015-08-05 09:40:18 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-05 09:40:18 --> バインド値(NETWORK_ID)::000002
INFO - 2015-08-05 09:40:18 --> バインド値(UPDATE_TIME)::20150804234225000000
DEBUG - 2015-08-05 09:40:18 --> コミット
DEBUG - 2015-08-05 09:40:18 --> コネクション破棄
DEBUG - 2015-08-05 09:40:18 --> プロセス終了::process_network_edit
INFO - 2015-08-05 09:40:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-05 09:40:18 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:40:18 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:40:18 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-05 09:40:18 --> コネクション作成
DEBUG - 2015-08-05 09:40:19 --> トランザクション開始
DEBUG - 2015-08-05 09:40:19 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:40:19 --> コネクション作成
DEBUG - 2015-08-05 09:40:20 --> トランザクション開始
DEBUG - 2015-08-05 09:40:20 --> SQL実行
INFO - 2015-08-05 09:40:20 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 09:40:20 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 09:40:20 --> コネクション作成
DEBUG - 2015-08-05 09:40:21 --> トランザクション開始
DEBUG - 2015-08-05 09:40:21 --> SQL実行
INFO - 2015-08-05 09:40:21 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:40:21 --> コミット
DEBUG - 2015-08-05 09:40:21 --> コネクション破棄
DEBUG - 2015-08-05 09:40:21 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 09:40:21 --> コミット
DEBUG - 2015-08-05 09:40:21 --> コネクション破棄
DEBUG - 2015-08-05 09:40:21 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 09:40:21 --> コミット
DEBUG - 2015-08-05 09:40:21 --> コネクション破棄
DEBUG - 2015-08-05 09:40:21 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-05 09:43:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-05 09:43:13 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:43:13 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:43:13 --> プロセス開始::process_network_detail
DEBUG - 2015-08-05 09:43:13 --> コネクション作成
DEBUG - 2015-08-05 09:43:14 --> トランザクション開始
DEBUG - 2015-08-05 09:43:14 --> SQL実行
INFO - 2015-08-05 09:43:14 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-05 09:43:14 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 09:43:14 --> コミット
DEBUG - 2015-08-05 09:43:14 --> コネクション破棄
DEBUG - 2015-08-05 09:43:14 --> プロセス終了::process_network_detail
INFO - 2015-08-05 09:43:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 09:43:16 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:43:16 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:43:16 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 09:43:16 --> コネクション作成
DEBUG - 2015-08-05 09:43:17 --> トランザクション開始
DEBUG - 2015-08-05 09:43:17 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-05 09:43:17 --> コネクション作成
DEBUG - 2015-08-05 09:43:18 --> トランザクション開始
DEBUG - 2015-08-05 09:43:18 --> SQL実行
INFO - 2015-08-05 09:43:18 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_MST MST INNER JOIN CHANNEL_DETAIL_NETWORK_REL REL1 ON MST.CHANNEL_DETAIL_ID = REL1.CHANNEL_DETAIL_ID WHERE REL1.NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 09:43:18 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 09:43:18 --> コミット
DEBUG - 2015-08-05 09:43:18 --> コネクション破棄
DEBUG - 2015-08-05 09:43:18 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-05 09:43:18 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-05 09:43:18 --> コネクション作成
DEBUG - 2015-08-05 09:43:19 --> トランザクション開始
DEBUG - 2015-08-05 09:43:19 --> SQL実行
INFO - 2015-08-05 09:43:19 --> SQL:::SELECT COUNT(*) AS CNT FROM COMPANY_MST MST INNER JOIN OPERATOR_NETWORK_REL REL1 ON MST.COMPANY_ID = REL1.COMPANY_ID WHERE  NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 09:43:19 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 09:43:19 --> コミット
DEBUG - 2015-08-05 09:43:19 --> コネクション破棄
DEBUG - 2015-08-05 09:43:19 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-05 09:43:19 --> コミット
DEBUG - 2015-08-05 09:43:19 --> コネクション破棄
DEBUG - 2015-08-05 09:43:19 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-05 09:43:19 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-05 09:43:19 --> コネクション作成
DEBUG - 2015-08-05 09:43:20 --> トランザクション開始
DEBUG - 2015-08-05 09:43:20 --> コミット
DEBUG - 2015-08-05 09:43:20 --> コネクション破棄
DEBUG - 2015-08-05 09:43:20 --> プロセス終了::process_network_confirm
INFO - 2015-08-05 09:43:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-05 09:43:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:43:22 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:43:22 --> プロセス開始::process_network_edit
DEBUG - 2015-08-05 09:43:22 --> コネクション作成
DEBUG - 2015-08-05 09:43:23 --> トランザクション開始
DEBUG - 2015-08-05 09:43:23 --> SQL実行
INFO - 2015-08-05 09:43:23 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-05 09:43:23 --> バインド値(NETWORK_NAME)::ネットワークA
INFO - 2015-08-05 09:43:23 --> バインド値(ENABLED_FLAG)::0
INFO - 2015-08-05 09:43:23 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-05 09:43:23 --> バインド値(NETWORK_ID)::000001
INFO - 2015-08-05 09:43:23 --> バインド値(UPDATE_TIME)::20150804234153000000
DEBUG - 2015-08-05 09:43:23 --> コミット
DEBUG - 2015-08-05 09:43:23 --> コネクション破棄
DEBUG - 2015-08-05 09:43:23 --> プロセス終了::process_network_edit
INFO - 2015-08-05 09:43:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-05 09:43:23 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:43:23 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:43:23 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-05 09:43:23 --> コネクション作成
DEBUG - 2015-08-05 09:43:24 --> トランザクション開始
DEBUG - 2015-08-05 09:43:24 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:43:24 --> コネクション作成
DEBUG - 2015-08-05 09:43:25 --> トランザクション開始
DEBUG - 2015-08-05 09:43:25 --> SQL実行
INFO - 2015-08-05 09:43:25 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 09:43:25 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 09:43:25 --> コネクション作成
DEBUG - 2015-08-05 09:43:26 --> トランザクション開始
DEBUG - 2015-08-05 09:43:26 --> SQL実行
INFO - 2015-08-05 09:43:26 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:43:26 --> コミット
DEBUG - 2015-08-05 09:43:26 --> コネクション破棄
DEBUG - 2015-08-05 09:43:26 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 09:43:26 --> コミット
DEBUG - 2015-08-05 09:43:26 --> コネクション破棄
DEBUG - 2015-08-05 09:43:26 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 09:43:26 --> コミット
DEBUG - 2015-08-05 09:43:26 --> コネクション破棄
DEBUG - 2015-08-05 09:43:26 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-05 09:44:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-05 09:44:21 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:44:21 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:44:21 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-05 09:44:21 --> コネクション作成
DEBUG - 2015-08-05 09:44:22 --> トランザクション開始
DEBUG - 2015-08-05 09:44:22 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:44:22 --> コネクション作成
DEBUG - 2015-08-05 09:44:23 --> トランザクション開始
DEBUG - 2015-08-05 09:44:23 --> SQL実行
INFO - 2015-08-05 09:44:23 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 09:44:23 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 09:44:23 --> コネクション作成
DEBUG - 2015-08-05 09:44:24 --> トランザクション開始
DEBUG - 2015-08-05 09:44:24 --> SQL実行
INFO - 2015-08-05 09:44:24 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:44:24 --> コミット
DEBUG - 2015-08-05 09:44:24 --> コネクション破棄
DEBUG - 2015-08-05 09:44:24 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 09:44:24 --> コミット
DEBUG - 2015-08-05 09:44:24 --> コネクション破棄
DEBUG - 2015-08-05 09:44:24 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 09:44:24 --> コミット
DEBUG - 2015-08-05 09:44:24 --> コネクション破棄
DEBUG - 2015-08-05 09:44:24 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-05 09:44:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-05 09:44:36 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:44:36 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:44:36 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-05 09:44:36 --> コネクション作成
DEBUG - 2015-08-05 09:44:37 --> トランザクション開始
DEBUG - 2015-08-05 09:44:37 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:44:37 --> コネクション作成
DEBUG - 2015-08-05 09:44:38 --> トランザクション開始
DEBUG - 2015-08-05 09:44:38 --> SQL実行
INFO - 2015-08-05 09:44:38 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 09:44:38 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 09:44:38 --> コネクション作成
DEBUG - 2015-08-05 09:44:39 --> トランザクション開始
DEBUG - 2015-08-05 09:44:39 --> SQL実行
INFO - 2015-08-05 09:44:39 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:44:39 --> コミット
DEBUG - 2015-08-05 09:44:39 --> コネクション破棄
DEBUG - 2015-08-05 09:44:39 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 09:44:39 --> コミット
DEBUG - 2015-08-05 09:44:39 --> コネクション破棄
DEBUG - 2015-08-05 09:44:39 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 09:44:39 --> コミット
DEBUG - 2015-08-05 09:44:39 --> コネクション破棄
DEBUG - 2015-08-05 09:44:39 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-05 09:44:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-05 09:44:42 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:44:42 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:44:42 --> プロセス開始::process_network_detail
DEBUG - 2015-08-05 09:44:42 --> コネクション作成
DEBUG - 2015-08-05 09:44:43 --> トランザクション開始
DEBUG - 2015-08-05 09:44:43 --> SQL実行
INFO - 2015-08-05 09:44:43 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-05 09:44:43 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 09:44:43 --> コミット
DEBUG - 2015-08-05 09:44:43 --> コネクション破棄
DEBUG - 2015-08-05 09:44:43 --> プロセス終了::process_network_detail
INFO - 2015-08-05 09:46:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login"
INFO - 2015-08-05 09:46:40 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:46:40 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-05 09:46:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-05 09:46:55 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:46:55 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:46:55 --> プロセス開始::process_login_login
DEBUG - 2015-08-05 09:46:55 --> コネクション作成
DEBUG - 2015-08-05 09:46:56 --> トランザクション開始
DEBUG - 2015-08-05 09:46:56 --> プロセス開始::process_login_auth
DEBUG - 2015-08-05 09:46:56 --> コネクション作成
DEBUG - 2015-08-05 09:46:57 --> トランザクション開始
DEBUG - 2015-08-05 09:46:57 --> SQL実行
INFO - 2015-08-05 09:46:57 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-05 09:46:57 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-05 09:46:57 --> バインド値(PASSWORD)::koga
DEBUG - 2015-08-05 09:46:57 --> コミット
DEBUG - 2015-08-05 09:46:57 --> コネクション破棄
DEBUG - 2015-08-05 09:46:57 --> プロセス終了::process_login_auth
ERROR - 2015-08-05 09:46:57 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-05 09:46:57 --> ロールバック
DEBUG - 2015-08-05 09:46:57 --> コネクション破棄
DEBUG - 2015-08-05 09:46:57 --> プロセス開始::process_login_company
DEBUG - 2015-08-05 09:46:57 --> コネクション作成
DEBUG - 2015-08-05 09:46:58 --> トランザクション開始
DEBUG - 2015-08-05 09:46:58 --> SQL実行
INFO - 2015-08-05 09:46:58 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-05 09:46:58 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
DEBUG - 2015-08-05 09:46:58 --> コミット
DEBUG - 2015-08-05 09:46:58 --> コネクション破棄
DEBUG - 2015-08-05 09:46:58 --> プロセス終了::process_login_company
INFO - 2015-08-05 09:47:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/company/select"
INFO - 2015-08-05 09:47:01 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:47:01 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:47:01 --> プロセス開始::process_login_companyselect
DEBUG - 2015-08-05 09:47:01 --> コネクション作成
DEBUG - 2015-08-05 09:47:02 --> トランザクション開始
DEBUG - 2015-08-05 09:47:02 --> SQL実行
INFO - 2015-08-05 09:47:02 --> SQL:::SELECT company_id, company_name, company_type FROM company_mst WHERE enabled_flag is true AND company_id=:COMPANY_ID 
INFO - 2015-08-05 09:47:02 --> バインド値(COMPANY_ID)::A00001
ERROR - 2015-08-05 09:47:02 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-05 09:47:02 --> ロールバック
DEBUG - 2015-08-05 09:47:02 --> コネクション破棄
INFO - 2015-08-05 09:47:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-05 09:47:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:47:02 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:47:02 --> プロセス開始::process_network_index
DEBUG - 2015-08-05 09:47:02 --> コネクション作成
DEBUG - 2015-08-05 09:47:03 --> トランザクション開始
DEBUG - 2015-08-05 09:47:03 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:47:03 --> コネクション作成
DEBUG - 2015-08-05 09:47:04 --> トランザクション開始
DEBUG - 2015-08-05 09:47:04 --> SQL実行
INFO - 2015-08-05 09:47:04 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 09:47:04 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 09:47:04 --> コネクション作成
DEBUG - 2015-08-05 09:47:05 --> トランザクション開始
DEBUG - 2015-08-05 09:47:05 --> SQL実行
INFO - 2015-08-05 09:47:05 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:47:05 --> コミット
DEBUG - 2015-08-05 09:47:05 --> コネクション破棄
DEBUG - 2015-08-05 09:47:05 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 09:47:05 --> コミット
DEBUG - 2015-08-05 09:47:05 --> コネクション破棄
DEBUG - 2015-08-05 09:47:05 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 09:47:05 --> コミット
DEBUG - 2015-08-05 09:47:05 --> コネクション破棄
DEBUG - 2015-08-05 09:47:05 --> プロセス終了::process_network_index
INFO - 2015-08-05 09:47:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-05 09:47:15 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:47:15 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:47:15 --> プロセス開始::process_network_detail
DEBUG - 2015-08-05 09:47:15 --> コネクション作成
DEBUG - 2015-08-05 09:47:16 --> トランザクション開始
DEBUG - 2015-08-05 09:47:16 --> SQL実行
INFO - 2015-08-05 09:47:16 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-05 09:47:16 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 09:47:16 --> コミット
DEBUG - 2015-08-05 09:47:16 --> コネクション破棄
DEBUG - 2015-08-05 09:47:16 --> プロセス終了::process_network_detail
INFO - 2015-08-05 09:47:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 09:47:19 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:47:19 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:47:19 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 09:47:19 --> コネクション作成
DEBUG - 2015-08-05 09:47:21 --> トランザクション開始
DEBUG - 2015-08-05 09:47:21 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-05 09:47:21 --> コネクション作成
DEBUG - 2015-08-05 09:47:22 --> トランザクション開始
DEBUG - 2015-08-05 09:47:22 --> SQL実行
INFO - 2015-08-05 09:47:22 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_MST MST INNER JOIN CHANNEL_DETAIL_NETWORK_REL REL1 ON MST.CHANNEL_DETAIL_ID = REL1.CHANNEL_DETAIL_ID WHERE REL1.NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 09:47:22 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 09:47:22 --> コミット
DEBUG - 2015-08-05 09:47:22 --> コネクション破棄
DEBUG - 2015-08-05 09:47:22 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-05 09:47:22 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-05 09:47:22 --> コネクション作成
DEBUG - 2015-08-05 09:47:23 --> トランザクション開始
DEBUG - 2015-08-05 09:47:23 --> SQL実行
INFO - 2015-08-05 09:47:23 --> SQL:::SELECT COUNT(*) AS CNT FROM COMPANY_MST MST INNER JOIN OPERATOR_NETWORK_REL REL1 ON MST.COMPANY_ID = REL1.COMPANY_ID WHERE  NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 09:47:23 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 09:47:23 --> コミット
DEBUG - 2015-08-05 09:47:23 --> コネクション破棄
DEBUG - 2015-08-05 09:47:23 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-05 09:47:23 --> コミット
DEBUG - 2015-08-05 09:47:23 --> コネクション破棄
DEBUG - 2015-08-05 09:47:23 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-05 09:47:23 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-05 09:47:23 --> コネクション作成
DEBUG - 2015-08-05 09:47:24 --> トランザクション開始
DEBUG - 2015-08-05 09:47:24 --> コミット
DEBUG - 2015-08-05 09:47:24 --> コネクション破棄
DEBUG - 2015-08-05 09:47:24 --> プロセス終了::process_network_confirm
INFO - 2015-08-05 09:47:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-05 09:47:26 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:47:26 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:47:26 --> プロセス開始::process_network_edit
DEBUG - 2015-08-05 09:47:26 --> コネクション作成
DEBUG - 2015-08-05 09:47:27 --> トランザクション開始
DEBUG - 2015-08-05 09:47:27 --> SQL実行
INFO - 2015-08-05 09:47:27 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-05 09:47:27 --> バインド値(NETWORK_NAME)::ネットワークA
INFO - 2015-08-05 09:47:27 --> バインド値(ENABLED_FLAG)::0
INFO - 2015-08-05 09:47:27 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-05 09:47:27 --> バインド値(NETWORK_ID)::000001
INFO - 2015-08-05 09:47:27 --> バインド値(UPDATE_TIME)::20150805094323000000
DEBUG - 2015-08-05 09:47:27 --> コミット
DEBUG - 2015-08-05 09:47:27 --> コネクション破棄
DEBUG - 2015-08-05 09:47:27 --> プロセス終了::process_network_edit
INFO - 2015-08-05 09:47:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-05 09:47:27 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:47:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:47:27 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-05 09:47:27 --> コネクション作成
DEBUG - 2015-08-05 09:47:28 --> トランザクション開始
DEBUG - 2015-08-05 09:47:28 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:47:28 --> コネクション作成
DEBUG - 2015-08-05 09:47:29 --> トランザクション開始
DEBUG - 2015-08-05 09:47:29 --> SQL実行
INFO - 2015-08-05 09:47:29 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 09:47:29 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 09:47:29 --> コネクション作成
DEBUG - 2015-08-05 09:47:30 --> トランザクション開始
DEBUG - 2015-08-05 09:47:30 --> SQL実行
INFO - 2015-08-05 09:47:30 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:47:30 --> コミット
DEBUG - 2015-08-05 09:47:30 --> コネクション破棄
DEBUG - 2015-08-05 09:47:30 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 09:47:30 --> コミット
DEBUG - 2015-08-05 09:47:30 --> コネクション破棄
DEBUG - 2015-08-05 09:47:30 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 09:47:30 --> コミット
DEBUG - 2015-08-05 09:47:30 --> コネクション破棄
DEBUG - 2015-08-05 09:47:30 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-05 09:48:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-05 09:48:15 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:48:15 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:48:15 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-05 09:48:15 --> コネクション作成
DEBUG - 2015-08-05 09:48:16 --> トランザクション開始
DEBUG - 2015-08-05 09:48:16 --> コミット
DEBUG - 2015-08-05 09:48:16 --> コネクション破棄
DEBUG - 2015-08-05 09:48:16 --> プロセス終了::process_network_newindex
INFO - 2015-08-05 09:48:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 09:48:20 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:48:20 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:48:20 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 09:48:20 --> コネクション作成
DEBUG - 2015-08-05 09:48:21 --> トランザクション開始
DEBUG - 2015-08-05 09:48:21 --> コミット
DEBUG - 2015-08-05 09:48:21 --> コネクション破棄
DEBUG - 2015-08-05 09:48:21 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-05 09:48:21 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-05 09:48:21 --> コネクション作成
DEBUG - 2015-08-05 09:48:22 --> トランザクション開始
DEBUG - 2015-08-05 09:48:22 --> コミット
DEBUG - 2015-08-05 09:48:22 --> コネクション破棄
DEBUG - 2015-08-05 09:48:22 --> プロセス終了::process_network_confirm
INFO - 2015-08-05 09:48:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-05 09:48:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:48:24 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:48:24 --> プロセス開始::process_network_ins
DEBUG - 2015-08-05 09:48:24 --> コネクション作成
DEBUG - 2015-08-05 09:48:25 --> トランザクション開始
DEBUG - 2015-08-05 09:48:25 --> SQL実行
INFO - 2015-08-05 09:48:25 --> SQL::: INSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST_TIME  ,REGIST_USER  ,UPDATE_TIME  ,UPDATE_USER )   VALUES ( (SELECT ifnull(right(concat('000000', MAX( network_id ) +1 ),6),  '000001') network_id FROM network_mst sub),  :NETWORK_NAME,  :ENABLED_FLAG,   NOW(),  :REGIST_USER,   NOW(),  :UPDATE_USER ) 
INFO - 2015-08-05 09:48:25 --> バインド値(NETWORK_NAME)::aaaaaa
INFO - 2015-08-05 09:48:25 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-05 09:48:25 --> バインド値(REGIST_USER)::tkoga@brycen.co.jp
INFO - 2015-08-05 09:48:25 --> バインド値(UPDATE_USER)::tkoga@brycen.co.jp
DEBUG - 2015-08-05 09:48:25 --> コミット
DEBUG - 2015-08-05 09:48:25 --> コネクション破棄
DEBUG - 2015-08-05 09:48:25 --> プロセス終了::process_network_ins
INFO - 2015-08-05 09:48:25 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-05 09:48:25 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:48:25 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:48:25 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-05 09:48:25 --> コネクション作成
DEBUG - 2015-08-05 09:48:26 --> トランザクション開始
DEBUG - 2015-08-05 09:48:26 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 09:48:26 --> コネクション作成
DEBUG - 2015-08-05 09:48:27 --> トランザクション開始
DEBUG - 2015-08-05 09:48:27 --> SQL実行
INFO - 2015-08-05 09:48:27 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 09:48:27 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 09:48:27 --> コネクション作成
DEBUG - 2015-08-05 09:48:28 --> トランザクション開始
DEBUG - 2015-08-05 09:48:28 --> SQL実行
INFO - 2015-08-05 09:48:28 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 09:48:28 --> コミット
DEBUG - 2015-08-05 09:48:28 --> コネクション破棄
DEBUG - 2015-08-05 09:48:28 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 09:48:28 --> コミット
DEBUG - 2015-08-05 09:48:28 --> コネクション破棄
DEBUG - 2015-08-05 09:48:28 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 09:48:28 --> コミット
DEBUG - 2015-08-05 09:48:28 --> コネクション破棄
DEBUG - 2015-08-05 09:48:28 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-05 09:53:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login"
INFO - 2015-08-05 09:53:27 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:53:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:53:28 --> Error: User agent in the session doesn't match the browsers user agent string!
INFO - 2015-08-05 09:54:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login"
INFO - 2015-08-05 09:54:09 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:54:09 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-05 09:57:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login"
INFO - 2015-08-05 09:57:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:57:24 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-05 09:57:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-05 09:57:33 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:57:33 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:57:33 --> プロセス開始::process_login_login
DEBUG - 2015-08-05 09:58:07 --> コネクション作成
DEBUG - 2015-08-05 09:58:08 --> トランザクション開始
DEBUG - 2015-08-05 09:58:08 --> プロセス開始::process_login_auth
DEBUG - 2015-08-05 09:58:08 --> コネクション作成
DEBUG - 2015-08-05 09:58:09 --> トランザクション開始
DEBUG - 2015-08-05 09:58:09 --> SQL実行
INFO - 2015-08-05 09:58:09 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-05 09:58:09 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-05 09:58:09 --> バインド値(PASSWORD)::koga
DEBUG - 2015-08-05 09:58:09 --> コミット
DEBUG - 2015-08-05 09:58:09 --> コネクション破棄
DEBUG - 2015-08-05 09:58:09 --> プロセス終了::process_login_auth
ERROR - 2015-08-05 09:58:09 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-05 09:58:09 --> ロールバック
DEBUG - 2015-08-05 09:58:09 --> コネクション破棄
DEBUG - 2015-08-05 09:58:09 --> プロセス開始::process_login_company
DEBUG - 2015-08-05 09:58:09 --> コネクション作成
DEBUG - 2015-08-05 09:58:10 --> トランザクション開始
DEBUG - 2015-08-05 09:58:10 --> SQL実行
INFO - 2015-08-05 09:58:10 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-05 09:58:10 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
DEBUG - 2015-08-05 09:58:10 --> コミット
DEBUG - 2015-08-05 09:58:10 --> コネクション破棄
DEBUG - 2015-08-05 09:58:10 --> プロセス終了::process_login_company
INFO - 2015-08-05 09:58:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/company/select"
INFO - 2015-08-05 09:58:18 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:58:18 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 09:58:18 --> プロセス開始::process_login_companyselect
DEBUG - 2015-08-05 09:58:18 --> コネクション作成
DEBUG - 2015-08-05 09:58:19 --> トランザクション開始
DEBUG - 2015-08-05 09:58:19 --> SQL実行
INFO - 2015-08-05 09:58:19 --> SQL:::SELECT company_id, company_name, company_type FROM company_mst WHERE enabled_flag is true AND company_id=:COMPANY_ID 
INFO - 2015-08-05 09:58:19 --> バインド値(COMPANY_ID)::A00001
ERROR - 2015-08-05 09:58:19 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-05 09:58:19 --> ロールバック
DEBUG - 2015-08-05 09:58:19 --> コネクション破棄
INFO - 2015-08-05 09:58:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-05 09:58:19 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 09:58:19 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:00:57 --> プロセス開始::process_network_index
DEBUG - 2015-08-05 10:00:57 --> コネクション作成
DEBUG - 2015-08-05 10:00:58 --> トランザクション開始
DEBUG - 2015-08-05 10:00:59 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 10:00:59 --> コネクション作成
DEBUG - 2015-08-05 10:01:00 --> トランザクション開始
DEBUG - 2015-08-05 10:01:00 --> SQL実行
INFO - 2015-08-05 10:01:00 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 10:01:02 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 10:01:02 --> コネクション作成
DEBUG - 2015-08-05 10:01:03 --> トランザクション開始
DEBUG - 2015-08-05 10:01:03 --> SQL実行
INFO - 2015-08-05 10:01:03 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 10:01:03 --> コミット
DEBUG - 2015-08-05 10:01:03 --> コネクション破棄
DEBUG - 2015-08-05 10:01:03 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 10:01:03 --> コミット
DEBUG - 2015-08-05 10:01:03 --> コネクション破棄
DEBUG - 2015-08-05 10:01:04 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 10:01:04 --> コミット
DEBUG - 2015-08-05 10:01:04 --> コネクション破棄
DEBUG - 2015-08-05 10:01:04 --> プロセス終了::process_network_index
INFO - 2015-08-05 10:01:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-05 10:01:19 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:01:19 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:01:19 --> プロセス開始::process_network_detail
DEBUG - 2015-08-05 10:01:19 --> コネクション作成
DEBUG - 2015-08-05 10:01:21 --> トランザクション開始
DEBUG - 2015-08-05 10:01:21 --> SQL実行
INFO - 2015-08-05 10:01:21 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-05 10:01:21 --> バインド値(NETWORK_ID)::000034
DEBUG - 2015-08-05 10:01:21 --> コミット
DEBUG - 2015-08-05 10:01:21 --> コネクション破棄
DEBUG - 2015-08-05 10:01:21 --> プロセス終了::process_network_detail
INFO - 2015-08-05 10:06:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-05 10:06:12 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:06:12 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:06:25 --> プロセス開始::process_network_index
DEBUG - 2015-08-05 10:06:25 --> コネクション作成
DEBUG - 2015-08-05 10:06:27 --> トランザクション開始
DEBUG - 2015-08-05 10:06:27 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 10:06:27 --> コネクション作成
DEBUG - 2015-08-05 10:06:28 --> トランザクション開始
DEBUG - 2015-08-05 10:06:28 --> SQL実行
INFO - 2015-08-05 10:06:28 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 10:06:28 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 10:06:28 --> コネクション作成
DEBUG - 2015-08-05 10:06:29 --> トランザクション開始
DEBUG - 2015-08-05 10:06:29 --> SQL実行
INFO - 2015-08-05 10:06:29 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 10:06:29 --> コミット
DEBUG - 2015-08-05 10:06:29 --> コネクション破棄
DEBUG - 2015-08-05 10:06:29 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 10:06:29 --> コミット
DEBUG - 2015-08-05 10:06:29 --> コネクション破棄
DEBUG - 2015-08-05 10:06:29 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 10:06:29 --> コミット
DEBUG - 2015-08-05 10:06:29 --> コネクション破棄
DEBUG - 2015-08-05 10:06:29 --> プロセス終了::process_network_index
INFO - 2015-08-05 10:06:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 10:06:29 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:06:29 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:06:29 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 10:06:29 --> コネクション作成
DEBUG - 2015-08-05 10:06:31 --> トランザクション開始
DEBUG - 2015-08-05 10:06:31 --> コミット
DEBUG - 2015-08-05 10:06:31 --> コネクション破棄
DEBUG - 2015-08-05 10:06:31 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-05 10:06:31 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-05 10:06:31 --> コネクション作成
DEBUG - 2015-08-05 10:06:32 --> トランザクション開始
DEBUG - 2015-08-05 10:06:32 --> コミット
DEBUG - 2015-08-05 10:06:32 --> コネクション破棄
DEBUG - 2015-08-05 10:06:32 --> プロセス終了::process_network_confirm
INFO - 2015-08-05 10:06:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-05 10:06:36 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:06:36 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:06:36 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-05 10:06:36 --> コネクション作成
DEBUG - 2015-08-05 10:06:37 --> トランザクション開始
DEBUG - 2015-08-05 10:06:37 --> コミット
DEBUG - 2015-08-05 10:06:37 --> コネクション破棄
DEBUG - 2015-08-05 10:06:37 --> プロセス終了::process_network_detailback
INFO - 2015-08-05 10:06:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-05 10:06:40 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:06:40 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:06:40 --> プロセス開始::process_network_index
DEBUG - 2015-08-05 10:06:40 --> コネクション作成
DEBUG - 2015-08-05 10:06:42 --> トランザクション開始
DEBUG - 2015-08-05 10:06:42 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 10:06:42 --> コネクション作成
DEBUG - 2015-08-05 10:06:43 --> トランザクション開始
DEBUG - 2015-08-05 10:06:43 --> SQL実行
INFO - 2015-08-05 10:06:43 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 10:06:43 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 10:06:43 --> コネクション作成
DEBUG - 2015-08-05 10:06:44 --> トランザクション開始
DEBUG - 2015-08-05 10:06:44 --> SQL実行
INFO - 2015-08-05 10:06:45 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 10:06:45 --> コミット
DEBUG - 2015-08-05 10:06:45 --> コネクション破棄
DEBUG - 2015-08-05 10:06:45 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 10:06:45 --> コミット
DEBUG - 2015-08-05 10:06:45 --> コネクション破棄
DEBUG - 2015-08-05 10:06:45 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 10:06:45 --> コミット
DEBUG - 2015-08-05 10:06:45 --> コネクション破棄
DEBUG - 2015-08-05 10:06:45 --> プロセス終了::process_network_index
INFO - 2015-08-05 10:07:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-05 10:07:14 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:07:14 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:07:14 --> プロセス開始::process_network_detail
DEBUG - 2015-08-05 10:07:14 --> コネクション作成
DEBUG - 2015-08-05 10:07:15 --> トランザクション開始
DEBUG - 2015-08-05 10:07:15 --> SQL実行
INFO - 2015-08-05 10:07:15 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-05 10:07:15 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 10:07:15 --> コミット
DEBUG - 2015-08-05 10:07:15 --> コネクション破棄
DEBUG - 2015-08-05 10:07:15 --> プロセス終了::process_network_detail
INFO - 2015-08-05 10:07:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 10:07:18 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:07:18 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:07:18 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 10:07:19 --> コネクション作成
DEBUG - 2015-08-05 10:07:20 --> トランザクション開始
DEBUG - 2015-08-05 10:07:20 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-05 10:07:20 --> コネクション作成
DEBUG - 2015-08-05 10:07:21 --> トランザクション開始
DEBUG - 2015-08-05 10:07:21 --> SQL実行
INFO - 2015-08-05 10:07:21 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_MST MST INNER JOIN CHANNEL_DETAIL_NETWORK_REL REL1 ON MST.CHANNEL_DETAIL_ID = REL1.CHANNEL_DETAIL_ID WHERE REL1.NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 10:07:21 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 10:07:21 --> コミット
DEBUG - 2015-08-05 10:07:21 --> コネクション破棄
DEBUG - 2015-08-05 10:07:21 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-05 10:07:22 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-05 10:07:22 --> コネクション作成
DEBUG - 2015-08-05 10:07:23 --> トランザクション開始
DEBUG - 2015-08-05 10:07:23 --> SQL実行
INFO - 2015-08-05 10:07:23 --> SQL:::SELECT COUNT(*) AS CNT FROM COMPANY_MST MST INNER JOIN OPERATOR_NETWORK_REL REL1 ON MST.COMPANY_ID = REL1.COMPANY_ID WHERE  NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 10:07:23 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 10:07:23 --> コミット
DEBUG - 2015-08-05 10:07:23 --> コネクション破棄
DEBUG - 2015-08-05 10:07:23 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-05 10:07:23 --> コミット
DEBUG - 2015-08-05 10:07:23 --> コネクション破棄
DEBUG - 2015-08-05 10:07:23 --> プロセス終了::process_network_checkinput
INFO - 2015-08-05 10:07:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 10:07:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:07:44 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:07:44 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 10:07:44 --> コネクション作成
DEBUG - 2015-08-05 10:07:45 --> トランザクション開始
DEBUG - 2015-08-05 10:07:45 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-05 10:07:45 --> コネクション作成
DEBUG - 2015-08-05 10:07:46 --> トランザクション開始
DEBUG - 2015-08-05 10:07:46 --> SQL実行
INFO - 2015-08-05 10:07:46 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_MST MST INNER JOIN CHANNEL_DETAIL_NETWORK_REL REL1 ON MST.CHANNEL_DETAIL_ID = REL1.CHANNEL_DETAIL_ID WHERE REL1.NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 10:07:46 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 10:07:46 --> コミット
DEBUG - 2015-08-05 10:07:46 --> コネクション破棄
DEBUG - 2015-08-05 10:07:46 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-05 10:07:46 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-05 10:07:46 --> コネクション作成
DEBUG - 2015-08-05 10:07:47 --> トランザクション開始
DEBUG - 2015-08-05 10:07:47 --> SQL実行
INFO - 2015-08-05 10:07:47 --> SQL:::SELECT COUNT(*) AS CNT FROM COMPANY_MST MST INNER JOIN OPERATOR_NETWORK_REL REL1 ON MST.COMPANY_ID = REL1.COMPANY_ID WHERE  NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 10:07:47 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 10:07:47 --> コミット
DEBUG - 2015-08-05 10:07:47 --> コネクション破棄
DEBUG - 2015-08-05 10:07:47 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-05 10:07:47 --> コミット
DEBUG - 2015-08-05 10:07:47 --> コネクション破棄
DEBUG - 2015-08-05 10:07:47 --> プロセス終了::process_network_checkinput
INFO - 2015-08-05 10:08:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 10:08:28 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:08:28 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:08:28 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 10:08:28 --> コネクション作成
DEBUG - 2015-08-05 10:08:29 --> トランザクション開始
DEBUG - 2015-08-05 10:08:29 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-05 10:08:29 --> コネクション作成
DEBUG - 2015-08-05 10:08:29 --> トランザクション開始
DEBUG - 2015-08-05 10:08:29 --> SQL実行
INFO - 2015-08-05 10:08:29 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_MST MST INNER JOIN CHANNEL_DETAIL_NETWORK_REL REL1 ON MST.CHANNEL_DETAIL_ID = REL1.CHANNEL_DETAIL_ID WHERE REL1.NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 10:08:29 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 10:08:29 --> コミット
DEBUG - 2015-08-05 10:08:29 --> コネクション破棄
DEBUG - 2015-08-05 10:08:29 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-05 10:08:29 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-05 10:08:29 --> コネクション作成
DEBUG - 2015-08-05 10:08:30 --> トランザクション開始
DEBUG - 2015-08-05 10:08:30 --> SQL実行
INFO - 2015-08-05 10:08:30 --> SQL:::SELECT COUNT(*) AS CNT FROM COMPANY_MST MST INNER JOIN OPERATOR_NETWORK_REL REL1 ON MST.COMPANY_ID = REL1.COMPANY_ID WHERE  NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 10:08:30 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 10:08:30 --> コミット
DEBUG - 2015-08-05 10:08:30 --> コネクション破棄
DEBUG - 2015-08-05 10:08:30 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-05 10:08:30 --> コミット
DEBUG - 2015-08-05 10:08:30 --> コネクション破棄
DEBUG - 2015-08-05 10:08:30 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-05 10:08:30 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-05 10:08:30 --> コネクション作成
DEBUG - 2015-08-05 10:08:31 --> トランザクション開始
DEBUG - 2015-08-05 10:08:31 --> コミット
DEBUG - 2015-08-05 10:08:31 --> コネクション破棄
DEBUG - 2015-08-05 10:08:31 --> プロセス終了::process_network_confirm
INFO - 2015-08-05 10:08:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-05 10:08:32 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:08:32 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:08:32 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-05 10:08:32 --> コネクション作成
DEBUG - 2015-08-05 10:08:33 --> トランザクション開始
DEBUG - 2015-08-05 10:08:33 --> コミット
DEBUG - 2015-08-05 10:08:33 --> コネクション破棄
DEBUG - 2015-08-05 10:08:33 --> プロセス終了::process_network_detailback
INFO - 2015-08-05 10:54:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login"
INFO - 2015-08-05 10:54:18 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:54:18 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-05 10:54:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-05 10:54:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:54:22 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:54:22 --> プロセス開始::process_login_login
DEBUG - 2015-08-05 10:54:22 --> コネクション作成
DEBUG - 2015-08-05 10:54:23 --> トランザクション開始
DEBUG - 2015-08-05 10:54:23 --> プロセス開始::process_login_auth
DEBUG - 2015-08-05 10:54:23 --> コネクション作成
DEBUG - 2015-08-05 10:54:23 --> トランザクション開始
DEBUG - 2015-08-05 10:54:23 --> SQL実行
INFO - 2015-08-05 10:54:23 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-05 10:54:23 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-05 10:54:23 --> バインド値(PASSWORD)::koga
DEBUG - 2015-08-05 10:54:23 --> コミット
DEBUG - 2015-08-05 10:54:23 --> コネクション破棄
DEBUG - 2015-08-05 10:54:23 --> プロセス終了::process_login_auth
ERROR - 2015-08-05 10:54:23 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-05 10:54:23 --> ロールバック
DEBUG - 2015-08-05 10:54:23 --> コネクション破棄
DEBUG - 2015-08-05 10:54:23 --> プロセス開始::process_login_company
DEBUG - 2015-08-05 10:54:23 --> コネクション作成
DEBUG - 2015-08-05 10:54:24 --> トランザクション開始
DEBUG - 2015-08-05 10:54:24 --> SQL実行
INFO - 2015-08-05 10:54:24 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-05 10:54:24 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
DEBUG - 2015-08-05 10:54:24 --> コミット
DEBUG - 2015-08-05 10:54:24 --> コネクション破棄
DEBUG - 2015-08-05 10:54:24 --> プロセス終了::process_login_company
INFO - 2015-08-05 10:54:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/company/select"
INFO - 2015-08-05 10:54:26 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:54:26 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:54:26 --> プロセス開始::process_login_companyselect
DEBUG - 2015-08-05 10:54:26 --> コネクション作成
DEBUG - 2015-08-05 10:54:27 --> トランザクション開始
DEBUG - 2015-08-05 10:54:27 --> SQL実行
INFO - 2015-08-05 10:54:27 --> SQL:::SELECT company_id, company_name, company_type FROM company_mst WHERE enabled_flag is true AND company_id=:COMPANY_ID 
INFO - 2015-08-05 10:54:27 --> バインド値(COMPANY_ID)::A00001
ERROR - 2015-08-05 10:54:27 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-05 10:54:27 --> ロールバック
DEBUG - 2015-08-05 10:54:27 --> コネクション破棄
INFO - 2015-08-05 10:54:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-05 10:54:27 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:54:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:54:27 --> プロセス開始::process_network_index
DEBUG - 2015-08-05 10:54:27 --> コネクション作成
DEBUG - 2015-08-05 10:54:28 --> トランザクション開始
DEBUG - 2015-08-05 10:54:28 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 10:54:28 --> コネクション作成
DEBUG - 2015-08-05 10:54:29 --> トランザクション開始
DEBUG - 2015-08-05 10:54:29 --> SQL実行
INFO - 2015-08-05 10:54:29 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 10:54:29 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 10:54:29 --> コネクション作成
DEBUG - 2015-08-05 10:54:30 --> トランザクション開始
DEBUG - 2015-08-05 10:54:30 --> SQL実行
INFO - 2015-08-05 10:54:30 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 10:54:30 --> コミット
DEBUG - 2015-08-05 10:54:30 --> コネクション破棄
DEBUG - 2015-08-05 10:54:30 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 10:54:30 --> コミット
DEBUG - 2015-08-05 10:54:30 --> コネクション破棄
DEBUG - 2015-08-05 10:54:30 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 10:54:30 --> コミット
DEBUG - 2015-08-05 10:54:30 --> コネクション破棄
DEBUG - 2015-08-05 10:54:30 --> プロセス終了::process_network_index
INFO - 2015-08-05 10:54:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-05 10:54:31 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:54:31 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:54:31 --> プロセス開始::process_network_detail
DEBUG - 2015-08-05 10:54:31 --> コネクション作成
DEBUG - 2015-08-05 10:54:32 --> トランザクション開始
DEBUG - 2015-08-05 10:54:32 --> SQL実行
INFO - 2015-08-05 10:54:32 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-05 10:54:32 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 10:54:32 --> コミット
DEBUG - 2015-08-05 10:54:32 --> コネクション破棄
DEBUG - 2015-08-05 10:54:32 --> プロセス終了::process_network_detail
INFO - 2015-08-05 10:54:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 10:54:33 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:54:33 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:54:33 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 10:54:33 --> コネクション作成
DEBUG - 2015-08-05 10:54:34 --> トランザクション開始
DEBUG - 2015-08-05 10:54:34 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-05 10:54:34 --> コネクション作成
DEBUG - 2015-08-05 10:54:35 --> トランザクション開始
DEBUG - 2015-08-05 10:54:35 --> SQL実行
INFO - 2015-08-05 10:54:35 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_MST MST INNER JOIN CHANNEL_DETAIL_NETWORK_REL REL1 ON MST.CHANNEL_DETAIL_ID = REL1.CHANNEL_DETAIL_ID WHERE REL1.NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 10:54:35 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 10:54:35 --> コミット
DEBUG - 2015-08-05 10:54:35 --> コネクション破棄
DEBUG - 2015-08-05 10:54:35 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-05 10:54:35 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-05 10:54:35 --> コネクション作成
DEBUG - 2015-08-05 10:54:36 --> トランザクション開始
DEBUG - 2015-08-05 10:54:36 --> SQL実行
INFO - 2015-08-05 10:54:36 --> SQL:::SELECT COUNT(*) AS CNT FROM COMPANY_MST MST INNER JOIN OPERATOR_NETWORK_REL REL1 ON MST.COMPANY_ID = REL1.COMPANY_ID WHERE  NETWORK_ID = :NETWORK_ID AND MST.ENABLED_FLAG IS TRUE; 
INFO - 2015-08-05 10:54:36 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-05 10:54:36 --> コミット
DEBUG - 2015-08-05 10:54:36 --> コネクション破棄
DEBUG - 2015-08-05 10:54:36 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-05 10:54:36 --> コミット
DEBUG - 2015-08-05 10:54:36 --> コネクション破棄
DEBUG - 2015-08-05 10:54:36 --> プロセス終了::process_network_checkinput
INFO - 2015-08-05 10:54:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-05 10:54:43 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:54:43 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:54:43 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-05 10:54:43 --> コネクション作成
DEBUG - 2015-08-05 10:54:44 --> トランザクション開始
DEBUG - 2015-08-05 10:54:44 --> コミット
DEBUG - 2015-08-05 10:54:44 --> コネクション破棄
DEBUG - 2015-08-05 10:54:44 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-05 10:54:44 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-05 10:54:44 --> コネクション作成
DEBUG - 2015-08-05 10:54:45 --> トランザクション開始
DEBUG - 2015-08-05 10:54:45 --> コミット
DEBUG - 2015-08-05 10:54:45 --> コネクション破棄
DEBUG - 2015-08-05 10:54:45 --> プロセス終了::process_network_confirm
INFO - 2015-08-05 10:54:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-05 10:54:46 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:54:46 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:54:46 --> プロセス開始::process_network_edit
DEBUG - 2015-08-05 10:54:46 --> コネクション作成
DEBUG - 2015-08-05 10:54:47 --> トランザクション開始
DEBUG - 2015-08-05 10:54:47 --> SQL実行
INFO - 2015-08-05 10:54:47 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-05 10:54:47 --> バインド値(NETWORK_NAME)::ネットワークA
INFO - 2015-08-05 10:54:47 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-05 10:54:47 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-05 10:54:47 --> バインド値(NETWORK_ID)::000001
INFO - 2015-08-05 10:54:47 --> バインド値(UPDATE_TIME)::20150731095750000000
DEBUG - 2015-08-05 10:54:47 --> コミット
DEBUG - 2015-08-05 10:54:47 --> コネクション破棄
DEBUG - 2015-08-05 10:54:47 --> プロセス終了::process_network_edit
INFO - 2015-08-05 10:54:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-05 10:54:47 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 10:54:47 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 10:54:47 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-05 10:54:47 --> コネクション作成
DEBUG - 2015-08-05 10:54:48 --> トランザクション開始
DEBUG - 2015-08-05 10:54:48 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 10:54:48 --> コネクション作成
DEBUG - 2015-08-05 10:54:49 --> トランザクション開始
DEBUG - 2015-08-05 10:54:49 --> SQL実行
INFO - 2015-08-05 10:54:49 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 10:54:49 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 10:54:49 --> コネクション作成
DEBUG - 2015-08-05 10:54:50 --> トランザクション開始
DEBUG - 2015-08-05 10:54:50 --> SQL実行
INFO - 2015-08-05 10:54:50 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 10:54:51 --> コミット
DEBUG - 2015-08-05 10:54:51 --> コネクション破棄
DEBUG - 2015-08-05 10:54:51 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 10:54:51 --> コミット
DEBUG - 2015-08-05 10:54:51 --> コネクション破棄
DEBUG - 2015-08-05 10:54:51 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 10:54:51 --> コミット
DEBUG - 2015-08-05 10:54:51 --> コネクション破棄
DEBUG - 2015-08-05 10:54:51 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-05 14:45:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-05 14:45:32 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:45:32 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:45:32 --> プロセス開始::process_network_list
ERROR - 2015-08-05 14:45:32 --> SESSIONの値が取得できませんでした。
INFO - 2015-08-05 14:45:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/index"
INFO - 2015-08-05 14:45:32 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:45:32 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-05 14:45:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-05 14:45:39 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:45:39 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:45:39 --> プロセス開始::process_login_login
DEBUG - 2015-08-05 14:45:39 --> コネクション作成
DEBUG - 2015-08-05 14:45:40 --> トランザクション開始
DEBUG - 2015-08-05 14:45:40 --> プロセス開始::process_login_auth
DEBUG - 2015-08-05 14:45:40 --> コネクション作成
DEBUG - 2015-08-05 14:45:41 --> トランザクション開始
DEBUG - 2015-08-05 14:45:41 --> SQL実行
INFO - 2015-08-05 14:45:41 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-05 14:45:41 --> バインド値(LOGIN_ID)::iziri
INFO - 2015-08-05 14:45:41 --> バインド値(PASSWORD)::iziri
DEBUG - 2015-08-05 14:45:41 --> コミット
DEBUG - 2015-08-05 14:45:41 --> コネクション破棄
DEBUG - 2015-08-05 14:45:41 --> プロセス終了::process_login_auth
ERROR - 2015-08-05 14:45:41 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-05 14:45:41 --> ロールバック
DEBUG - 2015-08-05 14:45:41 --> コネクション破棄
DEBUG - 2015-08-05 14:45:41 --> プロセス開始::process_login_company
DEBUG - 2015-08-05 14:45:41 --> コネクション作成
DEBUG - 2015-08-05 14:45:42 --> トランザクション開始
DEBUG - 2015-08-05 14:45:42 --> SQL実行
INFO - 2015-08-05 14:45:42 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-05 14:45:42 --> バインド値(LOGIN_ID)::iziri
DEBUG - 2015-08-05 14:45:42 --> コミット
DEBUG - 2015-08-05 14:45:42 --> コネクション破棄
DEBUG - 2015-08-05 14:45:42 --> プロセス終了::process_login_company
INFO - 2015-08-05 14:45:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/company/select"
INFO - 2015-08-05 14:45:46 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:45:46 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:45:46 --> プロセス開始::process_login_companyselect
DEBUG - 2015-08-05 14:45:46 --> コネクション作成
DEBUG - 2015-08-05 14:45:47 --> トランザクション開始
DEBUG - 2015-08-05 14:45:47 --> SQL実行
INFO - 2015-08-05 14:45:47 --> SQL:::SELECT company_id, company_name, company_type FROM company_mst WHERE enabled_flag is true AND company_id=:COMPANY_ID 
INFO - 2015-08-05 14:45:47 --> バインド値(COMPANY_ID)::A00001
ERROR - 2015-08-05 14:45:47 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-05 14:45:47 --> ロールバック
DEBUG - 2015-08-05 14:45:47 --> コネクション破棄
INFO - 2015-08-05 14:45:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-05 14:45:47 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:45:47 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:45:47 --> プロセス開始::process_network_index
DEBUG - 2015-08-05 14:45:47 --> コネクション作成
DEBUG - 2015-08-05 14:45:48 --> トランザクション開始
DEBUG - 2015-08-05 14:45:48 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 14:45:48 --> コネクション作成
DEBUG - 2015-08-05 14:45:49 --> トランザクション開始
DEBUG - 2015-08-05 14:45:49 --> SQL実行
INFO - 2015-08-05 14:45:49 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 14:45:49 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 14:45:49 --> コネクション作成
DEBUG - 2015-08-05 14:45:50 --> トランザクション開始
DEBUG - 2015-08-05 14:45:50 --> SQL実行
INFO - 2015-08-05 14:45:50 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 14:45:50 --> コミット
DEBUG - 2015-08-05 14:45:50 --> コネクション破棄
DEBUG - 2015-08-05 14:45:50 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 14:45:50 --> コミット
DEBUG - 2015-08-05 14:45:50 --> コネクション破棄
DEBUG - 2015-08-05 14:45:50 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 14:45:50 --> コミット
DEBUG - 2015-08-05 14:45:50 --> コネクション破棄
DEBUG - 2015-08-05 14:45:50 --> プロセス終了::process_network_index
INFO - 2015-08-05 14:45:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-05 14:45:55 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:45:55 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:45:55 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 14:45:55 --> コネクション作成
DEBUG - 2015-08-05 14:45:56 --> トランザクション開始
DEBUG - 2015-08-05 14:45:56 --> SQL実行
INFO - 2015-08-05 14:45:56 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 10
DEBUG - 2015-08-05 14:45:56 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 14:45:56 --> コネクション作成
DEBUG - 2015-08-05 14:45:57 --> トランザクション開始
DEBUG - 2015-08-05 14:45:57 --> SQL実行
INFO - 2015-08-05 14:45:57 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 14:45:57 --> コミット
DEBUG - 2015-08-05 14:45:57 --> コネクション破棄
DEBUG - 2015-08-05 14:45:57 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 14:45:57 --> コミット
DEBUG - 2015-08-05 14:45:57 --> コネクション破棄
DEBUG - 2015-08-05 14:45:57 --> プロセス終了::process_network_list
INFO - 2015-08-05 14:45:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-05 14:45:57 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:45:57 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:45:57 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 14:45:57 --> コネクション作成
DEBUG - 2015-08-05 14:45:58 --> トランザクション開始
DEBUG - 2015-08-05 14:45:58 --> SQL実行
INFO - 2015-08-05 14:45:58 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-05 14:45:58 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 14:45:58 --> コネクション作成
DEBUG - 2015-08-05 14:45:59 --> トランザクション開始
DEBUG - 2015-08-05 14:45:59 --> SQL実行
INFO - 2015-08-05 14:45:59 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 14:45:59 --> コミット
DEBUG - 2015-08-05 14:45:59 --> コネクション破棄
DEBUG - 2015-08-05 14:45:59 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 14:45:59 --> コミット
DEBUG - 2015-08-05 14:45:59 --> コネクション破棄
DEBUG - 2015-08-05 14:45:59 --> プロセス終了::process_network_list
INFO - 2015-08-05 14:51:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "user/list"
INFO - 2015-08-05 14:51:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:51:02 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-08-05 14:51:02 --> Fatal Error - Class 'process_combobase' not found in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\classes\process\common\combocompany.php on line 7
INFO - 2015-08-05 14:51:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "user/list"
INFO - 2015-08-05 14:51:23 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:51:23 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:51:23 --> プロセス開始::process_common_combocompany
DEBUG - 2015-08-05 14:51:23 --> コネクション作成
DEBUG - 2015-08-05 14:51:24 --> トランザクション開始
DEBUG - 2015-08-05 14:51:24 --> SQL実行
INFO - 2015-08-05 14:51:24 --> SQL:::SELECT COMPANY_ID AS ID, COMPANY_NAME AS STR from COMPANY_MST ORDER BY COMPANY_TYPE
ERROR - 2015-08-05 14:51:24 --> Fatal Error - Class 'res_common_combo' not found in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\classes\process\combobase.php on line 59
INFO - 2015-08-05 14:51:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "user/list"
INFO - 2015-08-05 14:51:47 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:51:47 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:51:47 --> プロセス開始::process_common_combocompany
DEBUG - 2015-08-05 14:51:47 --> コネクション作成
DEBUG - 2015-08-05 14:51:48 --> トランザクション開始
DEBUG - 2015-08-05 14:51:48 --> SQL実行
INFO - 2015-08-05 14:51:48 --> SQL:::SELECT COMPANY_ID AS ID, COMPANY_NAME AS STR from COMPANY_MST ORDER BY COMPANY_TYPE
DEBUG - 2015-08-05 14:51:48 --> コミット
DEBUG - 2015-08-05 14:51:48 --> コネクション破棄
DEBUG - 2015-08-05 14:51:48 --> プロセス終了::process_common_combocompany
ERROR - 2015-08-05 14:51:48 --> Error - The requested view could not be found: user/list in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\core\classes\view.php on line 388
INFO - 2015-08-05 14:52:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "user/list"
INFO - 2015-08-05 14:52:15 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:52:15 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:52:15 --> プロセス開始::process_common_combocompany
DEBUG - 2015-08-05 14:52:15 --> コネクション作成
DEBUG - 2015-08-05 14:52:16 --> トランザクション開始
DEBUG - 2015-08-05 14:52:16 --> SQL実行
INFO - 2015-08-05 14:52:16 --> SQL:::SELECT COMPANY_ID AS ID, COMPANY_NAME AS STR from COMPANY_MST ORDER BY COMPANY_TYPE
DEBUG - 2015-08-05 14:52:16 --> コミット
DEBUG - 2015-08-05 14:52:16 --> コネクション破棄
DEBUG - 2015-08-05 14:52:16 --> プロセス終了::process_common_combocompany
INFO - 2015-08-05 14:52:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "user/list"
INFO - 2015-08-05 14:52:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:52:58 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:52:58 --> プロセス開始::process_common_combocompany
DEBUG - 2015-08-05 14:52:58 --> コネクション作成
DEBUG - 2015-08-05 14:52:59 --> トランザクション開始
DEBUG - 2015-08-05 14:52:59 --> SQL実行
INFO - 2015-08-05 14:52:59 --> SQL:::SELECT COMPANY_ID AS ID, COMPANY_NAME AS STR from COMPANY_MST ORDER BY COMPANY_TYPE
DEBUG - 2015-08-05 14:52:59 --> コミット
DEBUG - 2015-08-05 14:52:59 --> コネクション破棄
DEBUG - 2015-08-05 14:52:59 --> プロセス終了::process_common_combocompany
INFO - 2015-08-05 14:53:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-05 14:53:15 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:53:15 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:53:15 --> プロセス開始::process_network_index
DEBUG - 2015-08-05 14:53:15 --> コネクション作成
DEBUG - 2015-08-05 14:53:16 --> トランザクション開始
DEBUG - 2015-08-05 14:53:16 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 14:53:16 --> コネクション作成
DEBUG - 2015-08-05 14:53:17 --> トランザクション開始
DEBUG - 2015-08-05 14:53:17 --> SQL実行
INFO - 2015-08-05 14:53:17 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 14:53:17 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 14:53:17 --> コネクション作成
DEBUG - 2015-08-05 14:53:18 --> トランザクション開始
DEBUG - 2015-08-05 14:53:18 --> SQL実行
INFO - 2015-08-05 14:53:18 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 14:53:18 --> コミット
DEBUG - 2015-08-05 14:53:18 --> コネクション破棄
DEBUG - 2015-08-05 14:53:18 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 14:53:18 --> コミット
DEBUG - 2015-08-05 14:53:18 --> コネクション破棄
DEBUG - 2015-08-05 14:53:18 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 14:53:18 --> コミット
DEBUG - 2015-08-05 14:53:18 --> コネクション破棄
DEBUG - 2015-08-05 14:53:18 --> プロセス終了::process_network_index
INFO - 2015-08-05 14:54:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-05 14:54:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:54:02 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:54:03 --> プロセス開始::process_network_index
DEBUG - 2015-08-05 14:54:03 --> コネクション作成
DEBUG - 2015-08-05 14:54:04 --> トランザクション開始
DEBUG - 2015-08-05 14:54:04 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 14:54:04 --> コネクション作成
DEBUG - 2015-08-05 14:54:05 --> トランザクション開始
DEBUG - 2015-08-05 14:54:05 --> SQL実行
INFO - 2015-08-05 14:54:05 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 14:54:05 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 14:54:05 --> コネクション作成
DEBUG - 2015-08-05 14:54:06 --> トランザクション開始
DEBUG - 2015-08-05 14:54:06 --> SQL実行
INFO - 2015-08-05 14:54:06 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 14:54:06 --> コミット
DEBUG - 2015-08-05 14:54:06 --> コネクション破棄
DEBUG - 2015-08-05 14:54:06 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 14:54:06 --> コミット
DEBUG - 2015-08-05 14:54:06 --> コネクション破棄
DEBUG - 2015-08-05 14:54:06 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 14:54:06 --> コミット
DEBUG - 2015-08-05 14:54:06 --> コネクション破棄
DEBUG - 2015-08-05 14:54:06 --> プロセス終了::process_network_index
INFO - 2015-08-05 14:54:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-05 14:54:30 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:54:30 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:54:30 --> プロセス開始::process_network_index
DEBUG - 2015-08-05 14:54:30 --> コネクション作成
DEBUG - 2015-08-05 14:54:31 --> トランザクション開始
DEBUG - 2015-08-05 14:54:31 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 14:54:31 --> コネクション作成
DEBUG - 2015-08-05 14:54:32 --> トランザクション開始
DEBUG - 2015-08-05 14:54:32 --> SQL実行
INFO - 2015-08-05 14:54:32 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 14:54:32 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 14:54:32 --> コネクション作成
DEBUG - 2015-08-05 14:54:33 --> トランザクション開始
DEBUG - 2015-08-05 14:54:33 --> SQL実行
INFO - 2015-08-05 14:54:33 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 14:54:33 --> コミット
DEBUG - 2015-08-05 14:54:33 --> コネクション破棄
DEBUG - 2015-08-05 14:54:33 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 14:54:33 --> コミット
DEBUG - 2015-08-05 14:54:33 --> コネクション破棄
DEBUG - 2015-08-05 14:54:33 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 14:54:33 --> コミット
DEBUG - 2015-08-05 14:54:33 --> コネクション破棄
DEBUG - 2015-08-05 14:54:33 --> プロセス終了::process_network_index
INFO - 2015-08-05 14:54:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-05 14:54:51 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:54:51 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:54:51 --> プロセス開始::process_network_index
DEBUG - 2015-08-05 14:54:51 --> コネクション作成
DEBUG - 2015-08-05 14:54:52 --> トランザクション開始
DEBUG - 2015-08-05 14:54:52 --> プロセス開始::process_network_list
DEBUG - 2015-08-05 14:54:52 --> コネクション作成
DEBUG - 2015-08-05 14:54:53 --> トランザクション開始
DEBUG - 2015-08-05 14:54:53 --> SQL実行
INFO - 2015-08-05 14:54:53 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-05 14:54:53 --> プロセス開始::process_network_pager
DEBUG - 2015-08-05 14:54:53 --> コネクション作成
DEBUG - 2015-08-05 14:54:54 --> トランザクション開始
DEBUG - 2015-08-05 14:54:54 --> SQL実行
INFO - 2015-08-05 14:54:54 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-05 14:54:54 --> コミット
DEBUG - 2015-08-05 14:54:54 --> コネクション破棄
DEBUG - 2015-08-05 14:54:54 --> プロセス終了::process_network_pager
DEBUG - 2015-08-05 14:54:54 --> コミット
DEBUG - 2015-08-05 14:54:54 --> コネクション破棄
DEBUG - 2015-08-05 14:54:54 --> プロセス終了::process_network_list
DEBUG - 2015-08-05 14:54:54 --> コミット
DEBUG - 2015-08-05 14:54:54 --> コネクション破棄
DEBUG - 2015-08-05 14:54:54 --> プロセス終了::process_network_index
INFO - 2015-08-05 14:55:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "user/list"
INFO - 2015-08-05 14:55:04 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:55:04 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:55:04 --> プロセス開始::process_common_combocompany
DEBUG - 2015-08-05 14:55:04 --> コネクション作成
DEBUG - 2015-08-05 14:55:05 --> トランザクション開始
DEBUG - 2015-08-05 14:55:05 --> SQL実行
INFO - 2015-08-05 14:55:05 --> SQL:::SELECT COMPANY_ID AS ID, COMPANY_NAME AS STR from COMPANY_MST ORDER BY COMPANY_TYPE
DEBUG - 2015-08-05 14:55:05 --> コミット
DEBUG - 2015-08-05 14:55:05 --> コネクション破棄
DEBUG - 2015-08-05 14:55:05 --> プロセス終了::process_common_combocompany
INFO - 2015-08-05 14:55:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "user/list"
INFO - 2015-08-05 14:55:27 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 14:55:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 14:55:27 --> プロセス開始::process_common_combocompany
DEBUG - 2015-08-05 14:55:28 --> コネクション作成
DEBUG - 2015-08-05 14:55:29 --> トランザクション開始
DEBUG - 2015-08-05 14:55:29 --> SQL実行
INFO - 2015-08-05 14:55:29 --> SQL:::SELECT COMPANY_ID AS ID, COMPANY_NAME AS STR from COMPANY_MST ORDER BY COMPANY_TYPE
DEBUG - 2015-08-05 14:55:29 --> コミット
DEBUG - 2015-08-05 14:55:29 --> コネクション破棄
DEBUG - 2015-08-05 14:55:29 --> プロセス終了::process_common_combocompany
INFO - 2015-08-05 15:15:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "supplier/list"
INFO - 2015-08-05 15:15:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 15:15:22 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-05 15:23:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "supplier/list"
INFO - 2015-08-05 15:23:33 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 15:23:33 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-08-05 15:23:33 --> Notice - Undefined variable: v_res_supplier_list in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\views\supplier\list.php on line 23
INFO - 2015-08-05 15:24:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "supplier/list"
INFO - 2015-08-05 15:24:11 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 15:24:11 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-08-05 15:24:11 --> Notice - Undefined variable: v_res_common_combo in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\views\supplier\list.php on line 50
INFO - 2015-08-05 15:24:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "supplier/list"
INFO - 2015-08-05 15:24:21 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 15:24:21 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-05 15:24:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "user/list"
INFO - 2015-08-05 15:24:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-05 15:24:44 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-05 15:24:44 --> プロセス開始::process_common_combocompany
DEBUG - 2015-08-05 15:24:44 --> コネクション作成
DEBUG - 2015-08-05 15:24:45 --> トランザクション開始
DEBUG - 2015-08-05 15:24:45 --> SQL実行
INFO - 2015-08-05 15:24:45 --> SQL:::SELECT COMPANY_ID AS ID, COMPANY_NAME AS STR from COMPANY_MST ORDER BY COMPANY_TYPE
DEBUG - 2015-08-05 15:24:45 --> コミット
DEBUG - 2015-08-05 15:24:45 --> コネクション破棄
DEBUG - 2015-08-05 15:24:45 --> プロセス終了::process_common_combocompany
