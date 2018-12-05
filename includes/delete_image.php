<?php

session_start();

define("DB_HOST", "localhost:3306");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "social_media_site");

$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);

// assigns the current user id for query
$uid = $_SESSION['u_id'];

// assigns the selected image for deletion
$imgId = $_POST['img_id'];

// for deletion from images table
$sql = "DELETE FROM images WHERE user_id='$uid' AND image_id='$imgId'";

// for removing photo from uploads folder--NOT IMPLEMENTED
$sql2 = "SELECT FROM images WHERE user_id='$uid' AND image_id='$imgId'";

if($conn->query($sql) == TRUE){
		header("Location: ../home.php?deletion=success");
		exit();
	} else {
		header("Location: ../home.php?deletion=error");
		exit();
	}

?>