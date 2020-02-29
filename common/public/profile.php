<?php include "../../php/session.php" ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<title>OAPS</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="../../css/common.css">
		<link rel="stylesheet" href="../../css/dashboard.css">
		
	</head>
	<body>
		<div class="wrapper">
			<!-- Sidebar  -->
			<nav id="sidebar">
				<div class="sidebar-header">
					<h3>Online Application Parking System</h3>
				</div>

				<ul class="list-unstyled components">
					<p>Hi, <?php echo $name?></p>
					<li>
						<a href="dashboard.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="#oapsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">OAPS</a>
						<ul class="collapse list-unstyled" id="oapsSubmenu">
							<li>
								<a href="apply.php">Application</a>
							</li>
							<li>
								<a href="result.php">Result</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>

			<!-- Page Content  -->
			<div id="content">

				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container-fluid">

						<button type="button" id="sidebarCollapse" class="btn btn-info">
							<i class="fas fa-align-left"></i>
						</button>
						<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fas fa-align-justify"></i>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="nav navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link" href="profile.php"><?php echo $name?></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../php/logout.php">Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>

				<h1 class="display-4">Profile</h1>
				
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th>Name</th>
							<td><?php echo $_SESSION["name"]?></td>
						</tr>
						<tr>
							<th>Identification Number</th>
							<td><?php echo $_SESSION["nric"]?></td>
						</tr>
						<tr>
							<th>Matric Number</th>
							<td><?php echo $_SESSION["studID"]?></td>
						</tr>
						<tr>
							<th>Email</th>
							<td>
								<?php 
									if(empty($_SESSION["email"])) {
										echo " ";
									}
									else {
										echo $_SESSION["email"];
									}
								?>
							</td>
						</tr>
						<tr>
							<th>Course</th>
							<td>
								<?php 
									if(empty($_SESSION["course"])) {
										echo " ";
									}
									else {
										echo $_SESSION["course"];
									}
								?>
							</td>
						</tr>
						<tr>
							<th>Part</th>
							<td>
								<?php 
									if(empty($_SESSION["part"])) {
										echo " ";
									}
									else {
										echo $_SESSION["part"];
									}
								?>
							</td>
						</tr>
						<tr>
							<th>Phone Number</th>
							<td>
								<?php 
									if(empty($_SESSION["phone"])) {
										echo " ";
									}
									else {
										echo $_SESSION["phone"];
									}
								?>
							</td>
						</tr>
						<tr>
							<th>Home Phone Number</th>
							<td>
								<?php 
									if(empty($_SESSION["home"])) {
										echo " ";
									}
									else {
										echo $_SESSION["home"];
									}
								?>
							</td>
						</tr>
						<tr>
							<th>Room Number</th>
							<td>
								<?php 
									if(empty($_SESSION["room"])) {
										echo " ";
									}
									else {
										echo $_SESSION["room"];
									}
								?>
							</td>
						</tr>
						<tr>
							<th>GPA</th>
							<td>
								<?php 
									if(empty($_SESSION["gpa"])) {
										echo " ";
									}
									else {
										echo $_SESSION["gpa"];
									}
								?>
							</td>
						</tr>
						<tr>
							<th>CGPA</th>
							<td>
								<?php 
									if(empty($_SESSION["cgpa"])) {
										echo " ";
									}
									else {
										echo $_SESSION["cgpa"];
									}
								?>
							</td>
						</tr>
					</tbody>
				</table>
				
				<h2>Extra Curricular Activities</h2>
				<table  class="table table-bordered">
					<thead>
						<tr>
							<th>Club Name</th>
							<th>Position</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include "../../php/oapsconn.php" ;
							
							$sql0 = "select * from extracurricular where user_id = '".$_SESSION["id"]."'" ;
							$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn)) ;
							$rows0 = mysqli_num_rows($query0) ;
							
							if($rows0 > 0) {
								while($rows1 = mysqli_fetch_assoc($query0)) {
									echo "
									<tr>
										<th>";
											$sql1 = "select club_abbr from club where club_id = '".$rows1["club_id"]."'" ;
											$query1 = mysqli_query($dbconn, $sql1) or die ("Error: ".mysqli_error($dbconn)) ;
											$rows1 = mysqli_num_rows($query1) ;
											
											if($rows1 > 0) {
												while($rows2 = mysqli_fetch_assoc($query1)) {
													echo $rows2["club_abbr"];
												}
											}
										echo "</th>
										<td>" ;
											$sql2 = "select pos_name from position where pos_id = '".$rows1["pos_id"]."'" ;
											$query2 = mysqli_query($dbconn, $sql2) or die ("Error: ".mysqli_error($dbconn)) ;
											$rows3 = mysqli_num_rows($query2) ;
											
											if($rows3 > 0) {
												while($rows4 = mysqli_fetch_assoc($query2)) {
													echo $rows4["pos_name"];
												}
											}
										echo "</td>
									</tr>" ;
								}
								
							}
							else {
								echo "<p>No extra curricular activities have been set</p>" ;
							}
						?>
					</tbody>
				</table>
				
				<form>
					<input type="button" class="btn btn-primary right"  value="Update" onclick="window.location.href='updateprofile.php'" />
				</form>
			</div>
		</div>
	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
		</script>
	</body>
</html>