<?php

//include('register.html');

echo "Register Page";

echo "<br>";
echo "<br>";

define("DB_HOST", "localhost:3306");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "social_media_site");

$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);

$username = test_input($_POST['username']);
$fname = test_input($_POST['fname']);
$lname = test_input($_POST['lname']);
$email = test_input($_POST['email']);
$password = md5($_POST['pswrd']);

if($conn->connect_error){
	die("connection failed:" .$conn->connect_error);
}

$sql = "INSERT INTO users(username,fname,lname,email,password)
			VALUES('$username','$fname','$lname','$email','$password')";

if($conn->query($sql) == TRUE){
	echo "New record created successfully";
	echo "<br>";
	echo "<br>";
} else {
	echo "Error: " . $sql . $conn->error;
	echo "<br>";
	echo "<br>";
}

echo "Connection Successful!";

/* Handles unnecessary characters (spaces,tabs,etc), gets rid of backslashes
     and catches and html characters from executing in the form */
  function test_input($data){
  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
  }

?>