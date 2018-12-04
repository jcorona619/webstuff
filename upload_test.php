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
	padding-left: 120px;
	padding-bottom: 10px;
	max-height: 100;
	color: #222;
	overflow: hidden;
}
div.upload_block{
	display: block;
	border: solid grey;
	border-radius: 15px;
	padding: 10px;
	margin-right: 150px;
	overflow: hidden;
	height: 100px;
	background-color: #ccc;
}
	
</style>
</head>
<body>
<div class="upload_block">
<form action="upload2.php" method="post" enctype="multipart/form-data">
	<p>Select image to upload</p>
	<input type="file" name="image">
	<input method="post" type="text" name="img_name" placeholder="Name Photo" required>
	<button type="submit" name="submit">UPLOAD</button>
</form>
</div>

</body>
</html>
