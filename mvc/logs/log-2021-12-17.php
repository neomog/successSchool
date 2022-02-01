<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-12-17 08:56:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sssok_portal.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-17 08:56:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/sssok/public_html/school/mvc/models/Conversation_m.php 42
ERROR - 2021-12-17 09:33:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2021-12-17 09:33:13 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2021-12-17 09:56:06 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2021-12-17 11:34:48 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2021-12-17 18:36:51 --> 404 Page Not Found: Apple-touch-iconpng/index
