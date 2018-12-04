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

	//queries users table for displaying the users name who uploaded the photo
	$sql_uname = "SELECT username FROM users WHERE user_id='$user_id'";

	//returns matching row from query
	$id = mysqli_query($conn,$sql_uname);

	//creates array from retrieved users row
	$row_id = mysqli_fetch_assoc($id);

	//splits up photo name into array
	$imgName = explode('_',$row['image_name'],2);
	//assigns the user typed name into variable
	$imgName = $imgName[0];

	//truncates the timestamp for date display
	$date = explode(' ',$row['uploaded_at']);
	$date = $date[0];

	//displays all the current images in the database with the
	// users name, name of the photo, and date uploaded

	echo "<html>";
	echo "<body>";
	echo	"<div class='responsive'>";
	echo      "<div class='gallery'>";
	echo 		  "<a target='_blank' href='uploads/" .$row['image_name']."'>";
	echo 		  '<img src="uploads/'.$row['image_name'].'" width="600" height="400"/>';
	echo   		  "</a>";
	echo        "<div class='desc'>Name: " . $imgName . "</div>";
	echo        "<div class='desc'>User: " . $row_id['username'] . "</div>"; //$_SESSION['uname']
	echo        "<div class='desc'>Date of Photo: " . $date . "</div>";
	echo      "</div>";
	echo    "</div>";
	echo "</body>";
	echo "</html>";
}

//$img = '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>'; //THIS WORKS
?>