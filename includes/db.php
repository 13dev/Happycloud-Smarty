<?php
$db_host = 'localhost'; 
$db_user = 'happyclo_smarty';
$db_pass = '123456qwerty';
$db_name = 'happyclo_smarty';

//Create mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
if(!$mysqli){
	
	echo "erro DB";
}
?>