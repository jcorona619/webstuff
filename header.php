<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Aldrich' rel="stylesheet">
</head>
<body>

<header>
  <nav>
  	<div class="main-wrapper">
  	  <ul>
  	  	<li><a href="index.php">GALLERY</a></li>
  	  </ul>
  	  <div class="nav-login">
  	  		<form method="post" action="includes/login_user.php">
  	  			<input type="text" name="username" placeholder="username/email" required>
  	  			<input type="password" name="pwd" placeholder="password" required>
  	  			<button class="login" type="submit" name="submit">Login</button>
  	  		</form>
  	  </div>
  	</div>
  </nav>
  <hr class="top">
</header>