<?php

session_start();

define("DB_HOST", "localhost:3306");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "social_media_site");

$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);

$imageName = $_POST["img_name"];

//Gets all the information about the file: name,size, etc
$file = $_FILES['image'];
$fileName = $_FILES['image']['name'];
$fileTmpName = $_FILES['image']['tmp_name'];
$fileSize = $_FILES['image']['size'];
$fileError = $_FILES['image']['error'];
$fileType = $_FILES['image']['type'];

//Gets id for current user for foreign key for images table
$id = $_SESSION['u_id'];

//Gets the extension of the file
$fileExt = explode('.', $fileName);

//Converts any extension to lower case for consistency
$fileActualExt = strtolower(end($fileExt));

//Only allows specific file types
$allowed = array('jpg','jpeg','png');

//get the content of the image and then add slashes to it
$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

//creates a unique file name to store the photos in the uploads/ folder
$fileNameNew = $imageName . "_" . $id . "_" . uniqid() .  "." . $fileActualExt;
$imageName = $fileNameNew; // imageName_userId_uniquieId.ext

//insert the user_id, image name, and image content in image table
$insert_image="INSERT INTO images(user_id,image,image_name) VALUES('$id','$image','$imageName')";
//Check for correct file types
if(in_array($fileActualExt, $allowed)){
	if($fileError === 0){
		$file_destination = 'uploads/' . $fileNameNew;			//assigns image destination	
		move_uploaded_file($fileTmpName, $file_destination);	//Puts image into the uploads directory
		if($conn->query($insert_image) == TRUE){
			header("Location: home.php?upload=success");
			exit();
		} else {
			header("Location: home.php?upload=error");
			exit();
		}
	}
}

?>