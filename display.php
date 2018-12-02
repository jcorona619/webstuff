<?php

echo "display page";

define("DB_HOST", "localhost:3306");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "social_media_site");

$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);

$sql = "SELECT * FROM images";

echo $sql;
echo "<br>";

$id = mysqli_query($conn,$sql);
//$row = mysqli_fetch_assoc($id);

echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>';
while($row = mysqli_fetch_assoc($id)){
	echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>'; //THIS WORKS

	//NEEDS FORMATTING
	/*echo "
	<div class='responsive'>
      <div class='gallery'>
          <img src='data:image/jpeg;base64,'.base64_encode($row['image'])' alt='$row['image_name'] width='600' height='400'>
        <div class='desc'>Author: </div>
        <div class='desc'>Location: </div>
        <div class='desc'>Date of Photo: </div>
      </div>
    </div>
	";*/
	//printf ("User Id: %d  |  Image Id: %d |  Upload Date: (%s)\n", $row['user_id'],$row['image_id'], $row['uploaded_at']);
	echo "<br>";
}


?>