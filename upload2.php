<?php
/*
define("DB_HOST", "localhost:3306");
define("DB_USR", "root");
define("DB_PSWD", "Qwzztop1!");
define("DB_NAME", "social_media_site");

$conn = new mysqli(DB_HOST,DB_USR,DB_PSWD,DB_NAME);
*/
if(isset($_POST["submit"])){
	$file = $_FILES['image'];

	//Gets all the information about the file: name,size, etc
	$fileName = $_FILES['image']['name'];
	$fileTmpName = $_FILES['image']['tmp_name'];
	$fileSize = $_FILES['image']['size'];
	$fileError = $_FILES['image']['error'];
	$fileType = $_FILES['image']['type'];

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
			move_uploaded_file($fileTmpName, $file_destination);
			header("Location: upload_test.php?Upload Success!");
			//header("location: upload_test.html");
		} else{
			echo "Error in uploading file...";
		}

	} else {
		echo "Incorrect File Type.";
	}
}

?>