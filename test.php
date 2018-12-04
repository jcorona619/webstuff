<?php

if(isset($_POST["submit"])){
	$file = $_FILES['image'];

	//Gets all the information about the file: name,size, etc
	*$fileName = $_FILES['image']['name'];
	$fileTmpName = $_FILES['image']['tmp_name'];
	$fileSize = $_FILES['image']['size'];
	$fileError = $_FILES['image']['error'];
	$fileType = $_FILES['image']['type'];
	$id = $_SESSION['u_id'];

	$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

	//Gets the extension of the file
	*$fileExt = explode('.', $fileName);

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

?>