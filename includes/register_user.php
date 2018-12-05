<?php

session_start();

define("DB_HOST", "localhost:3306");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "social_media_site");

//Connects to database
$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);

//get variables from form
$username = test_input($_POST['username']);
$fname = test_input($_POST['fname']);
$lname = test_input($_POST['lname']);
$email = test_input($_POST['email']);
//hash password
$password = md5($_POST['pswrd']);

if($conn->connect_error){
	die("connection failed:" .$conn->connect_error);
}

//query for insertion
$sql = "INSERT INTO users(username,fname,lname,email,password)
			VALUES('$username','$fname','$lname','$email','$password')";

if($conn->query($sql) == TRUE){
	$sql = "SELECT * FROM users WHERE username='$username'"; //query users table to retrieve user_id,username
	$id = mysqli_query($conn,$sql); 						 //query
	$row = mysqli_fetch_assoc($id); 						 //gets matching row from users table
	$_SESSION['u_id'] = $row['user_id']; 					 //assigns user_id to a session variable for image uploads
	$_SESSION['uname'] = $username;		 					 //assigns username for currently logged in user 
	header("Location: ../home.php?register=success");
	exit();
} else {
	echo "Error: " . $sql . $conn->error;
}



/* Handles unnecessary characters (spaces,tabs,etc), gets rid of backslashes
     and catches and html characters from executing in the form */
  function test_input($data){
  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
  }

?>