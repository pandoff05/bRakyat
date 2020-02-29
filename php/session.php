<?php
	session_start() ;
	
	if(!isset($_SESSION["staffid"])) {
		header("Location: ../index.php") ;
	}
	else {
		$name = $_SESSION["firstname"];
	}
?>