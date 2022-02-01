<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-22 10:12:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-22 10:12:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-22 10:27:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-22 10:27:27 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-22 10:28:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/sssok/public_html/school/mvc/helpers/site_helper.php 41
ERROR - 2021-11-22 10:28:49 --> Severity: Notice --> Trying to get property 'status' of non-object /home/sssok/public_html/school/mvc/controllers/Setting.php 256
ERROR - 2021-11-22 10:28:49 --> Severity: Notice --> Trying to get property 'message' of non-object /home/sssok/public_html/school/mvc/controllers/Setting.php 257
ERROR - 2021-11-22 10:28:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sssok/public_html/school/main/core/Exceptions.php:271) /home/sssok/public_html/school/main/helpers/url_helper.php 564
ERROR - 2021-11-22 10:29:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/sssok/public_html/school/mvc/helpers/site_helper.php 41
ERROR - 2021-11-22 10:29:11 --> Severity: Notice --> Trying to get property 'status' of non-object /home/sssok/public_html/school/mvc/controllers/Setting.php 256
ERROR - 2021-11-22 10:29:11 --> Severity: Notice --> Trying to get property 'message' of non-object /home/sssok/public_html/school/mvc/controllers/Setting.php 257
ERROR - 2021-11-22 10:29:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sssok/public_html/school/main/core/Exceptions.php:271) /home/sssok/public_html/school/main/helpers/url_helper.php 564
ERROR - 2021-11-22 10:29:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-22 10:29:37 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-22 10:30:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-22 10:30:20 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-22 10:31:27 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/sssok/public_html/school/mvc/helpers/site_helper.php 41
ERROR - 2021-11-22 10:31:27 --> Severity: Notice --> Trying to get property 'status' of non-object /home/sssok/public_html/school/mvc/controllers/Setting.php 256
ERROR - 2021-11-22 10:31:27 --> Severity: Notice --> Trying to get property 'message' of non-object /home/sssok/public_html/school/mvc/controllers/Setting.php 257
ERROR - 2021-11-22 10:31:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sssok/public_html/school/main/core/Exceptions.php:271) /home/sssok/public_html/school/main/helpers/url_helper.php 564
ERROR - 2021-11-22 10:33:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-22 10:33:54 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-22 10:54:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-22 10:54:05 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-22 10:56:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-22 10:56:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-11-22 10:58:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/sssok/public_html/school/mvc/helpers/site_helper.php 41
ERROR - 2021-11-22 10:58:11 --> Severity: Notice --> Trying to get property 'status' of non-object /home/sssok/public_html/school/mvc/controllers/Setting.php 256
ERROR - 2021-11-22 10:58:11 --> Severity: Notice --> Trying to get property 'message' of non-object /home/sssok/public_html/school/mvc/controllers/Setting.php 257
ERROR - 2021-11-22 10:58:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/sssok/public_html/school/main/core/Exceptions.php:271) /home/sssok/public_html/school/main/helpers/url_helper.php 564
ERROR - 2021-11-22 11:44:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-22 11:44:42 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
