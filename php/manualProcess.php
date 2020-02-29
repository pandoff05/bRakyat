<?php
	include("dbconn.php");
	include("session.php");
	
	$filename = $_POST["filename"];
    $description = $_POST["description"];
    $department = $_POST["department"];
	
	$dir = '../ManualManagementUpload/';
	$image= addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$image_name= addslashes($_FILES['file']['name']);
	$target_file = $dir . basename($image_name);
	$image_size= getimagesize($_FILES['file']['tmp_name']);

	move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
	$location='../ManualManagementUpload/' . $_FILES['file']['name'];

	
	
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$time = date("Y-m-d H:i:s");
	
	
	
	$sql0 = "INSERT INTO man (man_fname, man_update, man_dpt, man_floc, man_staffid,man_desc)
			 values ('$filename','$time', '$department', '$location' , '".$_SESSION["staffid"]."','$description')";
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));
			 
	header("Location:../common/admin/manualmgtAdmin.php")
			 
			 
			 
			 
	?>