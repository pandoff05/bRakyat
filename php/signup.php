<html>
<body>
<?php
	include("dbconn.php");
	$name = addslashes(strtoupper($_POST["name"]));
	$staffID = $_POST["staffID"];
	$pwd = md5($_POST["pwd"]);
	$gender = $_POST["gender"];
	$phone = $_POST["phone"];
	$department = $_POST["department"];
	
	
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$time = date("Y-m-d H:i:s");
	
	$sql0 = "select * from systemuser where staffid = '".$staffID."'" ;
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error0: ".mysqli_error($dbconn));
	$rows0 = mysqli_num_rows($query0);
	
	if($rows0 > 0) {
		echo "
		<script type\ = 'text/javascript\'>
			alert('The account has already existed') ;
		</script>";
		header("Location:../index.php");
	}
	else {
		$sql1 = "insert into systemuser (staffid, role_roleid, password, firstname, phone_no, department, gender)
				 value ('".$staffID."', '2', '".$pwd."',  '".$name."', '".$phone."', '".$department."', '".$gender."')";
		$query1 = mysqli_query($dbconn, $sql1) or die ("Error1: ".mysqli_error($dbconn));
		echo "
		<script type = 'text/javascript'>
			alert('Your Account Has Been Successfully Created') ;
		</script>";
		header("Location:../index.php");
	}
	
	
	mysqli_close($dbconn) ;
?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>