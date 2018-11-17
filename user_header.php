<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Aldrich' rel="stylesheet">
</head>
<body>

<header>
  <nav>
  	<div class="main-wrapper">
  	  <ul>
  	  	<li><a href="home.php">GALLERY</a></li>
  	  </ul>
  	  <div class="nav-login">
  	  		<form method="post" action="includes/logout.php">
  	  			<button class="logout"  type="submit" name="logout">Logout</button>
  	  		</form>
  	  </div>
  	</div>
  </nav>
  <hr class="top">
</header>