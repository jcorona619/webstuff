<?php

require "includes/db_connect.php";
require "includes/register_user.php";
require "includes/login_user.php";

?>

<html>

<head>

	<title>Gallery</title>

  <!--CSS-->
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

  	  		<form action="index.php" method="POST">

  	  			<input type="text" name="username" placeholder="Username" required>

  	  			<input type="password" name="pwd" placeholder="Password" required>

            <?php if(in_array("Username or password was incorrect<br>", $error_array)) echo "Username or password was incorrect<br>"; ?>

  	  			<button class="login" type="submit" name="login_button">Login</button>

  	  		</form>

  	  </div>

  	</div>

  </nav>

  <hr class="top">

</header>