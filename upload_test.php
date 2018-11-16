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
	<button type="submit" name="submit">UPLOAD</button>
</form>

</body>
</html>