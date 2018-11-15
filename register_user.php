<?php

//include('register.html');

echo "Register Page";

echo "<br>";
echo "<br>";

define("DB_HOST", "localhost:3306");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "socialmediasite");

$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);

/*
echo $_POST["user_id"];
echo $_POST["fname"];
echo $_POST["lname"];
echo $_POST["email"];
echo $_POST["pswrd"];
*/

if($conn->connect_error){
	die("connection failed:" .$conn->connect_error);
}

$sql = "INSERT INTO users(user_id,fname,lname,email,password)
			VALUES('$_POST[user_id]','$_POST[fname]',
				   '$_POST[lname]','$_POST[email]','$_POST[pswrd]')";

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

?>
