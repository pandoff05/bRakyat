<?php
	include("session.php");
	include("oapsconn.php");
	
	$studID = $_POST["studID"];
	$phone = $_POST["phone"];
	$home = $_POST["home"];
	$room = $_POST["room"];
	$gpa = $_POST["gpa"];
	$cgpa = $_POST["cgpa"];
	$club = $_POST["club"];
	$pos = $_POST["pos"];
	
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$time = date("Y-m-d H:i:s");
	
	$sql0 = "update users set u_phone = '".$phone."', u_homephone = '".$home."', room_num = '".$room."', gpa = '".$gpa."', cgpa = '".$cgpa."', updated_at = '".$time."' where studID = '".$studID."' " ;
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error1: " .mysqli_error($dbconn)) ;
	
	$_SESSION["phone"] = $phone;
	$_SESSION["home"] = $home;
	$_SESSION["room"] = $room;
	$_SESSION["gpa"] = $gpa;
	$_SESSION["cgpa"] = $cgpa;
	
	$sql1 = "insert into extracurricular (pos_id, club_id, user_id) values ('".$pos."', '".$club."', '".$_SESSION["id"]."')";
	$query1 = mysqli_query($dbconn, $sql1) or die ("Error2: " .mysqli_error($dbconn)) ;
	
	header("Location:../common/public/profile.php");
?>