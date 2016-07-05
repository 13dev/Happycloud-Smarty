<?php

error_reporting (6143);


define('db_hostname', 'localhost');
define('db_username', 'root');
define('db_password', '');
define('db_database', 'happyclo_smarty');



define('SCRIPT_URL', 'domainname.com'); 
define('LANGUAGE', 'pt'); 
define('LONG_FILE_NAME', 5); 

define('TEMPLATE_FOLDER', 'template');
define('DIR_TEMPLATE', ROOT.'/'.TEMPLATE_FOLDER);
define('DIR_TEMPLATE_VAR', './'.TEMPLATE_FOLDER.'/templates');
define('DIR_TEMPLATE_IMGS', DIR_TEMPLATE_VAR.'/images');
define('USER_CAN_REGISTER', 'true');


define('LOCALE_DIR', ROOT .'/locale'); 
$supported_locales = array('en_US'); 
$encoding = 'UTF-8'; 
$locale = 'en_US'; 
$domain = 'messages';

/*
 commons.php
*/

$max_file_size='1024M';//  MAX_FILE_SIZE in bytes

$max_data_for_user='2046M';// MAX_DATA_FOR_USER in byte
?>
