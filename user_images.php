<?php
include_once "user_header.php";
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
  <title>Delete Image</title>
    <style>
      div.gallery {
        border: 5px solid #ccc;
      }

      div.gallery:hover {
        border: 5px solid #777;
      }

      div.gallery img {
        width: 100%;
        height: 400px;
        object-fit: cover;
      }

      div.desc {
        font-family: "Aldrich";
        padding: 15px;
        text-align: center;
        background-color: white;
        padding: 10px;
        background: rgba(255,255,255,0.6);
      }

      * {
        box-sizing: border-box;
      }

      .responsive {
        padding: 0 6px;
        float: left;
        width: 24.99999%;
      }

      @media only screen and (max-width: 700px) {
        .responsive {
          width: 49.99999%;
          margin: 6px 0;
        }
      }

      @media only screen and (max-width: 500px) {
        .responsive {
          width: 100%;
        }
      }

      .clearfix:after {
        content: "";
        display: table;
        clear: both;
      }
      h1{
        font-size: 200%;
        padding-left: 40px;
        padding-bottom: 10px;
      }
    </style>
  </head>
  <h1> CHOOSE A PHOTO TO DELETE</h1>
</html>

<?php

define("DB_HOST", "localhost:3306");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "social_media_site");

$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);

$uid = $_SESSION['u_id'];

$sql = "SELECT * FROM images WHERE user_id='$uid'";

$image = mysqli_query($conn,$sql);


while($row = mysqli_fetch_assoc($image)){
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
	echo "<html>";
	echo "<body>";
	echo	"<div class='responsive'>";
	echo      "<div class='gallery'>";
	echo 		  '<img src="uploads/'.$row['image_name'].'" width="600" height="400"/>';
  echo        "<div class='desc'> " . $imgName . "</div>";
	echo        "<div class='desc'>";
	echo          '<form method="post" action="includes/delete_image.php">';
	echo          '<input type="submit" name="delete" value="delete"/>';
  echo          '<input type="hidden" name="img_id" value="'.$row['image_id'].'"/>';
	echo          '</form>';
	echo        "</div>";
	echo      "</div>";
	echo    "</div>";
	echo "</body>";
	echo "</html>";
}

?>