<?php

session_start();

define("DB_HOST", "localhost:3306");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "social_media_site");

$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);

$imageName = $_FILES["image"]["name"];

//get the content of the image and then add slashes to it
$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

$id = $_SESSION['u_id'];

//insert the image name and image content in image table
$insert_image="INSERT INTO images(user_id,image,image_name) VALUES('$id','$image','$imageName')";

if($conn->query($insert_image) == TRUE){
	header("Location: home.php?upload=success");
	exit();
	echo "New record created successfully";
	echo "<br>";
	echo "<br>";
} else {
	echo "Error: " . $insert_image . $conn->error;
	echo "<br>";
	echo "<br>";
}
/*
if(isset($_POST["submit"])){
	$file = $_FILES['image'];

	//Gets all the information about the file: name,size, etc
	$fileName = $_FILES['image']['name'];
	$fileTmpName = $_FILES['image']['tmp_name'];
	$fileSize = $_FILES['image']['size'];
	$fileError = $_FILES['image']['error'];
	$fileType = $_FILES['image']['type'];
	$id = $_SESSION['u_id'];
	$imageName = $_POST['img_name'];

	$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

	echo $fileName;
	echo $fileTmpName;
	echo $fileError;
	echo $fileType;
	echo $id;


	//Gets the extension of the file
	$fileExt = explode('.', $fileName);

	//Converts any extension to lower case for consistency
	$fileActualExt = strtolower(end($fileExt));

	//Only allows specific file types
	$allowed = array('jpg','jpeg','png');

	//Check for correct file types
	if(in_array($fileActualExt, $allowed)){
		if($fileError === 0){
			$fileNameNew = uniqid('',TRUE) . "." . $fileActualExt;
			$file_destination = 'uploads/' . $fileNameNew;
			$insert_image="INSERT INTO images(image,image_name) VALUES('$image','$imageName')";
			move_uploaded_file($fileTmpName, $file_destination);
			$conn->query($insert_image)
			//header("Location: upload_test.php?Upload Success!");
			//header("location: upload_test.html");
		} else{
			echo "Error in uploading file...";
		}

	} else {
		echo "Incorrect File Type.";
	}
}
*/
?>