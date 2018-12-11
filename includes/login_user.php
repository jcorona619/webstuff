<?php

if(isset($_POST['login_button'])) {

	$username = strip_tags($_POST['username']); // Remove html tags

	$password = md5($_POST['pwd']); // Encrypt password

	// Check if user already exists
	$check_query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
	$num_rows = mysqli_num_rows($check_query);

	// Login succesfully
	if($num_rows == 1) {
		$row = mysqli_fetch_array($check_query);
		$_SESSION['u_id'] = $row['user_id'];
		$_SESSION['uname'] = $row['username'];

		// Once login, direct user to home.php
		//header("Location: ../home.php?login=success");
		echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
		exit();
	}
	// Login fail
	else {
		array_push($error_array, "Username or password was incorrect<br>");
	}

}

?>