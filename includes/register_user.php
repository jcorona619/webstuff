<?php

// Declare variables
$fname = ""; // First name
$lname = ""; // Last name
$email = ""; // Email
$email2 = ""; // Email 2
$password = ""; // Password 
$password2 = ""; // Password 2 
$error_array = array(); // Holds warning messages

// When click signup_button
if(isset($_POST['signup_button'])) {
	// First Name formating
	$fname = strip_tags($_POST['fname']); // Remove html tags (if possible)
	$fname = str_replace(' ', '', $fname); // Remove spaces
	$fname = ucfirst(strtolower($fname)); // Uppercase first letter

	// Last Name formating
	$lname = strip_tags($_POST['lname']); // Remove html tags (if possible)
	$lname = str_replace(' ', '', $lname); // Remove spaces
	$lname = ucfirst(strtolower($lname)); // Uppercase first letter

	// Username formating
	$username = strip_tags($_POST['username']); // Remove html tags
	$username = str_replace(' ', '', $username); // Remove spaces

	// Email formating
	$email = strip_tags($_POST['email']); // Remove html tags
	$email = str_replace(' ', '', $email); // Remove spaces

	// Confirm Email formating
	$email2 = strip_tags($_POST['email2']); // Remove html tags
	$email2 = str_replace(' ', '', $email2); // Remove spaces

	// Password formating
	$password = strip_tags($_POST['pswrd']); // Remove html tags

	// Confirm Password formating
	$password2 = strip_tags($_POST['pswrd2']); // Remove html tags

	// Email Checking
	if($email == $email2) {
		// Check if email in valid format
		if(filter_Var($email, FILTER_VALIDATE_EMAIL)) {
			$email = filter_var($email, FILTER_VALIDATE_EMAIL);

			// Check if email already exists
			$e_check = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");

			// Count number of row returned
			$num_rows = mysqli_num_rows($e_check);

			// If $num_rows > 0, email already exists in database
			if($num_rows > 0) {
				array_push($error_array, "Email already exists<br>");
			}

		}
		else {
			array_push($error_array, "Invalid email format<br>");
		}

	}
	else {
		array_push($error_array, "Email do not match<br>");
	}


	// Username Checking
	$username_check = mysqli_query($conn, "SELECT email FROM users WHERE username='$username'");
	// Count number of row returned
	$number_rows = mysqli_num_rows($username_check);
	// If $number_rows > 0, username already exists in database
	if($number_rows > 0) {
		array_push($error_array, "Username already exists<br>");
	}


	// First Name checking
	if(strlen($fname) > 25 || strlen($fname) < 2)
		array_push($error_array,"Your first name must be between 2 to 25 characters<br>");

	// Last Name checking
	if(strlen($lname) > 25 || strlen($lname) < 2)
		array_push($error_array, "Your last name must be between 2 to 25 characters<br>");

	//Check password, password2 valid
	if($password != $password2) {
		array_push($error_array,"Your password do not match<br>");
	}
	else {
		if(preg_match('/[^A-za-z0-9]/', $password))
			array_push($error_array, "Your password can only contain English characters or numbers<br>");
	}
	if( strlen($password) > 30 || strlen($password) < 5)
		array_push($error_array, "Your password must be between 5 to 30 characters<br>");


	// If no error, save record into database
	if(empty($error_array)) {
		$password = md5($password); // Encrypt password

		// Save record into database
		$query = mysqli_query($conn, "INSERT INTO users(username,fname,lname,email,password)
					VALUES('$username','$fname','$lname','$email','$password')");

		$sql = "SELECT * FROM users WHERE username='$username'";
		$id = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($id);
		$_SESSION['u_id'] = $row['user_id'];
		$_SESSION['uname'] = $username;

		// Once registered, direct user to home.php
		//header("Location: ../home.php?register=success");
		echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
		exit();

	}
}

?>