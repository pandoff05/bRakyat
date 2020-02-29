<?php
	include("oapsconn.php");
	
	$adminID = $_POST["adminID"];
	$pwd = md5($_POST["pwd"]);
	
	$sql0 = "select * from users where staffID = '".$adminID."'" ;
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error0 : ".mysqli_error($dbconn));
	$rows0 = mysqli_num_rows($query0);
	
	if($rows0 != 1) {
		header("Location:../index.php");
	}
	else {
		session_start();
		
		while($rows1 = mysqli_fetch_assoc($query0)) {
			$_SESSION["id"] = $rows1["u_id"];
			$_SESSION["name"] = $rows1["u_fullname"];
			$_SESSION["nric"] = $rows1["u_nric"];
			$_SESSION["staffID"] = $rows1["staffID"];
			
			
			header("Location:../common/admin/dashboardAdmin.php");
		}
	}
	mysqli_close($dbconn) ;
?>