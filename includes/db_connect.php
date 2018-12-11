<?php

session_start(); // New session to hold variables

define("DB_HOST", "localhost");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "social_media_site");

// Connection variable
$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);

// Print error if connection fail
if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
}

?>