<?php
session_start();
if(isset($_SESSION['u_id'])){
	include_once "user_header.php";
}else{
	include_once "header.php";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 align="center" style="padding: 20px">Delete Account</h1>
	<form class="signup-form" method="post" action="includes/delete_user.php">
		<p style="padding-bottom: 15px">Enter your login info to delete account</p>
		<input type="text" name="username" placeholder="username" required>
		<input type="password" name="pwd" placeholder="password" required>
		<button type="submit" name="submit" value="Delete Account">
	</form>

</body>
</html>
