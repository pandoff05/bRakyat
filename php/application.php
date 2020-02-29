<?php
	include("oapsconn.php");
	include ("session.php");
	
	$type = $_POST["type"];
	$regnum = $_POST["regnum"];
	
	$dir = '../License/';
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$target_file = $dir . basename($image_name);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
	$location='../License/' . $_FILES['image']['name'];

	$dir2 = '../IdentificationCard/';
	$image= addslashes(file_get_contents($_FILES['myFile2']['tmp_name']));
	$image_name= addslashes($_FILES['myFile2']['name']);
	$target_file = $dir2 . basename($image_name);
	$image_size= getimagesize($_FILES['myFile2']['tmp_name']);

	move_uploaded_file($_FILES['myFile2']['tmp_name'], $target_file);
	$location2='../IdentificationCard/' . $_FILES['myFile2']['name'];

	$dir3 = '../VehicleGrant/';
	$image= addslashes(file_get_contents($_FILES['myFile3']['tmp_name']));
	$image_name= addslashes($_FILES['myFile3']['name']);
	$target_file = $dir3 . basename($image_name);
	$image_size= getimagesize($_FILES['myFile3']['tmp_name']);

	move_uploaded_file($_FILES['myFile3']['tmp_name'], $target_file);
	$location3='../VehicleGrant/' . $_FILES['myFile3']['name'];

	$dir4 = '../ExaminationSlip/';
	$image= addslashes(file_get_contents($_FILES['myFile4']['tmp_name']));
	$image_name= addslashes($_FILES['myFile4']['name']);
	$target_file = $dir4 . basename($image_name);
	$image_size= getimagesize($_FILES['myFile4']['tmp_name']);

	move_uploaded_file($_FILES['myFile4']['tmp_name'], $target_file);
	$location4='../ExaminationSlip/' . $_FILES['myFile4']['name'];

	$dir5 = '../PermissionLetter/';
	$image= addslashes(file_get_contents($_FILES['myFile5']['tmp_name']));
	$image_name= addslashes($_FILES['myFile5']['name']);
	$target_file = $dir5 . basename($image_name);
	$image_size= getimagesize($_FILES['myFile5']['tmp_name']);

	move_uploaded_file($_FILES['myFile5']['tmp_name'], $target_file);
	$location5='../PermissionLetter/' . $_FILES['myFile5']['name'];
	
	$dir6 = '../StudentCard/';
	$image= addslashes(file_get_contents($_FILES['myFile6']['tmp_name']));
	$image_name= addslashes($_FILES['myFile6']['name']);
	$target_file = $dir6 . basename($image_name);
	$image_size= getimagesize($_FILES['myFile6']['tmp_name']);

	move_uploaded_file($_FILES['myFile6']['tmp_name'], $target_file);
	$location6='../StudentCard/' . $_FILES['myFile6']['name'];
	
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$time = date("Y-m-d H:i:s");
	
	$score = 0 ;
	
	if($_SESSION["cgpa"] >= 2.75) {$score = 50; }
	
	$sql0 = "insert into application (user_id, car_type, car_regnum, score, licensecopy, nriccopy, matriccopy, grantcopy, recentexam, permissionletter, status, applied_at)
			 values ('".$_SESSION["id"]."', '".$type."', '".$regnum."', '".$score."', '".$location."', '".$location2."', '".$location3."', '".$location4."', '".$location5."', '".$location6."', '0', '".$time."')";
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn));
			 
	header("Location:../common/public/apply.php")
			 
			 
			 
			 
	?>