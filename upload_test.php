<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
<title>upload test</title>
<style>

p{
	font-variant: small-caps;
	padding-left: 80px;
	padding-bottom: 5px;
	color: #222;
}
	
</style>
</head>
<body>
<form action="upload2.php" method="post" enctype="multipart/form-data">
	<p>Select image to upload:</p>
	<input type="file" name="image">
	<input method="post" type="text" name="img_name" placeholder="Name Photo" required>
	<button type="submit" name="submit">UPLOAD</button>
</form>

</body>
</html>

<!--
$imageName = $_FILES["image"]["name"];

//get the content of the image and then add slashes to it
$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

//insert the image name and image content in image table
$insert_image="INSERT INTO images(image,image_name) VALUES('$image','$imageName')";

if($conn->query($insert_image) == TRUE){
	echo "New record created successfully";
	echo "<br>";
	echo "<br>";
} else {
	echo "Error: " . $insert_image . $conn->error;
	echo "<br>";
	echo "<br>";
}
-->