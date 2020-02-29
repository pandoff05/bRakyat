<?php
	include("dbconn.php");
	include("session.php");
	
	$filename = $_POST["filename"];
	$type = $_POST["type"];
	
	$dir = '../MinuteMeetingUpload/';
	$image= addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$image_name= addslashes($_FILES['file']['name']);
	$target_file = $dir . basename($image_name);
	$image_size= getimagesize($_FILES['file']['tmp_name']);

	move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
	$location='../MinuteMeetingUpload/' . $_FILES['file']['name'];

	
	
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$time = date("Y-m-d H:i:s");
	
	
	
	$sql0 = "INSERT INTO min (min_fname, min_update, type, min_floc, min_staffid)
			 values ('$filename','$time', '$type', '$location' , '".$_SESSION["staffid"]."')";
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));
			 
	header("Location:../common/admin/minutemeetingAdmin.php")
			 
			 
			 
			 
	?>