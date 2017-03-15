<?php
	include('db/config.php');
	session_start();

	if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		$userid = $_SESSION['userid'];
	} else {
		header("location: index.php");
	}
?>