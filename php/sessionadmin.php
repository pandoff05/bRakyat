<?php
	session_start() ;
	
	if(!isset($_SESSION["staffID"])) {
		header("Location: ../index.php") ;
	}
	else {
		$name = $_SESSION["name"];
	}
?>