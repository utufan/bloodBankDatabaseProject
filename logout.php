<?php
	session_start();
	session_unset();
	session_destroy();
	$_SESSION['status'] = "DEACTIVE";
	header("Location: homepage.php");
?>