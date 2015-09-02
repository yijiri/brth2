<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

INFO - 2015-08-04 17:07:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:07:30 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:07:30 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:07:30 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:07:30 --> コネクション作成
DEBUG - 2015-08-04 17:07:31 --> トランザクション開始
DEBUG - 2015-08-04 17:07:31 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:07:31 --> コネクション作成
DEBUG - 2015-08-04 17:07:32 --> トランザクション開始
DEBUG - 2015-08-04 17:07:32 --> SQL実行
INFO - 2015-08-04 17:07:32 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 17:07:32 --> バインド値(NETWORK_NAME)::%AA%
DEBUG - 2015-08-04 17:07:32 --> SQL実行
INFO - 2015-08-04 17:07:32 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 17:07:32 --> バインド値(NETWORK_NAME)::%AA%
INFO - 2015-08-04 17:07:32 --> バインド値(NETWORK_NAME)::%AA%
DEBUG - 2015-08-04 17:07:32 --> コミット
DEBUG - 2015-08-04 17:07:32 --> コネクション破棄
DEBUG - 2015-08-04 17:07:32 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:07:32 --> コミット
DEBUG - 2015-08-04 17:07:32 --> コネクション破棄
DEBUG - 2015-08-04 17:07:32 --> プロセス終了::process_network_listback
INFO - 2015-08-04 17:08:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 17:08:28 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:08:28 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:08:28 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 17:08:28 --> コネクション作成
DEBUG - 2015-08-04 17:08:29 --> トランザクション開始
DEBUG - 2015-08-04 17:08:29 --> SQL実行
INFO - 2015-08-04 17:08:29 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 17:08:29 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 17:08:29 --> コミット
DEBUG - 2015-08-04 17:08:29 --> コネクション破棄
DEBUG - 2015-08-04 17:08:29 --> プロセス終了::process_network_detail
INFO - 2015-08-04 17:08:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:08:30 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:08:30 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:08:30 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:08:30 --> コネクション作成
DEBUG - 2015-08-04 17:08:31 --> トランザクション開始
ERROR - 2015-08-04 17:08:31 --> Fatal Error - Class 'process_network_checkchannel' not found in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\classes\process\network\inputcheck.php on line 91
INFO - 2015-08-04 17:09:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:09:16 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:09:16 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:09:16 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:09:16 --> コネクション作成
DEBUG - 2015-08-04 17:09:17 --> トランザクション開始
DEBUG - 2015-08-04 17:09:17 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 17:09:17 --> コネクション作成
DEBUG - 2015-08-04 17:09:18 --> トランザクション開始
DEBUG - 2015-08-04 17:09:18 --> SQL実行
INFO - 2015-08-04 17:09:18 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:09:18 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 17:09:18 --> コミット
DEBUG - 2015-08-04 17:09:18 --> コネクション破棄
DEBUG - 2015-08-04 17:09:18 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 17:09:18 --> コミット
DEBUG - 2015-08-04 17:09:18 --> コネクション破棄
DEBUG - 2015-08-04 17:09:18 --> プロセス終了::process_network_inputcheck
INFO - 2015-08-04 17:09:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:09:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:09:22 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:09:22 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:09:22 --> コネクション作成
INFO - 2015-08-04 17:09:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:09:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:09:22 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:09:22 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:09:22 --> コネクション作成
DEBUG - 2015-08-04 17:09:24 --> トランザクション開始
DEBUG - 2015-08-04 17:09:24 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:09:24 --> コネクション作成
DEBUG - 2015-08-04 17:09:24 --> トランザクション開始
DEBUG - 2015-08-04 17:09:24 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:09:24 --> コネクション作成
DEBUG - 2015-08-04 17:09:25 --> トランザクション開始
DEBUG - 2015-08-04 17:09:25 --> SQL実行
INFO - 2015-08-04 17:09:25 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 17:09:25 --> バインド値(NETWORK_NAME)::%AA%
DEBUG - 2015-08-04 17:09:25 --> SQL実行
INFO - 2015-08-04 17:09:25 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 17:09:25 --> バインド値(NETWORK_NAME)::%AA%
INFO - 2015-08-04 17:09:25 --> バインド値(NETWORK_NAME)::%AA%
DEBUG - 2015-08-04 17:09:25 --> コミット
DEBUG - 2015-08-04 17:09:25 --> コネクション破棄
DEBUG - 2015-08-04 17:09:25 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:09:25 --> コミット
DEBUG - 2015-08-04 17:09:25 --> コネクション破棄
DEBUG - 2015-08-04 17:09:25 --> プロセス終了::process_network_listback
DEBUG - 2015-08-04 17:09:25 --> トランザクション開始
DEBUG - 2015-08-04 17:09:25 --> SQL実行
INFO - 2015-08-04 17:09:25 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 17:09:25 --> バインド値(NETWORK_NAME)::%AA%
DEBUG - 2015-08-04 17:09:25 --> SQL実行
INFO - 2015-08-04 17:09:25 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 17:09:25 --> バインド値(NETWORK_NAME)::%AA%
INFO - 2015-08-04 17:09:25 --> バインド値(NETWORK_NAME)::%AA%
DEBUG - 2015-08-04 17:09:25 --> コミット
DEBUG - 2015-08-04 17:09:25 --> コネクション破棄
DEBUG - 2015-08-04 17:09:25 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:09:25 --> コミット
DEBUG - 2015-08-04 17:09:25 --> コネクション破棄
DEBUG - 2015-08-04 17:09:25 --> プロセス終了::process_network_listback
INFO - 2015-08-04 17:09:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 17:09:29 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:09:29 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:09:29 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:09:29 --> コネクション作成
DEBUG - 2015-08-04 17:09:30 --> トランザクション開始
DEBUG - 2015-08-04 17:09:30 --> SQL実行
INFO - 2015-08-04 17:09:30 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:09:30 --> SQL実行
INFO - 2015-08-04 17:09:30 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 17:09:30 --> コミット
DEBUG - 2015-08-04 17:09:30 --> コネクション破棄
DEBUG - 2015-08-04 17:09:30 --> プロセス終了::process_network_list
INFO - 2015-08-04 17:09:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 17:09:32 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:09:32 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:09:32 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 17:09:32 --> コネクション作成
DEBUG - 2015-08-04 17:09:34 --> トランザクション開始
DEBUG - 2015-08-04 17:09:34 --> SQL実行
INFO - 2015-08-04 17:09:34 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 17:09:34 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:09:34 --> コミット
DEBUG - 2015-08-04 17:09:34 --> コネクション破棄
DEBUG - 2015-08-04 17:09:34 --> プロセス終了::process_network_detail
INFO - 2015-08-04 17:09:37 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:09:37 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:09:37 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:09:37 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:09:37 --> コネクション作成
DEBUG - 2015-08-04 17:09:38 --> トランザクション開始
DEBUG - 2015-08-04 17:09:38 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 17:09:38 --> コネクション作成
DEBUG - 2015-08-04 17:09:40 --> トランザクション開始
DEBUG - 2015-08-04 17:09:40 --> SQL実行
INFO - 2015-08-04 17:09:40 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:09:40 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:09:40 --> コミット
DEBUG - 2015-08-04 17:09:40 --> コネクション破棄
DEBUG - 2015-08-04 17:09:40 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 17:09:40 --> コミット
DEBUG - 2015-08-04 17:09:40 --> コネクション破棄
DEBUG - 2015-08-04 17:09:40 --> プロセス終了::process_network_inputcheck
INFO - 2015-08-04 17:09:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:09:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:09:58 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:09:58 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:09:58 --> コネクション作成
DEBUG - 2015-08-04 17:09:59 --> トランザクション開始
DEBUG - 2015-08-04 17:09:59 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:09:59 --> コネクション作成
DEBUG - 2015-08-04 17:10:00 --> トランザクション開始
DEBUG - 2015-08-04 17:10:00 --> SQL実行
INFO - 2015-08-04 17:10:00 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:10:00 --> SQL実行
INFO - 2015-08-04 17:10:00 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 17:10:00 --> コミット
DEBUG - 2015-08-04 17:10:00 --> コネクション破棄
DEBUG - 2015-08-04 17:10:00 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:10:00 --> コミット
DEBUG - 2015-08-04 17:10:00 --> コネクション破棄
DEBUG - 2015-08-04 17:10:00 --> プロセス終了::process_network_listback
INFO - 2015-08-04 17:10:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 17:10:20 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:10:20 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:10:20 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 17:10:20 --> コネクション作成
DEBUG - 2015-08-04 17:10:21 --> トランザクション開始
DEBUG - 2015-08-04 17:10:21 --> SQL実行
INFO - 2015-08-04 17:10:21 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 17:10:21 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:10:21 --> コミット
DEBUG - 2015-08-04 17:10:21 --> コネクション破棄
DEBUG - 2015-08-04 17:10:21 --> プロセス終了::process_network_detail
INFO - 2015-08-04 17:10:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:10:23 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:10:23 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:10:23 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:10:23 --> コネクション作成
DEBUG - 2015-08-04 17:10:24 --> トランザクション開始
DEBUG - 2015-08-04 17:10:24 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 17:10:24 --> コネクション作成
DEBUG - 2015-08-04 17:10:25 --> トランザクション開始
DEBUG - 2015-08-04 17:10:25 --> SQL実行
INFO - 2015-08-04 17:10:25 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:10:25 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:10:25 --> コミット
DEBUG - 2015-08-04 17:10:25 --> コネクション破棄
DEBUG - 2015-08-04 17:10:25 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 17:10:25 --> コミット
DEBUG - 2015-08-04 17:10:25 --> コネクション破棄
DEBUG - 2015-08-04 17:10:25 --> プロセス終了::process_network_inputcheck
INFO - 2015-08-04 17:10:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:10:27 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:10:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:10:27 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:10:27 --> コネクション作成
DEBUG - 2015-08-04 17:10:28 --> トランザクション開始
DEBUG - 2015-08-04 17:10:28 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:10:28 --> コネクション作成
DEBUG - 2015-08-04 17:10:29 --> トランザクション開始
DEBUG - 2015-08-04 17:10:29 --> SQL実行
INFO - 2015-08-04 17:10:29 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:10:29 --> SQL実行
INFO - 2015-08-04 17:10:29 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 17:10:29 --> コミット
DEBUG - 2015-08-04 17:10:29 --> コネクション破棄
DEBUG - 2015-08-04 17:10:29 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:10:29 --> コミット
DEBUG - 2015-08-04 17:10:29 --> コネクション破棄
DEBUG - 2015-08-04 17:10:29 --> プロセス終了::process_network_listback
INFO - 2015-08-04 17:10:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 17:10:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:10:58 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:10:58 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 17:10:58 --> コネクション作成
DEBUG - 2015-08-04 17:10:59 --> トランザクション開始
DEBUG - 2015-08-04 17:10:59 --> SQL実行
INFO - 2015-08-04 17:10:59 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 17:10:59 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:10:59 --> コミット
DEBUG - 2015-08-04 17:10:59 --> コネクション破棄
DEBUG - 2015-08-04 17:10:59 --> プロセス終了::process_network_detail
INFO - 2015-08-04 17:11:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:11:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:11:00 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:11:00 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:11:00 --> コネクション作成
DEBUG - 2015-08-04 17:11:01 --> トランザクション開始
DEBUG - 2015-08-04 17:11:01 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 17:11:01 --> コネクション作成
DEBUG - 2015-08-04 17:11:02 --> トランザクション開始
DEBUG - 2015-08-04 17:11:02 --> SQL実行
INFO - 2015-08-04 17:11:02 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:11:02 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:11:02 --> コミット
DEBUG - 2015-08-04 17:11:02 --> コネクション破棄
DEBUG - 2015-08-04 17:11:02 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 17:11:02 --> コミット
DEBUG - 2015-08-04 17:11:02 --> コネクション破棄
DEBUG - 2015-08-04 17:11:02 --> プロセス終了::process_network_inputcheck
INFO - 2015-08-04 17:13:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:13:30 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:13:30 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:13:30 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:13:30 --> コネクション作成
DEBUG - 2015-08-04 17:13:31 --> トランザクション開始
DEBUG - 2015-08-04 17:13:31 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 17:13:31 --> コネクション作成
DEBUG - 2015-08-04 17:13:32 --> トランザクション開始
DEBUG - 2015-08-04 17:13:32 --> SQL実行
INFO - 2015-08-04 17:13:32 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:13:32 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:13:32 --> コミット
DEBUG - 2015-08-04 17:13:32 --> コネクション破棄
DEBUG - 2015-08-04 17:13:32 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 17:13:32 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 17:13:32 --> コネクション作成
DEBUG - 2015-08-04 17:13:33 --> トランザクション開始
DEBUG - 2015-08-04 17:13:33 --> SQL実行
INFO - 2015-08-04 17:13:33 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:13:33 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:13:33 --> コミット
DEBUG - 2015-08-04 17:13:33 --> コネクション破棄
DEBUG - 2015-08-04 17:13:33 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 17:13:33 --> コミット
DEBUG - 2015-08-04 17:13:33 --> コネクション破棄
DEBUG - 2015-08-04 17:13:33 --> プロセス終了::process_network_inputcheck
DEBUG - 2015-08-04 17:13:33 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:13:33 --> コネクション作成
DEBUG - 2015-08-04 17:13:34 --> トランザクション開始
DEBUG - 2015-08-04 17:13:34 --> コミット
DEBUG - 2015-08-04 17:13:34 --> コネクション破棄
DEBUG - 2015-08-04 17:13:34 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:13:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-04 17:13:36 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:13:36 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:13:36 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-04 17:13:36 --> コネクション作成
DEBUG - 2015-08-04 17:13:37 --> トランザクション開始
DEBUG - 2015-08-04 17:13:37 --> コミット
DEBUG - 2015-08-04 17:13:37 --> コネクション破棄
DEBUG - 2015-08-04 17:13:37 --> プロセス終了::process_network_detailback
INFO - 2015-08-04 17:14:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:14:41 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:14:41 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:14:41 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:14:41 --> コネクション作成
DEBUG - 2015-08-04 17:14:41 --> トランザクション開始
DEBUG - 2015-08-04 17:14:41 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 17:14:41 --> コネクション作成
DEBUG - 2015-08-04 17:14:42 --> トランザクション開始
DEBUG - 2015-08-04 17:14:42 --> SQL実行
INFO - 2015-08-04 17:14:42 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:14:42 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:14:42 --> コミット
DEBUG - 2015-08-04 17:14:42 --> コネクション破棄
DEBUG - 2015-08-04 17:14:42 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 17:14:42 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 17:14:42 --> コネクション作成
DEBUG - 2015-08-04 17:14:43 --> トランザクション開始
DEBUG - 2015-08-04 17:14:43 --> SQL実行
INFO - 2015-08-04 17:14:43 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:14:43 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:14:43 --> コミット
DEBUG - 2015-08-04 17:14:43 --> コネクション破棄
DEBUG - 2015-08-04 17:14:43 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 17:14:43 --> コミット
DEBUG - 2015-08-04 17:14:43 --> コネクション破棄
DEBUG - 2015-08-04 17:14:43 --> プロセス終了::process_network_inputcheck
DEBUG - 2015-08-04 17:14:43 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:14:43 --> コネクション作成
DEBUG - 2015-08-04 17:14:44 --> トランザクション開始
DEBUG - 2015-08-04 17:14:44 --> コミット
DEBUG - 2015-08-04 17:14:44 --> コネクション破棄
DEBUG - 2015-08-04 17:14:44 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:14:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-04 17:14:54 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:14:54 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:14:54 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-04 17:14:54 --> コネクション作成
DEBUG - 2015-08-04 17:14:55 --> トランザクション開始
DEBUG - 2015-08-04 17:14:55 --> コミット
DEBUG - 2015-08-04 17:14:55 --> コネクション破棄
DEBUG - 2015-08-04 17:14:55 --> プロセス終了::process_network_detailback
INFO - 2015-08-04 17:16:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:16:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:16:02 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:16:02 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:16:02 --> コネクション作成
DEBUG - 2015-08-04 17:16:03 --> トランザクション開始
DEBUG - 2015-08-04 17:16:03 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 17:16:03 --> コネクション作成
DEBUG - 2015-08-04 17:16:04 --> トランザクション開始
DEBUG - 2015-08-04 17:16:04 --> SQL実行
INFO - 2015-08-04 17:16:04 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:16:04 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:16:04 --> コミット
DEBUG - 2015-08-04 17:16:04 --> コネクション破棄
DEBUG - 2015-08-04 17:16:04 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 17:16:04 --> コミット
DEBUG - 2015-08-04 17:16:04 --> コネクション破棄
DEBUG - 2015-08-04 17:16:04 --> プロセス終了::process_network_inputcheck
INFO - 2015-08-04 17:16:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:16:07 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:16:07 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:16:07 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:16:07 --> コネクション作成
DEBUG - 2015-08-04 17:16:08 --> トランザクション開始
DEBUG - 2015-08-04 17:16:08 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:16:08 --> コネクション作成
DEBUG - 2015-08-04 17:16:09 --> トランザクション開始
DEBUG - 2015-08-04 17:16:09 --> SQL実行
INFO - 2015-08-04 17:16:09 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:16:09 --> SQL実行
INFO - 2015-08-04 17:16:09 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 17:16:09 --> コミット
DEBUG - 2015-08-04 17:16:09 --> コネクション破棄
DEBUG - 2015-08-04 17:16:09 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:16:09 --> コミット
DEBUG - 2015-08-04 17:16:09 --> コネクション破棄
DEBUG - 2015-08-04 17:16:09 --> プロセス終了::process_network_listback
INFO - 2015-08-04 17:16:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 17:16:10 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:16:10 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:16:10 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 17:16:10 --> コネクション作成
DEBUG - 2015-08-04 17:16:11 --> トランザクション開始
DEBUG - 2015-08-04 17:16:11 --> SQL実行
INFO - 2015-08-04 17:16:11 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 17:16:11 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 17:16:11 --> コミット
DEBUG - 2015-08-04 17:16:11 --> コネクション破棄
DEBUG - 2015-08-04 17:16:11 --> プロセス終了::process_network_detail
INFO - 2015-08-04 17:16:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:16:12 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:16:12 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:16:12 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:16:12 --> コネクション作成
DEBUG - 2015-08-04 17:16:13 --> トランザクション開始
DEBUG - 2015-08-04 17:16:13 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 17:16:13 --> コネクション作成
DEBUG - 2015-08-04 17:16:14 --> トランザクション開始
DEBUG - 2015-08-04 17:16:14 --> SQL実行
INFO - 2015-08-04 17:16:14 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:16:14 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 17:16:14 --> コミット
DEBUG - 2015-08-04 17:16:14 --> コネクション破棄
DEBUG - 2015-08-04 17:16:14 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 17:16:14 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 17:16:14 --> コネクション作成
DEBUG - 2015-08-04 17:16:15 --> トランザクション開始
DEBUG - 2015-08-04 17:16:15 --> SQL実行
INFO - 2015-08-04 17:16:15 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:16:15 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 17:16:15 --> コミット
DEBUG - 2015-08-04 17:16:15 --> コネクション破棄
DEBUG - 2015-08-04 17:16:15 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 17:16:15 --> コミット
DEBUG - 2015-08-04 17:16:15 --> コネクション破棄
DEBUG - 2015-08-04 17:16:15 --> プロセス終了::process_network_inputcheck
INFO - 2015-08-04 17:16:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:16:16 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:16:16 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:16:16 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:16:16 --> コネクション作成
DEBUG - 2015-08-04 17:16:17 --> トランザクション開始
DEBUG - 2015-08-04 17:16:17 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:16:17 --> コネクション作成
DEBUG - 2015-08-04 17:16:18 --> トランザクション開始
DEBUG - 2015-08-04 17:16:18 --> SQL実行
INFO - 2015-08-04 17:16:18 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:16:18 --> SQL実行
INFO - 2015-08-04 17:16:18 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 17:16:18 --> コミット
DEBUG - 2015-08-04 17:16:18 --> コネクション破棄
DEBUG - 2015-08-04 17:16:18 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:16:18 --> コミット
DEBUG - 2015-08-04 17:16:18 --> コネクション破棄
DEBUG - 2015-08-04 17:16:18 --> プロセス終了::process_network_listback
INFO - 2015-08-04 17:16:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 17:16:19 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:16:19 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:16:19 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 17:16:19 --> コネクション作成
DEBUG - 2015-08-04 17:16:20 --> トランザクション開始
DEBUG - 2015-08-04 17:16:20 --> SQL実行
INFO - 2015-08-04 17:16:20 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 17:16:20 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 17:16:20 --> コミット
DEBUG - 2015-08-04 17:16:20 --> コネクション破棄
DEBUG - 2015-08-04 17:16:20 --> プロセス終了::process_network_detail
INFO - 2015-08-04 17:16:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:16:20 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:16:20 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:16:20 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:16:20 --> コネクション作成
DEBUG - 2015-08-04 17:16:21 --> トランザクション開始
DEBUG - 2015-08-04 17:16:21 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 17:16:21 --> コネクション作成
DEBUG - 2015-08-04 17:16:22 --> トランザクション開始
DEBUG - 2015-08-04 17:16:22 --> SQL実行
INFO - 2015-08-04 17:16:22 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:16:22 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 17:16:22 --> コミット
DEBUG - 2015-08-04 17:16:22 --> コネクション破棄
DEBUG - 2015-08-04 17:16:22 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 17:16:22 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 17:16:22 --> コネクション作成
DEBUG - 2015-08-04 17:16:23 --> トランザクション開始
DEBUG - 2015-08-04 17:16:23 --> SQL実行
INFO - 2015-08-04 17:16:23 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:16:23 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 17:16:23 --> コミット
DEBUG - 2015-08-04 17:16:23 --> コネクション破棄
DEBUG - 2015-08-04 17:16:23 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 17:16:23 --> コミット
DEBUG - 2015-08-04 17:16:23 --> コネクション破棄
DEBUG - 2015-08-04 17:16:23 --> プロセス終了::process_network_inputcheck
DEBUG - 2015-08-04 17:16:23 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:16:23 --> コネクション作成
DEBUG - 2015-08-04 17:16:24 --> トランザクション開始
DEBUG - 2015-08-04 17:16:24 --> コミット
DEBUG - 2015-08-04 17:16:24 --> コネクション破棄
DEBUG - 2015-08-04 17:16:24 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:16:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-04 17:16:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:16:24 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:16:24 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-04 17:16:24 --> コネクション作成
DEBUG - 2015-08-04 17:16:25 --> トランザクション開始
DEBUG - 2015-08-04 17:16:25 --> コミット
DEBUG - 2015-08-04 17:16:25 --> コネクション破棄
DEBUG - 2015-08-04 17:16:25 --> プロセス終了::process_network_detailback
INFO - 2015-08-04 17:16:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:16:26 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:16:26 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:16:26 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:16:26 --> コネクション作成
DEBUG - 2015-08-04 17:16:27 --> トランザクション開始
DEBUG - 2015-08-04 17:16:27 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:16:27 --> コネクション作成
DEBUG - 2015-08-04 17:16:27 --> トランザクション開始
DEBUG - 2015-08-04 17:16:27 --> SQL実行
INFO - 2015-08-04 17:16:27 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:16:27 --> SQL実行
INFO - 2015-08-04 17:16:27 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 17:16:27 --> コミット
DEBUG - 2015-08-04 17:16:27 --> コネクション破棄
DEBUG - 2015-08-04 17:16:27 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:16:27 --> コミット
DEBUG - 2015-08-04 17:16:27 --> コネクション破棄
DEBUG - 2015-08-04 17:16:27 --> プロセス終了::process_network_listback
INFO - 2015-08-04 17:17:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 17:17:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:17:02 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:17:02 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 17:17:02 --> コネクション作成
DEBUG - 2015-08-04 17:17:03 --> トランザクション開始
DEBUG - 2015-08-04 17:17:03 --> SQL実行
INFO - 2015-08-04 17:17:03 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 17:17:03 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 17:17:03 --> コミット
DEBUG - 2015-08-04 17:17:03 --> コネクション破棄
DEBUG - 2015-08-04 17:17:03 --> プロセス終了::process_network_detail
INFO - 2015-08-04 17:17:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:17:04 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:17:04 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:17:04 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:17:04 --> コネクション作成
DEBUG - 2015-08-04 17:17:05 --> トランザクション開始
DEBUG - 2015-08-04 17:17:05 --> コミット
DEBUG - 2015-08-04 17:17:05 --> コネクション破棄
DEBUG - 2015-08-04 17:17:05 --> プロセス終了::process_network_inputcheck
DEBUG - 2015-08-04 17:17:05 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:17:05 --> コネクション作成
DEBUG - 2015-08-04 17:17:06 --> トランザクション開始
DEBUG - 2015-08-04 17:17:06 --> コミット
DEBUG - 2015-08-04 17:17:06 --> コネクション破棄
DEBUG - 2015-08-04 17:17:06 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:17:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-04 17:17:07 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:17:07 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:17:07 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-04 17:17:07 --> コネクション作成
DEBUG - 2015-08-04 17:17:09 --> トランザクション開始
DEBUG - 2015-08-04 17:17:09 --> コミット
DEBUG - 2015-08-04 17:17:09 --> コネクション破棄
DEBUG - 2015-08-04 17:17:09 --> プロセス終了::process_network_detailback
INFO - 2015-08-04 17:17:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:17:11 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:17:11 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:17:11 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:17:11 --> コネクション作成
DEBUG - 2015-08-04 17:17:12 --> トランザクション開始
DEBUG - 2015-08-04 17:17:12 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 17:17:12 --> コネクション作成
DEBUG - 2015-08-04 17:17:13 --> トランザクション開始
DEBUG - 2015-08-04 17:17:13 --> SQL実行
INFO - 2015-08-04 17:17:13 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:17:13 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 17:17:13 --> コミット
DEBUG - 2015-08-04 17:17:13 --> コネクション破棄
DEBUG - 2015-08-04 17:17:13 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 17:17:13 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 17:17:13 --> コネクション作成
DEBUG - 2015-08-04 17:17:14 --> トランザクション開始
DEBUG - 2015-08-04 17:17:14 --> SQL実行
INFO - 2015-08-04 17:17:14 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:17:14 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 17:17:14 --> コミット
DEBUG - 2015-08-04 17:17:14 --> コネクション破棄
DEBUG - 2015-08-04 17:17:14 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 17:17:14 --> コミット
DEBUG - 2015-08-04 17:17:14 --> コネクション破棄
DEBUG - 2015-08-04 17:17:14 --> プロセス終了::process_network_inputcheck
INFO - 2015-08-04 17:17:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:17:17 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:17:17 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:17:17 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:17:17 --> コネクション作成
DEBUG - 2015-08-04 17:17:18 --> トランザクション開始
DEBUG - 2015-08-04 17:17:18 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:17:18 --> コネクション作成
DEBUG - 2015-08-04 17:17:19 --> トランザクション開始
DEBUG - 2015-08-04 17:17:19 --> SQL実行
INFO - 2015-08-04 17:17:19 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:17:19 --> SQL実行
INFO - 2015-08-04 17:17:19 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 17:17:19 --> コミット
DEBUG - 2015-08-04 17:17:19 --> コネクション破棄
DEBUG - 2015-08-04 17:17:19 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:17:19 --> コミット
DEBUG - 2015-08-04 17:17:19 --> コネクション破棄
DEBUG - 2015-08-04 17:17:19 --> プロセス終了::process_network_listback
INFO - 2015-08-04 17:17:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 17:17:21 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:17:21 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:17:21 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 17:17:21 --> コネクション作成
DEBUG - 2015-08-04 17:17:22 --> トランザクション開始
DEBUG - 2015-08-04 17:17:22 --> SQL実行
INFO - 2015-08-04 17:17:22 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 17:17:22 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:17:22 --> コミット
DEBUG - 2015-08-04 17:17:22 --> コネクション破棄
DEBUG - 2015-08-04 17:17:22 --> プロセス終了::process_network_detail
INFO - 2015-08-04 17:17:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:17:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:17:24 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:17:24 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:17:24 --> コネクション作成
DEBUG - 2015-08-04 17:17:26 --> トランザクション開始
DEBUG - 2015-08-04 17:17:26 --> コミット
DEBUG - 2015-08-04 17:17:26 --> コネクション破棄
DEBUG - 2015-08-04 17:17:26 --> プロセス終了::process_network_inputcheck
DEBUG - 2015-08-04 17:17:26 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:17:26 --> コネクション作成
DEBUG - 2015-08-04 17:17:27 --> トランザクション開始
DEBUG - 2015-08-04 17:17:27 --> コミット
DEBUG - 2015-08-04 17:17:27 --> コネクション破棄
DEBUG - 2015-08-04 17:17:27 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:17:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-04 17:17:28 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:17:28 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:17:28 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-04 17:17:28 --> コネクション作成
DEBUG - 2015-08-04 17:17:30 --> トランザクション開始
DEBUG - 2015-08-04 17:17:30 --> コミット
DEBUG - 2015-08-04 17:17:30 --> コネクション破棄
DEBUG - 2015-08-04 17:17:30 --> プロセス終了::process_network_detailback
INFO - 2015-08-04 17:17:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:17:32 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:17:32 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:17:32 --> プロセス開始::process_network_inputcheck
DEBUG - 2015-08-04 17:17:32 --> コネクション作成
DEBUG - 2015-08-04 17:17:33 --> トランザクション開始
DEBUG - 2015-08-04 17:17:33 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 17:17:33 --> コネクション作成
DEBUG - 2015-08-04 17:17:35 --> トランザクション開始
DEBUG - 2015-08-04 17:17:35 --> SQL実行
INFO - 2015-08-04 17:17:35 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:17:35 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 17:17:35 --> コミット
DEBUG - 2015-08-04 17:17:35 --> コネクション破棄
DEBUG - 2015-08-04 17:17:35 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 17:17:35 --> コミット
DEBUG - 2015-08-04 17:17:35 --> コネクション破棄
DEBUG - 2015-08-04 17:17:35 --> プロセス終了::process_network_inputcheck
INFO - 2015-08-04 17:17:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:17:39 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:17:39 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:17:39 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:17:39 --> コネクション作成
DEBUG - 2015-08-04 17:17:40 --> トランザクション開始
DEBUG - 2015-08-04 17:17:41 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:17:41 --> コネクション作成
DEBUG - 2015-08-04 17:17:42 --> トランザクション開始
DEBUG - 2015-08-04 17:17:42 --> SQL実行
INFO - 2015-08-04 17:17:42 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:17:42 --> SQL実行
INFO - 2015-08-04 17:17:42 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 17:17:42 --> コミット
DEBUG - 2015-08-04 17:17:42 --> コネクション破棄
DEBUG - 2015-08-04 17:17:42 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:17:42 --> コミット
DEBUG - 2015-08-04 17:17:42 --> コネクション破棄
DEBUG - 2015-08-04 17:17:42 --> プロセス終了::process_network_listback
INFO - 2015-08-04 17:20:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 17:20:43 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:20:43 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:20:43 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 17:20:43 --> コネクション作成
DEBUG - 2015-08-04 17:20:45 --> トランザクション開始
DEBUG - 2015-08-04 17:20:45 --> SQL実行
INFO - 2015-08-04 17:20:45 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 17:20:45 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 17:20:45 --> コミット
DEBUG - 2015-08-04 17:20:45 --> コネクション破棄
DEBUG - 2015-08-04 17:20:45 --> プロセス終了::process_network_detail
INFO - 2015-08-04 17:20:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:20:49 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:20:49 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:20:49 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 17:20:49 --> コネクション作成
DEBUG - 2015-08-04 17:20:51 --> トランザクション開始
DEBUG - 2015-08-04 17:20:51 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 17:20:51 --> コネクション作成
DEBUG - 2015-08-04 17:20:52 --> トランザクション開始
DEBUG - 2015-08-04 17:20:52 --> SQL実行
INFO - 2015-08-04 17:20:52 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:20:52 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 17:20:52 --> コミット
DEBUG - 2015-08-04 17:20:52 --> コネクション破棄
DEBUG - 2015-08-04 17:20:52 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 17:20:52 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 17:20:52 --> コネクション作成
DEBUG - 2015-08-04 17:20:54 --> トランザクション開始
DEBUG - 2015-08-04 17:20:54 --> SQL実行
INFO - 2015-08-04 17:20:54 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 17:20:54 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 17:20:54 --> コミット
DEBUG - 2015-08-04 17:20:54 --> コネクション破棄
DEBUG - 2015-08-04 17:20:54 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 17:20:54 --> コミット
DEBUG - 2015-08-04 17:20:54 --> コネクション破棄
DEBUG - 2015-08-04 17:20:54 --> プロセス終了::process_network_checkinput
INFO - 2015-08-04 17:20:59 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:20:59 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:20:59 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:20:59 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 17:20:59 --> コネクション作成
DEBUG - 2015-08-04 17:21:01 --> トランザクション開始
DEBUG - 2015-08-04 17:21:01 --> コミット
DEBUG - 2015-08-04 17:21:01 --> コネクション破棄
DEBUG - 2015-08-04 17:21:01 --> プロセス終了::process_network_checkinput
INFO - 2015-08-04 17:21:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:21:04 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:21:04 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:21:04 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 17:21:04 --> コネクション作成
DEBUG - 2015-08-04 17:21:05 --> トランザクション開始
DEBUG - 2015-08-04 17:21:05 --> コミット
DEBUG - 2015-08-04 17:21:05 --> コネクション破棄
DEBUG - 2015-08-04 17:21:05 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 17:21:05 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:21:05 --> コネクション作成
DEBUG - 2015-08-04 17:21:06 --> トランザクション開始
DEBUG - 2015-08-04 17:21:06 --> コミット
DEBUG - 2015-08-04 17:21:06 --> コネクション破棄
DEBUG - 2015-08-04 17:21:06 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:21:08 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-04 17:21:08 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:21:08 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:21:08 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-04 17:21:08 --> コネクション作成
DEBUG - 2015-08-04 17:21:09 --> トランザクション開始
DEBUG - 2015-08-04 17:21:09 --> コミット
DEBUG - 2015-08-04 17:21:09 --> コネクション破棄
DEBUG - 2015-08-04 17:21:09 --> プロセス終了::process_network_detailback
INFO - 2015-08-04 17:21:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:21:10 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:21:10 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:21:10 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:21:10 --> コネクション作成
DEBUG - 2015-08-04 17:21:11 --> トランザクション開始
DEBUG - 2015-08-04 17:21:11 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:21:11 --> コネクション作成
DEBUG - 2015-08-04 17:21:13 --> トランザクション開始
DEBUG - 2015-08-04 17:21:13 --> SQL実行
INFO - 2015-08-04 17:21:13 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:21:13 --> SQL実行
INFO - 2015-08-04 17:21:13 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 17:21:13 --> コミット
DEBUG - 2015-08-04 17:21:13 --> コネクション破棄
DEBUG - 2015-08-04 17:21:13 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:21:13 --> コミット
DEBUG - 2015-08-04 17:21:13 --> コネクション破棄
DEBUG - 2015-08-04 17:21:13 --> プロセス終了::process_network_listback
INFO - 2015-08-04 17:21:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 17:21:45 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:21:45 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:21:45 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 17:21:45 --> コネクション作成
DEBUG - 2015-08-04 17:21:46 --> トランザクション開始
DEBUG - 2015-08-04 17:21:46 --> コミット
DEBUG - 2015-08-04 17:21:46 --> コネクション破棄
DEBUG - 2015-08-04 17:21:46 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 17:21:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:21:54 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:21:54 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:21:54 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 17:21:54 --> コネクション作成
DEBUG - 2015-08-04 17:21:55 --> トランザクション開始
DEBUG - 2015-08-04 17:21:55 --> コミット
DEBUG - 2015-08-04 17:21:55 --> コネクション破棄
DEBUG - 2015-08-04 17:21:55 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 17:21:55 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:21:55 --> コネクション作成
DEBUG - 2015-08-04 17:21:55 --> トランザクション開始
DEBUG - 2015-08-04 17:21:55 --> コミット
DEBUG - 2015-08-04 17:21:55 --> コネクション破棄
DEBUG - 2015-08-04 17:21:55 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:21:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 17:21:57 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:21:57 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:21:57 --> プロセス開始::process_network_ins
DEBUG - 2015-08-04 17:21:57 --> コネクション作成
DEBUG - 2015-08-04 17:21:57 --> トランザクション開始
DEBUG - 2015-08-04 17:21:57 --> SQL実行
INFO - 2015-08-04 17:21:57 --> SQL::: INSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST_TIME  ,REGIST_USER  ,UPDATE_TIME  ,UPDATE_USER )   VALUES ( (SELECT ifnull(right(concat('000000', MAX( network_id ) +1 ),6),  '000001') network_id FROM network_mst sub),  :NETWORK_NAME,  :ENABLED_FLAG,   NOW(),  :REGIST_USER,   NOW(),  :UPDATE_USER ) 
INFO - 2015-08-04 17:21:57 --> バインド値(NETWORK_NAME)::ネットワーク99
INFO - 2015-08-04 17:21:57 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-04 17:21:57 --> バインド値(REGIST_USER)::iziri
INFO - 2015-08-04 17:21:57 --> バインド値(UPDATE_USER)::iziri
DEBUG - 2015-08-04 17:21:57 --> コミット
DEBUG - 2015-08-04 17:21:57 --> コネクション破棄
DEBUG - 2015-08-04 17:21:57 --> プロセス終了::process_network_ins
INFO - 2015-08-04 17:22:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 17:22:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:22:00 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:22:00 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:22:00 --> コネクション作成
DEBUG - 2015-08-04 17:22:01 --> トランザクション開始
DEBUG - 2015-08-04 17:22:01 --> SQL実行
INFO - 2015-08-04 17:22:01 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 17:22:01 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 17:22:01 --> SQL実行
INFO - 2015-08-04 17:22:01 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 17:22:01 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 17:22:01 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 17:22:01 --> コミット
DEBUG - 2015-08-04 17:22:01 --> コネクション破棄
DEBUG - 2015-08-04 17:22:01 --> プロセス終了::process_network_list
INFO - 2015-08-04 17:22:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 17:22:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:22:02 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:22:03 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 17:22:03 --> コネクション作成
DEBUG - 2015-08-04 17:22:03 --> トランザクション開始
DEBUG - 2015-08-04 17:22:03 --> コミット
DEBUG - 2015-08-04 17:22:03 --> コネクション破棄
DEBUG - 2015-08-04 17:22:03 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 17:22:08 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:22:08 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:22:08 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:22:08 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 17:22:08 --> コネクション作成
DEBUG - 2015-08-04 17:22:09 --> トランザクション開始
DEBUG - 2015-08-04 17:22:09 --> コミット
DEBUG - 2015-08-04 17:22:09 --> コネクション破棄
DEBUG - 2015-08-04 17:22:09 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 17:22:09 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:22:09 --> コネクション作成
DEBUG - 2015-08-04 17:22:09 --> トランザクション開始
DEBUG - 2015-08-04 17:22:09 --> コミット
DEBUG - 2015-08-04 17:22:09 --> コネクション破棄
DEBUG - 2015-08-04 17:22:09 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:22:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 17:22:11 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:22:11 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:22:11 --> プロセス開始::process_network_ins
DEBUG - 2015-08-04 17:22:11 --> コネクション作成
DEBUG - 2015-08-04 17:22:11 --> トランザクション開始
DEBUG - 2015-08-04 17:22:11 --> SQL実行
INFO - 2015-08-04 17:22:11 --> SQL::: INSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST_TIME  ,REGIST_USER  ,UPDATE_TIME  ,UPDATE_USER )   VALUES ( (SELECT ifnull(right(concat('000000', MAX( network_id ) +1 ),6),  '000001') network_id FROM network_mst sub),  :NETWORK_NAME,  :ENABLED_FLAG,   NOW(),  :REGIST_USER,   NOW(),  :UPDATE_USER ) 
INFO - 2015-08-04 17:22:11 --> バインド値(NETWORK_NAME)::ネットワーク999
INFO - 2015-08-04 17:22:11 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-04 17:22:11 --> バインド値(REGIST_USER)::iziri
INFO - 2015-08-04 17:22:11 --> バインド値(UPDATE_USER)::iziri
DEBUG - 2015-08-04 17:22:11 --> コミット
DEBUG - 2015-08-04 17:22:12 --> コネクション破棄
DEBUG - 2015-08-04 17:22:12 --> プロセス終了::process_network_ins
INFO - 2015-08-04 17:22:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 17:22:14 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:22:14 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:22:14 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:22:14 --> コネクション作成
DEBUG - 2015-08-04 17:22:15 --> トランザクション開始
DEBUG - 2015-08-04 17:22:15 --> SQL実行
INFO - 2015-08-04 17:22:15 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 17:22:15 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 17:22:15 --> SQL実行
INFO - 2015-08-04 17:22:15 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 17:22:15 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 17:22:15 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 17:22:15 --> コミット
DEBUG - 2015-08-04 17:22:15 --> コネクション破棄
DEBUG - 2015-08-04 17:22:15 --> プロセス終了::process_network_list
INFO - 2015-08-04 17:26:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 17:26:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:26:00 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:26:00 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 17:26:00 --> コネクション作成
DEBUG - 2015-08-04 17:26:02 --> トランザクション開始
DEBUG - 2015-08-04 17:26:02 --> コミット
DEBUG - 2015-08-04 17:26:02 --> コネクション破棄
DEBUG - 2015-08-04 17:26:02 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 17:26:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:26:09 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:26:09 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:26:09 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 17:26:09 --> コネクション作成
DEBUG - 2015-08-04 17:26:11 --> トランザクション開始
DEBUG - 2015-08-04 17:26:11 --> コミット
DEBUG - 2015-08-04 17:26:11 --> コネクション破棄
DEBUG - 2015-08-04 17:26:11 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 17:26:11 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:26:11 --> コネクション作成
DEBUG - 2015-08-04 17:26:12 --> トランザクション開始
DEBUG - 2015-08-04 17:26:12 --> コミット
DEBUG - 2015-08-04 17:26:12 --> コネクション破棄
DEBUG - 2015-08-04 17:26:12 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:26:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 17:26:14 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:26:14 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:26:14 --> プロセス開始::process_network_ins
DEBUG - 2015-08-04 17:26:14 --> コネクション作成
DEBUG - 2015-08-04 17:26:15 --> トランザクション開始
DEBUG - 2015-08-04 17:26:15 --> SQL実行
INFO - 2015-08-04 17:26:15 --> SQL::: INSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST_TIME  ,REGIST_USER  ,UPDATE_TIME  ,UPDATE_USER )   VALUES ( (SELECT ifnull(right(concat('000000', MAX( network_id ) +1 ),6),  '000001') network_id FROM network_mst sub),  :NETWORK_NAME,  :ENABLED_FLAG,   NOW(),  :REGIST_USER,   NOW(),  :UPDATE_USER ) 
INFO - 2015-08-04 17:26:15 --> バインド値(NETWORK_NAME)::ネットワーク999
INFO - 2015-08-04 17:26:15 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-04 17:26:15 --> バインド値(REGIST_USER)::iziri
INFO - 2015-08-04 17:26:15 --> バインド値(UPDATE_USER)::iziri
DEBUG - 2015-08-04 17:26:15 --> コミット
DEBUG - 2015-08-04 17:26:15 --> コネクション破棄
DEBUG - 2015-08-04 17:26:15 --> プロセス終了::process_network_ins
INFO - 2015-08-04 17:29:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 17:29:35 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:29:35 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:29:35 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 17:29:35 --> コネクション作成
DEBUG - 2015-08-04 17:29:36 --> トランザクション開始
DEBUG - 2015-08-04 17:29:36 --> コミット
DEBUG - 2015-08-04 17:29:36 --> コネクション破棄
DEBUG - 2015-08-04 17:29:36 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 17:29:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:29:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:29:44 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:29:44 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 17:29:44 --> コネクション作成
DEBUG - 2015-08-04 17:29:45 --> トランザクション開始
DEBUG - 2015-08-04 17:29:45 --> コミット
DEBUG - 2015-08-04 17:29:45 --> コネクション破棄
DEBUG - 2015-08-04 17:29:45 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 17:29:45 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:29:45 --> コネクション作成
DEBUG - 2015-08-04 17:29:46 --> トランザクション開始
DEBUG - 2015-08-04 17:29:46 --> コミット
DEBUG - 2015-08-04 17:29:46 --> コネクション破棄
DEBUG - 2015-08-04 17:29:46 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:29:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 17:29:48 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:29:48 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:29:48 --> プロセス開始::process_network_ins
DEBUG - 2015-08-04 17:29:48 --> コネクション作成
DEBUG - 2015-08-04 17:29:50 --> トランザクション開始
DEBUG - 2015-08-04 17:29:50 --> SQL実行
INFO - 2015-08-04 17:29:50 --> SQL::: INSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST_TIME  ,REGIST_USER  ,UPDATE_TIME  ,UPDATE_USER )   VALUES ( (SELECT ifnull(right(concat('000000', MAX( network_id ) +1 ),6),  '000001') network_id FROM network_mst sub),  :NETWORK_NAME,  :ENABLED_FLAG,   NOW(),  :REGIST_USER,   NOW(),  :UPDATE_USER ) 
INFO - 2015-08-04 17:29:50 --> バインド値(NETWORK_NAME)::ネットワーク9999
INFO - 2015-08-04 17:29:50 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-04 17:29:50 --> バインド値(REGIST_USER)::iziri
INFO - 2015-08-04 17:29:50 --> バインド値(UPDATE_USER)::iziri
DEBUG - 2015-08-04 17:29:50 --> コミット
DEBUG - 2015-08-04 17:29:50 --> コネクション破棄
DEBUG - 2015-08-04 17:29:50 --> プロセス終了::process_network_ins
INFO - 2015-08-04 17:30:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 17:30:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:30:22 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:30:22 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:30:22 --> コネクション作成
DEBUG - 2015-08-04 17:30:23 --> トランザクション開始
DEBUG - 2015-08-04 17:30:23 --> SQL実行
INFO - 2015-08-04 17:30:23 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 17:30:23 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 17:30:23 --> SQL実行
INFO - 2015-08-04 17:30:23 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 17:30:23 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 17:30:23 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 17:30:23 --> コミット
DEBUG - 2015-08-04 17:30:23 --> コネクション破棄
DEBUG - 2015-08-04 17:30:23 --> プロセス終了::process_network_list
INFO - 2015-08-04 17:31:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 17:31:06 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:31:06 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:31:07 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 17:31:07 --> コネクション作成
DEBUG - 2015-08-04 17:31:08 --> トランザクション開始
DEBUG - 2015-08-04 17:31:08 --> コミット
DEBUG - 2015-08-04 17:31:08 --> コネクション破棄
DEBUG - 2015-08-04 17:31:08 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 17:31:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:31:15 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:31:15 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:31:15 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 17:31:15 --> コネクション作成
DEBUG - 2015-08-04 17:31:16 --> トランザクション開始
DEBUG - 2015-08-04 17:31:16 --> コミット
DEBUG - 2015-08-04 17:31:16 --> コネクション破棄
DEBUG - 2015-08-04 17:31:16 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 17:31:16 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:31:16 --> コネクション作成
DEBUG - 2015-08-04 17:31:17 --> トランザクション開始
DEBUG - 2015-08-04 17:31:17 --> コミット
DEBUG - 2015-08-04 17:31:17 --> コネクション破棄
DEBUG - 2015-08-04 17:31:17 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:31:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 17:31:21 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:31:21 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:31:21 --> プロセス開始::process_network_ins
DEBUG - 2015-08-04 17:31:21 --> コネクション作成
DEBUG - 2015-08-04 17:31:23 --> トランザクション開始
DEBUG - 2015-08-04 17:31:23 --> SQL実行
INFO - 2015-08-04 17:31:23 --> SQL::: INSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST_TIME  ,REGIST_USER  ,UPDATE_TIME  ,UPDATE_USER )   VALUES ( (SELECT ifnull(right(concat('000000', MAX( network_id ) +1 ),6),  '000001') network_id FROM network_mst sub),  :NETWORK_NAME,  :ENABLED_FLAG,   NOW(),  :REGIST_USER,   NOW(),  :UPDATE_USER ) 
INFO - 2015-08-04 17:31:23 --> バインド値(NETWORK_NAME)::ネットワーク99999
INFO - 2015-08-04 17:31:23 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-04 17:31:23 --> バインド値(REGIST_USER)::iziri
INFO - 2015-08-04 17:31:23 --> バインド値(UPDATE_USER)::iziri
DEBUG - 2015-08-04 17:31:23 --> コミット
DEBUG - 2015-08-04 17:31:23 --> コネクション破棄
DEBUG - 2015-08-04 17:31:23 --> プロセス終了::process_network_ins
INFO - 2015-08-04 17:31:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-04 17:31:23 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:31:23 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:31:23 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-04 17:31:23 --> コネクション作成
DEBUG - 2015-08-04 17:31:24 --> トランザクション開始
DEBUG - 2015-08-04 17:31:24 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:31:24 --> コネクション作成
DEBUG - 2015-08-04 17:31:25 --> トランザクション開始
DEBUG - 2015-08-04 17:31:25 --> SQL実行
INFO - 2015-08-04 17:31:25 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 17:31:25 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 17:31:25 --> SQL実行
INFO - 2015-08-04 17:31:25 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 17:31:25 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 17:31:25 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 17:31:25 --> コミット
DEBUG - 2015-08-04 17:31:25 --> コネクション破棄
DEBUG - 2015-08-04 17:31:25 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:31:25 --> コミット
DEBUG - 2015-08-04 17:31:25 --> コネクション破棄
DEBUG - 2015-08-04 17:31:25 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-04 17:34:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 17:34:27 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:34:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:34:27 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 17:34:27 --> コネクション作成
DEBUG - 2015-08-04 17:34:28 --> トランザクション開始
DEBUG - 2015-08-04 17:34:28 --> コミット
DEBUG - 2015-08-04 17:34:28 --> コネクション破棄
DEBUG - 2015-08-04 17:34:28 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 17:34:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:34:30 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:34:30 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:34:30 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 17:34:30 --> コネクション作成
DEBUG - 2015-08-04 17:34:31 --> トランザクション開始
DEBUG - 2015-08-04 17:34:31 --> コミット
DEBUG - 2015-08-04 17:34:31 --> コネクション破棄
DEBUG - 2015-08-04 17:34:31 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 17:34:31 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:34:31 --> コネクション作成
DEBUG - 2015-08-04 17:34:32 --> トランザクション開始
DEBUG - 2015-08-04 17:34:32 --> コミット
DEBUG - 2015-08-04 17:34:32 --> コネクション破棄
DEBUG - 2015-08-04 17:34:32 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:34:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 17:34:33 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:34:33 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:34:33 --> プロセス開始::process_network_ins
DEBUG - 2015-08-04 17:34:33 --> コネクション作成
DEBUG - 2015-08-04 17:34:34 --> トランザクション開始
DEBUG - 2015-08-04 17:34:34 --> SQL実行
INFO - 2015-08-04 17:34:34 --> SQL::: sssINSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST_TIME  ,REGIST_USER  ,UPDATE_TIME  ,UPDATE_USER )   VALUES ( (SELECT ifnull(right(concat('000000', MAX( network_id ) +1 ),6),  '000001') network_id FROM network_mst sub),  :NETWORK_NAME,  :ENABLED_FLAG,   NOW(),  :REGIST_USER,   NOW(),  :UPDATE_USER ) 
INFO - 2015-08-04 17:34:34 --> バインド値(NETWORK_NAME)::asdasdasda
INFO - 2015-08-04 17:34:34 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-04 17:34:34 --> バインド値(REGIST_USER)::iziri
INFO - 2015-08-04 17:34:34 --> バインド値(UPDATE_USER)::iziri
ERROR - 2015-08-04 17:34:34 --> SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'sssINSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST' at line 1
DEBUG - 2015-08-04 17:34:34 --> コミット
DEBUG - 2015-08-04 17:34:34 --> コネクション破棄
DEBUG - 2015-08-04 17:34:34 --> プロセス終了::process_network_ins
INFO - 2015-08-04 17:36:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 17:36:55 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:36:55 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:36:55 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 17:36:55 --> コネクション作成
DEBUG - 2015-08-04 17:36:56 --> トランザクション開始
DEBUG - 2015-08-04 17:36:56 --> コミット
DEBUG - 2015-08-04 17:36:56 --> コネクション破棄
DEBUG - 2015-08-04 17:36:56 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 17:36:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 17:36:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:36:58 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:36:58 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 17:36:58 --> コネクション作成
DEBUG - 2015-08-04 17:36:59 --> トランザクション開始
DEBUG - 2015-08-04 17:36:59 --> コミット
DEBUG - 2015-08-04 17:36:59 --> コネクション破棄
DEBUG - 2015-08-04 17:36:59 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 17:36:59 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 17:36:59 --> コネクション作成
DEBUG - 2015-08-04 17:37:00 --> トランザクション開始
DEBUG - 2015-08-04 17:37:00 --> コミット
DEBUG - 2015-08-04 17:37:00 --> コネクション破棄
DEBUG - 2015-08-04 17:37:00 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 17:37:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 17:37:01 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:37:01 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:37:01 --> プロセス開始::process_network_ins
DEBUG - 2015-08-04 17:37:01 --> コネクション作成
DEBUG - 2015-08-04 17:37:02 --> トランザクション開始
DEBUG - 2015-08-04 17:37:02 --> SQL実行
INFO - 2015-08-04 17:37:02 --> SQL::: sssINSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST_TIME  ,REGIST_USER  ,UPDATE_TIME  ,UPDATE_USER )   VALUES ( (SELECT ifnull(right(concat('000000', MAX( network_id ) +1 ),6),  '000001') network_id FROM network_mst sub),  :NETWORK_NAME,  :ENABLED_FLAG,   NOW(),  :REGIST_USER,   NOW(),  :UPDATE_USER ) 
INFO - 2015-08-04 17:37:02 --> バインド値(NETWORK_NAME)::sdfsdfsf
INFO - 2015-08-04 17:37:02 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-04 17:37:02 --> バインド値(REGIST_USER)::iziri
INFO - 2015-08-04 17:37:02 --> バインド値(UPDATE_USER)::iziri
ERROR - 2015-08-04 17:37:02 --> SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'sssINSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST' at line 1
DEBUG - 2015-08-04 17:37:02 --> コミット
DEBUG - 2015-08-04 17:37:02 --> コネクション破棄
DEBUG - 2015-08-04 17:37:02 --> プロセス終了::process_network_ins
INFO - 2015-08-04 17:47:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:47:31 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:47:31 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:47:31 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:47:31 --> コネクション作成
DEBUG - 2015-08-04 17:47:32 --> トランザクション開始
DEBUG - 2015-08-04 17:47:32 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:47:32 --> コネクション作成
DEBUG - 2015-08-04 17:47:32 --> トランザクション開始
DEBUG - 2015-08-04 17:47:32 --> SQL実行
INFO - 2015-08-04 17:47:32 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 17:47:32 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 17:47:32 --> SQL実行
INFO - 2015-08-04 17:47:32 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 17:47:32 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 17:47:32 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 17:47:32 --> コミット
DEBUG - 2015-08-04 17:47:32 --> コネクション破棄
DEBUG - 2015-08-04 17:47:32 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:47:32 --> コミット
DEBUG - 2015-08-04 17:47:32 --> コネクション破棄
DEBUG - 2015-08-04 17:47:32 --> プロセス終了::process_network_listback
INFO - 2015-08-04 17:47:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 17:47:39 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:47:39 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:47:39 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 17:47:39 --> コネクション作成
INFO - 2015-08-04 17:47:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 17:47:40 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:47:40 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:47:40 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:47:40 --> コネクション作成
DEBUG - 2015-08-04 17:47:40 --> トランザクション開始
DEBUG - 2015-08-04 17:47:40 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:47:40 --> コネクション作成
DEBUG - 2015-08-04 17:47:41 --> トランザクション開始
DEBUG - 2015-08-04 17:47:41 --> SQL実行
INFO - 2015-08-04 17:47:41 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 17:47:41 --> バインド値(NETWORK_NAME)::%A%
DEBUG - 2015-08-04 17:47:41 --> SQL実行
INFO - 2015-08-04 17:47:41 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 17:47:41 --> バインド値(NETWORK_NAME)::%A%
INFO - 2015-08-04 17:47:41 --> バインド値(NETWORK_NAME)::%A%
DEBUG - 2015-08-04 17:47:41 --> コミット
DEBUG - 2015-08-04 17:47:41 --> コネクション破棄
DEBUG - 2015-08-04 17:47:41 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:47:41 --> トランザクション開始
DEBUG - 2015-08-04 17:47:41 --> SQL実行
INFO - 2015-08-04 17:47:41 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 17:47:41 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 17:47:41 --> SQL実行
INFO - 2015-08-04 17:47:41 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 17:47:41 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 17:47:41 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 17:47:41 --> コミット
DEBUG - 2015-08-04 17:47:41 --> コネクション破棄
DEBUG - 2015-08-04 17:47:41 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 17:47:41 --> コミット
DEBUG - 2015-08-04 17:47:41 --> コネクション破棄
DEBUG - 2015-08-04 17:47:41 --> プロセス終了::process_network_listback
INFO - 2015-08-04 17:47:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 17:47:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:47:44 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:47:44 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:47:44 --> コネクション作成
DEBUG - 2015-08-04 17:47:45 --> トランザクション開始
DEBUG - 2015-08-04 17:47:45 --> SQL実行
INFO - 2015-08-04 17:47:45 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:47:45 --> SQL実行
INFO - 2015-08-04 17:47:45 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 17:47:45 --> コミット
DEBUG - 2015-08-04 17:47:45 --> コネクション破棄
DEBUG - 2015-08-04 17:47:45 --> プロセス終了::process_network_list
INFO - 2015-08-04 17:47:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 17:47:46 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:47:46 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:47:46 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:47:46 --> コネクション作成
DEBUG - 2015-08-04 17:47:47 --> トランザクション開始
DEBUG - 2015-08-04 17:47:47 --> SQL実行
INFO - 2015-08-04 17:47:47 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 17:47:47 --> バインド値(NETWORK_NAME)::%A%
DEBUG - 2015-08-04 17:47:47 --> SQL実行
INFO - 2015-08-04 17:47:47 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 17:47:47 --> バインド値(NETWORK_NAME)::%A%
INFO - 2015-08-04 17:47:47 --> バインド値(NETWORK_NAME)::%A%
DEBUG - 2015-08-04 17:47:47 --> コミット
DEBUG - 2015-08-04 17:47:47 --> コネクション破棄
DEBUG - 2015-08-04 17:47:47 --> プロセス終了::process_network_list
INFO - 2015-08-04 17:47:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 17:47:50 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:47:50 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:47:50 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:47:50 --> コネクション作成
DEBUG - 2015-08-04 17:47:51 --> トランザクション開始
DEBUG - 2015-08-04 17:47:51 --> SQL実行
INFO - 2015-08-04 17:47:51 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 17:47:51 --> バインド値(NETWORK_NAME)::%9%
DEBUG - 2015-08-04 17:47:51 --> SQL実行
INFO - 2015-08-04 17:47:51 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 17:47:51 --> バインド値(NETWORK_NAME)::%9%
INFO - 2015-08-04 17:47:51 --> バインド値(NETWORK_NAME)::%9%
DEBUG - 2015-08-04 17:47:51 --> コミット
DEBUG - 2015-08-04 17:47:51 --> コネクション破棄
DEBUG - 2015-08-04 17:47:51 --> プロセス終了::process_network_list
INFO - 2015-08-04 17:47:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 17:47:55 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:47:55 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:47:55 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:47:55 --> コネクション作成
DEBUG - 2015-08-04 17:47:56 --> トランザクション開始
DEBUG - 2015-08-04 17:47:56 --> SQL実行
INFO - 2015-08-04 17:47:56 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:47:56 --> SQL実行
INFO - 2015-08-04 17:47:56 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 17:47:56 --> コミット
DEBUG - 2015-08-04 17:47:56 --> コネクション破棄
DEBUG - 2015-08-04 17:47:56 --> プロセス終了::process_network_list
INFO - 2015-08-04 17:47:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 17:47:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:47:58 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:47:58 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:47:58 --> コネクション作成
DEBUG - 2015-08-04 17:47:59 --> トランザクション開始
DEBUG - 2015-08-04 17:47:59 --> SQL実行
INFO - 2015-08-04 17:47:59 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:47:59 --> SQL実行
INFO - 2015-08-04 17:47:59 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 10
DEBUG - 2015-08-04 17:47:59 --> コミット
DEBUG - 2015-08-04 17:47:59 --> コネクション破棄
DEBUG - 2015-08-04 17:47:59 --> プロセス終了::process_network_list
INFO - 2015-08-04 17:48:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 17:48:01 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 17:48:01 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 17:48:01 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 17:48:01 --> コネクション作成
DEBUG - 2015-08-04 17:48:02 --> トランザクション開始
DEBUG - 2015-08-04 17:48:02 --> SQL実行
INFO - 2015-08-04 17:48:02 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 17:48:02 --> SQL実行
INFO - 2015-08-04 17:48:02 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-04 17:48:02 --> コミット
DEBUG - 2015-08-04 17:48:02 --> コネクション破棄
DEBUG - 2015-08-04 17:48:02 --> プロセス終了::process_network_list
INFO - 2015-08-04 18:01:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 18:01:29 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:01:29 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:01:29 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 18:01:29 --> コネクション作成
DEBUG - 2015-08-04 18:01:30 --> トランザクション開始
DEBUG - 2015-08-04 18:01:30 --> SQL実行
INFO - 2015-08-04 18:01:30 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 18:01:30 --> バインド値(NETWORK_ID)::000023
DEBUG - 2015-08-04 18:01:30 --> コミット
DEBUG - 2015-08-04 18:01:30 --> コネクション破棄
DEBUG - 2015-08-04 18:01:30 --> プロセス終了::process_network_detail
INFO - 2015-08-04 18:01:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 18:01:43 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:01:43 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:01:43 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 18:01:43 --> コネクション作成
DEBUG - 2015-08-04 18:01:44 --> トランザクション開始
DEBUG - 2015-08-04 18:01:44 --> コミット
DEBUG - 2015-08-04 18:01:44 --> コネクション破棄
DEBUG - 2015-08-04 18:01:44 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 18:01:44 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 18:01:44 --> コネクション作成
DEBUG - 2015-08-04 18:01:45 --> トランザクション開始
DEBUG - 2015-08-04 18:01:45 --> コミット
DEBUG - 2015-08-04 18:01:45 --> コネクション破棄
DEBUG - 2015-08-04 18:01:45 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 18:01:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-04 18:01:47 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:01:47 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:01:47 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-04 18:01:47 --> コネクション作成
DEBUG - 2015-08-04 18:01:48 --> トランザクション開始
DEBUG - 2015-08-04 18:01:48 --> コミット
DEBUG - 2015-08-04 18:01:48 --> コネクション破棄
DEBUG - 2015-08-04 18:01:48 --> プロセス終了::process_network_detailback
INFO - 2015-08-04 18:01:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 18:01:51 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:01:51 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:01:51 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 18:01:51 --> コネクション作成
DEBUG - 2015-08-04 18:01:52 --> トランザクション開始
DEBUG - 2015-08-04 18:01:52 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 18:01:52 --> コネクション作成
DEBUG - 2015-08-04 18:01:53 --> トランザクション開始
DEBUG - 2015-08-04 18:01:53 --> SQL実行
INFO - 2015-08-04 18:01:53 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 18:01:53 --> バインド値(NETWORK_ID)::000023
DEBUG - 2015-08-04 18:01:53 --> コミット
DEBUG - 2015-08-04 18:01:53 --> コネクション破棄
DEBUG - 2015-08-04 18:01:53 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 18:01:53 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 18:01:53 --> コネクション作成
DEBUG - 2015-08-04 18:01:54 --> トランザクション開始
DEBUG - 2015-08-04 18:01:54 --> SQL実行
INFO - 2015-08-04 18:01:54 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 18:01:54 --> バインド値(NETWORK_ID)::000023
DEBUG - 2015-08-04 18:01:54 --> コミット
DEBUG - 2015-08-04 18:01:54 --> コネクション破棄
DEBUG - 2015-08-04 18:01:54 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 18:01:54 --> コミット
DEBUG - 2015-08-04 18:01:54 --> コネクション破棄
DEBUG - 2015-08-04 18:01:54 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 18:01:54 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 18:01:54 --> コネクション作成
DEBUG - 2015-08-04 18:01:55 --> トランザクション開始
DEBUG - 2015-08-04 18:01:55 --> コミット
DEBUG - 2015-08-04 18:01:55 --> コネクション破棄
DEBUG - 2015-08-04 18:01:55 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 18:02:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-04 18:02:01 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:02:01 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:02:01 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-04 18:02:01 --> コネクション作成
DEBUG - 2015-08-04 18:02:02 --> トランザクション開始
DEBUG - 2015-08-04 18:02:02 --> コミット
DEBUG - 2015-08-04 18:02:02 --> コネクション破棄
DEBUG - 2015-08-04 18:02:02 --> プロセス終了::process_network_detailback
INFO - 2015-08-04 18:02:08 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 18:02:08 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:02:08 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:02:08 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 18:02:08 --> コネクション作成
DEBUG - 2015-08-04 18:02:09 --> トランザクション開始
DEBUG - 2015-08-04 18:02:09 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 18:02:09 --> コネクション作成
DEBUG - 2015-08-04 18:02:10 --> トランザクション開始
DEBUG - 2015-08-04 18:02:10 --> SQL実行
INFO - 2015-08-04 18:02:10 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 18:02:10 --> バインド値(NETWORK_ID)::000023
DEBUG - 2015-08-04 18:02:10 --> コミット
DEBUG - 2015-08-04 18:02:10 --> コネクション破棄
DEBUG - 2015-08-04 18:02:10 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 18:02:10 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 18:02:10 --> コネクション作成
DEBUG - 2015-08-04 18:02:11 --> トランザクション開始
DEBUG - 2015-08-04 18:02:11 --> SQL実行
INFO - 2015-08-04 18:02:11 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 18:02:11 --> バインド値(NETWORK_ID)::000023
DEBUG - 2015-08-04 18:02:11 --> コミット
DEBUG - 2015-08-04 18:02:11 --> コネクション破棄
DEBUG - 2015-08-04 18:02:11 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 18:02:11 --> コミット
DEBUG - 2015-08-04 18:02:11 --> コネクション破棄
DEBUG - 2015-08-04 18:02:11 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 18:02:11 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 18:02:11 --> コネクション作成
DEBUG - 2015-08-04 18:02:12 --> トランザクション開始
DEBUG - 2015-08-04 18:02:12 --> コミット
DEBUG - 2015-08-04 18:02:12 --> コネクション破棄
DEBUG - 2015-08-04 18:02:12 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 18:02:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 18:02:13 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:02:13 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:02:13 --> プロセス開始::process_network_edit
DEBUG - 2015-08-04 18:02:13 --> コネクション作成
DEBUG - 2015-08-04 18:02:14 --> トランザクション開始
DEBUG - 2015-08-04 18:02:14 --> SQL実行
INFO - 2015-08-04 18:02:14 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-04 18:02:14 --> バインド値(NETWORK_NAME)::ネットワーク２１１
INFO - 2015-08-04 18:02:14 --> バインド値(ENABLED_FLAG)::0
INFO - 2015-08-04 18:02:14 --> バインド値(LOGIN_ID)::iziri
INFO - 2015-08-04 18:02:14 --> バインド値(NETWORK_ID)::000023
INFO - 2015-08-04 18:02:14 --> バインド値(UPDATE_TIME)::20150729074521000000
DEBUG - 2015-08-04 18:02:14 --> コミット
DEBUG - 2015-08-04 18:02:14 --> コネクション破棄
DEBUG - 2015-08-04 18:02:14 --> プロセス終了::process_network_edit
INFO - 2015-08-04 18:02:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-04 18:02:14 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:02:14 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:02:14 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-04 18:02:14 --> コネクション作成
DEBUG - 2015-08-04 18:02:15 --> トランザクション開始
DEBUG - 2015-08-04 18:02:15 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 18:02:15 --> コネクション作成
DEBUG - 2015-08-04 18:02:16 --> トランザクション開始
DEBUG - 2015-08-04 18:02:17 --> SQL実行
INFO - 2015-08-04 18:02:17 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 18:02:17 --> SQL実行
INFO - 2015-08-04 18:02:17 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-04 18:02:17 --> コミット
DEBUG - 2015-08-04 18:02:17 --> コネクション破棄
DEBUG - 2015-08-04 18:02:17 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 18:02:17 --> コミット
DEBUG - 2015-08-04 18:02:17 --> コネクション破棄
DEBUG - 2015-08-04 18:02:17 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-04 18:07:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 18:07:52 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:07:52 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:07:52 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 18:07:52 --> コネクション作成
DEBUG - 2015-08-04 18:07:53 --> トランザクション開始
DEBUG - 2015-08-04 18:07:53 --> SQL実行
INFO - 2015-08-04 18:07:53 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 18:07:53 --> SQL実行
INFO - 2015-08-04 18:07:53 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-04 18:07:53 --> コミット
DEBUG - 2015-08-04 18:07:53 --> コネクション破棄
DEBUG - 2015-08-04 18:07:53 --> プロセス終了::process_network_list
INFO - 2015-08-04 18:07:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 18:07:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:07:58 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:07:58 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 18:07:58 --> コネクション作成
DEBUG - 2015-08-04 18:07:59 --> トランザクション開始
DEBUG - 2015-08-04 18:07:59 --> SQL実行
INFO - 2015-08-04 18:07:59 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 18:07:59 --> SQL実行
INFO - 2015-08-04 18:07:59 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 18:07:59 --> コミット
DEBUG - 2015-08-04 18:07:59 --> コネクション破棄
DEBUG - 2015-08-04 18:07:59 --> プロセス終了::process_network_list
INFO - 2015-08-04 18:08:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 18:08:03 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:08:03 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:08:03 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 18:08:03 --> コネクション作成
DEBUG - 2015-08-04 18:08:04 --> トランザクション開始
DEBUG - 2015-08-04 18:08:04 --> SQL実行
INFO - 2015-08-04 18:08:04 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 18:08:04 --> SQL実行
INFO - 2015-08-04 18:08:04 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-04 18:08:04 --> コミット
DEBUG - 2015-08-04 18:08:04 --> コネクション破棄
DEBUG - 2015-08-04 18:08:04 --> プロセス終了::process_network_list
INFO - 2015-08-04 18:08:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 18:08:06 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:08:06 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:08:06 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 18:08:06 --> コネクション作成
DEBUG - 2015-08-04 18:08:07 --> トランザクション開始
DEBUG - 2015-08-04 18:08:07 --> SQL実行
INFO - 2015-08-04 18:08:07 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 18:08:07 --> バインド値(NETWORK_NAME)::%A%
DEBUG - 2015-08-04 18:08:07 --> SQL実行
INFO - 2015-08-04 18:08:07 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 18:08:07 --> バインド値(NETWORK_NAME)::%A%
INFO - 2015-08-04 18:08:07 --> バインド値(NETWORK_NAME)::%A%
DEBUG - 2015-08-04 18:08:07 --> コミット
DEBUG - 2015-08-04 18:08:07 --> コネクション破棄
DEBUG - 2015-08-04 18:08:07 --> プロセス終了::process_network_list
INFO - 2015-08-04 18:23:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 18:23:28 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:23:28 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:23:28 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 18:23:28 --> コネクション作成
DEBUG - 2015-08-04 18:23:30 --> トランザクション開始
ERROR - 2015-08-04 18:23:30 --> Undefined variable: v_util_dbaccessor
DEBUG - 2015-08-04 18:23:30 --> ロールバック
DEBUG - 2015-08-04 18:23:30 --> コネクション破棄
INFO - 2015-08-04 18:23:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 18:23:35 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:23:35 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-08-04 18:23:35 --> SESSIONの値が取得できませんでした。
INFO - 2015-08-04 18:23:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/index"
INFO - 2015-08-04 18:23:35 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:23:35 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-04 18:23:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 18:23:42 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:23:42 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:23:42 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 18:23:42 --> コネクション作成
DEBUG - 2015-08-04 18:23:43 --> トランザクション開始
DEBUG - 2015-08-04 18:23:43 --> プロセス開始::process_login_auth
DEBUG - 2015-08-04 18:23:43 --> コネクション作成
DEBUG - 2015-08-04 18:23:44 --> トランザクション開始
DEBUG - 2015-08-04 18:23:44 --> SQL実行
INFO - 2015-08-04 18:23:44 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-04 18:23:44 --> バインド値(LOGIN_ID)::iziri
INFO - 2015-08-04 18:23:44 --> バインド値(PASSWORD)::iziri
DEBUG - 2015-08-04 18:23:44 --> コミット
DEBUG - 2015-08-04 18:23:44 --> コネクション破棄
DEBUG - 2015-08-04 18:23:44 --> プロセス終了::process_login_auth
ERROR - 2015-08-04 18:23:44 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-04 18:23:44 --> ロールバック
DEBUG - 2015-08-04 18:23:44 --> コネクション破棄
DEBUG - 2015-08-04 18:23:44 --> プロセス開始::process_login_company
DEBUG - 2015-08-04 18:23:44 --> コネクション作成
DEBUG - 2015-08-04 18:23:45 --> トランザクション開始
DEBUG - 2015-08-04 18:23:45 --> SQL実行
INFO - 2015-08-04 18:23:45 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-04 18:23:45 --> バインド値(LOGIN_ID)::iziri
DEBUG - 2015-08-04 18:23:45 --> コミット
DEBUG - 2015-08-04 18:23:45 --> コネクション破棄
DEBUG - 2015-08-04 18:23:45 --> プロセス終了::process_login_company
INFO - 2015-08-04 18:23:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/company/select"
INFO - 2015-08-04 18:23:48 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:23:48 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:23:48 --> プロセス開始::process_login_companyselect
DEBUG - 2015-08-04 18:23:48 --> コネクション作成
DEBUG - 2015-08-04 18:23:49 --> トランザクション開始
DEBUG - 2015-08-04 18:23:49 --> SQL実行
INFO - 2015-08-04 18:23:49 --> SQL:::SELECT company_id, company_name, company_type FROM company_mst WHERE enabled_flag is true AND company_id=:COMPANY_ID 
INFO - 2015-08-04 18:23:49 --> バインド値(COMPANY_ID)::A00001
ERROR - 2015-08-04 18:23:49 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-04 18:23:49 --> ロールバック
DEBUG - 2015-08-04 18:23:49 --> コネクション破棄
INFO - 2015-08-04 18:23:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 18:23:49 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:23:49 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:23:49 --> プロセス開始::process_network_index
DEBUG - 2015-08-04 18:23:49 --> コネクション作成
DEBUG - 2015-08-04 18:23:50 --> トランザクション開始
DEBUG - 2015-08-04 18:23:50 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 18:23:50 --> コネクション作成
DEBUG - 2015-08-04 18:23:51 --> トランザクション開始
ERROR - 2015-08-04 18:23:51 --> Undefined variable: v_util_dbaccessor
DEBUG - 2015-08-04 18:23:51 --> ロールバック
DEBUG - 2015-08-04 18:23:51 --> コネクション破棄
DEBUG - 2015-08-04 18:23:51 --> コミット
DEBUG - 2015-08-04 18:23:51 --> コネクション破棄
DEBUG - 2015-08-04 18:23:51 --> プロセス終了::process_network_index
INFO - 2015-08-04 18:24:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 18:24:20 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:24:20 --> Fuel\Core\Request::execute - Setting main Request
ERROR - 2015-08-04 18:24:20 --> SESSIONの値が取得できませんでした。
INFO - 2015-08-04 18:24:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/index"
INFO - 2015-08-04 18:24:20 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:24:20 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-04 18:24:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 18:24:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:24:22 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:24:22 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 18:24:22 --> コネクション作成
DEBUG - 2015-08-04 18:24:23 --> トランザクション開始
DEBUG - 2015-08-04 18:24:23 --> プロセス開始::process_login_auth
DEBUG - 2015-08-04 18:24:23 --> コネクション作成
DEBUG - 2015-08-04 18:24:24 --> トランザクション開始
DEBUG - 2015-08-04 18:24:24 --> SQL実行
INFO - 2015-08-04 18:24:24 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-04 18:24:24 --> バインド値(LOGIN_ID)::iziri
INFO - 2015-08-04 18:24:24 --> バインド値(PASSWORD)::iziri
DEBUG - 2015-08-04 18:24:24 --> コミット
DEBUG - 2015-08-04 18:24:24 --> コネクション破棄
DEBUG - 2015-08-04 18:24:24 --> プロセス終了::process_login_auth
ERROR - 2015-08-04 18:24:24 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-04 18:24:24 --> ロールバック
DEBUG - 2015-08-04 18:24:24 --> コネクション破棄
DEBUG - 2015-08-04 18:24:24 --> プロセス開始::process_login_company
DEBUG - 2015-08-04 18:24:24 --> コネクション作成
DEBUG - 2015-08-04 18:24:25 --> トランザクション開始
DEBUG - 2015-08-04 18:24:25 --> SQL実行
INFO - 2015-08-04 18:24:25 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-04 18:24:25 --> バインド値(LOGIN_ID)::iziri
DEBUG - 2015-08-04 18:24:25 --> コミット
DEBUG - 2015-08-04 18:24:25 --> コネクション破棄
DEBUG - 2015-08-04 18:24:25 --> プロセス終了::process_login_company
INFO - 2015-08-04 18:24:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/company/select"
INFO - 2015-08-04 18:24:27 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:24:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:24:27 --> プロセス開始::process_login_companyselect
DEBUG - 2015-08-04 18:24:27 --> コネクション作成
DEBUG - 2015-08-04 18:24:29 --> トランザクション開始
DEBUG - 2015-08-04 18:24:29 --> SQL実行
INFO - 2015-08-04 18:24:29 --> SQL:::SELECT company_id, company_name, company_type FROM company_mst WHERE enabled_flag is true AND company_id=:COMPANY_ID 
INFO - 2015-08-04 18:24:29 --> バインド値(COMPANY_ID)::A00001
ERROR - 2015-08-04 18:24:29 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-04 18:24:29 --> ロールバック
DEBUG - 2015-08-04 18:24:29 --> コネクション破棄
INFO - 2015-08-04 18:24:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 18:24:29 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:24:29 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:24:29 --> プロセス開始::process_network_index
DEBUG - 2015-08-04 18:24:29 --> コネクション作成
DEBUG - 2015-08-04 18:24:30 --> トランザクション開始
DEBUG - 2015-08-04 18:24:30 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 18:24:30 --> コネクション作成
DEBUG - 2015-08-04 18:24:31 --> トランザクション開始
ERROR - 2015-08-04 18:24:31 --> Undefined variable: v_util_dbaccessor
DEBUG - 2015-08-04 18:24:31 --> ロールバック
DEBUG - 2015-08-04 18:24:31 --> コネクション破棄
DEBUG - 2015-08-04 18:24:31 --> コミット
DEBUG - 2015-08-04 18:24:31 --> コネクション破棄
DEBUG - 2015-08-04 18:24:31 --> プロセス終了::process_network_index
INFO - 2015-08-04 18:25:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 18:25:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:25:00 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:25:00 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 18:25:00 --> コネクション作成
DEBUG - 2015-08-04 18:25:01 --> トランザクション開始
DEBUG - 2015-08-04 18:25:01 --> プロセス開始::process_login_auth
DEBUG - 2015-08-04 18:25:01 --> コネクション作成
DEBUG - 2015-08-04 18:25:02 --> トランザクション開始
DEBUG - 2015-08-04 18:25:02 --> SQL実行
INFO - 2015-08-04 18:25:02 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-04 18:25:02 --> バインド値(LOGIN_ID)::iziri
INFO - 2015-08-04 18:25:02 --> バインド値(PASSWORD)::iziri
DEBUG - 2015-08-04 18:25:02 --> コミット
DEBUG - 2015-08-04 18:25:02 --> コネクション破棄
DEBUG - 2015-08-04 18:25:02 --> プロセス終了::process_login_auth
ERROR - 2015-08-04 18:25:02 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-04 18:25:02 --> ロールバック
DEBUG - 2015-08-04 18:25:02 --> コネクション破棄
DEBUG - 2015-08-04 18:25:02 --> プロセス開始::process_login_company
DEBUG - 2015-08-04 18:25:02 --> コネクション作成
DEBUG - 2015-08-04 18:25:03 --> トランザクション開始
DEBUG - 2015-08-04 18:25:03 --> SQL実行
INFO - 2015-08-04 18:25:03 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-04 18:25:03 --> バインド値(LOGIN_ID)::iziri
DEBUG - 2015-08-04 18:25:03 --> コミット
DEBUG - 2015-08-04 18:25:03 --> コネクション破棄
DEBUG - 2015-08-04 18:25:03 --> プロセス終了::process_login_company
INFO - 2015-08-04 18:25:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/company/select"
INFO - 2015-08-04 18:25:05 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:25:05 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:25:05 --> プロセス開始::process_login_companyselect
DEBUG - 2015-08-04 18:25:05 --> コネクション作成
DEBUG - 2015-08-04 18:25:06 --> トランザクション開始
DEBUG - 2015-08-04 18:25:06 --> SQL実行
INFO - 2015-08-04 18:25:06 --> SQL:::SELECT company_id, company_name, company_type FROM company_mst WHERE enabled_flag is true AND company_id=:COMPANY_ID 
INFO - 2015-08-04 18:25:06 --> バインド値(COMPANY_ID)::A00001
ERROR - 2015-08-04 18:25:06 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-04 18:25:06 --> ロールバック
DEBUG - 2015-08-04 18:25:06 --> コネクション破棄
INFO - 2015-08-04 18:25:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 18:25:06 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:25:06 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:25:06 --> プロセス開始::process_network_index
DEBUG - 2015-08-04 18:25:06 --> コネクション作成
DEBUG - 2015-08-04 18:25:07 --> トランザクション開始
DEBUG - 2015-08-04 18:25:07 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 18:25:07 --> コネクション作成
DEBUG - 2015-08-04 18:25:08 --> トランザクション開始
DEBUG - 2015-08-04 18:25:08 --> SQL実行
INFO - 2015-08-04 18:25:08 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 18:25:08 --> SQL実行
INFO - 2015-08-04 18:25:08 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 18:25:08 --> コミット
DEBUG - 2015-08-04 18:25:08 --> コネクション破棄
DEBUG - 2015-08-04 18:25:08 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 18:25:08 --> コミット
DEBUG - 2015-08-04 18:25:08 --> コネクション破棄
DEBUG - 2015-08-04 18:25:08 --> プロセス終了::process_network_index
INFO - 2015-08-04 18:29:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 18:29:16 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:29:16 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:29:16 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 18:29:16 --> コネクション作成
DEBUG - 2015-08-04 18:29:17 --> トランザクション開始
DEBUG - 2015-08-04 18:29:17 --> SQL実行
INFO - 2015-08-04 18:29:17 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 18:29:17 --> SQL実行
INFO - 2015-08-04 18:29:17 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 18:29:17 --> コミット
DEBUG - 2015-08-04 18:29:17 --> コネクション破棄
DEBUG - 2015-08-04 18:29:17 --> プロセス終了::process_network_list
INFO - 2015-08-04 18:29:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 18:29:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:29:44 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:29:44 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 18:29:44 --> コネクション作成
DEBUG - 2015-08-04 18:29:45 --> トランザクション開始
DEBUG - 2015-08-04 18:29:45 --> SQL実行
INFO - 2015-08-04 18:29:45 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 18:29:45 --> SQL実行
INFO - 2015-08-04 18:29:45 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 18:29:45 --> コミット
DEBUG - 2015-08-04 18:29:45 --> コネクション破棄
DEBUG - 2015-08-04 18:29:45 --> プロセス終了::process_network_list
INFO - 2015-08-04 18:32:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 18:32:53 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 18:32:53 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 18:32:53 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 18:32:53 --> コネクション作成
DEBUG - 2015-08-04 18:32:54 --> トランザクション開始
DEBUG - 2015-08-04 18:32:54 --> SQL実行
INFO - 2015-08-04 18:32:54 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 18:32:54 --> SQL実行
INFO - 2015-08-04 18:32:54 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 18:32:54 --> コミット
DEBUG - 2015-08-04 18:32:54 --> コネクション破棄
DEBUG - 2015-08-04 18:32:54 --> プロセス終了::process_network_list
INFO - 2015-08-04 19:15:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 19:15:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:15:24 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:15:24 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 19:15:24 --> コネクション作成
DEBUG - 2015-08-04 19:15:25 --> トランザクション開始
DEBUG - 2015-08-04 19:15:25 --> SQL実行
INFO - 2015-08-04 19:15:25 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 19:15:25 --> バインド値(NETWORK_ID)::000034
DEBUG - 2015-08-04 19:15:25 --> コミット
DEBUG - 2015-08-04 19:15:25 --> コネクション破棄
DEBUG - 2015-08-04 19:15:25 --> プロセス終了::process_network_detail
INFO - 2015-08-04 19:15:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:15:38 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:15:38 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:15:38 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:15:38 --> コネクション作成
DEBUG - 2015-08-04 19:15:39 --> トランザクション開始
DEBUG - 2015-08-04 19:15:39 --> コミット
DEBUG - 2015-08-04 19:15:39 --> コネクション破棄
DEBUG - 2015-08-04 19:15:39 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 19:15:39 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 19:15:39 --> コネクション作成
DEBUG - 2015-08-04 19:15:40 --> トランザクション開始
DEBUG - 2015-08-04 19:15:40 --> コミット
DEBUG - 2015-08-04 19:15:40 --> コネクション破棄
DEBUG - 2015-08-04 19:15:40 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 19:15:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 19:15:41 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:15:41 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:15:41 --> プロセス開始::process_network_edit
DEBUG - 2015-08-04 19:15:41 --> コネクション作成
DEBUG - 2015-08-04 19:15:42 --> トランザクション開始
DEBUG - 2015-08-04 19:15:42 --> SQL実行
INFO - 2015-08-04 19:15:42 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-04 19:15:42 --> バインド値(NETWORK_NAME)::ネットワーク9999
INFO - 2015-08-04 19:15:42 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-04 19:15:42 --> バインド値(LOGIN_ID)::iziri
INFO - 2015-08-04 19:15:42 --> バインド値(NETWORK_ID)::000034
INFO - 2015-08-04 19:15:42 --> バインド値(UPDATE_TIME)::20150804172157000000
DEBUG - 2015-08-04 19:15:42 --> コミット
DEBUG - 2015-08-04 19:15:42 --> コネクション破棄
DEBUG - 2015-08-04 19:15:42 --> プロセス終了::process_network_edit
INFO - 2015-08-04 19:15:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-04 19:15:42 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:15:42 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:15:43 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-04 19:15:43 --> コネクション作成
DEBUG - 2015-08-04 19:15:44 --> トランザクション開始
DEBUG - 2015-08-04 19:15:44 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:15:44 --> コネクション作成
DEBUG - 2015-08-04 19:15:45 --> トランザクション開始
DEBUG - 2015-08-04 19:15:45 --> SQL実行
INFO - 2015-08-04 19:15:45 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:15:45 --> SQL実行
INFO - 2015-08-04 19:15:45 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:15:45 --> コミット
DEBUG - 2015-08-04 19:15:45 --> コネクション破棄
DEBUG - 2015-08-04 19:15:45 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:15:45 --> コミット
DEBUG - 2015-08-04 19:15:45 --> コネクション破棄
DEBUG - 2015-08-04 19:15:45 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-04 19:15:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 19:15:48 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:15:48 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:15:48 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 19:15:48 --> コネクション作成
DEBUG - 2015-08-04 19:15:49 --> トランザクション開始
DEBUG - 2015-08-04 19:15:49 --> SQL実行
INFO - 2015-08-04 19:15:49 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 19:15:49 --> バインド値(NETWORK_ID)::000036
DEBUG - 2015-08-04 19:15:49 --> コミット
DEBUG - 2015-08-04 19:15:49 --> コネクション破棄
DEBUG - 2015-08-04 19:15:49 --> プロセス終了::process_network_detail
INFO - 2015-08-04 19:15:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 19:15:51 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:15:51 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:15:51 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 19:15:51 --> コネクション作成
DEBUG - 2015-08-04 19:15:53 --> トランザクション開始
DEBUG - 2015-08-04 19:15:53 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:15:53 --> コネクション作成
DEBUG - 2015-08-04 19:15:54 --> トランザクション開始
DEBUG - 2015-08-04 19:15:54 --> SQL実行
INFO - 2015-08-04 19:15:54 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:15:54 --> SQL実行
INFO - 2015-08-04 19:15:54 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:15:54 --> コミット
DEBUG - 2015-08-04 19:15:54 --> コネクション破棄
DEBUG - 2015-08-04 19:15:54 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:15:54 --> コミット
DEBUG - 2015-08-04 19:15:54 --> コネクション破棄
DEBUG - 2015-08-04 19:15:54 --> プロセス終了::process_network_listback
INFO - 2015-08-04 19:15:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 19:15:56 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:15:56 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:15:56 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 19:15:56 --> コネクション作成
DEBUG - 2015-08-04 19:15:57 --> トランザクション開始
DEBUG - 2015-08-04 19:15:57 --> SQL実行
INFO - 2015-08-04 19:15:57 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 19:15:57 --> バインド値(NETWORK_ID)::000036
DEBUG - 2015-08-04 19:15:57 --> コミット
DEBUG - 2015-08-04 19:15:57 --> コネクション破棄
DEBUG - 2015-08-04 19:15:57 --> プロセス終了::process_network_detail
INFO - 2015-08-04 19:15:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 19:15:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:15:58 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:15:58 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 19:15:58 --> コネクション作成
DEBUG - 2015-08-04 19:15:59 --> トランザクション開始
DEBUG - 2015-08-04 19:15:59 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:15:59 --> コネクション作成
DEBUG - 2015-08-04 19:16:00 --> トランザクション開始
DEBUG - 2015-08-04 19:16:00 --> SQL実行
INFO - 2015-08-04 19:16:00 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:16:00 --> SQL実行
INFO - 2015-08-04 19:16:00 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:16:00 --> コミット
DEBUG - 2015-08-04 19:16:00 --> コネクション破棄
DEBUG - 2015-08-04 19:16:00 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:16:00 --> コミット
DEBUG - 2015-08-04 19:16:00 --> コネクション破棄
DEBUG - 2015-08-04 19:16:00 --> プロセス終了::process_network_listback
INFO - 2015-08-04 19:16:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 19:16:09 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:16:09 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:16:09 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 19:16:09 --> コネクション作成
DEBUG - 2015-08-04 19:16:10 --> トランザクション開始
DEBUG - 2015-08-04 19:16:10 --> SQL実行
INFO - 2015-08-04 19:16:10 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 19:16:10 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 19:16:10 --> コミット
DEBUG - 2015-08-04 19:16:10 --> コネクション破棄
DEBUG - 2015-08-04 19:16:10 --> プロセス終了::process_network_detail
INFO - 2015-08-04 19:16:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:16:49 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:16:49 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:16:49 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:16:49 --> コネクション作成
DEBUG - 2015-08-04 19:16:50 --> トランザクション開始
DEBUG - 2015-08-04 19:16:50 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 19:16:50 --> コネクション作成
DEBUG - 2015-08-04 19:16:51 --> トランザクション開始
DEBUG - 2015-08-04 19:16:51 --> SQL実行
INFO - 2015-08-04 19:16:51 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 19:16:51 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 19:16:51 --> コミット
DEBUG - 2015-08-04 19:16:51 --> コネクション破棄
DEBUG - 2015-08-04 19:16:51 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 19:16:51 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 19:16:51 --> コネクション作成
DEBUG - 2015-08-04 19:16:52 --> トランザクション開始
DEBUG - 2015-08-04 19:16:52 --> SQL実行
INFO - 2015-08-04 19:16:52 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 19:16:52 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 19:16:52 --> コミット
DEBUG - 2015-08-04 19:16:52 --> コネクション破棄
DEBUG - 2015-08-04 19:16:52 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 19:16:52 --> コミット
DEBUG - 2015-08-04 19:16:52 --> コネクション破棄
DEBUG - 2015-08-04 19:16:52 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 19:16:52 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 19:16:52 --> コネクション作成
DEBUG - 2015-08-04 19:16:53 --> トランザクション開始
DEBUG - 2015-08-04 19:16:53 --> コミット
DEBUG - 2015-08-04 19:16:53 --> コネクション破棄
DEBUG - 2015-08-04 19:16:53 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 19:16:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 19:16:54 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:16:54 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:16:54 --> プロセス開始::process_network_edit
DEBUG - 2015-08-04 19:16:54 --> コネクション作成
DEBUG - 2015-08-04 19:16:55 --> トランザクション開始
DEBUG - 2015-08-04 19:16:55 --> SQL実行
INFO - 2015-08-04 19:16:55 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-04 19:16:55 --> バインド値(NETWORK_NAME)::ネットワーク１
INFO - 2015-08-04 19:16:55 --> バインド値(ENABLED_FLAG)::0
INFO - 2015-08-04 19:16:55 --> バインド値(LOGIN_ID)::iziri
INFO - 2015-08-04 19:16:55 --> バインド値(NETWORK_ID)::000003
INFO - 2015-08-04 19:16:55 --> バインド値(UPDATE_TIME)::20150804164613000000
DEBUG - 2015-08-04 19:16:55 --> コミット
DEBUG - 2015-08-04 19:16:55 --> コネクション破棄
DEBUG - 2015-08-04 19:16:55 --> プロセス終了::process_network_edit
INFO - 2015-08-04 19:17:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:17:01 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:17:01 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:17:01 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:17:01 --> コネクション作成
DEBUG - 2015-08-04 19:17:02 --> トランザクション開始
DEBUG - 2015-08-04 19:17:02 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 19:17:02 --> コネクション作成
DEBUG - 2015-08-04 19:17:03 --> トランザクション開始
DEBUG - 2015-08-04 19:17:03 --> SQL実行
INFO - 2015-08-04 19:17:03 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 19:17:03 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 19:17:03 --> コミット
DEBUG - 2015-08-04 19:17:03 --> コネクション破棄
DEBUG - 2015-08-04 19:17:03 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 19:17:03 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 19:17:03 --> コネクション作成
DEBUG - 2015-08-04 19:17:04 --> トランザクション開始
DEBUG - 2015-08-04 19:17:04 --> SQL実行
INFO - 2015-08-04 19:17:04 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 19:17:04 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 19:17:04 --> コミット
DEBUG - 2015-08-04 19:17:04 --> コネクション破棄
DEBUG - 2015-08-04 19:17:04 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 19:17:04 --> コミット
DEBUG - 2015-08-04 19:17:04 --> コネクション破棄
DEBUG - 2015-08-04 19:17:04 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 19:17:04 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 19:17:04 --> コネクション作成
DEBUG - 2015-08-04 19:17:05 --> トランザクション開始
DEBUG - 2015-08-04 19:17:05 --> コミット
DEBUG - 2015-08-04 19:17:05 --> コネクション破棄
DEBUG - 2015-08-04 19:17:05 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 19:17:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 19:17:07 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:17:07 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:17:07 --> プロセス開始::process_network_edit
DEBUG - 2015-08-04 19:17:07 --> コネクション作成
DEBUG - 2015-08-04 19:17:08 --> トランザクション開始
DEBUG - 2015-08-04 19:17:08 --> SQL実行
INFO - 2015-08-04 19:17:08 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-04 19:17:08 --> バインド値(NETWORK_NAME)::ネットワーク１
INFO - 2015-08-04 19:17:08 --> バインド値(ENABLED_FLAG)::0
INFO - 2015-08-04 19:17:08 --> バインド値(LOGIN_ID)::iziri
INFO - 2015-08-04 19:17:08 --> バインド値(NETWORK_ID)::000003
INFO - 2015-08-04 19:17:08 --> バインド値(UPDATE_TIME)::20150804164613000000
DEBUG - 2015-08-04 19:17:08 --> コミット
DEBUG - 2015-08-04 19:17:08 --> コネクション破棄
DEBUG - 2015-08-04 19:17:08 --> プロセス終了::process_network_edit
INFO - 2015-08-04 19:17:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:17:15 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:17:15 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:17:15 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:17:15 --> コネクション作成
DEBUG - 2015-08-04 19:17:16 --> トランザクション開始
DEBUG - 2015-08-04 19:17:16 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 19:17:16 --> コネクション作成
DEBUG - 2015-08-04 19:17:17 --> トランザクション開始
DEBUG - 2015-08-04 19:17:17 --> SQL実行
INFO - 2015-08-04 19:17:17 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 19:17:17 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 19:17:17 --> コミット
DEBUG - 2015-08-04 19:17:17 --> コネクション破棄
DEBUG - 2015-08-04 19:17:17 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 19:17:17 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 19:17:17 --> コネクション作成
DEBUG - 2015-08-04 19:17:19 --> トランザクション開始
DEBUG - 2015-08-04 19:17:19 --> SQL実行
INFO - 2015-08-04 19:17:19 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 19:17:19 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 19:17:19 --> コミット
DEBUG - 2015-08-04 19:17:19 --> コネクション破棄
DEBUG - 2015-08-04 19:17:19 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 19:17:19 --> コミット
DEBUG - 2015-08-04 19:17:19 --> コネクション破棄
DEBUG - 2015-08-04 19:17:19 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 19:17:19 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 19:17:19 --> コネクション作成
DEBUG - 2015-08-04 19:17:20 --> トランザクション開始
DEBUG - 2015-08-04 19:17:20 --> コミット
DEBUG - 2015-08-04 19:17:20 --> コネクション破棄
DEBUG - 2015-08-04 19:17:20 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 19:17:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 19:17:29 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:17:29 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:17:29 --> プロセス開始::process_network_edit
DEBUG - 2015-08-04 19:17:29 --> コネクション作成
DEBUG - 2015-08-04 19:17:30 --> トランザクション開始
DEBUG - 2015-08-04 19:17:30 --> SQL実行
INFO - 2015-08-04 19:17:30 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-04 19:17:30 --> バインド値(NETWORK_NAME)::ネットワーク１
INFO - 2015-08-04 19:17:30 --> バインド値(ENABLED_FLAG)::0
INFO - 2015-08-04 19:17:30 --> バインド値(LOGIN_ID)::iziri
INFO - 2015-08-04 19:17:30 --> バインド値(NETWORK_ID)::000003
INFO - 2015-08-04 19:17:30 --> バインド値(UPDATE_TIME)::20150804164613000000
DEBUG - 2015-08-04 19:17:30 --> コミット
DEBUG - 2015-08-04 19:17:30 --> コネクション破棄
DEBUG - 2015-08-04 19:17:30 --> プロセス終了::process_network_edit
INFO - 2015-08-04 19:17:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 19:17:38 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:17:38 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:17:38 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 19:17:38 --> コネクション作成
DEBUG - 2015-08-04 19:17:39 --> トランザクション開始
DEBUG - 2015-08-04 19:17:39 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:17:39 --> コネクション作成
DEBUG - 2015-08-04 19:17:40 --> トランザクション開始
DEBUG - 2015-08-04 19:17:40 --> SQL実行
INFO - 2015-08-04 19:17:40 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:17:40 --> SQL実行
INFO - 2015-08-04 19:17:40 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:17:40 --> コミット
DEBUG - 2015-08-04 19:17:40 --> コネクション破棄
DEBUG - 2015-08-04 19:17:40 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:17:40 --> コミット
DEBUG - 2015-08-04 19:17:40 --> コネクション破棄
DEBUG - 2015-08-04 19:17:40 --> プロセス終了::process_network_listback
INFO - 2015-08-04 19:17:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 19:17:42 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:17:42 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:17:42 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 19:17:42 --> コネクション作成
DEBUG - 2015-08-04 19:17:43 --> トランザクション開始
DEBUG - 2015-08-04 19:17:43 --> SQL実行
INFO - 2015-08-04 19:17:43 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 19:17:43 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 19:17:43 --> コミット
DEBUG - 2015-08-04 19:17:43 --> コネクション破棄
DEBUG - 2015-08-04 19:17:43 --> プロセス終了::process_network_detail
INFO - 2015-08-04 19:17:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:17:45 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:17:45 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:17:45 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:17:45 --> コネクション作成
DEBUG - 2015-08-04 19:17:46 --> トランザクション開始
DEBUG - 2015-08-04 19:17:46 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 19:17:46 --> コネクション作成
DEBUG - 2015-08-04 19:17:47 --> トランザクション開始
DEBUG - 2015-08-04 19:17:47 --> SQL実行
INFO - 2015-08-04 19:17:47 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 19:17:47 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 19:17:47 --> コミット
DEBUG - 2015-08-04 19:17:47 --> コネクション破棄
DEBUG - 2015-08-04 19:17:47 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 19:17:47 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 19:17:47 --> コネクション作成
DEBUG - 2015-08-04 19:17:48 --> トランザクション開始
DEBUG - 2015-08-04 19:17:48 --> SQL実行
INFO - 2015-08-04 19:17:48 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 19:17:48 --> バインド値(NETWORK_ID)::000003
DEBUG - 2015-08-04 19:17:48 --> コミット
DEBUG - 2015-08-04 19:17:48 --> コネクション破棄
DEBUG - 2015-08-04 19:17:48 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 19:17:48 --> コミット
DEBUG - 2015-08-04 19:17:48 --> コネクション破棄
DEBUG - 2015-08-04 19:17:48 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 19:17:48 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 19:17:48 --> コネクション作成
DEBUG - 2015-08-04 19:17:49 --> トランザクション開始
DEBUG - 2015-08-04 19:17:49 --> コミット
DEBUG - 2015-08-04 19:17:49 --> コネクション破棄
DEBUG - 2015-08-04 19:17:49 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 19:17:50 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 19:17:50 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:17:50 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:17:50 --> プロセス開始::process_network_edit
DEBUG - 2015-08-04 19:17:50 --> コネクション作成
DEBUG - 2015-08-04 19:17:51 --> トランザクション開始
DEBUG - 2015-08-04 19:17:51 --> SQL実行
INFO - 2015-08-04 19:17:51 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-04 19:17:51 --> バインド値(NETWORK_NAME)::ネットワーク１
INFO - 2015-08-04 19:17:51 --> バインド値(ENABLED_FLAG)::0
INFO - 2015-08-04 19:17:51 --> バインド値(LOGIN_ID)::iziri
INFO - 2015-08-04 19:17:51 --> バインド値(NETWORK_ID)::000003
INFO - 2015-08-04 19:17:51 --> バインド値(UPDATE_TIME)::20150804164614000000
DEBUG - 2015-08-04 19:17:51 --> コミット
DEBUG - 2015-08-04 19:17:51 --> コネクション破棄
DEBUG - 2015-08-04 19:17:51 --> プロセス終了::process_network_edit
INFO - 2015-08-04 19:17:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-04 19:17:51 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:17:51 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:17:51 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-04 19:17:51 --> コネクション作成
DEBUG - 2015-08-04 19:17:52 --> トランザクション開始
DEBUG - 2015-08-04 19:17:52 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:17:52 --> コネクション作成
DEBUG - 2015-08-04 19:17:53 --> トランザクション開始
DEBUG - 2015-08-04 19:17:53 --> SQL実行
INFO - 2015-08-04 19:17:53 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:17:53 --> SQL実行
INFO - 2015-08-04 19:17:53 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:17:53 --> コミット
DEBUG - 2015-08-04 19:17:53 --> コネクション破棄
DEBUG - 2015-08-04 19:17:53 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:17:53 --> コミット
DEBUG - 2015-08-04 19:17:53 --> コネクション破棄
DEBUG - 2015-08-04 19:17:53 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-04 19:17:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 19:17:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:17:58 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:17:58 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 19:17:58 --> コネクション作成
DEBUG - 2015-08-04 19:17:59 --> トランザクション開始
DEBUG - 2015-08-04 19:17:59 --> コミット
DEBUG - 2015-08-04 19:17:59 --> コネクション破棄
DEBUG - 2015-08-04 19:17:59 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 19:18:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:18:05 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:05 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:05 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:18:05 --> コネクション作成
DEBUG - 2015-08-04 19:18:06 --> トランザクション開始
DEBUG - 2015-08-04 19:18:06 --> コミット
DEBUG - 2015-08-04 19:18:06 --> コネクション破棄
DEBUG - 2015-08-04 19:18:06 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 19:18:06 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 19:18:06 --> コネクション作成
DEBUG - 2015-08-04 19:18:07 --> トランザクション開始
DEBUG - 2015-08-04 19:18:07 --> コミット
DEBUG - 2015-08-04 19:18:07 --> コネクション破棄
DEBUG - 2015-08-04 19:18:07 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 19:18:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 19:18:09 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:09 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:09 --> プロセス開始::process_network_ins
DEBUG - 2015-08-04 19:18:09 --> コネクション作成
DEBUG - 2015-08-04 19:18:10 --> トランザクション開始
DEBUG - 2015-08-04 19:18:10 --> SQL実行
INFO - 2015-08-04 19:18:10 --> SQL::: INSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST_TIME  ,REGIST_USER  ,UPDATE_TIME  ,UPDATE_USER )   VALUES ( (SELECT ifnull(right(concat('000000', MAX( network_id ) +1 ),6),  '000001') network_id FROM network_mst sub),  :NETWORK_NAME,  :ENABLED_FLAG,   NOW(),  :REGIST_USER,   NOW(),  :UPDATE_USER ) 
INFO - 2015-08-04 19:18:10 --> バインド値(NETWORK_NAME)::ネットワーク9999999
INFO - 2015-08-04 19:18:10 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-04 19:18:10 --> バインド値(REGIST_USER)::iziri
INFO - 2015-08-04 19:18:10 --> バインド値(UPDATE_USER)::iziri
DEBUG - 2015-08-04 19:18:10 --> コミット
DEBUG - 2015-08-04 19:18:10 --> コネクション破棄
DEBUG - 2015-08-04 19:18:10 --> プロセス終了::process_network_ins
INFO - 2015-08-04 19:18:10 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-04 19:18:10 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:10 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:10 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-04 19:18:10 --> コネクション作成
DEBUG - 2015-08-04 19:18:11 --> トランザクション開始
DEBUG - 2015-08-04 19:18:11 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:18:11 --> コネクション作成
DEBUG - 2015-08-04 19:18:12 --> トランザクション開始
DEBUG - 2015-08-04 19:18:12 --> SQL実行
INFO - 2015-08-04 19:18:12 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:18:12 --> SQL実行
INFO - 2015-08-04 19:18:12 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:18:12 --> コミット
DEBUG - 2015-08-04 19:18:12 --> コネクション破棄
DEBUG - 2015-08-04 19:18:12 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:18:12 --> コミット
DEBUG - 2015-08-04 19:18:12 --> コネクション破棄
DEBUG - 2015-08-04 19:18:12 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-04 19:18:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 19:18:18 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:18 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:18 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:18:18 --> コネクション作成
DEBUG - 2015-08-04 19:18:20 --> トランザクション開始
DEBUG - 2015-08-04 19:18:20 --> SQL実行
INFO - 2015-08-04 19:18:20 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 19:18:20 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:18:20 --> SQL実行
INFO - 2015-08-04 19:18:20 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 19:18:20 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 19:18:20 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:18:20 --> コミット
DEBUG - 2015-08-04 19:18:20 --> コネクション破棄
DEBUG - 2015-08-04 19:18:20 --> プロセス終了::process_network_list
INFO - 2015-08-04 19:18:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 19:18:21 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:21 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:21 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 19:18:21 --> コネクション作成
DEBUG - 2015-08-04 19:18:22 --> トランザクション開始
DEBUG - 2015-08-04 19:18:22 --> SQL実行
INFO - 2015-08-04 19:18:22 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 19:18:22 --> バインド値(NETWORK_ID)::000035
DEBUG - 2015-08-04 19:18:22 --> コミット
DEBUG - 2015-08-04 19:18:22 --> コネクション破棄
DEBUG - 2015-08-04 19:18:22 --> プロセス終了::process_network_detail
INFO - 2015-08-04 19:18:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 19:18:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:24 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:24 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 19:18:24 --> コネクション作成
DEBUG - 2015-08-04 19:18:25 --> トランザクション開始
DEBUG - 2015-08-04 19:18:25 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:18:25 --> コネクション作成
DEBUG - 2015-08-04 19:18:27 --> トランザクション開始
DEBUG - 2015-08-04 19:18:27 --> SQL実行
INFO - 2015-08-04 19:18:27 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 19:18:27 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:18:27 --> SQL実行
INFO - 2015-08-04 19:18:27 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 19:18:27 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 19:18:27 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:18:27 --> コミット
DEBUG - 2015-08-04 19:18:27 --> コネクション破棄
DEBUG - 2015-08-04 19:18:27 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:18:27 --> コミット
DEBUG - 2015-08-04 19:18:27 --> コネクション破棄
DEBUG - 2015-08-04 19:18:27 --> プロセス終了::process_network_listback
INFO - 2015-08-04 19:18:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 19:18:30 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:30 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:30 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 19:18:30 --> コネクション作成
DEBUG - 2015-08-04 19:18:31 --> トランザクション開始
DEBUG - 2015-08-04 19:18:31 --> SQL実行
INFO - 2015-08-04 19:18:31 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 19:18:31 --> バインド値(NETWORK_ID)::000035
DEBUG - 2015-08-04 19:18:31 --> コミット
DEBUG - 2015-08-04 19:18:31 --> コネクション破棄
DEBUG - 2015-08-04 19:18:31 --> プロセス終了::process_network_detail
INFO - 2015-08-04 19:18:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 19:18:32 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:32 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:32 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 19:18:32 --> コネクション作成
DEBUG - 2015-08-04 19:18:33 --> トランザクション開始
DEBUG - 2015-08-04 19:18:33 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:18:33 --> コネクション作成
DEBUG - 2015-08-04 19:18:34 --> トランザクション開始
DEBUG - 2015-08-04 19:18:34 --> SQL実行
INFO - 2015-08-04 19:18:34 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 19:18:34 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:18:34 --> SQL実行
INFO - 2015-08-04 19:18:34 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 19:18:34 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 19:18:34 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:18:34 --> コミット
DEBUG - 2015-08-04 19:18:34 --> コネクション破棄
DEBUG - 2015-08-04 19:18:34 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:18:34 --> コミット
DEBUG - 2015-08-04 19:18:34 --> コネクション破棄
DEBUG - 2015-08-04 19:18:34 --> プロセス終了::process_network_listback
INFO - 2015-08-04 19:18:37 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 19:18:37 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:37 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:37 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 19:18:37 --> コネクション作成
DEBUG - 2015-08-04 19:18:38 --> トランザクション開始
DEBUG - 2015-08-04 19:18:38 --> SQL実行
INFO - 2015-08-04 19:18:38 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 19:18:38 --> バインド値(NETWORK_ID)::000035
DEBUG - 2015-08-04 19:18:38 --> コミット
DEBUG - 2015-08-04 19:18:38 --> コネクション破棄
DEBUG - 2015-08-04 19:18:38 --> プロセス終了::process_network_detail
INFO - 2015-08-04 19:18:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:18:41 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:41 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:41 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:18:41 --> コネクション作成
DEBUG - 2015-08-04 19:18:42 --> トランザクション開始
DEBUG - 2015-08-04 19:18:42 --> コミット
DEBUG - 2015-08-04 19:18:42 --> コネクション破棄
DEBUG - 2015-08-04 19:18:42 --> プロセス終了::process_network_checkinput
INFO - 2015-08-04 19:18:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:18:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:44 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:44 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:18:44 --> コネクション作成
DEBUG - 2015-08-04 19:18:45 --> トランザクション開始
DEBUG - 2015-08-04 19:18:45 --> コミット
DEBUG - 2015-08-04 19:18:45 --> コネクション破棄
DEBUG - 2015-08-04 19:18:45 --> プロセス終了::process_network_checkinput
INFO - 2015-08-04 19:18:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:18:47 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:47 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:47 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:18:47 --> コネクション作成
DEBUG - 2015-08-04 19:18:48 --> トランザクション開始
DEBUG - 2015-08-04 19:18:48 --> コミット
DEBUG - 2015-08-04 19:18:48 --> コネクション破棄
DEBUG - 2015-08-04 19:18:48 --> プロセス終了::process_network_checkinput
INFO - 2015-08-04 19:18:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 19:18:49 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:49 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:49 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 19:18:49 --> コネクション作成
DEBUG - 2015-08-04 19:18:50 --> トランザクション開始
DEBUG - 2015-08-04 19:18:50 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:18:50 --> コネクション作成
DEBUG - 2015-08-04 19:18:51 --> トランザクション開始
DEBUG - 2015-08-04 19:18:51 --> SQL実行
INFO - 2015-08-04 19:18:51 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 19:18:51 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:18:51 --> SQL実行
INFO - 2015-08-04 19:18:51 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 19:18:51 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 19:18:51 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:18:51 --> コミット
DEBUG - 2015-08-04 19:18:51 --> コネクション破棄
DEBUG - 2015-08-04 19:18:51 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:18:51 --> コミット
DEBUG - 2015-08-04 19:18:51 --> コネクション破棄
DEBUG - 2015-08-04 19:18:51 --> プロセス終了::process_network_listback
INFO - 2015-08-04 19:18:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 19:18:54 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:18:54 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:18:54 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:18:54 --> コネクション作成
DEBUG - 2015-08-04 19:18:55 --> トランザクション開始
DEBUG - 2015-08-04 19:18:55 --> SQL実行
INFO - 2015-08-04 19:18:55 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:18:55 --> SQL実行
INFO - 2015-08-04 19:18:55 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:18:55 --> コミット
DEBUG - 2015-08-04 19:18:55 --> コネクション破棄
DEBUG - 2015-08-04 19:18:55 --> プロセス終了::process_network_list
INFO - 2015-08-04 19:19:20 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 19:19:20 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:19:20 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:19:20 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 19:19:20 --> コネクション作成
DEBUG - 2015-08-04 19:19:21 --> トランザクション開始
DEBUG - 2015-08-04 19:19:21 --> SQL実行
INFO - 2015-08-04 19:19:21 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 19:19:21 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 19:19:21 --> コミット
DEBUG - 2015-08-04 19:19:21 --> コネクション破棄
DEBUG - 2015-08-04 19:19:21 --> プロセス終了::process_network_detail
INFO - 2015-08-04 19:19:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:19:27 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:19:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:19:27 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:19:27 --> コネクション作成
DEBUG - 2015-08-04 19:19:28 --> トランザクション開始
DEBUG - 2015-08-04 19:19:28 --> コミット
DEBUG - 2015-08-04 19:19:28 --> コネクション破棄
DEBUG - 2015-08-04 19:19:28 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 19:19:28 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 19:19:28 --> コネクション作成
DEBUG - 2015-08-04 19:19:30 --> トランザクション開始
DEBUG - 2015-08-04 19:19:30 --> コミット
DEBUG - 2015-08-04 19:19:30 --> コネクション破棄
DEBUG - 2015-08-04 19:19:30 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 19:19:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-04 19:19:31 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:19:31 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:19:31 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-04 19:19:31 --> コネクション作成
DEBUG - 2015-08-04 19:19:32 --> トランザクション開始
DEBUG - 2015-08-04 19:19:32 --> コミット
DEBUG - 2015-08-04 19:19:32 --> コネクション破棄
DEBUG - 2015-08-04 19:19:32 --> プロセス終了::process_network_detailback
INFO - 2015-08-04 19:19:34 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:19:34 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:19:34 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:19:34 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:19:34 --> コネクション作成
DEBUG - 2015-08-04 19:19:35 --> トランザクション開始
DEBUG - 2015-08-04 19:19:35 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 19:19:35 --> コネクション作成
DEBUG - 2015-08-04 19:19:36 --> トランザクション開始
DEBUG - 2015-08-04 19:19:36 --> SQL実行
INFO - 2015-08-04 19:19:36 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 19:19:36 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 19:19:36 --> コミット
DEBUG - 2015-08-04 19:19:36 --> コネクション破棄
DEBUG - 2015-08-04 19:19:36 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 19:19:36 --> コミット
DEBUG - 2015-08-04 19:19:36 --> コネクション破棄
DEBUG - 2015-08-04 19:19:36 --> プロセス終了::process_network_checkinput
INFO - 2015-08-04 19:19:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 19:19:49 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:19:49 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:19:49 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 19:19:49 --> コネクション作成
DEBUG - 2015-08-04 19:19:51 --> トランザクション開始
DEBUG - 2015-08-04 19:19:51 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:19:51 --> コネクション作成
DEBUG - 2015-08-04 19:19:52 --> トランザクション開始
DEBUG - 2015-08-04 19:19:52 --> SQL実行
INFO - 2015-08-04 19:19:52 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:19:52 --> SQL実行
INFO - 2015-08-04 19:19:52 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:19:52 --> コミット
DEBUG - 2015-08-04 19:19:52 --> コネクション破棄
DEBUG - 2015-08-04 19:19:52 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:19:52 --> コミット
DEBUG - 2015-08-04 19:19:52 --> コネクション破棄
DEBUG - 2015-08-04 19:19:52 --> プロセス終了::process_network_listback
INFO - 2015-08-04 19:19:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 19:19:54 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:19:54 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:19:54 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 19:19:54 --> コネクション作成
DEBUG - 2015-08-04 19:19:55 --> トランザクション開始
DEBUG - 2015-08-04 19:19:55 --> コミット
DEBUG - 2015-08-04 19:19:55 --> コネクション破棄
DEBUG - 2015-08-04 19:19:55 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 19:20:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 19:20:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:20:02 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:20:02 --> プロセス開始::process_network_index
DEBUG - 2015-08-04 19:20:02 --> コネクション作成
DEBUG - 2015-08-04 19:20:03 --> トランザクション開始
DEBUG - 2015-08-04 19:20:03 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:20:03 --> コネクション作成
DEBUG - 2015-08-04 19:20:04 --> トランザクション開始
DEBUG - 2015-08-04 19:20:04 --> SQL実行
INFO - 2015-08-04 19:20:04 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:20:04 --> SQL実行
INFO - 2015-08-04 19:20:04 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:20:04 --> コミット
DEBUG - 2015-08-04 19:20:04 --> コネクション破棄
DEBUG - 2015-08-04 19:20:04 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:20:04 --> コミット
DEBUG - 2015-08-04 19:20:04 --> コネクション破棄
DEBUG - 2015-08-04 19:20:04 --> プロセス終了::process_network_index
INFO - 2015-08-04 19:20:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 19:20:11 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:20:11 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:20:11 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:20:11 --> コネクション作成
DEBUG - 2015-08-04 19:20:12 --> トランザクション開始
DEBUG - 2015-08-04 19:20:12 --> SQL実行
INFO - 2015-08-04 19:20:12 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 19:20:12 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:20:12 --> SQL実行
INFO - 2015-08-04 19:20:12 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 20
INFO - 2015-08-04 19:20:12 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 19:20:12 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:20:12 --> コミット
DEBUG - 2015-08-04 19:20:12 --> コネクション破棄
DEBUG - 2015-08-04 19:20:12 --> プロセス終了::process_network_list
INFO - 2015-08-04 19:20:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 19:20:14 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:20:14 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:20:14 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:20:14 --> コネクション作成
DEBUG - 2015-08-04 19:20:15 --> トランザクション開始
DEBUG - 2015-08-04 19:20:15 --> SQL実行
INFO - 2015-08-04 19:20:15 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 19:20:15 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:20:15 --> SQL実行
INFO - 2015-08-04 19:20:15 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 19:20:15 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 19:20:15 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:20:15 --> コミット
DEBUG - 2015-08-04 19:20:15 --> コネクション破棄
DEBUG - 2015-08-04 19:20:15 --> プロセス終了::process_network_list
INFO - 2015-08-04 19:20:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 19:20:19 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:20:19 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:20:19 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:20:19 --> コネクション作成
DEBUG - 2015-08-04 19:20:21 --> トランザクション開始
DEBUG - 2015-08-04 19:20:21 --> SQL実行
INFO - 2015-08-04 19:20:21 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:20:21 --> SQL実行
INFO - 2015-08-04 19:20:21 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:20:21 --> コミット
DEBUG - 2015-08-04 19:20:21 --> コネクション破棄
DEBUG - 2015-08-04 19:20:21 --> プロセス終了::process_network_list
INFO - 2015-08-04 19:20:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 19:20:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:20:22 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:20:22 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:20:22 --> コネクション作成
DEBUG - 2015-08-04 19:20:23 --> トランザクション開始
DEBUG - 2015-08-04 19:20:23 --> SQL実行
INFO - 2015-08-04 19:20:23 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:20:23 --> SQL実行
INFO - 2015-08-04 19:20:23 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-04 19:20:23 --> コミット
DEBUG - 2015-08-04 19:20:23 --> コネクション破棄
DEBUG - 2015-08-04 19:20:23 --> プロセス終了::process_network_list
INFO - 2015-08-04 19:20:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 19:20:26 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:20:26 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:20:26 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:20:26 --> コネクション作成
DEBUG - 2015-08-04 19:20:27 --> トランザクション開始
DEBUG - 2015-08-04 19:20:27 --> SQL実行
INFO - 2015-08-04 19:20:27 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 19:20:27 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:20:27 --> SQL実行
INFO - 2015-08-04 19:20:27 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 19:20:27 --> バインド値(NETWORK_NAME)::%99%
INFO - 2015-08-04 19:20:27 --> バインド値(NETWORK_NAME)::%99%
DEBUG - 2015-08-04 19:20:27 --> コミット
DEBUG - 2015-08-04 19:20:27 --> コネクション破棄
DEBUG - 2015-08-04 19:20:27 --> プロセス終了::process_network_list
INFO - 2015-08-04 19:20:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 19:20:35 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:20:35 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:20:35 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:20:35 --> コネクション作成
DEBUG - 2015-08-04 19:20:36 --> トランザクション開始
DEBUG - 2015-08-04 19:20:36 --> SQL実行
INFO - 2015-08-04 19:20:36 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:20:36 --> SQL実行
INFO - 2015-08-04 19:20:36 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:20:36 --> コミット
DEBUG - 2015-08-04 19:20:36 --> コネクション破棄
DEBUG - 2015-08-04 19:20:36 --> プロセス終了::process_network_list
INFO - 2015-08-04 19:21:08 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 19:21:08 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:21:08 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:21:08 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 19:21:08 --> コネクション作成
DEBUG - 2015-08-04 19:21:09 --> トランザクション開始
DEBUG - 2015-08-04 19:21:09 --> コミット
DEBUG - 2015-08-04 19:21:09 --> コネクション破棄
DEBUG - 2015-08-04 19:21:09 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 19:21:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:21:11 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:21:11 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:21:11 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:21:11 --> コネクション作成
DEBUG - 2015-08-04 19:21:12 --> トランザクション開始
DEBUG - 2015-08-04 19:21:12 --> コミット
DEBUG - 2015-08-04 19:21:12 --> コネクション破棄
DEBUG - 2015-08-04 19:21:12 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 19:21:12 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 19:21:12 --> コネクション作成
DEBUG - 2015-08-04 19:21:13 --> トランザクション開始
DEBUG - 2015-08-04 19:21:13 --> コミット
DEBUG - 2015-08-04 19:21:13 --> コネクション破棄
DEBUG - 2015-08-04 19:21:13 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 19:21:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 19:21:14 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:21:14 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:21:14 --> プロセス開始::process_network_ins
DEBUG - 2015-08-04 19:21:14 --> コネクション作成
DEBUG - 2015-08-04 19:21:15 --> トランザクション開始
DEBUG - 2015-08-04 19:21:15 --> SQL実行
INFO - 2015-08-04 19:21:15 --> SQL::: sssssINSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST_TIME  ,REGIST_USER  ,UPDATE_TIME  ,UPDATE_USER )   VALUES ( (SELECT ifnull(right(concat('000000', MAX( network_id ) +1 ),6),  '000001') network_id FROM network_mst sub),  :NETWORK_NAME,  :ENABLED_FLAG,   NOW(),  :REGIST_USER,   NOW(),  :UPDATE_USER ) 
INFO - 2015-08-04 19:21:15 --> バインド値(NETWORK_NAME)::ssddsd
INFO - 2015-08-04 19:21:15 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-04 19:21:15 --> バインド値(REGIST_USER)::iziri
INFO - 2015-08-04 19:21:15 --> バインド値(UPDATE_USER)::iziri
ERROR - 2015-08-04 19:21:15 --> SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'sssssINSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGI' at line 1
DEBUG - 2015-08-04 19:21:15 --> コミット
DEBUG - 2015-08-04 19:21:15 --> コネクション破棄
DEBUG - 2015-08-04 19:21:15 --> プロセス終了::process_network_ins
INFO - 2015-08-04 19:21:23 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:21:23 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:21:23 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:21:23 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:21:23 --> コネクション作成
DEBUG - 2015-08-04 19:21:24 --> トランザクション開始
DEBUG - 2015-08-04 19:21:24 --> コミット
DEBUG - 2015-08-04 19:21:24 --> コネクション破棄
DEBUG - 2015-08-04 19:21:24 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 19:21:24 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 19:21:24 --> コネクション作成
DEBUG - 2015-08-04 19:21:25 --> トランザクション開始
DEBUG - 2015-08-04 19:21:25 --> コミット
DEBUG - 2015-08-04 19:21:25 --> コネクション破棄
DEBUG - 2015-08-04 19:21:25 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 19:21:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 19:21:26 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:21:26 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:21:26 --> プロセス開始::process_network_ins
DEBUG - 2015-08-04 19:21:26 --> コネクション作成
DEBUG - 2015-08-04 19:21:27 --> トランザクション開始
DEBUG - 2015-08-04 19:21:27 --> SQL実行
INFO - 2015-08-04 19:21:27 --> SQL::: INSERT INTO NETWORK_MST (   NETWORK_ID  ,NETWORK_NAME  ,ENABLED_FLAG  ,REGIST_TIME  ,REGIST_USER  ,UPDATE_TIME  ,UPDATE_USER )   VALUES ( (SELECT ifnull(right(concat('000000', MAX( network_id ) +1 ),6),  '000001') network_id FROM network_mst sub),  :NETWORK_NAME,  :ENABLED_FLAG,   NOW(),  :REGIST_USER,   NOW(),  :UPDATE_USER ) 
INFO - 2015-08-04 19:21:27 --> バインド値(NETWORK_NAME)::ssddsd
INFO - 2015-08-04 19:21:27 --> バインド値(ENABLED_FLAG)::1
INFO - 2015-08-04 19:21:27 --> バインド値(REGIST_USER)::iziri
INFO - 2015-08-04 19:21:27 --> バインド値(UPDATE_USER)::iziri
DEBUG - 2015-08-04 19:21:27 --> コミット
DEBUG - 2015-08-04 19:21:27 --> コネクション破棄
DEBUG - 2015-08-04 19:21:27 --> プロセス終了::process_network_ins
INFO - 2015-08-04 19:21:27 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-04 19:21:27 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:21:27 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:21:27 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-04 19:21:27 --> コネクション作成
DEBUG - 2015-08-04 19:21:28 --> トランザクション開始
DEBUG - 2015-08-04 19:21:28 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:21:28 --> コネクション作成
DEBUG - 2015-08-04 19:21:29 --> トランザクション開始
DEBUG - 2015-08-04 19:21:29 --> SQL実行
INFO - 2015-08-04 19:21:29 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:21:29 --> SQL実行
INFO - 2015-08-04 19:21:29 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:21:29 --> コミット
DEBUG - 2015-08-04 19:21:29 --> コネクション破棄
DEBUG - 2015-08-04 19:21:29 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:21:29 --> コミット
DEBUG - 2015-08-04 19:21:29 --> コネクション破棄
DEBUG - 2015-08-04 19:21:29 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-04 19:21:34 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 19:21:34 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:21:34 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:21:34 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 19:21:34 --> コネクション作成
DEBUG - 2015-08-04 19:21:35 --> トランザクション開始
DEBUG - 2015-08-04 19:21:35 --> コミット
DEBUG - 2015-08-04 19:21:35 --> コネクション破棄
DEBUG - 2015-08-04 19:21:35 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 19:22:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 19:22:09 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:22:09 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:22:09 --> プロセス開始::process_network_index
DEBUG - 2015-08-04 19:22:09 --> コネクション作成
DEBUG - 2015-08-04 19:22:10 --> トランザクション開始
DEBUG - 2015-08-04 19:22:10 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:22:10 --> コネクション作成
DEBUG - 2015-08-04 19:22:11 --> トランザクション開始
DEBUG - 2015-08-04 19:22:11 --> SQL実行
INFO - 2015-08-04 19:22:11 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:22:11 --> SQL実行
INFO - 2015-08-04 19:22:11 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:22:11 --> コミット
DEBUG - 2015-08-04 19:22:11 --> コネクション破棄
DEBUG - 2015-08-04 19:22:11 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:22:11 --> コミット
DEBUG - 2015-08-04 19:22:11 --> コネクション破棄
DEBUG - 2015-08-04 19:22:11 --> プロセス終了::process_network_index
INFO - 2015-08-04 19:22:12 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 19:22:12 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:22:12 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:22:12 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 19:22:12 --> コネクション作成
DEBUG - 2015-08-04 19:22:13 --> トランザクション開始
DEBUG - 2015-08-04 19:22:13 --> SQL実行
INFO - 2015-08-04 19:22:13 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 19:22:13 --> バインド値(NETWORK_ID)::000040
DEBUG - 2015-08-04 19:22:13 --> コミット
DEBUG - 2015-08-04 19:22:13 --> コネクション破棄
DEBUG - 2015-08-04 19:22:13 --> プロセス終了::process_network_detail
INFO - 2015-08-04 19:22:15 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:22:15 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:22:15 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:22:15 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:22:15 --> コネクション作成
DEBUG - 2015-08-04 19:22:16 --> トランザクション開始
DEBUG - 2015-08-04 19:22:16 --> コミット
DEBUG - 2015-08-04 19:22:16 --> コネクション破棄
DEBUG - 2015-08-04 19:22:16 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 19:22:16 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 19:22:16 --> コネクション作成
DEBUG - 2015-08-04 19:22:17 --> トランザクション開始
DEBUG - 2015-08-04 19:22:17 --> コミット
DEBUG - 2015-08-04 19:22:17 --> コネクション破棄
DEBUG - 2015-08-04 19:22:17 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 19:22:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-04 19:22:19 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:22:19 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:22:19 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-04 19:22:19 --> コネクション作成
DEBUG - 2015-08-04 19:22:20 --> トランザクション開始
DEBUG - 2015-08-04 19:22:20 --> コミット
DEBUG - 2015-08-04 19:22:20 --> コネクション破棄
DEBUG - 2015-08-04 19:22:20 --> プロセス終了::process_network_detailback
INFO - 2015-08-04 19:22:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 19:22:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:22:22 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:22:22 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 19:22:22 --> コネクション作成
DEBUG - 2015-08-04 19:22:23 --> トランザクション開始
DEBUG - 2015-08-04 19:22:23 --> コミット
DEBUG - 2015-08-04 19:22:23 --> コネクション破棄
DEBUG - 2015-08-04 19:22:23 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 19:22:23 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 19:22:23 --> コネクション作成
DEBUG - 2015-08-04 19:22:24 --> トランザクション開始
DEBUG - 2015-08-04 19:22:24 --> コミット
DEBUG - 2015-08-04 19:22:24 --> コネクション破棄
DEBUG - 2015-08-04 19:22:24 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 19:22:25 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/back"
INFO - 2015-08-04 19:22:25 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:22:25 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:22:25 --> プロセス開始::process_network_detailback
DEBUG - 2015-08-04 19:22:25 --> コネクション作成
DEBUG - 2015-08-04 19:22:26 --> トランザクション開始
DEBUG - 2015-08-04 19:22:26 --> コミット
DEBUG - 2015-08-04 19:22:26 --> コネクション破棄
DEBUG - 2015-08-04 19:22:26 --> プロセス終了::process_network_detailback
INFO - 2015-08-04 19:22:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 19:22:39 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:22:39 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:22:39 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 19:22:39 --> コネクション作成
DEBUG - 2015-08-04 19:22:40 --> トランザクション開始
DEBUG - 2015-08-04 19:22:40 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:22:40 --> コネクション作成
DEBUG - 2015-08-04 19:22:41 --> トランザクション開始
DEBUG - 2015-08-04 19:22:41 --> SQL実行
INFO - 2015-08-04 19:22:41 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:22:41 --> SQL実行
INFO - 2015-08-04 19:22:41 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:22:41 --> コミット
DEBUG - 2015-08-04 19:22:41 --> コネクション破棄
DEBUG - 2015-08-04 19:22:41 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:22:41 --> コミット
DEBUG - 2015-08-04 19:22:41 --> コネクション破棄
DEBUG - 2015-08-04 19:22:41 --> プロセス終了::process_network_listback
INFO - 2015-08-04 19:22:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 19:22:45 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:22:45 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:22:45 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 19:22:45 --> コネクション作成
DEBUG - 2015-08-04 19:22:46 --> トランザクション開始
DEBUG - 2015-08-04 19:22:46 --> コミット
DEBUG - 2015-08-04 19:22:46 --> コネクション破棄
DEBUG - 2015-08-04 19:22:46 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 19:23:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 19:23:48 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:23:48 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:23:48 --> プロセス開始::process_network_index
DEBUG - 2015-08-04 19:23:48 --> コネクション作成
DEBUG - 2015-08-04 19:23:49 --> トランザクション開始
DEBUG - 2015-08-04 19:23:49 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:23:49 --> コネクション作成
DEBUG - 2015-08-04 19:23:50 --> トランザクション開始
DEBUG - 2015-08-04 19:23:50 --> SQL実行
INFO - 2015-08-04 19:23:50 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:23:50 --> SQL実行
INFO - 2015-08-04 19:23:50 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:23:50 --> コミット
DEBUG - 2015-08-04 19:23:50 --> コネクション破棄
DEBUG - 2015-08-04 19:23:50 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:23:50 --> コミット
DEBUG - 2015-08-04 19:23:50 --> コネクション破棄
DEBUG - 2015-08-04 19:23:50 --> プロセス終了::process_network_index
INFO - 2015-08-04 19:23:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 19:23:52 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:23:52 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:23:52 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 19:23:52 --> コネクション作成
DEBUG - 2015-08-04 19:23:53 --> トランザクション開始
DEBUG - 2015-08-04 19:23:53 --> SQL実行
INFO - 2015-08-04 19:23:53 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 19:23:53 --> バインド値(NETWORK_ID)::000037
DEBUG - 2015-08-04 19:23:53 --> コミット
DEBUG - 2015-08-04 19:23:53 --> コネクション破棄
DEBUG - 2015-08-04 19:23:53 --> プロセス終了::process_network_detail
INFO - 2015-08-04 19:23:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 19:23:55 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:23:55 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:23:55 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 19:23:55 --> コネクション作成
DEBUG - 2015-08-04 19:23:56 --> トランザクション開始
DEBUG - 2015-08-04 19:23:56 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:23:56 --> コネクション作成
DEBUG - 2015-08-04 19:23:57 --> トランザクション開始
DEBUG - 2015-08-04 19:23:57 --> SQL実行
INFO - 2015-08-04 19:23:57 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 19:23:57 --> SQL実行
INFO - 2015-08-04 19:23:57 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:23:57 --> コミット
DEBUG - 2015-08-04 19:23:57 --> コネクション破棄
DEBUG - 2015-08-04 19:23:57 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:23:57 --> コミット
DEBUG - 2015-08-04 19:23:57 --> コネクション破棄
DEBUG - 2015-08-04 19:23:57 --> プロセス終了::process_network_listback
INFO - 2015-08-04 19:23:57 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/new"
INFO - 2015-08-04 19:23:57 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:23:57 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:23:57 --> プロセス開始::process_network_newindex
DEBUG - 2015-08-04 19:23:57 --> コネクション作成
DEBUG - 2015-08-04 19:23:58 --> トランザクション開始
DEBUG - 2015-08-04 19:23:58 --> コミット
DEBUG - 2015-08-04 19:23:58 --> コネクション破棄
DEBUG - 2015-08-04 19:23:58 --> プロセス終了::process_network_newindex
INFO - 2015-08-04 19:57:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 19:57:04 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:57:04 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:57:04 --> プロセス開始::process_network_index
DEBUG - 2015-08-04 19:57:04 --> コネクション作成
DEBUG - 2015-08-04 19:57:05 --> トランザクション開始
DEBUG - 2015-08-04 19:57:05 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:57:05 --> コネクション作成
DEBUG - 2015-08-04 19:57:06 --> トランザクション開始
DEBUG - 2015-08-04 19:57:06 --> SQL実行
INFO - 2015-08-04 19:57:06 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
ERROR - 2015-08-04 19:57:06 --> Fatal Error - Call to protected method process_network_count::make_sql() from context 'process_listbase' in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\classes\process\listbase.php on line 81
INFO - 2015-08-04 19:59:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 19:59:38 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 19:59:39 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 19:59:39 --> プロセス開始::process_network_index
DEBUG - 2015-08-04 19:59:39 --> コネクション作成
DEBUG - 2015-08-04 19:59:40 --> トランザクション開始
DEBUG - 2015-08-04 19:59:40 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 19:59:40 --> コネクション作成
DEBUG - 2015-08-04 19:59:41 --> トランザクション開始
DEBUG - 2015-08-04 19:59:41 --> SQL実行
INFO - 2015-08-04 19:59:41 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 19:59:41 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 19:59:41 --> コネクション作成
DEBUG - 2015-08-04 19:59:42 --> トランザクション開始
DEBUG - 2015-08-04 19:59:42 --> SQL実行
INFO - 2015-08-04 19:59:42 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
ERROR - 2015-08-04 19:59:42 --> Argument 1 passed to process_network_count::set_session() must be an instance of res_base, null given, called in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\classes\process\detailbase.php on line 54 and defined
DEBUG - 2015-08-04 19:59:42 --> ロールバック
DEBUG - 2015-08-04 19:59:42 --> コネクション破棄
DEBUG - 2015-08-04 19:59:42 --> コミット
DEBUG - 2015-08-04 19:59:42 --> コネクション破棄
DEBUG - 2015-08-04 19:59:42 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 19:59:42 --> コミット
DEBUG - 2015-08-04 19:59:42 --> コネクション破棄
DEBUG - 2015-08-04 19:59:42 --> プロセス終了::process_network_index
INFO - 2015-08-04 20:00:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:00:05 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:00:05 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:00:05 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:00:05 --> コネクション作成
DEBUG - 2015-08-04 20:00:06 --> トランザクション開始
DEBUG - 2015-08-04 20:00:06 --> SQL実行
INFO - 2015-08-04 20:00:06 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:00:06 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:00:06 --> コネクション作成
DEBUG - 2015-08-04 20:00:07 --> トランザクション開始
DEBUG - 2015-08-04 20:00:07 --> SQL実行
INFO - 2015-08-04 20:00:07 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
ERROR - 2015-08-04 20:00:07 --> Argument 1 passed to process_network_count::set_session() must be an instance of res_base, null given, called in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\classes\process\detailbase.php on line 54 and defined
DEBUG - 2015-08-04 20:00:07 --> ロールバック
DEBUG - 2015-08-04 20:00:07 --> コネクション破棄
DEBUG - 2015-08-04 20:00:07 --> コミット
DEBUG - 2015-08-04 20:00:07 --> コネクション破棄
DEBUG - 2015-08-04 20:00:07 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:00:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:00:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:00:24 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:00:24 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:00:24 --> コネクション作成
DEBUG - 2015-08-04 20:00:25 --> トランザクション開始
DEBUG - 2015-08-04 20:00:25 --> SQL実行
INFO - 2015-08-04 20:00:25 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:00:25 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:00:25 --> コネクション作成
DEBUG - 2015-08-04 20:00:26 --> トランザクション開始
DEBUG - 2015-08-04 20:00:26 --> SQL実行
INFO - 2015-08-04 20:00:26 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
ERROR - 2015-08-04 20:00:26 --> Argument 1 passed to process_network_count::set_session() must be an instance of res_base, null given, called in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\classes\process\detailbase.php on line 54 and defined
DEBUG - 2015-08-04 20:00:26 --> ロールバック
DEBUG - 2015-08-04 20:00:26 --> コネクション破棄
DEBUG - 2015-08-04 20:00:26 --> コミット
DEBUG - 2015-08-04 20:00:26 --> コネクション破棄
DEBUG - 2015-08-04 20:00:26 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:00:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:00:43 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:00:43 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:00:43 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:00:43 --> コネクション作成
DEBUG - 2015-08-04 20:00:44 --> トランザクション開始
DEBUG - 2015-08-04 20:00:44 --> SQL実行
INFO - 2015-08-04 20:00:44 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:00:44 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:00:44 --> コネクション作成
DEBUG - 2015-08-04 20:00:45 --> トランザクション開始
DEBUG - 2015-08-04 20:00:45 --> SQL実行
INFO - 2015-08-04 20:00:45 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
ERROR - 2015-08-04 20:00:45 --> Argument 1 passed to process_network_count::set_session() must be an instance of res_base, null given, called in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\classes\process\detailbase.php on line 54 and defined
DEBUG - 2015-08-04 20:00:45 --> ロールバック
DEBUG - 2015-08-04 20:00:45 --> コネクション破棄
DEBUG - 2015-08-04 20:00:45 --> コミット
DEBUG - 2015-08-04 20:00:45 --> コネクション破棄
DEBUG - 2015-08-04 20:00:45 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:01:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:01:03 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:01:03 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:01:03 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:01:03 --> コネクション作成
DEBUG - 2015-08-04 20:01:04 --> トランザクション開始
DEBUG - 2015-08-04 20:01:04 --> SQL実行
INFO - 2015-08-04 20:01:04 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:01:04 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:01:04 --> コネクション作成
DEBUG - 2015-08-04 20:01:05 --> トランザクション開始
DEBUG - 2015-08-04 20:01:05 --> SQL実行
INFO - 2015-08-04 20:01:05 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
ERROR - 2015-08-04 20:01:05 --> Argument 1 passed to process_network_count::set_session() must be an instance of res_base, null given, called in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\classes\process\detailbase.php on line 54 and defined
DEBUG - 2015-08-04 20:01:05 --> ロールバック
DEBUG - 2015-08-04 20:01:05 --> コネクション破棄
DEBUG - 2015-08-04 20:01:05 --> コミット
DEBUG - 2015-08-04 20:01:05 --> コネクション破棄
DEBUG - 2015-08-04 20:01:05 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:01:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:01:17 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:01:17 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:01:17 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:01:18 --> コネクション作成
DEBUG - 2015-08-04 20:01:19 --> トランザクション開始
DEBUG - 2015-08-04 20:01:19 --> SQL実行
INFO - 2015-08-04 20:01:19 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:01:19 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:01:19 --> コネクション作成
DEBUG - 2015-08-04 20:01:20 --> トランザクション開始
DEBUG - 2015-08-04 20:01:20 --> SQL実行
INFO - 2015-08-04 20:01:20 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
ERROR - 2015-08-04 20:01:20 --> Argument 1 passed to process_network_count::set_session() must be an instance of res_base, null given, called in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\classes\process\detailbase.php on line 54 and defined
DEBUG - 2015-08-04 20:01:20 --> ロールバック
DEBUG - 2015-08-04 20:01:20 --> コネクション破棄
DEBUG - 2015-08-04 20:01:20 --> コミット
DEBUG - 2015-08-04 20:01:20 --> コネクション破棄
DEBUG - 2015-08-04 20:01:20 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:01:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:01:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:01:58 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:01:58 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:01:58 --> コネクション作成
DEBUG - 2015-08-04 20:01:59 --> トランザクション開始
DEBUG - 2015-08-04 20:01:59 --> SQL実行
INFO - 2015-08-04 20:01:59 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:01:59 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:01:59 --> コネクション作成
DEBUG - 2015-08-04 20:02:00 --> トランザクション開始
DEBUG - 2015-08-04 20:02:00 --> SQL実行
INFO - 2015-08-04 20:02:00 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
ERROR - 2015-08-04 20:02:00 --> Argument 1 passed to process_network_count::set_session() must be an instance of res_base, null given, called in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\classes\process\detailbase.php on line 54 and defined
DEBUG - 2015-08-04 20:02:00 --> ロールバック
DEBUG - 2015-08-04 20:02:00 --> コネクション破棄
DEBUG - 2015-08-04 20:02:00 --> コミット
DEBUG - 2015-08-04 20:02:00 --> コネクション破棄
DEBUG - 2015-08-04 20:02:00 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:02:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:02:31 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:02:31 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:02:31 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:02:31 --> コネクション作成
DEBUG - 2015-08-04 20:02:33 --> トランザクション開始
DEBUG - 2015-08-04 20:02:33 --> SQL実行
INFO - 2015-08-04 20:02:33 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:02:33 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:02:33 --> コネクション作成
DEBUG - 2015-08-04 20:02:34 --> トランザクション開始
DEBUG - 2015-08-04 20:02:34 --> SQL実行
INFO - 2015-08-04 20:02:34 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:02:34 --> コミット
DEBUG - 2015-08-04 20:02:34 --> コネクション破棄
DEBUG - 2015-08-04 20:02:34 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:02:34 --> コミット
DEBUG - 2015-08-04 20:02:34 --> コネクション破棄
DEBUG - 2015-08-04 20:02:34 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:04:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:04:38 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:04:38 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:04:38 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:04:38 --> コネクション作成
DEBUG - 2015-08-04 20:04:39 --> トランザクション開始
DEBUG - 2015-08-04 20:04:39 --> SQL実行
INFO - 2015-08-04 20:04:39 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
ERROR - 2015-08-04 20:04:39 --> Fatal Error - Call to undefined method process_listbase::process_detailbase() in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\app\classes\process\network\count.php on line 16
INFO - 2015-08-04 20:04:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:04:55 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:04:55 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:04:55 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:04:55 --> コネクション作成
DEBUG - 2015-08-04 20:04:56 --> トランザクション開始
DEBUG - 2015-08-04 20:04:56 --> SQL実行
INFO - 2015-08-04 20:04:56 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:04:56 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:04:56 --> コネクション作成
DEBUG - 2015-08-04 20:04:57 --> トランザクション開始
DEBUG - 2015-08-04 20:04:57 --> SQL実行
INFO - 2015-08-04 20:04:57 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:04:57 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:04:57 --> コネクション作成
DEBUG - 2015-08-04 20:04:58 --> トランザクション開始
DEBUG - 2015-08-04 20:04:58 --> SQL実行
INFO - 2015-08-04 20:04:58 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:04:58 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:04:58 --> コネクション作成
DEBUG - 2015-08-04 20:04:59 --> トランザクション開始
DEBUG - 2015-08-04 20:04:59 --> SQL実行
INFO - 2015-08-04 20:04:59 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:04:59 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:04:59 --> コネクション作成
DEBUG - 2015-08-04 20:05:00 --> トランザクション開始
DEBUG - 2015-08-04 20:05:00 --> SQL実行
INFO - 2015-08-04 20:05:00 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:00 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:00 --> コネクション作成
DEBUG - 2015-08-04 20:05:01 --> トランザクション開始
DEBUG - 2015-08-04 20:05:01 --> SQL実行
INFO - 2015-08-04 20:05:01 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:01 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:01 --> コネクション作成
DEBUG - 2015-08-04 20:05:02 --> トランザクション開始
DEBUG - 2015-08-04 20:05:02 --> SQL実行
INFO - 2015-08-04 20:05:02 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:02 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:02 --> コネクション作成
DEBUG - 2015-08-04 20:05:03 --> トランザクション開始
DEBUG - 2015-08-04 20:05:03 --> SQL実行
INFO - 2015-08-04 20:05:03 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:03 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:03 --> コネクション作成
DEBUG - 2015-08-04 20:05:04 --> トランザクション開始
DEBUG - 2015-08-04 20:05:04 --> SQL実行
INFO - 2015-08-04 20:05:04 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:04 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:04 --> コネクション作成
DEBUG - 2015-08-04 20:05:05 --> トランザクション開始
DEBUG - 2015-08-04 20:05:05 --> SQL実行
INFO - 2015-08-04 20:05:05 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:05 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:05 --> コネクション作成
DEBUG - 2015-08-04 20:05:06 --> トランザクション開始
DEBUG - 2015-08-04 20:05:06 --> SQL実行
INFO - 2015-08-04 20:05:06 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:06 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:06 --> コネクション作成
DEBUG - 2015-08-04 20:05:07 --> トランザクション開始
DEBUG - 2015-08-04 20:05:07 --> SQL実行
INFO - 2015-08-04 20:05:07 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:07 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:07 --> コネクション作成
DEBUG - 2015-08-04 20:05:08 --> トランザクション開始
DEBUG - 2015-08-04 20:05:08 --> SQL実行
INFO - 2015-08-04 20:05:08 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:08 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:08 --> コネクション作成
DEBUG - 2015-08-04 20:05:09 --> トランザクション開始
DEBUG - 2015-08-04 20:05:09 --> SQL実行
INFO - 2015-08-04 20:05:09 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:09 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:09 --> コネクション作成
DEBUG - 2015-08-04 20:05:10 --> トランザクション開始
DEBUG - 2015-08-04 20:05:10 --> SQL実行
INFO - 2015-08-04 20:05:10 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:10 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:10 --> コネクション作成
DEBUG - 2015-08-04 20:05:11 --> トランザクション開始
DEBUG - 2015-08-04 20:05:11 --> SQL実行
INFO - 2015-08-04 20:05:11 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:11 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:11 --> コネクション作成
DEBUG - 2015-08-04 20:05:12 --> トランザクション開始
DEBUG - 2015-08-04 20:05:12 --> SQL実行
INFO - 2015-08-04 20:05:12 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:12 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:12 --> コネクション作成
DEBUG - 2015-08-04 20:05:13 --> トランザクション開始
DEBUG - 2015-08-04 20:05:13 --> SQL実行
INFO - 2015-08-04 20:05:13 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:13 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:13 --> コネクション作成
DEBUG - 2015-08-04 20:05:14 --> トランザクション開始
DEBUG - 2015-08-04 20:05:14 --> SQL実行
INFO - 2015-08-04 20:05:14 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:14 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:14 --> コネクション作成
DEBUG - 2015-08-04 20:05:16 --> トランザクション開始
DEBUG - 2015-08-04 20:05:16 --> SQL実行
INFO - 2015-08-04 20:05:16 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:16 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:16 --> コネクション作成
DEBUG - 2015-08-04 20:05:17 --> トランザクション開始
DEBUG - 2015-08-04 20:05:17 --> SQL実行
INFO - 2015-08-04 20:05:17 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:17 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:17 --> コネクション作成
DEBUG - 2015-08-04 20:05:18 --> トランザクション開始
DEBUG - 2015-08-04 20:05:18 --> SQL実行
INFO - 2015-08-04 20:05:18 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:18 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:18 --> コネクション作成
DEBUG - 2015-08-04 20:05:19 --> トランザクション開始
DEBUG - 2015-08-04 20:05:19 --> SQL実行
INFO - 2015-08-04 20:05:19 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:19 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:19 --> コネクション作成
DEBUG - 2015-08-04 20:05:20 --> トランザクション開始
DEBUG - 2015-08-04 20:05:20 --> SQL実行
INFO - 2015-08-04 20:05:20 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:20 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:20 --> コネクション作成
DEBUG - 2015-08-04 20:05:21 --> トランザクション開始
DEBUG - 2015-08-04 20:05:21 --> SQL実行
INFO - 2015-08-04 20:05:21 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:21 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:21 --> コネクション作成
DEBUG - 2015-08-04 20:05:22 --> トランザクション開始
DEBUG - 2015-08-04 20:05:22 --> SQL実行
INFO - 2015-08-04 20:05:22 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:22 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:05:22 --> コネクション作成
DEBUG - 2015-08-04 20:05:23 --> トランザクション開始
DEBUG - 2015-08-04 20:05:23 --> SQL実行
INFO - 2015-08-04 20:05:23 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:05:23 --> プロセス開始::process_network_count
ERROR - 2015-08-04 20:05:23 --> Fatal Error - Maximum function nesting level of '100' reached, aborting! in C:\project\PD\pleiades\xampp\htdocs\keyman\fuel\vendor\monolog\monolog\src\Monolog\Formatter\NormalizerFormatter.php on line 55
INFO - 2015-08-04 20:07:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:07:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:07:44 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:07:44 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:07:44 --> コネクション作成
DEBUG - 2015-08-04 20:07:45 --> トランザクション開始
DEBUG - 2015-08-04 20:07:45 --> SQL実行
INFO - 2015-08-04 20:07:45 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:07:45 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:07:45 --> コネクション作成
DEBUG - 2015-08-04 20:07:46 --> トランザクション開始
DEBUG - 2015-08-04 20:07:46 --> SQL実行
INFO - 2015-08-04 20:07:46 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:07:46 --> コミット
DEBUG - 2015-08-04 20:07:46 --> コネクション破棄
DEBUG - 2015-08-04 20:07:47 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:07:47 --> コミット
DEBUG - 2015-08-04 20:07:47 --> コネクション破棄
DEBUG - 2015-08-04 20:07:47 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:08:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:08:18 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:08:18 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:08:18 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:08:18 --> コネクション作成
DEBUG - 2015-08-04 20:08:19 --> トランザクション開始
DEBUG - 2015-08-04 20:08:19 --> SQL実行
INFO - 2015-08-04 20:08:19 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:08:19 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:08:19 --> コネクション作成
DEBUG - 2015-08-04 20:08:20 --> トランザクション開始
DEBUG - 2015-08-04 20:08:20 --> SQL実行
INFO - 2015-08-04 20:08:20 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:08:20 --> コミット
DEBUG - 2015-08-04 20:08:20 --> コネクション破棄
DEBUG - 2015-08-04 20:08:20 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:08:20 --> コミット
DEBUG - 2015-08-04 20:08:20 --> コネクション破棄
DEBUG - 2015-08-04 20:08:20 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:08:47 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:08:47 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:08:47 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:08:47 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:08:47 --> コネクション作成
DEBUG - 2015-08-04 20:08:48 --> トランザクション開始
DEBUG - 2015-08-04 20:08:48 --> SQL実行
INFO - 2015-08-04 20:08:48 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:08:48 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:08:48 --> コネクション作成
DEBUG - 2015-08-04 20:08:49 --> トランザクション開始
DEBUG - 2015-08-04 20:08:49 --> SQL実行
INFO - 2015-08-04 20:08:49 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:08:49 --> コミット
DEBUG - 2015-08-04 20:08:49 --> コネクション破棄
DEBUG - 2015-08-04 20:08:49 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:08:49 --> コミット
DEBUG - 2015-08-04 20:08:49 --> コネクション破棄
DEBUG - 2015-08-04 20:08:49 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:08:56 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:08:56 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:08:56 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:08:56 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:08:56 --> コネクション作成
DEBUG - 2015-08-04 20:08:57 --> トランザクション開始
DEBUG - 2015-08-04 20:08:57 --> SQL実行
INFO - 2015-08-04 20:08:57 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:08:57 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:08:57 --> コネクション作成
DEBUG - 2015-08-04 20:08:58 --> トランザクション開始
DEBUG - 2015-08-04 20:08:58 --> SQL実行
INFO - 2015-08-04 20:08:58 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:08:58 --> コミット
DEBUG - 2015-08-04 20:08:58 --> コネクション破棄
DEBUG - 2015-08-04 20:08:58 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:08:58 --> コミット
DEBUG - 2015-08-04 20:08:58 --> コネクション破棄
DEBUG - 2015-08-04 20:08:58 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:09:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:09:35 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:09:35 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:09:35 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:09:35 --> コネクション作成
DEBUG - 2015-08-04 20:09:36 --> トランザクション開始
DEBUG - 2015-08-04 20:09:36 --> SQL実行
INFO - 2015-08-04 20:09:36 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:09:36 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:09:36 --> コネクション作成
DEBUG - 2015-08-04 20:09:37 --> トランザクション開始
DEBUG - 2015-08-04 20:09:37 --> SQL実行
INFO - 2015-08-04 20:09:37 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:09:37 --> コミット
DEBUG - 2015-08-04 20:09:37 --> コネクション破棄
DEBUG - 2015-08-04 20:09:37 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:09:37 --> コミット
DEBUG - 2015-08-04 20:09:37 --> コネクション破棄
DEBUG - 2015-08-04 20:09:37 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:11:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:11:28 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:11:28 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:11:28 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:11:28 --> コネクション作成
DEBUG - 2015-08-04 20:11:29 --> トランザクション開始
DEBUG - 2015-08-04 20:11:29 --> SQL実行
INFO - 2015-08-04 20:11:29 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:11:29 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:11:29 --> コネクション作成
DEBUG - 2015-08-04 20:11:30 --> トランザクション開始
DEBUG - 2015-08-04 20:11:30 --> SQL実行
INFO - 2015-08-04 20:11:30 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:11:30 --> コミット
DEBUG - 2015-08-04 20:11:30 --> コネクション破棄
DEBUG - 2015-08-04 20:11:30 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:11:30 --> コミット
DEBUG - 2015-08-04 20:11:30 --> コネクション破棄
DEBUG - 2015-08-04 20:11:30 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:12:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:12:43 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:12:43 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:12:43 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:12:43 --> コネクション作成
DEBUG - 2015-08-04 20:12:44 --> トランザクション開始
DEBUG - 2015-08-04 20:12:44 --> SQL実行
INFO - 2015-08-04 20:12:44 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:12:44 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:12:44 --> コネクション作成
DEBUG - 2015-08-04 20:12:45 --> トランザクション開始
DEBUG - 2015-08-04 20:12:45 --> SQL実行
INFO - 2015-08-04 20:12:45 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:12:45 --> コミット
DEBUG - 2015-08-04 20:12:45 --> コネクション破棄
DEBUG - 2015-08-04 20:12:45 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:12:45 --> コミット
DEBUG - 2015-08-04 20:12:45 --> コネクション破棄
DEBUG - 2015-08-04 20:12:45 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:19:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:19:42 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:19:42 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:19:42 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:19:42 --> コネクション作成
DEBUG - 2015-08-04 20:19:43 --> トランザクション開始
DEBUG - 2015-08-04 20:19:43 --> SQL実行
INFO - 2015-08-04 20:19:43 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:19:43 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:19:43 --> コネクション作成
DEBUG - 2015-08-04 20:19:44 --> トランザクション開始
DEBUG - 2015-08-04 20:19:44 --> SQL実行
INFO - 2015-08-04 20:19:44 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:19:44 --> コミット
DEBUG - 2015-08-04 20:19:44 --> コネクション破棄
DEBUG - 2015-08-04 20:19:44 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:19:44 --> コミット
DEBUG - 2015-08-04 20:19:44 --> コネクション破棄
DEBUG - 2015-08-04 20:19:44 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:19:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:19:48 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:19:48 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:19:48 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:19:48 --> コネクション作成
DEBUG - 2015-08-04 20:19:49 --> トランザクション開始
DEBUG - 2015-08-04 20:19:49 --> SQL実行
INFO - 2015-08-04 20:19:49 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:19:49 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:19:49 --> コネクション作成
DEBUG - 2015-08-04 20:19:50 --> トランザクション開始
DEBUG - 2015-08-04 20:19:50 --> SQL実行
INFO - 2015-08-04 20:19:50 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:19:50 --> コミット
DEBUG - 2015-08-04 20:19:50 --> コネクション破棄
DEBUG - 2015-08-04 20:19:50 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:19:50 --> コミット
DEBUG - 2015-08-04 20:19:50 --> コネクション破棄
DEBUG - 2015-08-04 20:19:50 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:19:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:19:53 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:19:53 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:19:53 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:19:53 --> コネクション作成
DEBUG - 2015-08-04 20:19:54 --> トランザクション開始
DEBUG - 2015-08-04 20:19:54 --> SQL実行
INFO - 2015-08-04 20:19:54 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:19:54 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:19:54 --> コネクション作成
INFO - 2015-08-04 20:19:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:19:54 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:19:54 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:19:54 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:19:54 --> コネクション作成
INFO - 2015-08-04 20:19:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:19:54 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:19:54 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:19:54 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:19:54 --> コネクション作成
INFO - 2015-08-04 20:19:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:19:55 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:19:55 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:19:55 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:19:55 --> コネクション作成
DEBUG - 2015-08-04 20:19:55 --> トランザクション開始
DEBUG - 2015-08-04 20:19:55 --> SQL実行
INFO - 2015-08-04 20:19:55 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:19:55 --> コミット
DEBUG - 2015-08-04 20:19:55 --> コネクション破棄
DEBUG - 2015-08-04 20:19:55 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:19:55 --> コミット
DEBUG - 2015-08-04 20:19:55 --> コネクション破棄
DEBUG - 2015-08-04 20:19:55 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 20:19:55 --> トランザクション開始
DEBUG - 2015-08-04 20:19:55 --> SQL実行
INFO - 2015-08-04 20:19:55 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:19:55 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:19:55 --> コネクション作成
DEBUG - 2015-08-04 20:19:55 --> トランザクション開始
DEBUG - 2015-08-04 20:19:55 --> SQL実行
INFO - 2015-08-04 20:19:55 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:19:55 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:19:55 --> コネクション作成
DEBUG - 2015-08-04 20:19:56 --> トランザクション開始
DEBUG - 2015-08-04 20:19:56 --> SQL実行
INFO - 2015-08-04 20:19:56 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:19:56 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:19:56 --> コネクション作成
DEBUG - 2015-08-04 20:19:56 --> トランザクション開始
DEBUG - 2015-08-04 20:19:56 --> SQL実行
INFO - 2015-08-04 20:19:56 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:19:56 --> コミット
DEBUG - 2015-08-04 20:19:56 --> コネクション破棄
DEBUG - 2015-08-04 20:19:56 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:19:56 --> コミット
DEBUG - 2015-08-04 20:19:56 --> コネクション破棄
DEBUG - 2015-08-04 20:19:56 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 20:19:57 --> トランザクション開始
DEBUG - 2015-08-04 20:19:57 --> SQL実行
INFO - 2015-08-04 20:19:57 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:19:57 --> コミット
DEBUG - 2015-08-04 20:19:57 --> コネクション破棄
DEBUG - 2015-08-04 20:19:57 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:19:57 --> コミット
DEBUG - 2015-08-04 20:19:57 --> コネクション破棄
DEBUG - 2015-08-04 20:19:57 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 20:19:57 --> トランザクション開始
DEBUG - 2015-08-04 20:19:57 --> SQL実行
INFO - 2015-08-04 20:19:57 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:19:57 --> コミット
DEBUG - 2015-08-04 20:19:57 --> コネクション破棄
DEBUG - 2015-08-04 20:19:57 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:19:57 --> コミット
DEBUG - 2015-08-04 20:19:57 --> コネクション破棄
DEBUG - 2015-08-04 20:19:57 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:20:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:20:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:20:00 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:20:00 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:20:00 --> コネクション作成
DEBUG - 2015-08-04 20:20:01 --> トランザクション開始
DEBUG - 2015-08-04 20:20:01 --> SQL実行
INFO - 2015-08-04 20:20:01 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:20:01 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:20:01 --> コネクション作成
DEBUG - 2015-08-04 20:20:02 --> トランザクション開始
DEBUG - 2015-08-04 20:20:02 --> SQL実行
INFO - 2015-08-04 20:20:02 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:20:02 --> コミット
DEBUG - 2015-08-04 20:20:02 --> コネクション破棄
DEBUG - 2015-08-04 20:20:02 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:20:02 --> コミット
DEBUG - 2015-08-04 20:20:02 --> コネクション破棄
DEBUG - 2015-08-04 20:20:02 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:22:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:22:53 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:22:53 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:22:53 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:22:53 --> コネクション作成
DEBUG - 2015-08-04 20:22:54 --> トランザクション開始
DEBUG - 2015-08-04 20:22:54 --> SQL実行
INFO - 2015-08-04 20:22:54 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:22:54 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:22:54 --> コネクション作成
DEBUG - 2015-08-04 20:22:55 --> トランザクション開始
DEBUG - 2015-08-04 20:22:55 --> SQL実行
INFO - 2015-08-04 20:22:55 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:22:55 --> コミット
DEBUG - 2015-08-04 20:22:55 --> コネクション破棄
DEBUG - 2015-08-04 20:22:55 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:22:55 --> コミット
DEBUG - 2015-08-04 20:22:55 --> コネクション破棄
DEBUG - 2015-08-04 20:22:55 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:23:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:23:33 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:23:33 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:23:33 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:23:33 --> コネクション作成
DEBUG - 2015-08-04 20:23:34 --> トランザクション開始
DEBUG - 2015-08-04 20:23:34 --> SQL実行
INFO - 2015-08-04 20:23:34 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:23:34 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:23:34 --> コネクション作成
DEBUG - 2015-08-04 20:23:35 --> トランザクション開始
DEBUG - 2015-08-04 20:23:35 --> SQL実行
INFO - 2015-08-04 20:23:35 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:23:35 --> コミット
DEBUG - 2015-08-04 20:23:35 --> コネクション破棄
DEBUG - 2015-08-04 20:23:35 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:23:35 --> コミット
DEBUG - 2015-08-04 20:23:35 --> コネクション破棄
DEBUG - 2015-08-04 20:23:35 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:23:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:23:43 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:23:43 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:23:43 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:23:43 --> コネクション作成
DEBUG - 2015-08-04 20:23:44 --> トランザクション開始
DEBUG - 2015-08-04 20:23:44 --> SQL実行
INFO - 2015-08-04 20:23:44 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:23:44 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:23:44 --> コネクション作成
DEBUG - 2015-08-04 20:23:45 --> トランザクション開始
DEBUG - 2015-08-04 20:23:45 --> SQL実行
INFO - 2015-08-04 20:23:45 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:23:45 --> コミット
DEBUG - 2015-08-04 20:23:45 --> コネクション破棄
DEBUG - 2015-08-04 20:23:45 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:23:45 --> コミット
DEBUG - 2015-08-04 20:23:45 --> コネクション破棄
DEBUG - 2015-08-04 20:23:45 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:24:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:24:01 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:24:01 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:24:01 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:24:01 --> コネクション作成
DEBUG - 2015-08-04 20:24:02 --> トランザクション開始
DEBUG - 2015-08-04 20:24:02 --> SQL実行
INFO - 2015-08-04 20:24:02 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:24:02 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:24:02 --> コネクション作成
DEBUG - 2015-08-04 20:24:03 --> トランザクション開始
DEBUG - 2015-08-04 20:24:03 --> SQL実行
INFO - 2015-08-04 20:24:03 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:24:03 --> コミット
DEBUG - 2015-08-04 20:24:03 --> コネクション破棄
DEBUG - 2015-08-04 20:24:03 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:24:03 --> コミット
DEBUG - 2015-08-04 20:24:03 --> コネクション破棄
DEBUG - 2015-08-04 20:24:03 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:24:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:24:06 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:24:06 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:24:06 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:24:06 --> コネクション作成
DEBUG - 2015-08-04 20:24:07 --> トランザクション開始
DEBUG - 2015-08-04 20:24:07 --> SQL実行
INFO - 2015-08-04 20:24:07 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:24:07 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:24:07 --> コネクション作成
DEBUG - 2015-08-04 20:24:08 --> トランザクション開始
DEBUG - 2015-08-04 20:24:08 --> SQL実行
INFO - 2015-08-04 20:24:08 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:24:08 --> コミット
DEBUG - 2015-08-04 20:24:08 --> コネクション破棄
DEBUG - 2015-08-04 20:24:08 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:24:08 --> コミット
DEBUG - 2015-08-04 20:24:08 --> コネクション破棄
DEBUG - 2015-08-04 20:24:08 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:27:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:27:04 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:27:04 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:27:04 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:27:04 --> コネクション作成
DEBUG - 2015-08-04 20:27:05 --> トランザクション開始
DEBUG - 2015-08-04 20:27:05 --> SQL実行
INFO - 2015-08-04 20:27:05 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:27:05 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:27:05 --> コネクション作成
DEBUG - 2015-08-04 20:27:06 --> トランザクション開始
DEBUG - 2015-08-04 20:27:06 --> SQL実行
INFO - 2015-08-04 20:27:06 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:27:06 --> コミット
DEBUG - 2015-08-04 20:27:06 --> コネクション破棄
DEBUG - 2015-08-04 20:27:06 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:27:06 --> コミット
DEBUG - 2015-08-04 20:27:06 --> コネクション破棄
DEBUG - 2015-08-04 20:27:06 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:27:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:27:09 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:27:09 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:27:09 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:27:09 --> コネクション作成
DEBUG - 2015-08-04 20:27:10 --> トランザクション開始
DEBUG - 2015-08-04 20:27:10 --> SQL実行
INFO - 2015-08-04 20:27:10 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:27:10 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:27:10 --> コネクション作成
DEBUG - 2015-08-04 20:27:11 --> トランザクション開始
DEBUG - 2015-08-04 20:27:11 --> SQL実行
INFO - 2015-08-04 20:27:11 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:27:11 --> コミット
DEBUG - 2015-08-04 20:27:11 --> コネクション破棄
DEBUG - 2015-08-04 20:27:11 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:27:11 --> コミット
DEBUG - 2015-08-04 20:27:11 --> コネクション破棄
DEBUG - 2015-08-04 20:27:11 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:27:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:27:13 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:27:13 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:27:13 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:27:13 --> コネクション作成
DEBUG - 2015-08-04 20:27:14 --> トランザクション開始
DEBUG - 2015-08-04 20:27:14 --> SQL実行
INFO - 2015-08-04 20:27:14 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:27:14 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:27:14 --> コネクション作成
DEBUG - 2015-08-04 20:27:15 --> トランザクション開始
DEBUG - 2015-08-04 20:27:15 --> SQL実行
INFO - 2015-08-04 20:27:15 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:27:15 --> コミット
DEBUG - 2015-08-04 20:27:15 --> コネクション破棄
DEBUG - 2015-08-04 20:27:15 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:27:15 --> コミット
DEBUG - 2015-08-04 20:27:15 --> コネクション破棄
DEBUG - 2015-08-04 20:27:15 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:28:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:28:33 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:28:33 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:28:33 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:28:34 --> コネクション作成
DEBUG - 2015-08-04 20:28:35 --> トランザクション開始
DEBUG - 2015-08-04 20:28:35 --> SQL実行
INFO - 2015-08-04 20:28:35 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:28:35 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:28:35 --> コネクション作成
DEBUG - 2015-08-04 20:28:36 --> トランザクション開始
DEBUG - 2015-08-04 20:28:36 --> SQL実行
INFO - 2015-08-04 20:28:36 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:28:36 --> コミット
DEBUG - 2015-08-04 20:28:36 --> コネクション破棄
DEBUG - 2015-08-04 20:28:36 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:28:36 --> コミット
DEBUG - 2015-08-04 20:28:36 --> コネクション破棄
DEBUG - 2015-08-04 20:28:36 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:29:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:29:32 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:29:32 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:29:32 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:29:32 --> コネクション作成
DEBUG - 2015-08-04 20:29:33 --> トランザクション開始
DEBUG - 2015-08-04 20:29:33 --> SQL実行
INFO - 2015-08-04 20:29:33 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:29:33 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:29:33 --> コネクション作成
DEBUG - 2015-08-04 20:29:34 --> トランザクション開始
DEBUG - 2015-08-04 20:29:34 --> SQL実行
INFO - 2015-08-04 20:29:34 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:29:34 --> コミット
DEBUG - 2015-08-04 20:29:34 --> コネクション破棄
DEBUG - 2015-08-04 20:29:34 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:29:34 --> コミット
DEBUG - 2015-08-04 20:29:34 --> コネクション破棄
DEBUG - 2015-08-04 20:29:34 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:29:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:29:36 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:29:36 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:29:36 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:29:36 --> コネクション作成
DEBUG - 2015-08-04 20:29:37 --> トランザクション開始
DEBUG - 2015-08-04 20:29:37 --> SQL実行
INFO - 2015-08-04 20:29:37 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:29:37 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:29:37 --> コネクション作成
DEBUG - 2015-08-04 20:29:38 --> トランザクション開始
DEBUG - 2015-08-04 20:29:38 --> SQL実行
INFO - 2015-08-04 20:29:38 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:29:38 --> コミット
DEBUG - 2015-08-04 20:29:38 --> コネクション破棄
DEBUG - 2015-08-04 20:29:38 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:29:38 --> コミット
DEBUG - 2015-08-04 20:29:38 --> コネクション破棄
DEBUG - 2015-08-04 20:29:38 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:29:39 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:29:39 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:29:39 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:29:39 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:29:39 --> コネクション作成
DEBUG - 2015-08-04 20:29:40 --> トランザクション開始
DEBUG - 2015-08-04 20:29:40 --> SQL実行
INFO - 2015-08-04 20:29:40 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:29:40 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:29:40 --> コネクション作成
DEBUG - 2015-08-04 20:29:41 --> トランザクション開始
DEBUG - 2015-08-04 20:29:41 --> SQL実行
INFO - 2015-08-04 20:29:41 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:29:41 --> コミット
DEBUG - 2015-08-04 20:29:41 --> コネクション破棄
DEBUG - 2015-08-04 20:29:41 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:29:41 --> コミット
DEBUG - 2015-08-04 20:29:41 --> コネクション破棄
DEBUG - 2015-08-04 20:29:41 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:30:21 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:30:21 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:30:21 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:30:21 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:30:21 --> コネクション作成
DEBUG - 2015-08-04 20:30:22 --> トランザクション開始
DEBUG - 2015-08-04 20:30:22 --> SQL実行
INFO - 2015-08-04 20:30:22 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:30:22 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:30:22 --> コネクション作成
DEBUG - 2015-08-04 20:30:23 --> トランザクション開始
DEBUG - 2015-08-04 20:30:23 --> SQL実行
INFO - 2015-08-04 20:30:23 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:30:23 --> コミット
DEBUG - 2015-08-04 20:30:23 --> コネクション破棄
DEBUG - 2015-08-04 20:30:23 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:30:23 --> コミット
DEBUG - 2015-08-04 20:30:23 --> コネクション破棄
DEBUG - 2015-08-04 20:30:23 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:30:25 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:30:25 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:30:25 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:30:25 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:30:25 --> コネクション作成
DEBUG - 2015-08-04 20:30:26 --> トランザクション開始
DEBUG - 2015-08-04 20:30:26 --> SQL実行
INFO - 2015-08-04 20:30:26 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 10
DEBUG - 2015-08-04 20:30:26 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:30:26 --> コネクション作成
DEBUG - 2015-08-04 20:30:27 --> トランザクション開始
DEBUG - 2015-08-04 20:30:27 --> SQL実行
INFO - 2015-08-04 20:30:27 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:30:27 --> コミット
DEBUG - 2015-08-04 20:30:27 --> コネクション破棄
DEBUG - 2015-08-04 20:30:27 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:30:27 --> コミット
DEBUG - 2015-08-04 20:30:27 --> コネクション破棄
DEBUG - 2015-08-04 20:30:27 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:30:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:30:29 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:30:29 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:30:29 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:30:29 --> コネクション作成
DEBUG - 2015-08-04 20:30:30 --> トランザクション開始
DEBUG - 2015-08-04 20:30:30 --> SQL実行
INFO - 2015-08-04 20:30:30 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-04 20:30:30 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:30:30 --> コネクション作成
DEBUG - 2015-08-04 20:30:31 --> トランザクション開始
DEBUG - 2015-08-04 20:30:31 --> SQL実行
INFO - 2015-08-04 20:30:31 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:30:31 --> コミット
DEBUG - 2015-08-04 20:30:31 --> コネクション破棄
DEBUG - 2015-08-04 20:30:31 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:30:31 --> コミット
DEBUG - 2015-08-04 20:30:31 --> コネクション破棄
DEBUG - 2015-08-04 20:30:31 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:30:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:30:33 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:30:33 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:30:33 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:30:33 --> コネクション作成
DEBUG - 2015-08-04 20:30:34 --> トランザクション開始
DEBUG - 2015-08-04 20:30:34 --> SQL実行
INFO - 2015-08-04 20:30:34 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 30
DEBUG - 2015-08-04 20:30:34 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:30:34 --> コネクション作成
DEBUG - 2015-08-04 20:30:35 --> トランザクション開始
DEBUG - 2015-08-04 20:30:35 --> SQL実行
INFO - 2015-08-04 20:30:35 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:30:35 --> コミット
DEBUG - 2015-08-04 20:30:35 --> コネクション破棄
DEBUG - 2015-08-04 20:30:35 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:30:35 --> コミット
DEBUG - 2015-08-04 20:30:35 --> コネクション破棄
DEBUG - 2015-08-04 20:30:35 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:30:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:30:36 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:30:36 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:30:36 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:30:36 --> コネクション作成
DEBUG - 2015-08-04 20:30:37 --> トランザクション開始
DEBUG - 2015-08-04 20:30:37 --> SQL実行
INFO - 2015-08-04 20:30:37 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-04 20:30:37 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:30:37 --> コネクション作成
DEBUG - 2015-08-04 20:30:38 --> トランザクション開始
DEBUG - 2015-08-04 20:30:38 --> SQL実行
INFO - 2015-08-04 20:30:38 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:30:38 --> コミット
DEBUG - 2015-08-04 20:30:38 --> コネクション破棄
DEBUG - 2015-08-04 20:30:38 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:30:38 --> コミット
DEBUG - 2015-08-04 20:30:38 --> コネクション破棄
DEBUG - 2015-08-04 20:30:38 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:30:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 20:30:40 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:30:40 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:30:40 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 20:30:40 --> コネクション作成
DEBUG - 2015-08-04 20:30:41 --> トランザクション開始
DEBUG - 2015-08-04 20:30:41 --> SQL実行
INFO - 2015-08-04 20:30:41 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 20:30:41 --> バインド値(NETWORK_ID)::000004
DEBUG - 2015-08-04 20:30:41 --> コミット
DEBUG - 2015-08-04 20:30:41 --> コネクション破棄
DEBUG - 2015-08-04 20:30:41 --> プロセス終了::process_network_detail
INFO - 2015-08-04 20:30:42 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 20:30:42 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:30:42 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:30:43 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 20:30:43 --> コネクション作成
DEBUG - 2015-08-04 20:30:44 --> トランザクション開始
DEBUG - 2015-08-04 20:30:44 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:30:44 --> コネクション作成
DEBUG - 2015-08-04 20:30:45 --> トランザクション開始
DEBUG - 2015-08-04 20:30:45 --> SQL実行
INFO - 2015-08-04 20:30:45 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:30:45 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:30:45 --> コネクション作成
DEBUG - 2015-08-04 20:30:46 --> トランザクション開始
DEBUG - 2015-08-04 20:30:46 --> SQL実行
INFO - 2015-08-04 20:30:46 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:30:46 --> コミット
DEBUG - 2015-08-04 20:30:46 --> コネクション破棄
DEBUG - 2015-08-04 20:30:46 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:30:46 --> コミット
DEBUG - 2015-08-04 20:30:46 --> コネクション破棄
DEBUG - 2015-08-04 20:30:46 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 20:30:46 --> コミット
DEBUG - 2015-08-04 20:30:46 --> コネクション破棄
DEBUG - 2015-08-04 20:30:46 --> プロセス終了::process_network_listback
INFO - 2015-08-04 20:31:40 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:31:40 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:31:40 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:31:40 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:31:40 --> コネクション作成
DEBUG - 2015-08-04 20:31:41 --> トランザクション開始
DEBUG - 2015-08-04 20:31:41 --> SQL実行
INFO - 2015-08-04 20:31:41 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:31:41 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:31:41 --> コネクション作成
DEBUG - 2015-08-04 20:31:42 --> トランザクション開始
DEBUG - 2015-08-04 20:31:42 --> SQL実行
INFO - 2015-08-04 20:31:42 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:31:42 --> コミット
DEBUG - 2015-08-04 20:31:42 --> コネクション破棄
DEBUG - 2015-08-04 20:31:42 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:31:42 --> コミット
DEBUG - 2015-08-04 20:31:42 --> コネクション破棄
DEBUG - 2015-08-04 20:31:42 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:31:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:31:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:31:44 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:31:44 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:31:44 --> コネクション作成
DEBUG - 2015-08-04 20:31:45 --> トランザクション開始
DEBUG - 2015-08-04 20:31:45 --> SQL実行
INFO - 2015-08-04 20:31:45 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 10
DEBUG - 2015-08-04 20:31:45 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:31:45 --> コネクション作成
DEBUG - 2015-08-04 20:31:46 --> トランザクション開始
DEBUG - 2015-08-04 20:31:46 --> SQL実行
INFO - 2015-08-04 20:31:46 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:31:46 --> コミット
DEBUG - 2015-08-04 20:31:46 --> コネクション破棄
DEBUG - 2015-08-04 20:31:46 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:31:46 --> コミット
DEBUG - 2015-08-04 20:31:46 --> コネクション破棄
DEBUG - 2015-08-04 20:31:46 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:31:49 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:31:49 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:31:49 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:31:49 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:31:49 --> コネクション作成
DEBUG - 2015-08-04 20:31:50 --> トランザクション開始
DEBUG - 2015-08-04 20:31:50 --> SQL実行
INFO - 2015-08-04 20:31:50 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-04 20:31:50 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:31:50 --> コネクション作成
DEBUG - 2015-08-04 20:31:51 --> トランザクション開始
DEBUG - 2015-08-04 20:31:51 --> SQL実行
INFO - 2015-08-04 20:31:51 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:31:51 --> コミット
DEBUG - 2015-08-04 20:31:51 --> コネクション破棄
DEBUG - 2015-08-04 20:31:51 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:31:51 --> コミット
DEBUG - 2015-08-04 20:31:51 --> コネクション破棄
DEBUG - 2015-08-04 20:31:51 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:41:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:41:29 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:41:29 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:41:29 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:41:29 --> コネクション作成
DEBUG - 2015-08-04 20:41:30 --> トランザクション開始
DEBUG - 2015-08-04 20:41:30 --> SQL実行
INFO - 2015-08-04 20:41:30 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 10
DEBUG - 2015-08-04 20:41:30 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:41:30 --> コネクション作成
DEBUG - 2015-08-04 20:41:31 --> トランザクション開始
DEBUG - 2015-08-04 20:41:31 --> SQL実行
INFO - 2015-08-04 20:41:31 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:41:31 --> コミット
DEBUG - 2015-08-04 20:41:31 --> コネクション破棄
DEBUG - 2015-08-04 20:41:31 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:41:31 --> コミット
DEBUG - 2015-08-04 20:41:31 --> コネクション破棄
DEBUG - 2015-08-04 20:41:31 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:41:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:41:32 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:41:32 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:41:32 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:41:32 --> コネクション作成
DEBUG - 2015-08-04 20:41:33 --> トランザクション開始
DEBUG - 2015-08-04 20:41:33 --> SQL実行
INFO - 2015-08-04 20:41:33 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:41:33 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:41:33 --> コネクション作成
DEBUG - 2015-08-04 20:41:34 --> トランザクション開始
DEBUG - 2015-08-04 20:41:34 --> SQL実行
INFO - 2015-08-04 20:41:34 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:41:34 --> コミット
DEBUG - 2015-08-04 20:41:34 --> コネクション破棄
DEBUG - 2015-08-04 20:41:34 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:41:34 --> コミット
DEBUG - 2015-08-04 20:41:34 --> コネクション破棄
DEBUG - 2015-08-04 20:41:34 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:41:35 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:41:35 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:41:35 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:41:35 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:41:35 --> コネクション作成
DEBUG - 2015-08-04 20:41:36 --> トランザクション開始
DEBUG - 2015-08-04 20:41:36 --> SQL実行
INFO - 2015-08-04 20:41:36 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 30
DEBUG - 2015-08-04 20:41:36 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:41:36 --> コネクション作成
DEBUG - 2015-08-04 20:41:37 --> トランザクション開始
DEBUG - 2015-08-04 20:41:37 --> SQL実行
INFO - 2015-08-04 20:41:37 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:41:37 --> コミット
DEBUG - 2015-08-04 20:41:37 --> コネクション破棄
DEBUG - 2015-08-04 20:41:37 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:41:37 --> コミット
DEBUG - 2015-08-04 20:41:37 --> コネクション破棄
DEBUG - 2015-08-04 20:41:37 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:41:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 20:41:38 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:41:38 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:41:38 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 20:41:38 --> コネクション作成
DEBUG - 2015-08-04 20:41:39 --> トランザクション開始
DEBUG - 2015-08-04 20:41:39 --> SQL実行
INFO - 2015-08-04 20:41:39 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 20:41:39 --> バインド値(NETWORK_ID)::000031
DEBUG - 2015-08-04 20:41:39 --> コミット
DEBUG - 2015-08-04 20:41:39 --> コネクション破棄
DEBUG - 2015-08-04 20:41:39 --> プロセス終了::process_network_detail
INFO - 2015-08-04 20:41:41 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/back"
INFO - 2015-08-04 20:41:41 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:41:41 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:41:41 --> プロセス開始::process_network_listback
DEBUG - 2015-08-04 20:41:41 --> コネクション作成
DEBUG - 2015-08-04 20:41:42 --> トランザクション開始
DEBUG - 2015-08-04 20:41:42 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:41:42 --> コネクション作成
DEBUG - 2015-08-04 20:41:43 --> トランザクション開始
DEBUG - 2015-08-04 20:41:43 --> SQL実行
INFO - 2015-08-04 20:41:43 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:41:43 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:41:43 --> コネクション作成
DEBUG - 2015-08-04 20:41:44 --> トランザクション開始
DEBUG - 2015-08-04 20:41:44 --> SQL実行
INFO - 2015-08-04 20:41:44 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:41:44 --> コミット
DEBUG - 2015-08-04 20:41:44 --> コネクション破棄
DEBUG - 2015-08-04 20:41:44 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:41:44 --> コミット
DEBUG - 2015-08-04 20:41:44 --> コネクション破棄
DEBUG - 2015-08-04 20:41:44 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 20:41:44 --> コミット
DEBUG - 2015-08-04 20:41:44 --> コネクション破棄
DEBUG - 2015-08-04 20:41:44 --> プロセス終了::process_network_listback
INFO - 2015-08-04 20:41:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:41:46 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:41:46 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:41:46 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:41:46 --> コネクション作成
DEBUG - 2015-08-04 20:41:47 --> トランザクション開始
DEBUG - 2015-08-04 20:41:47 --> SQL実行
INFO - 2015-08-04 20:41:47 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:41:47 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:41:47 --> コネクション作成
DEBUG - 2015-08-04 20:41:48 --> トランザクション開始
DEBUG - 2015-08-04 20:41:48 --> SQL実行
INFO - 2015-08-04 20:41:48 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:41:48 --> コミット
DEBUG - 2015-08-04 20:41:48 --> コネクション破棄
DEBUG - 2015-08-04 20:41:48 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:41:48 --> コミット
DEBUG - 2015-08-04 20:41:48 --> コネクション破棄
DEBUG - 2015-08-04 20:41:48 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:44:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:44:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:44:58 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:44:58 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:44:58 --> コネクション作成
DEBUG - 2015-08-04 20:44:59 --> トランザクション開始
DEBUG - 2015-08-04 20:44:59 --> SQL実行
INFO - 2015-08-04 20:44:59 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 10
DEBUG - 2015-08-04 20:44:59 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:44:59 --> コネクション作成
DEBUG - 2015-08-04 20:45:00 --> トランザクション開始
DEBUG - 2015-08-04 20:45:00 --> SQL実行
INFO - 2015-08-04 20:45:00 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:45:00 --> コミット
DEBUG - 2015-08-04 20:45:00 --> コネクション破棄
DEBUG - 2015-08-04 20:45:00 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:45:00 --> コミット
DEBUG - 2015-08-04 20:45:00 --> コネクション破棄
DEBUG - 2015-08-04 20:45:00 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:45:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:45:01 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:45:01 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:45:01 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:45:01 --> コネクション作成
DEBUG - 2015-08-04 20:45:02 --> トランザクション開始
DEBUG - 2015-08-04 20:45:02 --> SQL実行
INFO - 2015-08-04 20:45:02 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-04 20:45:02 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:45:02 --> コネクション作成
DEBUG - 2015-08-04 20:45:03 --> トランザクション開始
DEBUG - 2015-08-04 20:45:03 --> SQL実行
INFO - 2015-08-04 20:45:03 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:45:03 --> コミット
DEBUG - 2015-08-04 20:45:03 --> コネクション破棄
DEBUG - 2015-08-04 20:45:03 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:45:03 --> コミット
DEBUG - 2015-08-04 20:45:03 --> コネクション破棄
DEBUG - 2015-08-04 20:45:03 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:45:04 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:45:04 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:45:04 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:45:04 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:45:04 --> コネクション作成
DEBUG - 2015-08-04 20:45:05 --> トランザクション開始
DEBUG - 2015-08-04 20:45:05 --> SQL実行
INFO - 2015-08-04 20:45:05 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 30
DEBUG - 2015-08-04 20:45:05 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:45:05 --> コネクション作成
INFO - 2015-08-04 20:45:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:45:05 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:45:05 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:45:05 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:45:05 --> コネクション作成
DEBUG - 2015-08-04 20:45:06 --> トランザクション開始
DEBUG - 2015-08-04 20:45:06 --> SQL実行
INFO - 2015-08-04 20:45:06 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:45:06 --> コミット
DEBUG - 2015-08-04 20:45:06 --> コネクション破棄
DEBUG - 2015-08-04 20:45:06 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:45:06 --> コミット
DEBUG - 2015-08-04 20:45:06 --> コネクション破棄
DEBUG - 2015-08-04 20:45:06 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 20:45:06 --> トランザクション開始
DEBUG - 2015-08-04 20:45:06 --> SQL実行
INFO - 2015-08-04 20:45:06 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:45:06 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:45:06 --> コネクション作成
DEBUG - 2015-08-04 20:45:07 --> トランザクション開始
DEBUG - 2015-08-04 20:45:07 --> SQL実行
INFO - 2015-08-04 20:45:07 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:45:07 --> コミット
DEBUG - 2015-08-04 20:45:07 --> コネクション破棄
DEBUG - 2015-08-04 20:45:07 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:45:07 --> コミット
DEBUG - 2015-08-04 20:45:07 --> コネクション破棄
DEBUG - 2015-08-04 20:45:07 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:45:19 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:45:19 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:45:19 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:45:19 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:45:19 --> コネクション作成
DEBUG - 2015-08-04 20:45:20 --> トランザクション開始
DEBUG - 2015-08-04 20:45:20 --> SQL実行
INFO - 2015-08-04 20:45:20 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 20:45:20 --> バインド値(NETWORK_NAME)::%ssddsd%
DEBUG - 2015-08-04 20:45:20 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:45:20 --> コネクション作成
DEBUG - 2015-08-04 20:45:21 --> トランザクション開始
DEBUG - 2015-08-04 20:45:21 --> SQL実行
INFO - 2015-08-04 20:45:21 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 20:45:21 --> バインド値(NETWORK_NAME)::%ssddsd%
DEBUG - 2015-08-04 20:45:21 --> コミット
DEBUG - 2015-08-04 20:45:21 --> コネクション破棄
DEBUG - 2015-08-04 20:45:21 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:45:21 --> コミット
DEBUG - 2015-08-04 20:45:21 --> コネクション破棄
DEBUG - 2015-08-04 20:45:21 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:45:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:45:26 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:45:26 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:45:26 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:45:26 --> コネクション作成
DEBUG - 2015-08-04 20:45:27 --> トランザクション開始
DEBUG - 2015-08-04 20:45:27 --> SQL実行
INFO - 2015-08-04 20:45:27 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 20:45:27 --> バインド値(NETWORK_NAME)::%sdfsdfsdfsfsfs%
DEBUG - 2015-08-04 20:45:27 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:45:27 --> コネクション作成
DEBUG - 2015-08-04 20:45:28 --> トランザクション開始
DEBUG - 2015-08-04 20:45:28 --> SQL実行
INFO - 2015-08-04 20:45:28 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 20:45:28 --> バインド値(NETWORK_NAME)::%sdfsdfsdfsfsfs%
DEBUG - 2015-08-04 20:45:28 --> コミット
DEBUG - 2015-08-04 20:45:28 --> コネクション破棄
DEBUG - 2015-08-04 20:45:28 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:45:28 --> コミット
DEBUG - 2015-08-04 20:45:28 --> コネクション破棄
DEBUG - 2015-08-04 20:45:28 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:45:32 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:45:32 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:45:32 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:45:32 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:45:32 --> コネクション作成
DEBUG - 2015-08-04 20:45:33 --> トランザクション開始
DEBUG - 2015-08-04 20:45:33 --> SQL実行
INFO - 2015-08-04 20:45:33 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 20:45:33 --> バインド値(NETWORK_NAME)::%sdf%
DEBUG - 2015-08-04 20:45:33 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:45:33 --> コネクション作成
DEBUG - 2015-08-04 20:45:34 --> トランザクション開始
DEBUG - 2015-08-04 20:45:34 --> SQL実行
INFO - 2015-08-04 20:45:34 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 20:45:34 --> バインド値(NETWORK_NAME)::%sdf%
DEBUG - 2015-08-04 20:45:34 --> コミット
DEBUG - 2015-08-04 20:45:34 --> コネクション破棄
DEBUG - 2015-08-04 20:45:34 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:45:34 --> コミット
DEBUG - 2015-08-04 20:45:34 --> コネクション破棄
DEBUG - 2015-08-04 20:45:34 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:49:07 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:49:07 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:49:07 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:49:07 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:49:07 --> コネクション作成
DEBUG - 2015-08-04 20:49:08 --> トランザクション開始
DEBUG - 2015-08-04 20:49:08 --> SQL実行
INFO - 2015-08-04 20:49:08 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 20:49:08 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:49:08 --> コネクション作成
DEBUG - 2015-08-04 20:49:09 --> トランザクション開始
DEBUG - 2015-08-04 20:49:09 --> SQL実行
INFO - 2015-08-04 20:49:09 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:49:09 --> コミット
DEBUG - 2015-08-04 20:49:09 --> コネクション破棄
DEBUG - 2015-08-04 20:49:09 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:49:09 --> コミット
DEBUG - 2015-08-04 20:49:09 --> コネクション破棄
DEBUG - 2015-08-04 20:49:09 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:49:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:49:11 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:49:11 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:49:11 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:49:11 --> コネクション作成
DEBUG - 2015-08-04 20:49:12 --> トランザクション開始
DEBUG - 2015-08-04 20:49:12 --> SQL実行
INFO - 2015-08-04 20:49:12 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 10
DEBUG - 2015-08-04 20:49:12 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:49:12 --> コネクション作成
DEBUG - 2015-08-04 20:49:13 --> トランザクション開始
DEBUG - 2015-08-04 20:49:13 --> SQL実行
INFO - 2015-08-04 20:49:13 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:49:13 --> コミット
DEBUG - 2015-08-04 20:49:13 --> コネクション破棄
DEBUG - 2015-08-04 20:49:13 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:49:13 --> コミット
DEBUG - 2015-08-04 20:49:13 --> コネクション破棄
DEBUG - 2015-08-04 20:49:13 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:49:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:49:14 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:49:14 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:49:14 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:49:14 --> コネクション作成
DEBUG - 2015-08-04 20:49:15 --> トランザクション開始
DEBUG - 2015-08-04 20:49:15 --> SQL実行
INFO - 2015-08-04 20:49:15 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 20
DEBUG - 2015-08-04 20:49:15 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:49:15 --> コネクション作成
DEBUG - 2015-08-04 20:49:16 --> トランザクション開始
DEBUG - 2015-08-04 20:49:16 --> SQL実行
INFO - 2015-08-04 20:49:16 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:49:16 --> コミット
DEBUG - 2015-08-04 20:49:16 --> コネクション破棄
DEBUG - 2015-08-04 20:49:16 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:49:16 --> コミット
DEBUG - 2015-08-04 20:49:16 --> コネクション破棄
DEBUG - 2015-08-04 20:49:16 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:49:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:49:17 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:49:17 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:49:17 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:49:17 --> コネクション作成
DEBUG - 2015-08-04 20:49:18 --> トランザクション開始
DEBUG - 2015-08-04 20:49:18 --> SQL実行
INFO - 2015-08-04 20:49:18 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 30
DEBUG - 2015-08-04 20:49:18 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:49:18 --> コネクション作成
DEBUG - 2015-08-04 20:49:20 --> トランザクション開始
DEBUG - 2015-08-04 20:49:20 --> SQL実行
INFO - 2015-08-04 20:49:20 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:49:20 --> コミット
DEBUG - 2015-08-04 20:49:20 --> コネクション破棄
DEBUG - 2015-08-04 20:49:20 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:49:20 --> コミット
DEBUG - 2015-08-04 20:49:20 --> コネクション破棄
DEBUG - 2015-08-04 20:49:20 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:49:22 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:49:22 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:49:22 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:49:22 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:49:22 --> コネクション作成
DEBUG - 2015-08-04 20:49:23 --> トランザクション開始
DEBUG - 2015-08-04 20:49:23 --> SQL実行
INFO - 2015-08-04 20:49:23 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 10
DEBUG - 2015-08-04 20:49:23 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:49:23 --> コネクション作成
DEBUG - 2015-08-04 20:49:24 --> トランザクション開始
DEBUG - 2015-08-04 20:49:24 --> SQL実行
INFO - 2015-08-04 20:49:24 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 20:49:24 --> コミット
DEBUG - 2015-08-04 20:49:24 --> コネクション破棄
DEBUG - 2015-08-04 20:49:24 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:49:24 --> コミット
DEBUG - 2015-08-04 20:49:24 --> コネクション破棄
DEBUG - 2015-08-04 20:49:24 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:49:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:49:26 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:49:26 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:49:26 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:49:26 --> コネクション作成
DEBUG - 2015-08-04 20:49:27 --> トランザクション開始
DEBUG - 2015-08-04 20:49:27 --> SQL実行
INFO - 2015-08-04 20:49:27 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 20:49:27 --> バインド値(NETWORK_NAME)::%sfsfsdf%
DEBUG - 2015-08-04 20:49:27 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:49:27 --> コネクション作成
DEBUG - 2015-08-04 20:49:28 --> トランザクション開始
DEBUG - 2015-08-04 20:49:28 --> SQL実行
INFO - 2015-08-04 20:49:28 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 20:49:28 --> バインド値(NETWORK_NAME)::%sfsfsdf%
DEBUG - 2015-08-04 20:49:28 --> コミット
DEBUG - 2015-08-04 20:49:28 --> コネクション破棄
DEBUG - 2015-08-04 20:49:28 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:49:28 --> コミット
DEBUG - 2015-08-04 20:49:28 --> コネクション破棄
DEBUG - 2015-08-04 20:49:28 --> プロセス終了::process_network_list
INFO - 2015-08-04 20:49:30 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/search"
INFO - 2015-08-04 20:49:30 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 20:49:30 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 20:49:30 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 20:49:30 --> コネクション作成
DEBUG - 2015-08-04 20:49:31 --> トランザクション開始
DEBUG - 2015-08-04 20:49:31 --> SQL実行
INFO - 2015-08-04 20:49:31 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME order by network_name asc limit 10 offset 0
INFO - 2015-08-04 20:49:31 --> バインド値(NETWORK_NAME)::%A%
DEBUG - 2015-08-04 20:49:31 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 20:49:31 --> コネクション作成
DEBUG - 2015-08-04 20:49:32 --> トランザクション開始
DEBUG - 2015-08-04 20:49:32 --> SQL実行
INFO - 2015-08-04 20:49:32 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 and network_name like :NETWORK_NAME 
INFO - 2015-08-04 20:49:32 --> バインド値(NETWORK_NAME)::%A%
DEBUG - 2015-08-04 20:49:32 --> コミット
DEBUG - 2015-08-04 20:49:32 --> コネクション破棄
DEBUG - 2015-08-04 20:49:32 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 20:49:32 --> コミット
DEBUG - 2015-08-04 20:49:32 --> コネクション破棄
DEBUG - 2015-08-04 20:49:32 --> プロセス終了::process_network_list
INFO - 2015-08-04 22:33:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login"
INFO - 2015-08-04 22:33:03 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:33:03 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-04 22:33:14 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 22:33:15 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:33:15 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:33:15 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 22:33:15 --> コネクション作成
ERROR - 2015-08-04 22:33:16 --> SQLSTATE[HY000] [1044] Access denied for user 'jds'@'localhost' to database 'jds'
DEBUG - 2015-08-04 22:33:16 --> トランザクション開始
ERROR - 2015-08-04 22:33:16 --> Fatal Error - Call to a member function beginTransaction() on a non-object in C:\projects\pleiades\xampp\htdocs\keyman\fuel\app\classes\util\dbaccessor.php on line 29
INFO - 2015-08-04 22:41:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login"
INFO - 2015-08-04 22:41:11 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:41:11 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-04 22:41:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 22:41:18 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:41:18 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:41:18 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 22:41:18 --> コネクション作成
ERROR - 2015-08-04 22:41:19 --> SQLSTATE[HY000] [1044] Access denied for user 'jds'@'localhost' to database 'jds'
DEBUG - 2015-08-04 22:41:19 --> トランザクション開始
ERROR - 2015-08-04 22:41:20 --> Fatal Error - Call to a member function beginTransaction() on a non-object in C:\projects\pleiades\xampp\htdocs\keyman\fuel\app\classes\util\dbaccessor.php on line 29
INFO - 2015-08-04 22:44:03 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login"
INFO - 2015-08-04 22:44:03 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:44:03 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-04 22:44:05 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 22:44:05 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:44:05 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:44:05 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 22:44:05 --> コネクション作成
ERROR - 2015-08-04 22:44:06 --> SQLSTATE[HY000] [1044] Access denied for user 'jds'@'localhost' to database 'jds'
DEBUG - 2015-08-04 22:44:06 --> トランザクション開始
ERROR - 2015-08-04 22:44:07 --> Fatal Error - Call to a member function beginTransaction() on a non-object in C:\projects\pleiades\xampp\htdocs\keyman\fuel\app\classes\util\dbaccessor.php on line 29
INFO - 2015-08-04 22:45:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = ""
INFO - 2015-08-04 22:45:33 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:45:33 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-04 22:45:33 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "welcome/404"
INFO - 2015-08-04 22:45:33 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:45:33 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-04 22:45:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login"
INFO - 2015-08-04 22:45:36 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:45:36 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-04 22:45:38 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 22:45:38 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:45:38 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:45:38 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 22:45:38 --> コネクション作成
ERROR - 2015-08-04 22:45:39 --> SQLSTATE[HY000] [1044] Access denied for user 'jds'@'localhost' to database 'jds'
DEBUG - 2015-08-04 22:45:39 --> トランザクション開始
ERROR - 2015-08-04 22:45:39 --> Fatal Error - Call to a member function beginTransaction() on a non-object in C:\projects\pleiades\xampp\htdocs\keyman\fuel\app\classes\util\dbaccessor.php on line 29
INFO - 2015-08-04 22:47:46 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login"
INFO - 2015-08-04 22:47:46 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:47:46 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-04 22:47:48 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 22:47:48 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:47:48 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:47:48 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 22:47:54 --> コネクション作成
ERROR - 2015-08-04 22:55:48 --> SQLSTATE[HY000] [1044] Access denied for user 'jds'@'localhost' to database 'jds'
DEBUG - 2015-08-04 22:55:48 --> トランザクション開始
ERROR - 2015-08-04 22:55:48 --> Fatal Error - Call to a member function beginTransaction() on a non-object in C:\projects\pleiades\xampp\htdocs\keyman\fuel\app\classes\util\dbaccessor.php on line 29
INFO - 2015-08-04 22:55:58 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login"
INFO - 2015-08-04 22:55:58 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:55:58 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-04 22:56:00 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 22:56:00 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:56:00 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:56:00 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 22:56:00 --> コネクション作成
DEBUG - 2015-08-04 22:56:01 --> トランザクション開始
DEBUG - 2015-08-04 22:56:01 --> プロセス開始::process_login_auth
DEBUG - 2015-08-04 22:56:01 --> コネクション作成
DEBUG - 2015-08-04 22:56:02 --> トランザクション開始
DEBUG - 2015-08-04 22:56:02 --> コミット
DEBUG - 2015-08-04 22:56:02 --> コネクション破棄
DEBUG - 2015-08-04 22:56:02 --> プロセス終了::process_login_auth
ERROR - 2015-08-04 22:56:02 --> Use of undefined constant ERROR_LOGIN - assumed 'ERROR_LOGIN'
DEBUG - 2015-08-04 22:56:02 --> ロールバック
DEBUG - 2015-08-04 22:56:02 --> コネクション破棄
DEBUG - 2015-08-04 22:56:02 --> プロセス開始::process_login_company
DEBUG - 2015-08-04 22:56:02 --> コネクション作成
DEBUG - 2015-08-04 22:56:03 --> トランザクション開始
DEBUG - 2015-08-04 22:56:03 --> SQL実行
INFO - 2015-08-04 22:56:03 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-04 22:56:03 --> バインド値(LOGIN_ID)::
ERROR - 2015-08-04 22:56:03 --> SQLSTATE[42S02]: Base table or view not found: 1146 Table 'jds.user_mst' doesn't exist
DEBUG - 2015-08-04 22:56:03 --> コミット
DEBUG - 2015-08-04 22:56:03 --> コネクション破棄
DEBUG - 2015-08-04 22:56:03 --> プロセス終了::process_login_company
INFO - 2015-08-04 22:56:16 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 22:56:16 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:56:16 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:56:16 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 22:56:16 --> コネクション作成
DEBUG - 2015-08-04 22:56:17 --> トランザクション開始
DEBUG - 2015-08-04 22:56:17 --> プロセス開始::process_login_auth
DEBUG - 2015-08-04 22:56:17 --> コネクション作成
DEBUG - 2015-08-04 22:56:18 --> トランザクション開始
DEBUG - 2015-08-04 22:56:18 --> SQL実行
INFO - 2015-08-04 22:56:18 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-04 22:56:18 --> バインド値(LOGIN_ID)::aa
INFO - 2015-08-04 22:56:18 --> バインド値(PASSWORD)::aa
ERROR - 2015-08-04 22:56:18 --> SQLSTATE[42S02]: Base table or view not found: 1146 Table 'jds.user_mst' doesn't exist
ERROR - 2015-08-04 22:56:18 --> Use of undefined constant ERROR_EXECUTE_SQL - assumed 'ERROR_EXECUTE_SQL'
DEBUG - 2015-08-04 22:56:18 --> ロールバック
DEBUG - 2015-08-04 22:56:18 --> コネクション破棄
ERROR - 2015-08-04 22:56:18 --> Use of undefined constant ERROR_LOGIN - assumed 'ERROR_LOGIN'
DEBUG - 2015-08-04 22:56:18 --> ロールバック
DEBUG - 2015-08-04 22:56:18 --> コネクション破棄
DEBUG - 2015-08-04 22:56:18 --> プロセス開始::process_login_company
DEBUG - 2015-08-04 22:56:18 --> コネクション作成
DEBUG - 2015-08-04 22:56:19 --> トランザクション開始
DEBUG - 2015-08-04 22:56:19 --> SQL実行
INFO - 2015-08-04 22:56:19 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-04 22:56:19 --> バインド値(LOGIN_ID)::
ERROR - 2015-08-04 22:56:19 --> SQLSTATE[42S02]: Base table or view not found: 1146 Table 'jds.user_mst' doesn't exist
DEBUG - 2015-08-04 22:56:19 --> コミット
DEBUG - 2015-08-04 22:56:19 --> コネクション破棄
DEBUG - 2015-08-04 22:56:19 --> プロセス終了::process_login_company
INFO - 2015-08-04 22:58:09 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 22:58:09 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:58:09 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:58:10 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 22:58:10 --> コネクション作成
DEBUG - 2015-08-04 22:58:11 --> トランザクション開始
DEBUG - 2015-08-04 22:58:11 --> プロセス開始::process_login_auth
DEBUG - 2015-08-04 22:58:11 --> コネクション作成
DEBUG - 2015-08-04 22:58:12 --> トランザクション開始
DEBUG - 2015-08-04 22:58:12 --> コミット
DEBUG - 2015-08-04 22:58:12 --> コネクション破棄
DEBUG - 2015-08-04 22:58:12 --> プロセス終了::process_login_auth
ERROR - 2015-08-04 22:58:12 --> Use of undefined constant ERROR_LOGIN - assumed 'ERROR_LOGIN'
DEBUG - 2015-08-04 22:58:12 --> ロールバック
DEBUG - 2015-08-04 22:58:12 --> コネクション破棄
DEBUG - 2015-08-04 22:58:12 --> プロセス開始::process_login_company
DEBUG - 2015-08-04 22:58:12 --> コネクション作成
DEBUG - 2015-08-04 22:58:13 --> トランザクション開始
DEBUG - 2015-08-04 22:58:13 --> SQL実行
INFO - 2015-08-04 22:58:13 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-04 22:58:13 --> バインド値(LOGIN_ID)::
DEBUG - 2015-08-04 22:58:13 --> コミット
DEBUG - 2015-08-04 22:58:13 --> コネクション破棄
DEBUG - 2015-08-04 22:58:13 --> プロセス終了::process_login_company
INFO - 2015-08-04 22:58:18 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 22:58:18 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:58:18 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:58:18 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 22:58:18 --> コネクション作成
DEBUG - 2015-08-04 22:58:19 --> トランザクション開始
DEBUG - 2015-08-04 22:58:19 --> プロセス開始::process_login_auth
DEBUG - 2015-08-04 22:58:19 --> コネクション作成
DEBUG - 2015-08-04 22:58:20 --> トランザクション開始
DEBUG - 2015-08-04 22:58:20 --> SQL実行
INFO - 2015-08-04 22:58:20 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-04 22:58:20 --> バインド値(LOGIN_ID)::aaa
INFO - 2015-08-04 22:58:20 --> バインド値(PASSWORD)::dd
DEBUG - 2015-08-04 22:58:20 --> コミット
DEBUG - 2015-08-04 22:58:20 --> コネクション破棄
DEBUG - 2015-08-04 22:58:20 --> プロセス終了::process_login_auth
ERROR - 2015-08-04 22:58:20 --> Use of undefined constant ERROR_LOGIN - assumed 'ERROR_LOGIN'
DEBUG - 2015-08-04 22:58:20 --> ロールバック
DEBUG - 2015-08-04 22:58:20 --> コネクション破棄
DEBUG - 2015-08-04 22:58:20 --> プロセス開始::process_login_company
DEBUG - 2015-08-04 22:58:20 --> コネクション作成
DEBUG - 2015-08-04 22:58:21 --> トランザクション開始
DEBUG - 2015-08-04 22:58:21 --> SQL実行
INFO - 2015-08-04 22:58:21 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-04 22:58:21 --> バインド値(LOGIN_ID)::
DEBUG - 2015-08-04 22:58:21 --> コミット
DEBUG - 2015-08-04 22:58:21 --> コネクション破棄
DEBUG - 2015-08-04 22:58:21 --> プロセス終了::process_login_company
INFO - 2015-08-04 22:58:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 22:58:36 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:58:36 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:58:36 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 22:58:36 --> コネクション作成
DEBUG - 2015-08-04 22:58:37 --> トランザクション開始
DEBUG - 2015-08-04 22:58:37 --> プロセス開始::process_login_auth
DEBUG - 2015-08-04 22:58:37 --> コネクション作成
DEBUG - 2015-08-04 22:58:38 --> トランザクション開始
DEBUG - 2015-08-04 22:58:38 --> SQL実行
INFO - 2015-08-04 22:58:38 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-04 22:58:38 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-04 22:58:38 --> バインド値(PASSWORD)::tkoga
DEBUG - 2015-08-04 22:58:38 --> コミット
DEBUG - 2015-08-04 22:58:38 --> コネクション破棄
DEBUG - 2015-08-04 22:58:38 --> プロセス終了::process_login_auth
ERROR - 2015-08-04 22:58:38 --> Use of undefined constant ERROR_LOGIN - assumed 'ERROR_LOGIN'
DEBUG - 2015-08-04 22:58:38 --> ロールバック
DEBUG - 2015-08-04 22:58:38 --> コネクション破棄
DEBUG - 2015-08-04 22:58:38 --> プロセス開始::process_login_company
DEBUG - 2015-08-04 22:58:38 --> コネクション作成
DEBUG - 2015-08-04 22:58:38 --> トランザクション開始
DEBUG - 2015-08-04 22:58:38 --> SQL実行
INFO - 2015-08-04 22:58:38 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-04 22:58:38 --> バインド値(LOGIN_ID)::
DEBUG - 2015-08-04 22:58:38 --> コミット
DEBUG - 2015-08-04 22:58:38 --> コネクション破棄
DEBUG - 2015-08-04 22:58:38 --> プロセス終了::process_login_company
INFO - 2015-08-04 22:58:45 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 22:58:45 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:58:45 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:58:46 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 22:58:46 --> コネクション作成
DEBUG - 2015-08-04 22:58:46 --> トランザクション開始
DEBUG - 2015-08-04 22:58:46 --> プロセス開始::process_login_auth
DEBUG - 2015-08-04 22:58:46 --> コネクション作成
DEBUG - 2015-08-04 22:58:47 --> トランザクション開始
DEBUG - 2015-08-04 22:58:47 --> SQL実行
INFO - 2015-08-04 22:58:47 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-04 22:58:47 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-04 22:58:47 --> バインド値(PASSWORD)::koga
DEBUG - 2015-08-04 22:58:47 --> コミット
DEBUG - 2015-08-04 22:58:47 --> コネクション破棄
DEBUG - 2015-08-04 22:58:47 --> プロセス終了::process_login_auth
ERROR - 2015-08-04 22:58:47 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-04 22:58:47 --> ロールバック
DEBUG - 2015-08-04 22:58:47 --> コネクション破棄
DEBUG - 2015-08-04 22:58:47 --> プロセス開始::process_login_company
DEBUG - 2015-08-04 22:58:47 --> コネクション作成
DEBUG - 2015-08-04 22:58:48 --> トランザクション開始
DEBUG - 2015-08-04 22:58:48 --> SQL実行
INFO - 2015-08-04 22:58:48 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-04 22:58:48 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
DEBUG - 2015-08-04 22:58:48 --> コミット
DEBUG - 2015-08-04 22:58:48 --> コネクション破棄
DEBUG - 2015-08-04 22:58:48 --> プロセス終了::process_login_company
INFO - 2015-08-04 22:58:53 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/company/select"
INFO - 2015-08-04 22:58:53 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:58:53 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:58:53 --> プロセス開始::process_login_companyselect
DEBUG - 2015-08-04 22:58:53 --> コネクション作成
DEBUG - 2015-08-04 22:58:54 --> トランザクション開始
DEBUG - 2015-08-04 22:58:54 --> SQL実行
INFO - 2015-08-04 22:58:54 --> SQL:::SELECT company_id, company_name, company_type FROM company_mst WHERE enabled_flag is true AND company_id=:COMPANY_ID 
INFO - 2015-08-04 22:58:54 --> バインド値(COMPANY_ID)::A00001
ERROR - 2015-08-04 22:58:54 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-04 22:58:54 --> ロールバック
DEBUG - 2015-08-04 22:58:54 --> コネクション破棄
INFO - 2015-08-04 22:58:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 22:58:54 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:58:54 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:58:54 --> プロセス開始::process_network_index
DEBUG - 2015-08-04 22:58:54 --> コネクション作成
DEBUG - 2015-08-04 22:58:55 --> トランザクション開始
DEBUG - 2015-08-04 22:58:55 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 22:58:55 --> コネクション作成
DEBUG - 2015-08-04 22:58:56 --> トランザクション開始
DEBUG - 2015-08-04 22:58:56 --> SQL実行
INFO - 2015-08-04 22:58:56 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 22:58:56 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 22:58:56 --> コネクション作成
DEBUG - 2015-08-04 22:58:57 --> トランザクション開始
DEBUG - 2015-08-04 22:58:57 --> SQL実行
INFO - 2015-08-04 22:58:57 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 22:58:57 --> コミット
DEBUG - 2015-08-04 22:58:57 --> コネクション破棄
DEBUG - 2015-08-04 22:58:57 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 22:58:57 --> コミット
DEBUG - 2015-08-04 22:58:57 --> コネクション破棄
DEBUG - 2015-08-04 22:58:57 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 22:58:57 --> コミット
DEBUG - 2015-08-04 22:58:57 --> コネクション破棄
DEBUG - 2015-08-04 22:58:57 --> プロセス終了::process_network_index
INFO - 2015-08-04 22:59:01 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 22:59:01 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:59:01 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:59:02 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 22:59:02 --> コネクション作成
DEBUG - 2015-08-04 22:59:03 --> トランザクション開始
DEBUG - 2015-08-04 22:59:03 --> SQL実行
INFO - 2015-08-04 22:59:03 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 22:59:03 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 22:59:03 --> コミット
DEBUG - 2015-08-04 22:59:03 --> コネクション破棄
DEBUG - 2015-08-04 22:59:03 --> プロセス終了::process_network_detail
INFO - 2015-08-04 22:59:06 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 22:59:06 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:59:06 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:59:06 --> プロセス開始::process_network_index
DEBUG - 2015-08-04 22:59:06 --> コネクション作成
DEBUG - 2015-08-04 22:59:07 --> トランザクション開始
DEBUG - 2015-08-04 22:59:07 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 22:59:07 --> コネクション作成
DEBUG - 2015-08-04 22:59:08 --> トランザクション開始
DEBUG - 2015-08-04 22:59:08 --> SQL実行
INFO - 2015-08-04 22:59:08 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 22:59:08 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 22:59:08 --> コネクション作成
DEBUG - 2015-08-04 22:59:09 --> トランザクション開始
DEBUG - 2015-08-04 22:59:09 --> SQL実行
INFO - 2015-08-04 22:59:09 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 22:59:09 --> コミット
DEBUG - 2015-08-04 22:59:09 --> コネクション破棄
DEBUG - 2015-08-04 22:59:09 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 22:59:09 --> コミット
DEBUG - 2015-08-04 22:59:09 --> コネクション破棄
DEBUG - 2015-08-04 22:59:09 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 22:59:09 --> コミット
DEBUG - 2015-08-04 22:59:09 --> コネクション破棄
DEBUG - 2015-08-04 22:59:09 --> プロセス終了::process_network_index
INFO - 2015-08-04 22:59:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 22:59:11 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 22:59:11 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 22:59:11 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 22:59:11 --> コネクション作成
DEBUG - 2015-08-04 22:59:12 --> トランザクション開始
DEBUG - 2015-08-04 22:59:12 --> SQL実行
INFO - 2015-08-04 22:59:12 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 22:59:12 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 22:59:12 --> コミット
DEBUG - 2015-08-04 22:59:12 --> コネクション破棄
DEBUG - 2015-08-04 22:59:12 --> プロセス終了::process_network_detail
INFO - 2015-08-04 23:33:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login"
INFO - 2015-08-04 23:33:52 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:33:52 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-04 23:34:02 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 23:34:02 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:34:02 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:34:02 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 23:34:02 --> コネクション作成
ERROR - 2015-08-04 23:34:04 --> SQLSTATE[HY000] [2002] �Ώۂ̃R���s���[�^�[�ɂ���ċ��ۂ��ꂽ���߁A�ڑ��ł��܂���ł����B

DEBUG - 2015-08-04 23:34:04 --> トランザクション開始
ERROR - 2015-08-04 23:34:04 --> Fatal Error - Call to a member function beginTransaction() on a non-object in C:\projects\pleiades\xampp\htdocs\keyman\fuel\app\classes\util\dbaccessor.php on line 29
INFO - 2015-08-04 23:34:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 23:34:17 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:34:17 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:34:17 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 23:34:17 --> コネクション作成
DEBUG - 2015-08-04 23:34:18 --> トランザクション開始
DEBUG - 2015-08-04 23:34:18 --> プロセス開始::process_login_auth
DEBUG - 2015-08-04 23:34:18 --> コネクション作成
DEBUG - 2015-08-04 23:34:19 --> トランザクション開始
DEBUG - 2015-08-04 23:34:19 --> SQL実行
INFO - 2015-08-04 23:34:19 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-04 23:34:19 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-04 23:34:19 --> バインド値(PASSWORD)::koga
DEBUG - 2015-08-04 23:34:19 --> コミット
DEBUG - 2015-08-04 23:34:19 --> コネクション破棄
DEBUG - 2015-08-04 23:34:19 --> プロセス終了::process_login_auth
ERROR - 2015-08-04 23:34:19 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-04 23:34:19 --> ロールバック
DEBUG - 2015-08-04 23:34:19 --> コネクション破棄
DEBUG - 2015-08-04 23:34:19 --> プロセス開始::process_login_company
DEBUG - 2015-08-04 23:34:19 --> コネクション作成
DEBUG - 2015-08-04 23:34:20 --> トランザクション開始
DEBUG - 2015-08-04 23:34:20 --> SQL実行
INFO - 2015-08-04 23:34:20 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-04 23:34:20 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
DEBUG - 2015-08-04 23:34:20 --> コミット
DEBUG - 2015-08-04 23:34:20 --> コネクション破棄
DEBUG - 2015-08-04 23:34:20 --> プロセス終了::process_login_company
INFO - 2015-08-04 23:34:29 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/company/select"
INFO - 2015-08-04 23:34:29 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:34:29 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:34:29 --> プロセス開始::process_login_companyselect
DEBUG - 2015-08-04 23:34:29 --> コネクション作成
DEBUG - 2015-08-04 23:34:30 --> トランザクション開始
DEBUG - 2015-08-04 23:34:30 --> SQL実行
INFO - 2015-08-04 23:34:30 --> SQL:::SELECT company_id, company_name, company_type FROM company_mst WHERE enabled_flag is true AND company_id=:COMPANY_ID 
INFO - 2015-08-04 23:34:30 --> バインド値(COMPANY_ID)::A00001
ERROR - 2015-08-04 23:34:30 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-04 23:34:30 --> ロールバック
DEBUG - 2015-08-04 23:34:30 --> コネクション破棄
INFO - 2015-08-04 23:34:31 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 23:34:31 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:34:31 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:34:31 --> プロセス開始::process_network_index
DEBUG - 2015-08-04 23:34:31 --> コネクション作成
DEBUG - 2015-08-04 23:34:33 --> トランザクション開始
DEBUG - 2015-08-04 23:34:33 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 23:34:33 --> コネクション作成
DEBUG - 2015-08-04 23:34:34 --> トランザクション開始
DEBUG - 2015-08-04 23:34:34 --> SQL実行
INFO - 2015-08-04 23:34:34 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 23:34:34 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 23:34:34 --> コネクション作成
DEBUG - 2015-08-04 23:34:35 --> トランザクション開始
DEBUG - 2015-08-04 23:34:35 --> SQL実行
INFO - 2015-08-04 23:34:35 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 23:34:35 --> コミット
DEBUG - 2015-08-04 23:34:35 --> コネクション破棄
DEBUG - 2015-08-04 23:34:35 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 23:34:35 --> コミット
DEBUG - 2015-08-04 23:34:35 --> コネクション破棄
DEBUG - 2015-08-04 23:34:35 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 23:34:35 --> コミット
DEBUG - 2015-08-04 23:34:35 --> コネクション破棄
DEBUG - 2015-08-04 23:34:35 --> プロセス終了::process_network_index
INFO - 2015-08-04 23:34:44 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 23:34:44 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:34:44 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:34:44 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 23:34:44 --> コネクション作成
DEBUG - 2015-08-04 23:34:45 --> トランザクション開始
DEBUG - 2015-08-04 23:34:45 --> SQL実行
INFO - 2015-08-04 23:34:45 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 23:34:45 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 23:34:45 --> コミット
DEBUG - 2015-08-04 23:34:45 --> コネクション破棄
DEBUG - 2015-08-04 23:34:45 --> プロセス終了::process_network_detail
INFO - 2015-08-04 23:34:51 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 23:34:51 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:34:51 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:34:51 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 23:34:51 --> コネクション作成
DEBUG - 2015-08-04 23:34:52 --> トランザクション開始
DEBUG - 2015-08-04 23:34:52 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 23:34:52 --> コネクション作成
DEBUG - 2015-08-04 23:34:53 --> トランザクション開始
DEBUG - 2015-08-04 23:34:53 --> SQL実行
INFO - 2015-08-04 23:34:53 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 23:34:53 --> バインド値(NETWORK_ID)::000001
ERROR - 2015-08-04 23:34:53 --> SQLSTATE[42S02]: Base table or view not found: 1146 Table 'jds.channel_detail_network_rel' doesn't exist
DEBUG - 2015-08-04 23:34:53 --> コミット
DEBUG - 2015-08-04 23:34:53 --> コネクション破棄
DEBUG - 2015-08-04 23:34:53 --> プロセス終了::process_network_checkchannel
ERROR - 2015-08-04 23:34:53 --> SESSIONの値が取得できませんでした。
INFO - 2015-08-04 23:34:55 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/index"
INFO - 2015-08-04 23:34:55 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:34:55 --> Fuel\Core\Request::execute - Setting main Request
INFO - 2015-08-04 23:35:13 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/login"
INFO - 2015-08-04 23:35:13 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:35:13 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:35:13 --> プロセス開始::process_login_login
DEBUG - 2015-08-04 23:35:13 --> コネクション作成
DEBUG - 2015-08-04 23:35:14 --> トランザクション開始
DEBUG - 2015-08-04 23:35:14 --> プロセス開始::process_login_auth
DEBUG - 2015-08-04 23:35:14 --> コネクション作成
DEBUG - 2015-08-04 23:35:15 --> トランザクション開始
DEBUG - 2015-08-04 23:35:15 --> SQL実行
INFO - 2015-08-04 23:35:15 --> SQL:::SELECT user_id, user_name FROM user_mst WHERE enabled_flag is true AND user_id = :LOGIN_ID AND password = :PASSWORD 
INFO - 2015-08-04 23:35:15 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-04 23:35:15 --> バインド値(PASSWORD)::koga
DEBUG - 2015-08-04 23:35:15 --> コミット
DEBUG - 2015-08-04 23:35:15 --> コネクション破棄
DEBUG - 2015-08-04 23:35:15 --> プロセス終了::process_login_auth
ERROR - 2015-08-04 23:35:15 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-04 23:35:15 --> ロールバック
DEBUG - 2015-08-04 23:35:15 --> コネクション破棄
DEBUG - 2015-08-04 23:35:15 --> プロセス開始::process_login_company
DEBUG - 2015-08-04 23:35:15 --> コネクション作成
DEBUG - 2015-08-04 23:35:16 --> トランザクション開始
DEBUG - 2015-08-04 23:35:16 --> SQL実行
INFO - 2015-08-04 23:35:16 --> SQL:::SELECT company.company_id, company.company_name, company.company_type FROM user_mst user, user_company_rel rel, company_mst company WHERE user.user_id=:LOGIN_ID AND user.user_id=rel.user_id AND company.company_id=rel.company_id AND user.enabled_flag is true AND company.enabled_flag is true 
INFO - 2015-08-04 23:35:16 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
DEBUG - 2015-08-04 23:35:16 --> コミット
DEBUG - 2015-08-04 23:35:16 --> コネクション破棄
DEBUG - 2015-08-04 23:35:16 --> プロセス終了::process_login_company
INFO - 2015-08-04 23:41:25 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "login/company/select"
INFO - 2015-08-04 23:41:25 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:41:25 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:41:25 --> プロセス開始::process_login_companyselect
DEBUG - 2015-08-04 23:41:25 --> コネクション作成
DEBUG - 2015-08-04 23:41:26 --> トランザクション開始
DEBUG - 2015-08-04 23:41:26 --> SQL実行
INFO - 2015-08-04 23:41:26 --> SQL:::SELECT company_id, company_name, company_type FROM company_mst WHERE enabled_flag is true AND company_id=:COMPANY_ID 
INFO - 2015-08-04 23:41:26 --> バインド値(COMPANY_ID)::A00001
ERROR - 2015-08-04 23:41:26 --> Use of undefined constant VIEW_TOP_MAIN - assumed 'VIEW_TOP_MAIN'
DEBUG - 2015-08-04 23:41:26 --> ロールバック
DEBUG - 2015-08-04 23:41:26 --> コネクション破棄
INFO - 2015-08-04 23:41:28 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list"
INFO - 2015-08-04 23:41:28 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:41:28 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:41:28 --> プロセス開始::process_network_index
DEBUG - 2015-08-04 23:41:28 --> コネクション作成
DEBUG - 2015-08-04 23:41:29 --> トランザクション開始
DEBUG - 2015-08-04 23:41:29 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 23:41:29 --> コネクション作成
DEBUG - 2015-08-04 23:41:30 --> トランザクション開始
DEBUG - 2015-08-04 23:41:30 --> SQL実行
INFO - 2015-08-04 23:41:30 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 23:41:30 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 23:41:30 --> コネクション作成
DEBUG - 2015-08-04 23:41:31 --> トランザクション開始
DEBUG - 2015-08-04 23:41:31 --> SQL実行
INFO - 2015-08-04 23:41:31 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 23:41:31 --> コミット
DEBUG - 2015-08-04 23:41:31 --> コネクション破棄
DEBUG - 2015-08-04 23:41:31 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 23:41:31 --> コミット
DEBUG - 2015-08-04 23:41:31 --> コネクション破棄
DEBUG - 2015-08-04 23:41:31 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 23:41:31 --> コミット
DEBUG - 2015-08-04 23:41:31 --> コネクション破棄
DEBUG - 2015-08-04 23:41:31 --> プロセス終了::process_network_index
INFO - 2015-08-04 23:41:36 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 23:41:36 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:41:36 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:41:36 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 23:41:36 --> コネクション作成
DEBUG - 2015-08-04 23:41:38 --> トランザクション開始
DEBUG - 2015-08-04 23:41:38 --> SQL実行
INFO - 2015-08-04 23:41:38 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 23:41:38 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 23:41:38 --> コミット
DEBUG - 2015-08-04 23:41:38 --> コネクション破棄
DEBUG - 2015-08-04 23:41:38 --> プロセス終了::process_network_detail
INFO - 2015-08-04 23:41:43 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 23:41:43 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:41:43 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:41:43 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 23:41:43 --> コネクション作成
DEBUG - 2015-08-04 23:41:44 --> トランザクション開始
DEBUG - 2015-08-04 23:41:44 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 23:41:44 --> コネクション作成
DEBUG - 2015-08-04 23:41:45 --> トランザクション開始
DEBUG - 2015-08-04 23:41:45 --> SQL実行
INFO - 2015-08-04 23:41:45 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 23:41:45 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 23:41:45 --> コミット
DEBUG - 2015-08-04 23:41:45 --> コネクション破棄
DEBUG - 2015-08-04 23:41:45 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 23:41:45 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 23:41:45 --> コネクション作成
DEBUG - 2015-08-04 23:41:46 --> トランザクション開始
DEBUG - 2015-08-04 23:41:46 --> SQL実行
INFO - 2015-08-04 23:41:46 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 23:41:46 --> バインド値(NETWORK_ID)::000001
DEBUG - 2015-08-04 23:41:46 --> コミット
DEBUG - 2015-08-04 23:41:46 --> コネクション破棄
DEBUG - 2015-08-04 23:41:46 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 23:41:46 --> コミット
DEBUG - 2015-08-04 23:41:46 --> コネクション破棄
DEBUG - 2015-08-04 23:41:46 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 23:41:46 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 23:41:46 --> コネクション作成
DEBUG - 2015-08-04 23:41:47 --> トランザクション開始
DEBUG - 2015-08-04 23:41:47 --> コミット
DEBUG - 2015-08-04 23:41:47 --> コネクション破棄
DEBUG - 2015-08-04 23:41:47 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 23:41:52 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 23:41:52 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:41:52 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:41:52 --> プロセス開始::process_network_edit
DEBUG - 2015-08-04 23:41:52 --> コネクション作成
DEBUG - 2015-08-04 23:41:53 --> トランザクション開始
DEBUG - 2015-08-04 23:41:53 --> SQL実行
INFO - 2015-08-04 23:41:53 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-04 23:41:53 --> バインド値(NETWORK_NAME)::ネットワークA
INFO - 2015-08-04 23:41:53 --> バインド値(ENABLED_FLAG)::0
INFO - 2015-08-04 23:41:53 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-04 23:41:53 --> バインド値(NETWORK_ID)::000001
INFO - 2015-08-04 23:41:53 --> バインド値(UPDATE_TIME)::20150731095750000000
DEBUG - 2015-08-04 23:41:53 --> コミット
DEBUG - 2015-08-04 23:41:53 --> コネクション破棄
DEBUG - 2015-08-04 23:41:53 --> プロセス終了::process_network_edit
INFO - 2015-08-04 23:41:54 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-04 23:41:54 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:41:54 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:41:54 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-04 23:41:54 --> コネクション作成
DEBUG - 2015-08-04 23:41:55 --> トランザクション開始
DEBUG - 2015-08-04 23:41:55 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 23:41:55 --> コネクション作成
DEBUG - 2015-08-04 23:41:56 --> トランザクション開始
DEBUG - 2015-08-04 23:41:56 --> SQL実行
INFO - 2015-08-04 23:41:56 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 23:41:56 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 23:41:56 --> コネクション作成
DEBUG - 2015-08-04 23:41:57 --> トランザクション開始
DEBUG - 2015-08-04 23:41:57 --> SQL実行
INFO - 2015-08-04 23:41:57 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 23:41:57 --> コミット
DEBUG - 2015-08-04 23:41:57 --> コネクション破棄
DEBUG - 2015-08-04 23:41:57 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 23:41:57 --> コミット
DEBUG - 2015-08-04 23:41:57 --> コネクション破棄
DEBUG - 2015-08-04 23:41:57 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 23:41:57 --> コミット
DEBUG - 2015-08-04 23:41:57 --> コネクション破棄
DEBUG - 2015-08-04 23:41:57 --> プロセス終了::process_network_listbackv2
INFO - 2015-08-04 23:42:11 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail"
INFO - 2015-08-04 23:42:11 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:42:11 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:42:11 --> プロセス開始::process_network_detail
DEBUG - 2015-08-04 23:42:11 --> コネクション作成
DEBUG - 2015-08-04 23:42:12 --> トランザクション開始
DEBUG - 2015-08-04 23:42:12 --> SQL実行
INFO - 2015-08-04 23:42:12 --> SQL:::SELECT  network_id,  network_name,  enabled_flag,  date_format(update_time, '%Y%m%d%H%i%s%f') update_time FROM  network_mst  WHERE  network_id = :NETWORK_ID 
INFO - 2015-08-04 23:42:12 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 23:42:12 --> コミット
DEBUG - 2015-08-04 23:42:12 --> コネクション破棄
DEBUG - 2015-08-04 23:42:12 --> プロセス終了::process_network_detail
INFO - 2015-08-04 23:42:17 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/next"
INFO - 2015-08-04 23:42:17 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:42:17 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:42:17 --> プロセス開始::process_network_checkinput
DEBUG - 2015-08-04 23:42:17 --> コネクション作成
DEBUG - 2015-08-04 23:42:18 --> トランザクション開始
DEBUG - 2015-08-04 23:42:18 --> プロセス開始::process_network_checkchannel
DEBUG - 2015-08-04 23:42:18 --> コネクション作成
DEBUG - 2015-08-04 23:42:18 --> トランザクション開始
DEBUG - 2015-08-04 23:42:18 --> SQL実行
INFO - 2015-08-04 23:42:18 --> SQL:::SELECT COUNT(*) AS CNT FROM CHANNEL_DETAIL_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 23:42:18 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 23:42:18 --> コミット
DEBUG - 2015-08-04 23:42:18 --> コネクション破棄
DEBUG - 2015-08-04 23:42:18 --> プロセス終了::process_network_checkchannel
DEBUG - 2015-08-04 23:42:18 --> プロセス開始::process_network_checkoperator
DEBUG - 2015-08-04 23:42:18 --> コネクション作成
DEBUG - 2015-08-04 23:42:19 --> トランザクション開始
DEBUG - 2015-08-04 23:42:19 --> SQL実行
INFO - 2015-08-04 23:42:19 --> SQL:::SELECT COUNT(*) AS CNT FROM OPERATOR_NETWORK_REL WHERE  NETWORK_ID = :NETWORK_ID; 
INFO - 2015-08-04 23:42:19 --> バインド値(NETWORK_ID)::000002
DEBUG - 2015-08-04 23:42:19 --> コミット
DEBUG - 2015-08-04 23:42:19 --> コネクション破棄
DEBUG - 2015-08-04 23:42:19 --> プロセス終了::process_network_checkoperator
DEBUG - 2015-08-04 23:42:19 --> コミット
DEBUG - 2015-08-04 23:42:19 --> コネクション破棄
DEBUG - 2015-08-04 23:42:19 --> プロセス終了::process_network_checkinput
DEBUG - 2015-08-04 23:42:19 --> プロセス開始::process_network_confirm
DEBUG - 2015-08-04 23:42:19 --> コネクション作成
DEBUG - 2015-08-04 23:42:20 --> トランザクション開始
DEBUG - 2015-08-04 23:42:20 --> コミット
DEBUG - 2015-08-04 23:42:20 --> コネクション破棄
DEBUG - 2015-08-04 23:42:20 --> プロセス終了::process_network_confirm
INFO - 2015-08-04 23:42:24 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/detail/exec"
INFO - 2015-08-04 23:42:24 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:42:24 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:42:24 --> プロセス開始::process_network_edit
DEBUG - 2015-08-04 23:42:24 --> コネクション作成
DEBUG - 2015-08-04 23:42:25 --> トランザクション開始
DEBUG - 2015-08-04 23:42:25 --> SQL実行
INFO - 2015-08-04 23:42:25 --> SQL:::UPDATE network_mst SET network_name = :NETWORK_NAME, enabled_flag = :ENABLED_FLAG, update_time = now(), update_user = :LOGIN_ID WHERE network_id = :NETWORK_ID AND DATE_FORMAT(UPDATE_TIME, '%Y%m%d%H%i%s%f') = DATE_FORMAT(CAST(:UPDATE_TIME AS DATETIME), '%Y%m%d%H%i%s%f');
INFO - 2015-08-04 23:42:25 --> バインド値(NETWORK_NAME)::ネットワークB
INFO - 2015-08-04 23:42:25 --> バインド値(ENABLED_FLAG)::0
INFO - 2015-08-04 23:42:25 --> バインド値(LOGIN_ID)::tkoga@brycen.co.jp
INFO - 2015-08-04 23:42:25 --> バインド値(NETWORK_ID)::000002
INFO - 2015-08-04 23:42:25 --> バインド値(UPDATE_TIME)::20150729073227000000
DEBUG - 2015-08-04 23:42:25 --> コミット
DEBUG - 2015-08-04 23:42:25 --> コネクション破棄
DEBUG - 2015-08-04 23:42:25 --> プロセス終了::process_network_edit
INFO - 2015-08-04 23:42:26 --> Fuel\Core\Request::__construct - Creating a new main Request with URI = "network/list/backv2"
INFO - 2015-08-04 23:42:26 --> Fuel\Core\Request::execute - Called
INFO - 2015-08-04 23:42:26 --> Fuel\Core\Request::execute - Setting main Request
DEBUG - 2015-08-04 23:42:26 --> プロセス開始::process_network_listbackv2
DEBUG - 2015-08-04 23:42:26 --> コネクション作成
DEBUG - 2015-08-04 23:42:27 --> トランザクション開始
DEBUG - 2015-08-04 23:42:27 --> プロセス開始::process_network_list
DEBUG - 2015-08-04 23:42:27 --> コネクション作成
DEBUG - 2015-08-04 23:42:28 --> トランザクション開始
DEBUG - 2015-08-04 23:42:28 --> SQL実行
INFO - 2015-08-04 23:42:28 --> SQL:::SELECT network_id, network_name, enabled_flag FROM network_mst WHERE 1 = 1 order by network_name asc limit 10 offset 0
DEBUG - 2015-08-04 23:42:28 --> プロセス開始::process_network_count
DEBUG - 2015-08-04 23:42:28 --> コネクション作成
DEBUG - 2015-08-04 23:42:29 --> トランザクション開始
DEBUG - 2015-08-04 23:42:29 --> SQL実行
INFO - 2015-08-04 23:42:29 --> SQL:::SELECT count(*) cnt FROM network_mst WHERE 1 = 1 
DEBUG - 2015-08-04 23:42:29 --> コミット
DEBUG - 2015-08-04 23:42:29 --> コネクション破棄
DEBUG - 2015-08-04 23:42:29 --> プロセス終了::process_network_count
DEBUG - 2015-08-04 23:42:29 --> コミット
DEBUG - 2015-08-04 23:42:29 --> コネクション破棄
DEBUG - 2015-08-04 23:42:29 --> プロセス終了::process_network_list
DEBUG - 2015-08-04 23:42:29 --> コミット
DEBUG - 2015-08-04 23:42:29 --> コネクション破棄
DEBUG - 2015-08-04 23:42:29 --> プロセス終了::process_network_listbackv2
