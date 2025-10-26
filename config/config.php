<?php
$configDB = array();
$configDB["host"] 		= "hoa.mysql.database.azure.com";
$configDB["database"]	= "computer_store";
$configDB["username"] 	= "hoa";
$configDB["password"] 	= "tdc@12345";
define("HOST", "hoa.mysql.database.azure.com");
define("DB_NAME", "computer_store");
define("DB_USER", "hoa");
define("DB_PASS", "tdc@12345");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']);//dia chi website
?>
