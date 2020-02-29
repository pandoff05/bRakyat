<?php
	include("dbconn.php");
	
	$staffID = $_POST["staffID"];
	$pwd = md5($_POST["pwd"]);
	
	
	$sql0 = "select * from systemuser where staffid = '".$staffID."' and password = '".$pwd."'" ;
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error0 : ".mysqli_error($dbconn));
	$rows = mysqli_num_rows($query0);
	$fetch = mysqli_fetch_assoc($query0);

	if($rows != 1) {
		
		echo "<script> window.alert('Account is not registered yet!')</script>";
		header("Location:../index.php");
	}
	else {
		//echo $fetch['role_roleid'];
		
		//admin
		if($fetch['role_roleid'] == 1){
			session_start();
			$_SESSION["staffid"] = $fetch["staffid"];
			$_SESSION["firstname"] = $fetch["firstname"];
			$_SESSION["phone_no"] = $fetch["phone_no"];
			$_SESSION["department"] = $fetch["department"];

			//location admin page
			header("Location:../common/admin/dashboardAdmin.php");

		} 
		//user
		else if($fetch['role_roleid'] == 2){
			echo "zzzz";
			session_start();
			$_SESSION["staffid"] = $fetch["staffid"];
			$_SESSION["firstname"] = $fetch["firstname"];
			$_SESSION["phone_no"] = $fetch["phone_no"];
			$_SESSION["department"] = $fetch["department"];

			//location user page
			//echo "<script> window.location = '../common/public/dashboard.php'</script>";
			header("Location: ../common/public/dashboard.php");

		} 
		
	}
	mysqli_close($dbconn) ; 
?>