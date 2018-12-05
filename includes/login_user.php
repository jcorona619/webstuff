<?php

echo "login page";
echo "<br>";
//include 'db_connect.php';
define("DB_HOST", "localhost:3306");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "social_media_site");

$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);

if($conn->connect_error){
	die("connection failed:" .$conn->connect_error);
} else {
	echo "connection successful!";
}
echo "<br>";

$username = test_input($_POST['username']);
$pwd = $_POST['pwd'];
//hashes password for comparison to db password
$pwdCheck = md5($pwd);

$sql = "SELECT * FROM users WHERE username='$username'";


$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);  //returns number of rows that match query
if($resultCheck < 1){
	header("Location: ../index.php?login=error_usrname");
	exit();
} else {
	if($row = mysqli_fetch_assoc($result)){
		//compares entered password to stored password
		echo "$pwdCheck";
		if($pwdCheck !== $row['password']){
			header("Location: ../index.php?login=error_pwd");
			exit();
		} elseif ($pwdCheck == true){
			//login user
			session_start();
			$_SESSION['u_id'] = $row['user_id'];	// assigns seesion varibles for user logging in
			$_SESSION['uname'] = $row['username'];
			header("Location: ../home.php?login=success");
			exit();
		}
	}
}

function test_input($data){ //removes unecessary input from login form
  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
  }
?>