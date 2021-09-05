<?php

/*
    This file contains database assuming configuration assuming you are running mysql using user "root"
	& passwor=""
*/

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');


//try connecting to database

$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//check the connection_aborted

if($conn == false){
	die('Error:Cannot Connect');
}
	
?>