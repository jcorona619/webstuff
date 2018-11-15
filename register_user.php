<?php

echo "Register Page";

echo "<br>";
echo "<br>";

//$servername = "localhost:3306";
//$username = "root";
//$password = "Qwzztop1!";
//$dbname = "socialmediasite";
define("DB_HOST", "localhost:3306");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "socialmediasite");

//$conn = new mysqli($servername, $username, $password,$dbname);
$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);

if($conn->connect_error){
	die("connection failed:" .$conn->connect_error);
}

//mysql_select_db("socialmediasite");

$sql = "INSERT INTO users(user_id,email,password,sex,age)
			VALUES('hellod','hellod@site.com','33322','F',21)";

if($conn->query($sql) == TRUE){
	echo "New record recorded successfully";
	echo "<br>";
	echo "<br>";
} else {
	echo "Error: " . $sql . $conn->error;
	echo "<br>";
	echo "<br>";
}

echo "Connection Successful!";

?>