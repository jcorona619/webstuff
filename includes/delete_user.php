<?php

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

$username = test_input($_POST['username']);
$pwd = $_POST['pwd'];
//hashes password for comparison to db password
$pwdCheck = md5($pwd);

// for deletion from images table
$sql = "SELECT * FROM users WHERE username='$username'";

$result = mysqli_query($conn,$sql);

$resultCheck = mysqli_num_rows($result);  //returns number of rows that match query
if($resultCheck < 1){
	header("Location: ../delete_account.html?login=error_usrname");
	exit();
} else {
	if($row = mysqli_fetch_assoc($result)){
		//compares entered password to stored password
		if($pwdCheck !== $row['password']){
			header("Location: ../delete_account.html?login=error_pwd");
			exit();
		} elseif ($pwdCheck == true){
			//gets id of the user
			$uid = $row['user_id'];
			//deletes user and all their photos using cascade delete	
			$delete = "DELETE FROM users WHERE user_id='$uid'";
			if(mysqli_query($conn,$delete)){
				header("Location: ../index.php?acc_delete=success");
				exit();
			}else{
				header("Location: ../delete_account.html?acc_delete=error");
				exit();
			}
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