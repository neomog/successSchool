<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-26 03:20:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 03:20:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 03:20:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 03:20:31 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 03:20:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 03:20:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:11:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:11:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:11:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:11:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:11:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:11:56 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:12:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:12:31 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:14:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:14:08 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:14:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:14:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:14:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:14:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:14:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:14:48 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:18:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:18:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:19:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:19:36 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:29:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:29:20 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:29:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:29:37 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:29:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:29:49 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:33:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:33:58 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:34:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:34:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:35:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:35:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:36:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:36:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:36:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:36:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:48:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:48:20 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:49:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:49:11 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:53:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:53:48 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:54:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:54:29 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:57:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:57:20 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 10:57:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 10:57:44 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 11:48:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 11:48:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 11:48:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 11:48:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 11:48:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 11:48:48 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 11:57:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 11:57:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 11:57:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 11:57:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 11:57:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 11:57:56 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 11:58:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 11:58:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 11:59:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 11:59:46 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:00:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:00:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:01:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:01:05 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:01:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:01:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:02:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:02:10 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:02:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:02:18 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:03:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:03:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:05:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:05:42 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:08:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:08:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:08:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:08:26 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:09:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:09:00 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:09:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:09:10 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:09:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:09:51 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:10:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:10:01 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:10:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:10:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:10:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:10:48 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:11:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:11:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:11:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:11:49 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:12:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:12:48 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:26:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:26:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:26:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:26:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:26:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:26:55 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:27:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:27:36 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:31:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:31:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:32:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:32:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:36:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:36:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:36:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:36:40 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:40:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:40:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:41:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:41:10 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:46:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:46:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:47:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:47:01 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 12:52:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 12:52:22 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:04:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:04:00 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:05:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:05:18 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:06:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:06:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:08:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:08:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:09:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:09:59 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:11:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:11:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:18:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:18:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:41:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:41:03 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:41:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:41:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:43:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:43:03 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:43:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:43:43 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:44:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:44:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:44:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:44:26 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:44:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:44:48 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:45:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:45:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:45:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:45:36 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:45:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:45:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:46:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:46:10 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:46:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:46:55 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:48:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:48:17 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:48:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:48:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:53:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:53:00 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:53:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:53:18 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:55:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:55:44 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:56:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:56:01 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:56:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:56:28 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:56:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:56:38 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:57:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:57:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:57:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:57:40 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:58:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:58:08 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:58:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:58:22 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:58:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:58:53 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:59:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:59:07 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:59:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:59:44 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 13:59:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 13:59:58 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 14:03:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 14:03:37 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 14:04:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 14:04:04 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 14:04:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 14:04:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 14:04:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 14:04:58 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 19:18:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 19:18:03 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 19:18:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 19:18:31 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 19:18:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 19:18:50 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 19:19:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 19:19:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 19:19:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 19:19:50 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 20:07:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 20:07:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 20:13:49 --> Severity: Warning --> Error while sending QUERY packet. PID=13241 /home/sssok/public_html/school/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-11-26 20:13:49 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1637954029
WHERE `id` = '27fa9aaf400278878ea938e1cdce1a5eb62010c7'
ERROR - 2021-11-26 20:13:49 --> Severity: Warning --> ini_set(): A session is active. You cannot change the session module's ini settings at this time /home/sssok/public_html/school/main/libraries/Session/Session_driver.php 205
ERROR - 2021-11-26 20:13:49 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: /var/cpanel/php/sessions/ea-php73) Unknown 0
ERROR - 2021-11-26 20:13:49 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('dca3012dd78307644687ffad955db261') AS ci_session_lock
ERROR - 2021-11-26 20:15:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 20:15:50 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 20:18:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 20:18:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 20:22:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 20:22:01 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 20:30:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 20:30:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 20:39:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 20:39:50 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 20:42:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 20:42:10 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 20:42:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 20:42:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 20:48:57 --> Severity: Warning --> Error while sending QUERY packet. PID=16852 /home/sssok/public_html/school/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-11-26 20:48:57 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1637956137, `data` = '__ci_last_regenerate|i:1637955570;english|N;loginuserID|s:1:\"1\";name|s:9:\"Admin One\";email|s:33:\"adminone@successschoolssokoto.com\";usertypeID|s:1:\"9\";usertype|s:12:\"Portal Admin\";username|s:8:\"adminone\";photo|s:11:\"default.png\";lang|s:7:\"english\";defaultschoolyearID|s:1:\"1\";varifyvaliduser|b:1;loggedin|b:1;get_permission|b:1;master_permission_set|a:393:{s:9:\"dashboard\";s:3:\"yes\";s:7:\"student\";s:3:\"yes\";s:11:\"student_add\";s:3:\"yes\";s:12:\"student_edit\";s:3:\"yes\";s:14:\"student_delete\";s:3:\"yes\";s:12:\"student_view\";s:3:\"yes\";s:7:\"parents\";s:3:\"yes\";s:11:\"parents_add\";s:3:\"yes\";s:12:\"parents_edit\";s:3:\"yes\";s:14:\"parents_delete\";s:3:\"yes\";s:12:\"parents_view\";s:3:\"yes\";s:7:\"teacher\";s:3:\"yes\";s:11:\"teacher_add\";s:3:\"yes\";s:12:\"teacher_edit\";s:3:\"yes\";s:14:\"teacher_delete\";s:3:\"yes\";s:12:\"teacher_view\";s:3:\"yes\";s:4:\"user\";s:3:\"yes\";s:8:\"user_add\";s:3:\"yes\";s:9:\"user_edit\";s:3:\"yes\";s:11:\"user_delete\";s:3:\"yes\";s:9:\"user_view\";s:3:\"yes\";s:7:\"classes\";s:3:\"yes\";s:11:\"classes_add\";s:3:\"yes\";s:12:\"classes_edit\";s:3:\"yes\";s:14:\"classes_delete\";s:3:\"yes\";s:7:\"section\";s:3:\"yes\";s:11:\"section_add\";s:3:\"yes\";s:12:\"section_edit\";s:3:\"yes\";s:14:\"section_delete\";s:3:\"yes\";s:7:\"subject\";s:3:\"yes\";s:11:\"subject_add\";s:3:\"yes\";s:12:\"subject_edit\";s:3:\"yes\";s:14:\"subject_delete\";s:3:\"yes\";s:8:\"syllabus\";s:3:\"yes\";s:12:\"syllabus_add\";s:3:\"yes\";s:13:\"syllabus_edit\";s:3:\"yes\";s:15:\"syllabus_delete\";s:3:\"yes\";s:10:\"assignment\";s:3:\"yes\";s:14:\"assignment_add\";s:3:\"yes\";s:15:\"assignment_edit\";s:3:\"yes\";s:17:\"assignment_delete\";s:3:\"yes\";s:15:\"assignment_view\";s:3:\"yes\";s:7:\"routine\";s:3:\"yes\";s:11:\"routine_add\";s:3:\"yes\";s:12:\"routine_edit\";s:3:\"yes\";s:14:\"routine_delete\";s:3:\"yes\";s:11:\"sattendance\";s:3:\"yes\";s:15:\"sattendance_add\";s:3:\"yes\";s:16:\"sattendance_view\";s:3:\"yes\";s:11:\"tattendance\";s:3:\"yes\";s:15:\"tattendance_add\";s:3:\"yes\";s:16:\"tattendance_view\";s:3:\"yes\";s:11:\"uattendance\";s:3:\"yes\";s:15:\"uattendance_add\";s:3:\"yes\";s:16:\"uattendance_view\";s:3:\"yes\";s:4:\"exam\";s:3:\"yes\";s:8:\"exam_add\";s:3:\"yes\";s:9:\"exam_edit\";s:3:\"yes\";s:11:\"exam_delete\";s:3:\"yes\";s:12:\"examschedule\";s:3:\"yes\";s:16:\"examschedule_add\";s:3:\"yes\";s:17:\"examschedule_edit\";s:3:\"yes\";s:19:\"examschedule_delete\";s:3:\"yes\";s:5:\"grade\";s:3:\"yes\";s:9:\"grade_add\";s:3:\"yes\";s:10:\"grade_edit\";s:3:\"yes\";s:12:\"grade_delete\";s:3:\"yes\";s:11:\"eattendance\";s:3:\"yes\";s:15:\"eattendance_add\";s:3:\"yes\";s:4:\"mark\";s:3:\"yes\";s:8:\"mark_add\";s:3:\"yes\";s:9:\"mark_view\";s:3:\"yes\";s:14:\"markpercentage\";s:3:\"yes\";s:18:\"markpercentage_add\";s:3:\"yes\";s:19:\"markpercentage_edit\";s:3:\"yes\";s:21:\"markpercentage_delete\";s:3:\"yes\";s:9:\"promotion\";s:3:\"yes\";s:12:\"conversation\";s:3:\"yes\";s:5:\"media\";s:3:\"yes\";s:9:\"media_add\";s:3:\"yes\";s:12:\"media_delete\";s:3:\"yes\";s:10:\"mailandsms\";s:3:\"yes\";s:14:\"mailandsms_add\";s:3:\"yes\";s:15:\"mailandsms_view\";s:3:\"yes\";s:14:\"question_group\";s:3:\"yes\";s:18:\"question_group_add\";s:3:\"yes\";s:19:\"question_group_edit\";s:3:\"yes\";s:21:\"question_group_delete\";s:3:\"yes\";s:14:\"question_level\";s:3:\"yes\";s:18:\"question_level_add\";s:3:\"yes\";s:19:\"question_level_edit\";s:3:\"yes\";s:21:\"question_level_delete\";s:3:\"yes\";s:13:\"question_bank\";s:3:\"yes\";s:17:\"question_bank_add\";s:3:\"yes\";s:18:\"question_bank_edit\";s:3:\"yes\";s:20:\"question_bank_delete\";s:3:\"yes\";s:18:\"question_bank_view\";s:3:\"yes\";s:11:\"online_exam\";s:3:\"yes\";s:15:\"online_exam_add\";s:3:\"yes\";s:16:\"online_exam_edit\";s:3:\"yes\";s:18:\"online_exam_delete\";s:3:\"yes\";s:11:\"instruction\";s:3:\"yes\";s:15:\"instruction_add\";s:3:\"yes\";s:16:\"instruction_edit\";s:3:\"yes\";s:18:\"instruction_delete\";s:3:\"yes\";s:16:\"instruction_view\";s:3:\"yes\";s:15:\"salary_template\";s:3:\"yes\";s:19:\"salary_template_add\";s:3:\"yes\";s:20:\"salary_template_edit\";s:3:\"yes\";s:22:\"salary_template_delete\";s:3:\"yes\";s:20:\"salary_template_view\";s:3:\"yes\";s:15:\"hourly_template\";s:3:\"yes\";s:19:\"hourly_template_add\";s:3:\"yes\";s:20:\"hourly_template_edit\";s:3:\"yes\";s:22:\"hourly_template_delete\";s:3:\"yes\";s:13:\"manage_salary\";s:3:\"yes\";s:17:\"manage_salary_add\";s:3:\"yes\";s:18:\"manage_salary_edit\";s:3:\"yes\";s:20:\"manage_salary_delete\";s:3:\"yes\";s:18:\"manage_salary_view\";s:3:\"yes\";s:12:\"make_payment\";s:3:\"yes\";s:8:\"overtime\";s:3:\"yes\";s:12:\"overtime_add\";s:3:\"yes\";s:13:\"overtime_edit\";s:3:\"yes\";s:15:\"overtime_delete\";s:3:\"yes\";s:6:\"vendor\";s:3:\"yes\";s:10:\"vendor_add\";s:3:\"yes\";s:11:\"vendor_edit\";s:3:\"yes\";s:13:\"vendor_delete\";s:3:\"yes\";s:8:\"location\";s:3:\"yes\";s:12:\"location_add\";s:3:\"yes\";s:13:\"location_edit\";s:3:\"yes\";s:15:\"location_delete\";s:3:\"yes\";s:14:\"asset_category\";s:3:\"yes\";s:18:\"asset_category_add\";s:3:\"yes\";s:19:\"asset_category_edit\";s:3:\"yes\";s:21:\"asset_category_delete\";s:3:\"yes\";s:5:\"asset\";s:3:\"yes\";s:9:\"asset_add\";s:3:\"yes\";s:10:\"asset_edit\";s:3:\"yes\";s:12:\"asset_delete\";s:3:\"yes\";s:10:\"asset_view\";s:3:\"yes\";s:16:\"asset_assignment\";s:3:\"yes\";s:20:\"asset_assignment_add\";s:3:\"yes\";s:21:\"asset_assignment_edit\";s:3:\"yes\";s:23:\"asset_assignment_delete\";s:3:\"yes\";s:21:\"asset_assignment_view\";s:3:\"yes\";s:8:\"purchase\";s:3:\"yes\";s:12:\"purchase_add\";s:3:\"yes\";s:13:\"purchase_edit\";s:3:\"yes\";s:15:\"purchase_delete\";s:3:\"yes\";s:15:\"productcategory\";s:3:\"yes\";s:19:\"productcategory_add\";s:3:\"yes\";s:20:\"productcategory_edit\";s:3:\"yes\";s:22:\"productcategory_delete\";s:3:\"yes\";s:7:\"product\";s:3:\"yes\";s:11:\"product_add\";s:3:\"yes\";s:12:\"product_edit\";s:3:\"yes\";s:14:\"product_delete\";s:3:\"yes\";s:16:\"productwarehouse\";s:3:\"yes\";s:20:\"productwarehouse_add\";s:3:\"yes\";s:21:\"productwarehouse_edit\";s:3:\"yes\";s:23:\"productwarehouse_delete\";s:3:\"yes\";s:15:\"productsupplier\";s:3:\"yes\";s:19:\"productsupplier_add\";s:3:\"yes\";s:20:\"productsupplier_edit\";s:3:\"yes\";s:22:\"productsupplier_delete\";s:3:\"yes\";s:15:\"productpurchase\";s:3:\"yes\";s:19:\"productpurchase_add\";s:3:\"yes\";s:20:\"productpurchase_edit\";s:3:\"yes\";s:22:\"productpurchase_delete\";s:3:\"yes\";s:20:\"productpurchase_view\";s:3:\"yes\";s:11:\"productsale\";s:3:\"yes\";s:15:\"productsale_add\";s:3:\"yes\";s:16:\"productsale_edit\";s:3:\"yes\";s:18:\"productsale_delete\";s:3:\"yes\";s:16:\"productsale_view\";s:3:\"yes\";s:13:\"leavecategory\";s:3:\"yes\";s:17:\"leavecategory_add\";s:3:\"yes\";s:18:\"leavecategory_edit\";s:3:\"yes\";s:20:\"leavecategory_delete\";s:3:\"yes\";s:11:\"leaveassign\";s:3:\"yes\";s:15:\"leaveassign_add\";s:3:\"yes\";s:16:\"leaveassign_edit\";s:3:\"yes\";s:18:\"leaveassign_delete\";s:3:\"yes\";s:10:\"leaveapply\";s:3:\"yes\";s:14:\"leaveapply_add\";s:3:\"yes\";s:15:\"leaveapply_edit\";s:3:\"yes\";s:17:\"leaveapply_delete\";s:3:\"yes\";s:15:\"leaveapply_view\";s:3:\"yes\";s:16:\"leaveapplication\";s:3:\"yes\";s:18:\"activitiescategory\";s:3:\"yes\";s:22:\"activitiescategory_add\";s:3:\"yes\";s:23:\"activitiescategory_edit\";s:3:\"yes\";s:25:\"activitiescategory_delete\";s:3:\"yes\";s:10:\"activities\";s:3:\"yes\";s:14:\"activities_add\";s:3:\"yes\";s:17:\"activities_delete\";s:3:\"yes\";s:9:\"childcare\";s:3:\"yes\";s:13:\"childcare_add\";s:3:\"yes\";s:14:\"childcare_edit\";s:3:\"yes\";s:16:\"childcare_delete\";s:3:\"yes\";s:7:\"lmember\";s:3:\"yes\";s:11:\"lmember_add\";s:3:\"yes\";s:12:\"lmember_edit\";s:3:\"yes\";s:14:\"lmember_delete\";s:3:\"yes\";s:12:\"lmember_view\";s:3:\"yes\";s:4:\"book\";s:3:\"yes\";s:8:\"book_add\";s:3:\"yes\";s:9:\"book_edit\";s:3:\"yes\";s:11:\"book_delete\";s:3:\"yes\";s:5:\"issue\";s:3:\"yes\";s:9:\"issue_add\";s:3:\"yes\";s:10:\"issue_edit\";s:3:\"yes\";s:10:\"issue_view\";s:3:\"yes\";s:6:\"ebooks\";s:3:\"yes\";s:10:\"ebooks_add\";s:3:\"yes\";s:11:\"ebooks_edit\";s:3:\"yes\";s:13:\"ebooks_delete\";s:3:\"yes\";s:11:\"ebooks_view\";s:3:\"yes\";s:9:\"transport\";s:3:\"yes\";s:13:\"transport_add\";s:3:\"yes\";s:14:\"transport_edit\";s:3:\"yes\";s:16:\"transport_delete\";s:3:\"yes\";s:7:\"tmember\";s:3:\"yes\";s:11:\"tmember_add\";s:3:\"yes\";s:12:\"tmember_edit\";s:3:\"yes\";s:14:\"tmember_delete\";s:3:\"yes\";s:12:\"tmember_view\";s:3:\"yes\";s:6:\"hostel\";s:3:\"yes\";s:10:\"hostel_add\";s:3:\"yes\";s:11:\"hostel_edit\";s:3:\"yes\";s:13:\"hostel_delete\";s:3:\"yes\";s:8:\"category\";s:3:\"yes\";s:12:\"category_add\";s:3:\"yes\";s:13:\"category_edit\";s:3:\"yes\";s:15:\"category_delete\";s:3:\"yes\";s:7:\"hmember\";s:3:\"yes\";s:11:\"hmember_add\";s:3:\"yes\";s:12:\"hmember_edit\";s:3:\"yes\";s:14:\"hmember_delete\";s:3:\"yes\";s:12:\"hmember_view\";s:3:\"yes\";s:8:\"feetypes\";s:3:\"yes\";s:12:\"feetypes_add\";s:3:\"yes\";s:13:\"feetypes_edit\";s:3:\"yes\";s:15:\"feetypes_delete\";s:3:\"yes\";s:7:\"invoice\";s:3:\"yes\";s:11:\"invoice_add\";s:3:\"yes\";s:12:\"invoice_edit\";s:3:\"yes\";s:14:\"invoice_delete\";s:3:\"yes\";s:12:\"invoice_view\";s:3:\"yes\";s:14:\"paymenthistory\";s:3:\"yes\";s:19:\"paymenthistory_edit\";s:3:\"yes\";s:21:\"paymenthistory_delete\";s:3:\"yes\";s:7:\"expense\";s:3:\"yes\";s:11:\"expense_add\";s:3:\"yes\";s:12:\"expense_edit\";s:3:\"yes\";s:14:\"expense_delete\";s:3:\"yes\";s:6:\"income\";s:3:\"yes\";s:10:\"income_add\";s:3:\"yes\";s:11:\"income_edit\";s:3:\"yes\";s:13:\"income_delete\";s:3:\"yes\";s:6:\"notice\";s:3:\"yes\";s:10:\"notice_add\";s:3:\"yes\";s:11:\"notice_edit\";s:3:\"yes\";s:13:\"notice_delete\";s:3:\"yes\";s:11:\"notice_view\";s:3:\"yes\";s:5:\"event\";s:3:\"yes\";s:9:\"event_add\";s:3:\"yes\";s:10:\"event_edit\";s:3:\"yes\";s:12:\"event_delete\";s:3:\"yes\";s:10:\"event_view\";s:3:\"yes\";s:7:\"holiday\";s:3:\"yes\";s:11:\"holiday_add\";s:3:\"yes\";s:12:\"holiday_edit\";s:3:\"yes\";s:14:\"holiday_delete\";s:3:\"yes\";s:12:\"holiday_view\";s:3:\"yes\";s:13:\"classesreport\";s:3:\"yes\";s:13:\"studentreport\";s:3:\"yes\";s:12:\"idcardreport\";s:3:\"yes\";s:15:\"admitcardreport\";s:3:\"yes\";s:13:\"routinereport\";s:3:\"yes\";s:18:\"examschedulereport\";s:3:\"yes\";s:16:\"attendancereport\";s:3:\"yes\";s:24:\"attendanceoverviewreport\";s:3:\"yes\";s:18:\"librarybooksreport\";s:3:\"yes\";s:17:\"librarycardreport\";s:3:\"yes\";s:22:\"librarybookissuereport\";s:3:\"yes\";s:14:\"terminalreport\";s:3:\"yes\";s:16:\"meritstagereport\";s:3:\"yes\";s:21:\"tabulationsheetreport\";s:3:\"yes\";s:15:\"marksheetreport\";s:3:\"yes\";s:18:\"progresscardreport\";s:3:\"yes\";s:20:\"studentsessionreport\";s:3:\"yes\";s:16:\"onlineexamreport\";s:3:\"yes\";s:24:\"onlineexamquestionreport\";s:3:\"yes\";s:21:\"onlineadmissionreport\";s:3:\"yes\";s:17:\"certificatereport\";s:3:\"yes\";s:22:\"leaveapplicationreport\";s:3:\"yes\";s:21:\"productpurchasereport\";s:3:\"yes\";s:17:\"productsalereport\";s:3:\"yes\";s:23:\"searchpaymentfeesreport\";s:3:\"yes\";s:10:\"feesreport\";s:3:\"yes\";s:13:\"duefeesreport\";s:3:\"yes\";s:17:\"balancefeesreport\";s:3:\"yes\";s:17:\"transactionreport\";s:3:\"yes\";s:17:\"studentfinereport\";s:3:\"yes\";s:14:\"overtimereport\";s:3:\"yes\";s:12:\"salaryreport\";s:3:\"yes\";s:19:\"accountledgerreport\";s:3:\"yes\";s:15:\"onlineadmission\";s:3:\"yes\";s:11:\"visitorinfo\";s:3:\"yes\";s:18:\"visitorinfo_delete\";s:3:\"yes\";s:16:\"visitorinfo_view\";s:3:\"yes\";s:10:\"schoolyear\";s:3:\"yes\";s:14:\"schoolyear_add\";s:3:\"yes\";s:15:\"schoolyear_edit\";s:3:\"yes\";s:17:\"schoolyear_delete\";s:3:\"yes\";s:12:\"studentgroup\";s:3:\"yes\";s:16:\"studentgroup_add\";s:3:\"yes\";s:17:\"studentgroup_edit\";s:3:\"yes\";s:19:\"studentgroup_delete\";s:3:\"yes\";s:8:\"complain\";s:3:\"yes\";s:12:\"complain_add\";s:3:\"yes\";s:13:\"complain_edit\";s:3:\"yes\";s:15:\"complain_delete\";s:3:\"yes\";s:13:\"complain_view\";s:3:\"yes\";s:20:\"certificate_template\";s:3:\"yes\";s:24:\"certificate_template_add\";s:3:\"yes\";s:25:\"certificate_template_edit\";s:3:\"yes\";s:27:\"certificate_template_delete\";s:3:\"yes\";s:25:\"certificate_template_view\";s:3:\"yes\";s:10:\"sociallink\";s:3:\"yes\";s:14:\"sociallink_add\";s:3:\"yes\";s:15:\"sociallink_edit\";s:3:\"yes\";s:17:\"sociallink_delete\";s:3:\"yes\";s:18:\"mailandsmstemplate\";s:3:\"yes\";s:22:\"mailandsmstemplate_add\";s:3:\"yes\";s:23:\"mailandsmstemplate_edit\";s:3:\"yes\";s:25:\"mailandsmstemplate_delete\";s:3:\"yes\";s:23:\"mailandsmstemplate_view\";s:3:\"yes\";s:6:\"backup\";s:3:\"yes\";s:6:\"addons\";s:3:\"yes\";s:16:\"posts_categories\";s:3:\"yes\";s:20:\"posts_categories_add\";s:3:\"yes\";s:21:\"posts_categories_edit\";s:3:\"yes\";s:23:\"posts_categories_delete\";s:3:\"yes\";s:5:\"posts\";s:3:\"yes\";s:9:\"posts_add\";s:3:\"yes\";s:10:\"posts_edit\";s:3:\"yes\";s:12:\"posts_delete\";s:3:\"yes\";s:5:\"pages\";s:3:\"yes\";s:9:\"pages_add\";s:3:\"yes\";s:10:\"pages_edit\";s:3:\"yes\";s:12:\"pages_delete\";s:3:\"yes\";s:12:\"frontendmenu\";s:3:\"yes\";s:7:\"setting\";s:3:\"yes\";s:16:\"frontend_setting\";s:3:\"yes\";s:15:\"paymentsettings\";s:3:\"yes\";s:11:\"smssettings\";s:3:\"yes\";s:12:\"emailsetting\";s:3:\"yes\";s:11:\"marksetting\";s:3:\"yes\";s:9:\"candidate\";s:3:\"yes\";s:13:\"candidate_add\";s:3:\"yes\";s:14:\"candidate_edit\";s:3:\"yes\";s:16:\"candidate_delete\";s:3:\"yes\";s:14:\"candidate_view\";s:3:\"yes\";s:7:\"sponsor\";s:3:\"yes\";s:11:\"sponsor_add\";s:3:\"yes\";s:12:\"sponsor_edit\";s:3:\"yes\";s:14:\"sponsor_delete\";s:3:\"yes\";s:12:\"sponsor_view\";s:3:\"yes\";s:11:\"sponsorship\";s:3:\"yes\";s:15:\"sponsorship_add\";s:3:\"yes\";s:16:\"sponsorship_edit\";s:3:\"yes\";s:18:\"sponsorship_delete\";s:3:\"yes\";s:17:\"sponsorshipreport\";s:3:\"yes\";s:30:\"onlineexamquestionanswerreport\";s:3:\"yes\";s:15:\"semester_delete\";s:2:\"no\";s:14:\"global_payment\";s:2:\"no\";s:11:\"systemadmin\";s:2:\"no\";s:15:\"systemadmin_add\";s:2:\"no\";s:16:\"systemadmin_edit\";s:2:\"no\";s:18:\"systemadmin_delete\";s:2:\"no\";s:16:\"systemadmin_view\";s:2:\"no\";s:13:\"resetpassword\";s:2:\"no\";s:10:\"bulkimport\";s:2:\"no\";s:8:\"usertype\";s:2:\"no\";s:12:\"usertype_add\";s:2:\"no\";s:13:\"usertype_edit\";s:2:\"no\";s:15:\"usertype_delete\";s:2:\"no\";s:10:\"permission\";s:2:\"no\";s:6:\"update\";s:2:\"no\";}success|s:7:\"Success\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'
WHERE `id` = '17f322ec1682325eb34a7b17a04f3bc33d9a2030'
ERROR - 2021-11-26 20:48:57 --> Severity: Warning --> ini_set(): A session is active. You cannot change the session module's ini settings at this time /home/sssok/public_html/school/main/libraries/Session/Session_driver.php 205
ERROR - 2021-11-26 20:48:57 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: /var/cpanel/php/sessions/ea-php73) Unknown 0
ERROR - 2021-11-26 20:48:57 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('c63a997b89e7564790c13458687b4045') AS ci_session_lock
ERROR - 2021-11-26 20:58:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 20:58:29 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 20:59:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 20:59:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:08:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:08:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:10:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:10:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:11:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:11:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:11:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:11:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:12:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:12:22 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:12:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:12:32 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:13:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:13:52 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:14:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:14:03 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:16:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:16:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:17:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:17:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:20:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:20:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:26:08 --> Severity: Warning --> Error while sending QUERY packet. PID=20417 /home/sssok/public_html/school/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-11-26 21:26:08 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1637958368, `data` = '__ci_last_regenerate|i:1637958021;english|N;loginuserID|s:1:\"1\";name|s:9:\"Admin One\";email|s:33:\"adminone@successschoolssokoto.com\";usertypeID|s:1:\"9\";usertype|s:12:\"Portal Admin\";username|s:8:\"adminone\";photo|s:11:\"default.png\";lang|s:7:\"english\";defaultschoolyearID|s:1:\"1\";varifyvaliduser|b:1;loggedin|b:1;get_permission|b:1;master_permission_set|a:393:{s:9:\"dashboard\";s:3:\"yes\";s:7:\"student\";s:3:\"yes\";s:11:\"student_add\";s:3:\"yes\";s:12:\"student_edit\";s:3:\"yes\";s:14:\"student_delete\";s:3:\"yes\";s:12:\"student_view\";s:3:\"yes\";s:7:\"parents\";s:3:\"yes\";s:11:\"parents_add\";s:3:\"yes\";s:12:\"parents_edit\";s:3:\"yes\";s:14:\"parents_delete\";s:3:\"yes\";s:12:\"parents_view\";s:3:\"yes\";s:7:\"teacher\";s:3:\"yes\";s:11:\"teacher_add\";s:3:\"yes\";s:12:\"teacher_edit\";s:3:\"yes\";s:14:\"teacher_delete\";s:3:\"yes\";s:12:\"teacher_view\";s:3:\"yes\";s:4:\"user\";s:3:\"yes\";s:8:\"user_add\";s:3:\"yes\";s:9:\"user_edit\";s:3:\"yes\";s:11:\"user_delete\";s:3:\"yes\";s:9:\"user_view\";s:3:\"yes\";s:7:\"classes\";s:3:\"yes\";s:11:\"classes_add\";s:3:\"yes\";s:12:\"classes_edit\";s:3:\"yes\";s:14:\"classes_delete\";s:3:\"yes\";s:7:\"section\";s:3:\"yes\";s:11:\"section_add\";s:3:\"yes\";s:12:\"section_edit\";s:3:\"yes\";s:14:\"section_delete\";s:3:\"yes\";s:7:\"subject\";s:3:\"yes\";s:11:\"subject_add\";s:3:\"yes\";s:12:\"subject_edit\";s:3:\"yes\";s:14:\"subject_delete\";s:3:\"yes\";s:8:\"syllabus\";s:3:\"yes\";s:12:\"syllabus_add\";s:3:\"yes\";s:13:\"syllabus_edit\";s:3:\"yes\";s:15:\"syllabus_delete\";s:3:\"yes\";s:10:\"assignment\";s:3:\"yes\";s:14:\"assignment_add\";s:3:\"yes\";s:15:\"assignment_edit\";s:3:\"yes\";s:17:\"assignment_delete\";s:3:\"yes\";s:15:\"assignment_view\";s:3:\"yes\";s:7:\"routine\";s:3:\"yes\";s:11:\"routine_add\";s:3:\"yes\";s:12:\"routine_edit\";s:3:\"yes\";s:14:\"routine_delete\";s:3:\"yes\";s:11:\"sattendance\";s:3:\"yes\";s:15:\"sattendance_add\";s:3:\"yes\";s:16:\"sattendance_view\";s:3:\"yes\";s:11:\"tattendance\";s:3:\"yes\";s:15:\"tattendance_add\";s:3:\"yes\";s:16:\"tattendance_view\";s:3:\"yes\";s:11:\"uattendance\";s:3:\"yes\";s:15:\"uattendance_add\";s:3:\"yes\";s:16:\"uattendance_view\";s:3:\"yes\";s:4:\"exam\";s:3:\"yes\";s:8:\"exam_add\";s:3:\"yes\";s:9:\"exam_edit\";s:3:\"yes\";s:11:\"exam_delete\";s:3:\"yes\";s:12:\"examschedule\";s:3:\"yes\";s:16:\"examschedule_add\";s:3:\"yes\";s:17:\"examschedule_edit\";s:3:\"yes\";s:19:\"examschedule_delete\";s:3:\"yes\";s:5:\"grade\";s:3:\"yes\";s:9:\"grade_add\";s:3:\"yes\";s:10:\"grade_edit\";s:3:\"yes\";s:12:\"grade_delete\";s:3:\"yes\";s:11:\"eattendance\";s:3:\"yes\";s:15:\"eattendance_add\";s:3:\"yes\";s:4:\"mark\";s:3:\"yes\";s:8:\"mark_add\";s:3:\"yes\";s:9:\"mark_view\";s:3:\"yes\";s:14:\"markpercentage\";s:3:\"yes\";s:18:\"markpercentage_add\";s:3:\"yes\";s:19:\"markpercentage_edit\";s:3:\"yes\";s:21:\"markpercentage_delete\";s:3:\"yes\";s:9:\"promotion\";s:3:\"yes\";s:12:\"conversation\";s:3:\"yes\";s:5:\"media\";s:3:\"yes\";s:9:\"media_add\";s:3:\"yes\";s:12:\"media_delete\";s:3:\"yes\";s:10:\"mailandsms\";s:3:\"yes\";s:14:\"mailandsms_add\";s:3:\"yes\";s:15:\"mailandsms_view\";s:3:\"yes\";s:14:\"question_group\";s:3:\"yes\";s:18:\"question_group_add\";s:3:\"yes\";s:19:\"question_group_edit\";s:3:\"yes\";s:21:\"question_group_delete\";s:3:\"yes\";s:14:\"question_level\";s:3:\"yes\";s:18:\"question_level_add\";s:3:\"yes\";s:19:\"question_level_edit\";s:3:\"yes\";s:21:\"question_level_delete\";s:3:\"yes\";s:13:\"question_bank\";s:3:\"yes\";s:17:\"question_bank_add\";s:3:\"yes\";s:18:\"question_bank_edit\";s:3:\"yes\";s:20:\"question_bank_delete\";s:3:\"yes\";s:18:\"question_bank_view\";s:3:\"yes\";s:11:\"online_exam\";s:3:\"yes\";s:15:\"online_exam_add\";s:3:\"yes\";s:16:\"online_exam_edit\";s:3:\"yes\";s:18:\"online_exam_delete\";s:3:\"yes\";s:11:\"instruction\";s:3:\"yes\";s:15:\"instruction_add\";s:3:\"yes\";s:16:\"instruction_edit\";s:3:\"yes\";s:18:\"instruction_delete\";s:3:\"yes\";s:16:\"instruction_view\";s:3:\"yes\";s:15:\"salary_template\";s:3:\"yes\";s:19:\"salary_template_add\";s:3:\"yes\";s:20:\"salary_template_edit\";s:3:\"yes\";s:22:\"salary_template_delete\";s:3:\"yes\";s:20:\"salary_template_view\";s:3:\"yes\";s:15:\"hourly_template\";s:3:\"yes\";s:19:\"hourly_template_add\";s:3:\"yes\";s:20:\"hourly_template_edit\";s:3:\"yes\";s:22:\"hourly_template_delete\";s:3:\"yes\";s:13:\"manage_salary\";s:3:\"yes\";s:17:\"manage_salary_add\";s:3:\"yes\";s:18:\"manage_salary_edit\";s:3:\"yes\";s:20:\"manage_salary_delete\";s:3:\"yes\";s:18:\"manage_salary_view\";s:3:\"yes\";s:12:\"make_payment\";s:3:\"yes\";s:8:\"overtime\";s:3:\"yes\";s:12:\"overtime_add\";s:3:\"yes\";s:13:\"overtime_edit\";s:3:\"yes\";s:15:\"overtime_delete\";s:3:\"yes\";s:6:\"vendor\";s:3:\"yes\";s:10:\"vendor_add\";s:3:\"yes\";s:11:\"vendor_edit\";s:3:\"yes\";s:13:\"vendor_delete\";s:3:\"yes\";s:8:\"location\";s:3:\"yes\";s:12:\"location_add\";s:3:\"yes\";s:13:\"location_edit\";s:3:\"yes\";s:15:\"location_delete\";s:3:\"yes\";s:14:\"asset_category\";s:3:\"yes\";s:18:\"asset_category_add\";s:3:\"yes\";s:19:\"asset_category_edit\";s:3:\"yes\";s:21:\"asset_category_delete\";s:3:\"yes\";s:5:\"asset\";s:3:\"yes\";s:9:\"asset_add\";s:3:\"yes\";s:10:\"asset_edit\";s:3:\"yes\";s:12:\"asset_delete\";s:3:\"yes\";s:10:\"asset_view\";s:3:\"yes\";s:16:\"asset_assignment\";s:3:\"yes\";s:20:\"asset_assignment_add\";s:3:\"yes\";s:21:\"asset_assignment_edit\";s:3:\"yes\";s:23:\"asset_assignment_delete\";s:3:\"yes\";s:21:\"asset_assignment_view\";s:3:\"yes\";s:8:\"purchase\";s:3:\"yes\";s:12:\"purchase_add\";s:3:\"yes\";s:13:\"purchase_edit\";s:3:\"yes\";s:15:\"purchase_delete\";s:3:\"yes\";s:15:\"productcategory\";s:3:\"yes\";s:19:\"productcategory_add\";s:3:\"yes\";s:20:\"productcategory_edit\";s:3:\"yes\";s:22:\"productcategory_delete\";s:3:\"yes\";s:7:\"product\";s:3:\"yes\";s:11:\"product_add\";s:3:\"yes\";s:12:\"product_edit\";s:3:\"yes\";s:14:\"product_delete\";s:3:\"yes\";s:16:\"productwarehouse\";s:3:\"yes\";s:20:\"productwarehouse_add\";s:3:\"yes\";s:21:\"productwarehouse_edit\";s:3:\"yes\";s:23:\"productwarehouse_delete\";s:3:\"yes\";s:15:\"productsupplier\";s:3:\"yes\";s:19:\"productsupplier_add\";s:3:\"yes\";s:20:\"productsupplier_edit\";s:3:\"yes\";s:22:\"productsupplier_delete\";s:3:\"yes\";s:15:\"productpurchase\";s:3:\"yes\";s:19:\"productpurchase_add\";s:3:\"yes\";s:20:\"productpurchase_edit\";s:3:\"yes\";s:22:\"productpurchase_delete\";s:3:\"yes\";s:20:\"productpurchase_view\";s:3:\"yes\";s:11:\"productsale\";s:3:\"yes\";s:15:\"productsale_add\";s:3:\"yes\";s:16:\"productsale_edit\";s:3:\"yes\";s:18:\"productsale_delete\";s:3:\"yes\";s:16:\"productsale_view\";s:3:\"yes\";s:13:\"leavecategory\";s:3:\"yes\";s:17:\"leavecategory_add\";s:3:\"yes\";s:18:\"leavecategory_edit\";s:3:\"yes\";s:20:\"leavecategory_delete\";s:3:\"yes\";s:11:\"leaveassign\";s:3:\"yes\";s:15:\"leaveassign_add\";s:3:\"yes\";s:16:\"leaveassign_edit\";s:3:\"yes\";s:18:\"leaveassign_delete\";s:3:\"yes\";s:10:\"leaveapply\";s:3:\"yes\";s:14:\"leaveapply_add\";s:3:\"yes\";s:15:\"leaveapply_edit\";s:3:\"yes\";s:17:\"leaveapply_delete\";s:3:\"yes\";s:15:\"leaveapply_view\";s:3:\"yes\";s:16:\"leaveapplication\";s:3:\"yes\";s:18:\"activitiescategory\";s:3:\"yes\";s:22:\"activitiescategory_add\";s:3:\"yes\";s:23:\"activitiescategory_edit\";s:3:\"yes\";s:25:\"activitiescategory_delete\";s:3:\"yes\";s:10:\"activities\";s:3:\"yes\";s:14:\"activities_add\";s:3:\"yes\";s:17:\"activities_delete\";s:3:\"yes\";s:9:\"childcare\";s:3:\"yes\";s:13:\"childcare_add\";s:3:\"yes\";s:14:\"childcare_edit\";s:3:\"yes\";s:16:\"childcare_delete\";s:3:\"yes\";s:7:\"lmember\";s:3:\"yes\";s:11:\"lmember_add\";s:3:\"yes\";s:12:\"lmember_edit\";s:3:\"yes\";s:14:\"lmember_delete\";s:3:\"yes\";s:12:\"lmember_view\";s:3:\"yes\";s:4:\"book\";s:3:\"yes\";s:8:\"book_add\";s:3:\"yes\";s:9:\"book_edit\";s:3:\"yes\";s:11:\"book_delete\";s:3:\"yes\";s:5:\"issue\";s:3:\"yes\";s:9:\"issue_add\";s:3:\"yes\";s:10:\"issue_edit\";s:3:\"yes\";s:10:\"issue_view\";s:3:\"yes\";s:6:\"ebooks\";s:3:\"yes\";s:10:\"ebooks_add\";s:3:\"yes\";s:11:\"ebooks_edit\";s:3:\"yes\";s:13:\"ebooks_delete\";s:3:\"yes\";s:11:\"ebooks_view\";s:3:\"yes\";s:9:\"transport\";s:3:\"yes\";s:13:\"transport_add\";s:3:\"yes\";s:14:\"transport_edit\";s:3:\"yes\";s:16:\"transport_delete\";s:3:\"yes\";s:7:\"tmember\";s:3:\"yes\";s:11:\"tmember_add\";s:3:\"yes\";s:12:\"tmember_edit\";s:3:\"yes\";s:14:\"tmember_delete\";s:3:\"yes\";s:12:\"tmember_view\";s:3:\"yes\";s:6:\"hostel\";s:3:\"yes\";s:10:\"hostel_add\";s:3:\"yes\";s:11:\"hostel_edit\";s:3:\"yes\";s:13:\"hostel_delete\";s:3:\"yes\";s:8:\"category\";s:3:\"yes\";s:12:\"category_add\";s:3:\"yes\";s:13:\"category_edit\";s:3:\"yes\";s:15:\"category_delete\";s:3:\"yes\";s:7:\"hmember\";s:3:\"yes\";s:11:\"hmember_add\";s:3:\"yes\";s:12:\"hmember_edit\";s:3:\"yes\";s:14:\"hmember_delete\";s:3:\"yes\";s:12:\"hmember_view\";s:3:\"yes\";s:8:\"feetypes\";s:3:\"yes\";s:12:\"feetypes_add\";s:3:\"yes\";s:13:\"feetypes_edit\";s:3:\"yes\";s:15:\"feetypes_delete\";s:3:\"yes\";s:7:\"invoice\";s:3:\"yes\";s:11:\"invoice_add\";s:3:\"yes\";s:12:\"invoice_edit\";s:3:\"yes\";s:14:\"invoice_delete\";s:3:\"yes\";s:12:\"invoice_view\";s:3:\"yes\";s:14:\"paymenthistory\";s:3:\"yes\";s:19:\"paymenthistory_edit\";s:3:\"yes\";s:21:\"paymenthistory_delete\";s:3:\"yes\";s:7:\"expense\";s:3:\"yes\";s:11:\"expense_add\";s:3:\"yes\";s:12:\"expense_edit\";s:3:\"yes\";s:14:\"expense_delete\";s:3:\"yes\";s:6:\"income\";s:3:\"yes\";s:10:\"income_add\";s:3:\"yes\";s:11:\"income_edit\";s:3:\"yes\";s:13:\"income_delete\";s:3:\"yes\";s:6:\"notice\";s:3:\"yes\";s:10:\"notice_add\";s:3:\"yes\";s:11:\"notice_edit\";s:3:\"yes\";s:13:\"notice_delete\";s:3:\"yes\";s:11:\"notice_view\";s:3:\"yes\";s:5:\"event\";s:3:\"yes\";s:9:\"event_add\";s:3:\"yes\";s:10:\"event_edit\";s:3:\"yes\";s:12:\"event_delete\";s:3:\"yes\";s:10:\"event_view\";s:3:\"yes\";s:7:\"holiday\";s:3:\"yes\";s:11:\"holiday_add\";s:3:\"yes\";s:12:\"holiday_edit\";s:3:\"yes\";s:14:\"holiday_delete\";s:3:\"yes\";s:12:\"holiday_view\";s:3:\"yes\";s:13:\"classesreport\";s:3:\"yes\";s:13:\"studentreport\";s:3:\"yes\";s:12:\"idcardreport\";s:3:\"yes\";s:15:\"admitcardreport\";s:3:\"yes\";s:13:\"routinereport\";s:3:\"yes\";s:18:\"examschedulereport\";s:3:\"yes\";s:16:\"attendancereport\";s:3:\"yes\";s:24:\"attendanceoverviewreport\";s:3:\"yes\";s:18:\"librarybooksreport\";s:3:\"yes\";s:17:\"librarycardreport\";s:3:\"yes\";s:22:\"librarybookissuereport\";s:3:\"yes\";s:14:\"terminalreport\";s:3:\"yes\";s:16:\"meritstagereport\";s:3:\"yes\";s:21:\"tabulationsheetreport\";s:3:\"yes\";s:15:\"marksheetreport\";s:3:\"yes\";s:18:\"progresscardreport\";s:3:\"yes\";s:20:\"studentsessionreport\";s:3:\"yes\";s:16:\"onlineexamreport\";s:3:\"yes\";s:24:\"onlineexamquestionreport\";s:3:\"yes\";s:21:\"onlineadmissionreport\";s:3:\"yes\";s:17:\"certificatereport\";s:3:\"yes\";s:22:\"leaveapplicationreport\";s:3:\"yes\";s:21:\"productpurchasereport\";s:3:\"yes\";s:17:\"productsalereport\";s:3:\"yes\";s:23:\"searchpaymentfeesreport\";s:3:\"yes\";s:10:\"feesreport\";s:3:\"yes\";s:13:\"duefeesreport\";s:3:\"yes\";s:17:\"balancefeesreport\";s:3:\"yes\";s:17:\"transactionreport\";s:3:\"yes\";s:17:\"studentfinereport\";s:3:\"yes\";s:14:\"overtimereport\";s:3:\"yes\";s:12:\"salaryreport\";s:3:\"yes\";s:19:\"accountledgerreport\";s:3:\"yes\";s:15:\"onlineadmission\";s:3:\"yes\";s:11:\"visitorinfo\";s:3:\"yes\";s:18:\"visitorinfo_delete\";s:3:\"yes\";s:16:\"visitorinfo_view\";s:3:\"yes\";s:10:\"schoolyear\";s:3:\"yes\";s:14:\"schoolyear_add\";s:3:\"yes\";s:15:\"schoolyear_edit\";s:3:\"yes\";s:17:\"schoolyear_delete\";s:3:\"yes\";s:12:\"studentgroup\";s:3:\"yes\";s:16:\"studentgroup_add\";s:3:\"yes\";s:17:\"studentgroup_edit\";s:3:\"yes\";s:19:\"studentgroup_delete\";s:3:\"yes\";s:8:\"complain\";s:3:\"yes\";s:12:\"complain_add\";s:3:\"yes\";s:13:\"complain_edit\";s:3:\"yes\";s:15:\"complain_delete\";s:3:\"yes\";s:13:\"complain_view\";s:3:\"yes\";s:20:\"certificate_template\";s:3:\"yes\";s:24:\"certificate_template_add\";s:3:\"yes\";s:25:\"certificate_template_edit\";s:3:\"yes\";s:27:\"certificate_template_delete\";s:3:\"yes\";s:25:\"certificate_template_view\";s:3:\"yes\";s:10:\"sociallink\";s:3:\"yes\";s:14:\"sociallink_add\";s:3:\"yes\";s:15:\"sociallink_edit\";s:3:\"yes\";s:17:\"sociallink_delete\";s:3:\"yes\";s:18:\"mailandsmstemplate\";s:3:\"yes\";s:22:\"mailandsmstemplate_add\";s:3:\"yes\";s:23:\"mailandsmstemplate_edit\";s:3:\"yes\";s:25:\"mailandsmstemplate_delete\";s:3:\"yes\";s:23:\"mailandsmstemplate_view\";s:3:\"yes\";s:6:\"backup\";s:3:\"yes\";s:6:\"addons\";s:3:\"yes\";s:16:\"posts_categories\";s:3:\"yes\";s:20:\"posts_categories_add\";s:3:\"yes\";s:21:\"posts_categories_edit\";s:3:\"yes\";s:23:\"posts_categories_delete\";s:3:\"yes\";s:5:\"posts\";s:3:\"yes\";s:9:\"posts_add\";s:3:\"yes\";s:10:\"posts_edit\";s:3:\"yes\";s:12:\"posts_delete\";s:3:\"yes\";s:5:\"pages\";s:3:\"yes\";s:9:\"pages_add\";s:3:\"yes\";s:10:\"pages_edit\";s:3:\"yes\";s:12:\"pages_delete\";s:3:\"yes\";s:12:\"frontendmenu\";s:3:\"yes\";s:7:\"setting\";s:3:\"yes\";s:16:\"frontend_setting\";s:3:\"yes\";s:15:\"paymentsettings\";s:3:\"yes\";s:11:\"smssettings\";s:3:\"yes\";s:12:\"emailsetting\";s:3:\"yes\";s:11:\"marksetting\";s:3:\"yes\";s:9:\"candidate\";s:3:\"yes\";s:13:\"candidate_add\";s:3:\"yes\";s:14:\"candidate_edit\";s:3:\"yes\";s:16:\"candidate_delete\";s:3:\"yes\";s:14:\"candidate_view\";s:3:\"yes\";s:7:\"sponsor\";s:3:\"yes\";s:11:\"sponsor_add\";s:3:\"yes\";s:12:\"sponsor_edit\";s:3:\"yes\";s:14:\"sponsor_delete\";s:3:\"yes\";s:12:\"sponsor_view\";s:3:\"yes\";s:11:\"sponsorship\";s:3:\"yes\";s:15:\"sponsorship_add\";s:3:\"yes\";s:16:\"sponsorship_edit\";s:3:\"yes\";s:18:\"sponsorship_delete\";s:3:\"yes\";s:17:\"sponsorshipreport\";s:3:\"yes\";s:30:\"onlineexamquestionanswerreport\";s:3:\"yes\";s:15:\"semester_delete\";s:2:\"no\";s:14:\"global_payment\";s:2:\"no\";s:11:\"systemadmin\";s:2:\"no\";s:15:\"systemadmin_add\";s:2:\"no\";s:16:\"systemadmin_edit\";s:2:\"no\";s:18:\"systemadmin_delete\";s:2:\"no\";s:16:\"systemadmin_view\";s:2:\"no\";s:13:\"resetpassword\";s:2:\"no\";s:10:\"bulkimport\";s:2:\"no\";s:8:\"usertype\";s:2:\"no\";s:12:\"usertype_add\";s:2:\"no\";s:13:\"usertype_edit\";s:2:\"no\";s:15:\"usertype_delete\";s:2:\"no\";s:10:\"permission\";s:2:\"no\";s:6:\"update\";s:2:\"no\";}success|s:7:\"Success\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'
WHERE `id` = 'eca005db95cbc3083d02c4552ea4fe45b414dcf8'
ERROR - 2021-11-26 21:26:08 --> Severity: Warning --> ini_set(): A session is active. You cannot change the session module's ini settings at this time /home/sssok/public_html/school/main/libraries/Session/Session_driver.php 205
ERROR - 2021-11-26 21:26:08 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: /var/cpanel/php/sessions/ea-php73) Unknown 0
ERROR - 2021-11-26 21:26:08 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('8a4ea9fae81eb6395ae435c8d9b681ff') AS ci_session_lock
ERROR - 2021-11-26 21:26:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:26:46 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:27:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:27:32 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:28:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:28:40 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:29:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:29:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:31:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:31:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:32:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:32:17 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:32:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:32:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:32:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:32:56 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:34:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:34:08 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:34:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:34:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:35:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:35:11 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:35:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:35:36 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:36:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:36:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:36:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:36:22 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:37:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:37:24 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:37:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:37:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:38:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:38:22 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:38:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:38:41 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:39:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:39:10 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:39:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:39:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:40:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:40:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:40:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:40:38 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:41:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:41:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:41:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:41:49 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:42:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:42:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:42:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:42:49 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:43:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:43:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:44:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:44:08 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:45:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:45:33 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:46:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:46:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:46:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:46:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:47:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:47:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:49:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:49:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:50:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:50:04 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:51:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:51:54 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:54:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:54:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:55:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:55:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:56:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:56:43 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 21:59:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 21:59:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 22:00:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-26 22:00:44 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-26 22:07:56 --> Severity: Warning --> Error while sending QUERY packet. PID=24232 /home/sssok/public_html/school/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-11-26 22:07:56 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1637960876, `data` = '__ci_last_regenerate|i:1637960404;english|N;loginuserID|s:1:\"1\";name|s:9:\"Admin One\";email|s:33:\"adminone@successschoolssokoto.com\";usertypeID|s:1:\"9\";usertype|s:12:\"Portal Admin\";username|s:8:\"adminone\";photo|s:11:\"default.png\";lang|s:7:\"english\";defaultschoolyearID|s:1:\"1\";varifyvaliduser|b:1;loggedin|b:1;get_permission|b:1;master_permission_set|a:393:{s:9:\"dashboard\";s:3:\"yes\";s:7:\"student\";s:3:\"yes\";s:11:\"student_add\";s:3:\"yes\";s:12:\"student_edit\";s:3:\"yes\";s:14:\"student_delete\";s:3:\"yes\";s:12:\"student_view\";s:3:\"yes\";s:7:\"parents\";s:3:\"yes\";s:11:\"parents_add\";s:3:\"yes\";s:12:\"parents_edit\";s:3:\"yes\";s:14:\"parents_delete\";s:3:\"yes\";s:12:\"parents_view\";s:3:\"yes\";s:7:\"teacher\";s:3:\"yes\";s:11:\"teacher_add\";s:3:\"yes\";s:12:\"teacher_edit\";s:3:\"yes\";s:14:\"teacher_delete\";s:3:\"yes\";s:12:\"teacher_view\";s:3:\"yes\";s:4:\"user\";s:3:\"yes\";s:8:\"user_add\";s:3:\"yes\";s:9:\"user_edit\";s:3:\"yes\";s:11:\"user_delete\";s:3:\"yes\";s:9:\"user_view\";s:3:\"yes\";s:7:\"classes\";s:3:\"yes\";s:11:\"classes_add\";s:3:\"yes\";s:12:\"classes_edit\";s:3:\"yes\";s:14:\"classes_delete\";s:3:\"yes\";s:7:\"section\";s:3:\"yes\";s:11:\"section_add\";s:3:\"yes\";s:12:\"section_edit\";s:3:\"yes\";s:14:\"section_delete\";s:3:\"yes\";s:7:\"subject\";s:3:\"yes\";s:11:\"subject_add\";s:3:\"yes\";s:12:\"subject_edit\";s:3:\"yes\";s:14:\"subject_delete\";s:3:\"yes\";s:8:\"syllabus\";s:3:\"yes\";s:12:\"syllabus_add\";s:3:\"yes\";s:13:\"syllabus_edit\";s:3:\"yes\";s:15:\"syllabus_delete\";s:3:\"yes\";s:10:\"assignment\";s:3:\"yes\";s:14:\"assignment_add\";s:3:\"yes\";s:15:\"assignment_edit\";s:3:\"yes\";s:17:\"assignment_delete\";s:3:\"yes\";s:15:\"assignment_view\";s:3:\"yes\";s:7:\"routine\";s:3:\"yes\";s:11:\"routine_add\";s:3:\"yes\";s:12:\"routine_edit\";s:3:\"yes\";s:14:\"routine_delete\";s:3:\"yes\";s:11:\"sattendance\";s:3:\"yes\";s:15:\"sattendance_add\";s:3:\"yes\";s:16:\"sattendance_view\";s:3:\"yes\";s:11:\"tattendance\";s:3:\"yes\";s:15:\"tattendance_add\";s:3:\"yes\";s:16:\"tattendance_view\";s:3:\"yes\";s:11:\"uattendance\";s:3:\"yes\";s:15:\"uattendance_add\";s:3:\"yes\";s:16:\"uattendance_view\";s:3:\"yes\";s:4:\"exam\";s:3:\"yes\";s:8:\"exam_add\";s:3:\"yes\";s:9:\"exam_edit\";s:3:\"yes\";s:11:\"exam_delete\";s:3:\"yes\";s:12:\"examschedule\";s:3:\"yes\";s:16:\"examschedule_add\";s:3:\"yes\";s:17:\"examschedule_edit\";s:3:\"yes\";s:19:\"examschedule_delete\";s:3:\"yes\";s:5:\"grade\";s:3:\"yes\";s:9:\"grade_add\";s:3:\"yes\";s:10:\"grade_edit\";s:3:\"yes\";s:12:\"grade_delete\";s:3:\"yes\";s:11:\"eattendance\";s:3:\"yes\";s:15:\"eattendance_add\";s:3:\"yes\";s:4:\"mark\";s:3:\"yes\";s:8:\"mark_add\";s:3:\"yes\";s:9:\"mark_view\";s:3:\"yes\";s:14:\"markpercentage\";s:3:\"yes\";s:18:\"markpercentage_add\";s:3:\"yes\";s:19:\"markpercentage_edit\";s:3:\"yes\";s:21:\"markpercentage_delete\";s:3:\"yes\";s:9:\"promotion\";s:3:\"yes\";s:12:\"conversation\";s:3:\"yes\";s:5:\"media\";s:3:\"yes\";s:9:\"media_add\";s:3:\"yes\";s:12:\"media_delete\";s:3:\"yes\";s:10:\"mailandsms\";s:3:\"yes\";s:14:\"mailandsms_add\";s:3:\"yes\";s:15:\"mailandsms_view\";s:3:\"yes\";s:14:\"question_group\";s:3:\"yes\";s:18:\"question_group_add\";s:3:\"yes\";s:19:\"question_group_edit\";s:3:\"yes\";s:21:\"question_group_delete\";s:3:\"yes\";s:14:\"question_level\";s:3:\"yes\";s:18:\"question_level_add\";s:3:\"yes\";s:19:\"question_level_edit\";s:3:\"yes\";s:21:\"question_level_delete\";s:3:\"yes\";s:13:\"question_bank\";s:3:\"yes\";s:17:\"question_bank_add\";s:3:\"yes\";s:18:\"question_bank_edit\";s:3:\"yes\";s:20:\"question_bank_delete\";s:3:\"yes\";s:18:\"question_bank_view\";s:3:\"yes\";s:11:\"online_exam\";s:3:\"yes\";s:15:\"online_exam_add\";s:3:\"yes\";s:16:\"online_exam_edit\";s:3:\"yes\";s:18:\"online_exam_delete\";s:3:\"yes\";s:11:\"instruction\";s:3:\"yes\";s:15:\"instruction_add\";s:3:\"yes\";s:16:\"instruction_edit\";s:3:\"yes\";s:18:\"instruction_delete\";s:3:\"yes\";s:16:\"instruction_view\";s:3:\"yes\";s:15:\"salary_template\";s:3:\"yes\";s:19:\"salary_template_add\";s:3:\"yes\";s:20:\"salary_template_edit\";s:3:\"yes\";s:22:\"salary_template_delete\";s:3:\"yes\";s:20:\"salary_template_view\";s:3:\"yes\";s:15:\"hourly_template\";s:3:\"yes\";s:19:\"hourly_template_add\";s:3:\"yes\";s:20:\"hourly_template_edit\";s:3:\"yes\";s:22:\"hourly_template_delete\";s:3:\"yes\";s:13:\"manage_salary\";s:3:\"yes\";s:17:\"manage_salary_add\";s:3:\"yes\";s:18:\"manage_salary_edit\";s:3:\"yes\";s:20:\"manage_salary_delete\";s:3:\"yes\";s:18:\"manage_salary_view\";s:3:\"yes\";s:12:\"make_payment\";s:3:\"yes\";s:8:\"overtime\";s:3:\"yes\";s:12:\"overtime_add\";s:3:\"yes\";s:13:\"overtime_edit\";s:3:\"yes\";s:15:\"overtime_delete\";s:3:\"yes\";s:6:\"vendor\";s:3:\"yes\";s:10:\"vendor_add\";s:3:\"yes\";s:11:\"vendor_edit\";s:3:\"yes\";s:13:\"vendor_delete\";s:3:\"yes\";s:8:\"location\";s:3:\"yes\";s:12:\"location_add\";s:3:\"yes\";s:13:\"location_edit\";s:3:\"yes\";s:15:\"location_delete\";s:3:\"yes\";s:14:\"asset_category\";s:3:\"yes\";s:18:\"asset_category_add\";s:3:\"yes\";s:19:\"asset_category_edit\";s:3:\"yes\";s:21:\"asset_category_delete\";s:3:\"yes\";s:5:\"asset\";s:3:\"yes\";s:9:\"asset_add\";s:3:\"yes\";s:10:\"asset_edit\";s:3:\"yes\";s:12:\"asset_delete\";s:3:\"yes\";s:10:\"asset_view\";s:3:\"yes\";s:16:\"asset_assignment\";s:3:\"yes\";s:20:\"asset_assignment_add\";s:3:\"yes\";s:21:\"asset_assignment_edit\";s:3:\"yes\";s:23:\"asset_assignment_delete\";s:3:\"yes\";s:21:\"asset_assignment_view\";s:3:\"yes\";s:8:\"purchase\";s:3:\"yes\";s:12:\"purchase_add\";s:3:\"yes\";s:13:\"purchase_edit\";s:3:\"yes\";s:15:\"purchase_delete\";s:3:\"yes\";s:15:\"productcategory\";s:3:\"yes\";s:19:\"productcategory_add\";s:3:\"yes\";s:20:\"productcategory_edit\";s:3:\"yes\";s:22:\"productcategory_delete\";s:3:\"yes\";s:7:\"product\";s:3:\"yes\";s:11:\"product_add\";s:3:\"yes\";s:12:\"product_edit\";s:3:\"yes\";s:14:\"product_delete\";s:3:\"yes\";s:16:\"productwarehouse\";s:3:\"yes\";s:20:\"productwarehouse_add\";s:3:\"yes\";s:21:\"productwarehouse_edit\";s:3:\"yes\";s:23:\"productwarehouse_delete\";s:3:\"yes\";s:15:\"productsupplier\";s:3:\"yes\";s:19:\"productsupplier_add\";s:3:\"yes\";s:20:\"productsupplier_edit\";s:3:\"yes\";s:22:\"productsupplier_delete\";s:3:\"yes\";s:15:\"productpurchase\";s:3:\"yes\";s:19:\"productpurchase_add\";s:3:\"yes\";s:20:\"productpurchase_edit\";s:3:\"yes\";s:22:\"productpurchase_delete\";s:3:\"yes\";s:20:\"productpurchase_view\";s:3:\"yes\";s:11:\"productsale\";s:3:\"yes\";s:15:\"productsale_add\";s:3:\"yes\";s:16:\"productsale_edit\";s:3:\"yes\";s:18:\"productsale_delete\";s:3:\"yes\";s:16:\"productsale_view\";s:3:\"yes\";s:13:\"leavecategory\";s:3:\"yes\";s:17:\"leavecategory_add\";s:3:\"yes\";s:18:\"leavecategory_edit\";s:3:\"yes\";s:20:\"leavecategory_delete\";s:3:\"yes\";s:11:\"leaveassign\";s:3:\"yes\";s:15:\"leaveassign_add\";s:3:\"yes\";s:16:\"leaveassign_edit\";s:3:\"yes\";s:18:\"leaveassign_delete\";s:3:\"yes\";s:10:\"leaveapply\";s:3:\"yes\";s:14:\"leaveapply_add\";s:3:\"yes\";s:15:\"leaveapply_edit\";s:3:\"yes\";s:17:\"leaveapply_delete\";s:3:\"yes\";s:15:\"leaveapply_view\";s:3:\"yes\";s:16:\"leaveapplication\";s:3:\"yes\";s:18:\"activitiescategory\";s:3:\"yes\";s:22:\"activitiescategory_add\";s:3:\"yes\";s:23:\"activitiescategory_edit\";s:3:\"yes\";s:25:\"activitiescategory_delete\";s:3:\"yes\";s:10:\"activities\";s:3:\"yes\";s:14:\"activities_add\";s:3:\"yes\";s:17:\"activities_delete\";s:3:\"yes\";s:9:\"childcare\";s:3:\"yes\";s:13:\"childcare_add\";s:3:\"yes\";s:14:\"childcare_edit\";s:3:\"yes\";s:16:\"childcare_delete\";s:3:\"yes\";s:7:\"lmember\";s:3:\"yes\";s:11:\"lmember_add\";s:3:\"yes\";s:12:\"lmember_edit\";s:3:\"yes\";s:14:\"lmember_delete\";s:3:\"yes\";s:12:\"lmember_view\";s:3:\"yes\";s:4:\"book\";s:3:\"yes\";s:8:\"book_add\";s:3:\"yes\";s:9:\"book_edit\";s:3:\"yes\";s:11:\"book_delete\";s:3:\"yes\";s:5:\"issue\";s:3:\"yes\";s:9:\"issue_add\";s:3:\"yes\";s:10:\"issue_edit\";s:3:\"yes\";s:10:\"issue_view\";s:3:\"yes\";s:6:\"ebooks\";s:3:\"yes\";s:10:\"ebooks_add\";s:3:\"yes\";s:11:\"ebooks_edit\";s:3:\"yes\";s:13:\"ebooks_delete\";s:3:\"yes\";s:11:\"ebooks_view\";s:3:\"yes\";s:9:\"transport\";s:3:\"yes\";s:13:\"transport_add\";s:3:\"yes\";s:14:\"transport_edit\";s:3:\"yes\";s:16:\"transport_delete\";s:3:\"yes\";s:7:\"tmember\";s:3:\"yes\";s:11:\"tmember_add\";s:3:\"yes\";s:12:\"tmember_edit\";s:3:\"yes\";s:14:\"tmember_delete\";s:3:\"yes\";s:12:\"tmember_view\";s:3:\"yes\";s:6:\"hostel\";s:3:\"yes\";s:10:\"hostel_add\";s:3:\"yes\";s:11:\"hostel_edit\";s:3:\"yes\";s:13:\"hostel_delete\";s:3:\"yes\";s:8:\"category\";s:3:\"yes\";s:12:\"category_add\";s:3:\"yes\";s:13:\"category_edit\";s:3:\"yes\";s:15:\"category_delete\";s:3:\"yes\";s:7:\"hmember\";s:3:\"yes\";s:11:\"hmember_add\";s:3:\"yes\";s:12:\"hmember_edit\";s:3:\"yes\";s:14:\"hmember_delete\";s:3:\"yes\";s:12:\"hmember_view\";s:3:\"yes\";s:8:\"feetypes\";s:3:\"yes\";s:12:\"feetypes_add\";s:3:\"yes\";s:13:\"feetypes_edit\";s:3:\"yes\";s:15:\"feetypes_delete\";s:3:\"yes\";s:7:\"invoice\";s:3:\"yes\";s:11:\"invoice_add\";s:3:\"yes\";s:12:\"invoice_edit\";s:3:\"yes\";s:14:\"invoice_delete\";s:3:\"yes\";s:12:\"invoice_view\";s:3:\"yes\";s:14:\"paymenthistory\";s:3:\"yes\";s:19:\"paymenthistory_edit\";s:3:\"yes\";s:21:\"paymenthistory_delete\";s:3:\"yes\";s:7:\"expense\";s:3:\"yes\";s:11:\"expense_add\";s:3:\"yes\";s:12:\"expense_edit\";s:3:\"yes\";s:14:\"expense_delete\";s:3:\"yes\";s:6:\"income\";s:3:\"yes\";s:10:\"income_add\";s:3:\"yes\";s:11:\"income_edit\";s:3:\"yes\";s:13:\"income_delete\";s:3:\"yes\";s:6:\"notice\";s:3:\"yes\";s:10:\"notice_add\";s:3:\"yes\";s:11:\"notice_edit\";s:3:\"yes\";s:13:\"notice_delete\";s:3:\"yes\";s:11:\"notice_view\";s:3:\"yes\";s:5:\"event\";s:3:\"yes\";s:9:\"event_add\";s:3:\"yes\";s:10:\"event_edit\";s:3:\"yes\";s:12:\"event_delete\";s:3:\"yes\";s:10:\"event_view\";s:3:\"yes\";s:7:\"holiday\";s:3:\"yes\";s:11:\"holiday_add\";s:3:\"yes\";s:12:\"holiday_edit\";s:3:\"yes\";s:14:\"holiday_delete\";s:3:\"yes\";s:12:\"holiday_view\";s:3:\"yes\";s:13:\"classesreport\";s:3:\"yes\";s:13:\"studentreport\";s:3:\"yes\";s:12:\"idcardreport\";s:3:\"yes\";s:15:\"admitcardreport\";s:3:\"yes\";s:13:\"routinereport\";s:3:\"yes\";s:18:\"examschedulereport\";s:3:\"yes\";s:16:\"attendancereport\";s:3:\"yes\";s:24:\"attendanceoverviewreport\";s:3:\"yes\";s:18:\"librarybooksreport\";s:3:\"yes\";s:17:\"librarycardreport\";s:3:\"yes\";s:22:\"librarybookissuereport\";s:3:\"yes\";s:14:\"terminalreport\";s:3:\"yes\";s:16:\"meritstagereport\";s:3:\"yes\";s:21:\"tabulationsheetreport\";s:3:\"yes\";s:15:\"marksheetreport\";s:3:\"yes\";s:18:\"progresscardreport\";s:3:\"yes\";s:20:\"studentsessionreport\";s:3:\"yes\";s:16:\"onlineexamreport\";s:3:\"yes\";s:24:\"onlineexamquestionreport\";s:3:\"yes\";s:21:\"onlineadmissionreport\";s:3:\"yes\";s:17:\"certificatereport\";s:3:\"yes\";s:22:\"leaveapplicationreport\";s:3:\"yes\";s:21:\"productpurchasereport\";s:3:\"yes\";s:17:\"productsalereport\";s:3:\"yes\";s:23:\"searchpaymentfeesreport\";s:3:\"yes\";s:10:\"feesreport\";s:3:\"yes\";s:13:\"duefeesreport\";s:3:\"yes\";s:17:\"balancefeesreport\";s:3:\"yes\";s:17:\"transactionreport\";s:3:\"yes\";s:17:\"studentfinereport\";s:3:\"yes\";s:14:\"overtimereport\";s:3:\"yes\";s:12:\"salaryreport\";s:3:\"yes\";s:19:\"accountledgerreport\";s:3:\"yes\";s:15:\"onlineadmission\";s:3:\"yes\";s:11:\"visitorinfo\";s:3:\"yes\";s:18:\"visitorinfo_delete\";s:3:\"yes\";s:16:\"visitorinfo_view\";s:3:\"yes\";s:10:\"schoolyear\";s:3:\"yes\";s:14:\"schoolyear_add\";s:3:\"yes\";s:15:\"schoolyear_edit\";s:3:\"yes\";s:17:\"schoolyear_delete\";s:3:\"yes\";s:12:\"studentgroup\";s:3:\"yes\";s:16:\"studentgroup_add\";s:3:\"yes\";s:17:\"studentgroup_edit\";s:3:\"yes\";s:19:\"studentgroup_delete\";s:3:\"yes\";s:8:\"complain\";s:3:\"yes\";s:12:\"complain_add\";s:3:\"yes\";s:13:\"complain_edit\";s:3:\"yes\";s:15:\"complain_delete\";s:3:\"yes\";s:13:\"complain_view\";s:3:\"yes\";s:20:\"certificate_template\";s:3:\"yes\";s:24:\"certificate_template_add\";s:3:\"yes\";s:25:\"certificate_template_edit\";s:3:\"yes\";s:27:\"certificate_template_delete\";s:3:\"yes\";s:25:\"certificate_template_view\";s:3:\"yes\";s:10:\"sociallink\";s:3:\"yes\";s:14:\"sociallink_add\";s:3:\"yes\";s:15:\"sociallink_edit\";s:3:\"yes\";s:17:\"sociallink_delete\";s:3:\"yes\";s:18:\"mailandsmstemplate\";s:3:\"yes\";s:22:\"mailandsmstemplate_add\";s:3:\"yes\";s:23:\"mailandsmstemplate_edit\";s:3:\"yes\";s:25:\"mailandsmstemplate_delete\";s:3:\"yes\";s:23:\"mailandsmstemplate_view\";s:3:\"yes\";s:6:\"backup\";s:3:\"yes\";s:6:\"addons\";s:3:\"yes\";s:16:\"posts_categories\";s:3:\"yes\";s:20:\"posts_categories_add\";s:3:\"yes\";s:21:\"posts_categories_edit\";s:3:\"yes\";s:23:\"posts_categories_delete\";s:3:\"yes\";s:5:\"posts\";s:3:\"yes\";s:9:\"posts_add\";s:3:\"yes\";s:10:\"posts_edit\";s:3:\"yes\";s:12:\"posts_delete\";s:3:\"yes\";s:5:\"pages\";s:3:\"yes\";s:9:\"pages_add\";s:3:\"yes\";s:10:\"pages_edit\";s:3:\"yes\";s:12:\"pages_delete\";s:3:\"yes\";s:12:\"frontendmenu\";s:3:\"yes\";s:7:\"setting\";s:3:\"yes\";s:16:\"frontend_setting\";s:3:\"yes\";s:15:\"paymentsettings\";s:3:\"yes\";s:11:\"smssettings\";s:3:\"yes\";s:12:\"emailsetting\";s:3:\"yes\";s:11:\"marksetting\";s:3:\"yes\";s:9:\"candidate\";s:3:\"yes\";s:13:\"candidate_add\";s:3:\"yes\";s:14:\"candidate_edit\";s:3:\"yes\";s:16:\"candidate_delete\";s:3:\"yes\";s:14:\"candidate_view\";s:3:\"yes\";s:7:\"sponsor\";s:3:\"yes\";s:11:\"sponsor_add\";s:3:\"yes\";s:12:\"sponsor_edit\";s:3:\"yes\";s:14:\"sponsor_delete\";s:3:\"yes\";s:12:\"sponsor_view\";s:3:\"yes\";s:11:\"sponsorship\";s:3:\"yes\";s:15:\"sponsorship_add\";s:3:\"yes\";s:16:\"sponsorship_edit\";s:3:\"yes\";s:18:\"sponsorship_delete\";s:3:\"yes\";s:17:\"sponsorshipreport\";s:3:\"yes\";s:30:\"onlineexamquestionanswerreport\";s:3:\"yes\";s:15:\"semester_delete\";s:2:\"no\";s:14:\"global_payment\";s:2:\"no\";s:11:\"systemadmin\";s:2:\"no\";s:15:\"systemadmin_add\";s:2:\"no\";s:16:\"systemadmin_edit\";s:2:\"no\";s:18:\"systemadmin_delete\";s:2:\"no\";s:16:\"systemadmin_view\";s:2:\"no\";s:13:\"resetpassword\";s:2:\"no\";s:10:\"bulkimport\";s:2:\"no\";s:8:\"usertype\";s:2:\"no\";s:12:\"usertype_add\";s:2:\"no\";s:13:\"usertype_edit\";s:2:\"no\";s:15:\"usertype_delete\";s:2:\"no\";s:10:\"permission\";s:2:\"no\";s:6:\"update\";s:2:\"no\";}success|s:7:\"Success\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'
WHERE `id` = 'da06ceb9fe57880f2101dbf8acea20916b4e0917'
ERROR - 2021-11-26 22:07:56 --> Severity: Warning --> ini_set(): A session is active. You cannot change the session module's ini settings at this time /home/sssok/public_html/school/main/libraries/Session/Session_driver.php 205
ERROR - 2021-11-26 22:07:56 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: /var/cpanel/php/sessions/ea-php73) Unknown 0
ERROR - 2021-11-26 22:07:56 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('ea691e650a054581eb1f7ec22a3b953d') AS ci_session_lock
