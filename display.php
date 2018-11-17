<?php

//include_once "style.css";


define("DB_HOST", "localhost:3306");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "social_media_site");

$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);

/* orders images by most recently uploaded */
$sql = "SELECT * FROM images ORDER BY uploaded_at DESC";

$image = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($image)){
	/* Get usernames for each image */
	$user_id = $row['user_id'];
	$sql_uname = "SELECT username FROM users WHERE user_id='$user_id'";
	$id = mysqli_query($conn,$sql_uname);

	$row_id = mysqli_fetch_assoc($id);

	$arr = explode('_',$row['image_name'],2);
	$imgName = $arr[0];


	echo "<html>";
	echo "<body>";
	echo	"<div class='responsive'>";
	echo      "<div class='gallery'>";
	echo 		  "<a target='_blank' href='uploads/" .$row['image_name']."'>";
	echo 		  '<img src="uploads/'.$row['image_name'].'" width="600" height="400"/>';
	echo   		  "</a>";
	echo        "<div class='desc'>Name: " . $imgName . "</div>";
	echo        "<div class='desc'>User: " . $row_id['username'] . "</div>"; //$_SESSION['uname']
	echo        "<div class='desc'>Date of Photo: " . $row['uploaded_at'] . "</div>";
	echo      "</div>";
	echo    "</div>";
	echo "</body>";
	echo "</html>";
}

//$img = '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>'; //THIS WORKS
?>