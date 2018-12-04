<?php

session_start();

if(isset($_SESSION['uname'])){

	unset($_SESSION['u_id']);	//releases session varaible for user
	unset($_SESSION['uname']);  //releases session varaible for user

	header("Location: ../index.php?logout=success");
	exit();
} else {
	header("Location: ../home.php?logout=error");
}

?>