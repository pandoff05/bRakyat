<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<title>OAPS</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="css/common.css" rel="stylesheet" />
	</head>
	<body id="loginbody">
		<div class="login-form">
			<form id= "login" action="php/login.php" method="post">
				<center><img src="asset/BRL.png" alt="oaps logo" height="250" width="250"></center>
				<div class="form-group row">
					<label for="studID" class="col-sm-3 col-form-label">Staff ID</label>
					<div class="col-sm-9">
						<input type="text" id="staffID" name="staffID" placeholder="Staff ID" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label for="pwd" class="col-sm-3 col-form-label">Password</label>
					<div class="col-sm-9">
						<input type="password" id="pwd" name="pwd" placeholder="Password" class="form-control">
					</div>
				</div>
				<center>
					<input type="submit" class="btn btn-primary" name="Login" id="submitBtn"><br>
					
				</center>
				
				<a href="#signupModal" class="right" data-toggle="modal" data-target="#signupModal">Sign Up Now</a>
				
			</form>
		</div>
		
		<div class="modal fade" id="signupModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h2>Sign Up</h2>
						<img src="asset/BRL.png" class="right" width="50px" height="50px">
					</div>
					<div class="modal-body">
						<form id="signup" action="php/signup.php" method="POST">
						
							<div class="form-group row">
								<label for="name" class="col-sm-3 col-form-label">Fullname</label>
								<div class="col-sm-9">
									<input type="text" id="name" name="name" placeholder="Fullname" class="form-control" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="nric" class="col-sm-3 col-form-label">Staff ID</label>
								<div class="col-sm-9">
									<input type="text" id="staffID" name="staffID" placeholder="Staff ID" class="form-control" required>
								</div>
							</div>

							<div class="form-group row">
								<label for="Pwd" class="col-sm-3 col-form-label">Password</label>
								<div class="col-sm-9">
									<input type="password" id="Pwd" name="pwd" placeholder="Password" class="form-control" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="studID" class="col-sm-3 col-form-label">Gender</label>
								<div class="col-sm-9">
									<input type="radio" id="gender" name="gender" value="male"  required>Male</input><br>
									<input type="radio" id="gender" name="gender" value="female" required>Female</input>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="part" class="col-sm-3 col-form-label">Phone Number</label>
								<div class="col-sm-9">
									<input type="text" id="phone" name="phone" placeholder="Phone No" class="form-control" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="course" class="col-sm-3 col-form-label">Department</label>
								<div class="col-sm-9">
									<select id="department" name="department" class="form-control" required>
										<option>Select Department</option>
										<option value="MIS">MIS</option>
										<option value="report">REPORT</option>

									</select>
								</div>
							</div>
				
							<div id="msg" class="right"></div>
							
							<br><br>
							<input type="submit" class="btn btn-primary right" style="margin: 0 0 10px 10px" value="Submit">
							<input type="reset" class="btn btn-secondary right" value="Reset">
							
							<button type="button" class="btn btn-secondary left" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 
		<div class="modal fade" id="adminModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h2>Admin Login</h2>
						<img src="asset/oaps.png" class="right" width="50px" height="50px">
					</div>
					<div class="modal-body">
						<form id="adminLogin" action="php/loginadmin.php" method="post">
							<div class="form-group row">
								<label for="adminID" class="col-sm-3 col-form-label">Admin ID</label>
								<div class="col-sm-9">
									<input type="text" id="adminID" name="adminID" placeholder="Admin ID" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="pwd" class="col-sm-3 col-form-label">Password</label>
								<div class="col-sm-9">
									<input type="password" id="pwd" name="pwd" placeholder="Password" class="form-control">
								</div>
							</div>
							
							<center>
								<input type="submit" class="btn btn-primary" name="Login" id="submitBtn"><br>
								<input type="checkbox" name="remember"> Remember Me
							</center>
						
							<br><br>
							<button type="button" class="btn btn-secondary left" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		-->
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){
				$("#Cpwd").keyup(function(){
					 if ($("#Pwd").val() != $("#Cpwd").val()) {
						 $("#msg").html("Password do not match").css("color","red");
					 }else{
						 $("#msg").html("Password matched").css("color","green");
					}
			  });
		});
		</script> 	
	</body>
</html>