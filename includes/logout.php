<?php

session_start();

if(isset($_SESSION['uname'])){

	unset($_SESSION['uname']);

	header("Location: ../index.php?logout=success");
	exit();
} else {
	header("Location: ../home.php?logout=error");
}

?>