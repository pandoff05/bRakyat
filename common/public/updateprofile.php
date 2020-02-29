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

				<h1 class="display-4">Update Profile</h1>
				
				<form action="../../php/update.php" method="post">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Name</th>
								<td><input type="text" value="<?php echo $_SESSION["name"]?>" class="form-control" readonly></td>
							</tr>
							<tr>
								<th>Identification Number</th>
								<td><input type="text" value="<?php echo $_SESSION["nric"]?>" class="form-control" readonly></td>
							</tr>
							<tr>
								<th>Matric Number</th>
								<td><input type="text" value="<?php echo $_SESSION["studID"]?>" name="studID" class="form-control" readonly></td>
							</tr>
							<tr>
								<th>Email</th>
								<td>
									<input type="text" value="<?php echo $_SESSION["email"]?>" class="form-control" readonly>
								</td>
							</tr>
							<tr>
								<th>Course</th>
								<td>
									<input type="text" value="<?php echo $_SESSION["course"]?>" class="form-control" readonly>
								</td>
							</tr>
							<tr>
								<th>Part</th>
								<td>
									<input type="text" value="<?php echo $_SESSION["part"]?>" class="form-control" readonly>
								</td>
							</tr>
							<tr>
								<th>Phone Number</th>
								<td>
									<input type="text" class="form-control" placeholder="010-12345678" name="phone">
								</td>
							</tr>
							<tr>
								<th>Home Phone Number</th>
								<td>
									<input type="text" class="form-control" placeholder="03-12345678" name="home">
								</td>
							</tr>
							<tr>
								<th>Room Number</th>
								<td>
									<input type="text" class="form-control" placeholder="block-level-room" name="room">
								</td>
							</tr>
							<tr>
								<th>GPA</th>
								<td>
									<input type="number" class="form-control" name="gpa" step="0.01">
								</td>
							</tr>
							<tr>
								<th>CGPA</th>
								<td>
									<input type="number" class="form-control" name="cgpa" step="0.01">
								</td>
							</tr>
						</tbody>
					</table>
					
					<h2>Extra Curricular Activities</h2>
					<table  class="table table-bordered">
						<tbody>
							<tr>
								<th>Club Name</th>
								<td>
									<select name='club' class='form-control'>
										<?php
											include("../../php/oapsconn.php");
											$sql0 = "select * from club" ;
											$query0 = mysqli_query($dbconn, $sql0) or die ("Error: ".mysqli_error($dbconn)) ;
											$rows0 = mysqli_num_rows($query0) ;
											
											if($rows0 > 0) {
												while($rows1 = mysqli_fetch_assoc($query0)) {
													echo "<option value='".$rows1["club_id"]."'>".$rows1["club_name"]."</option>" ;
												}
											}
										?>
									</select>
								</td>
							</tr>
							<tr>
								<th>Position</th>
								<td>
									<select name='pos' class='form-control'>
										<?php
											include("../../php/oapsconn.php");
											$sql1 = "select * from position" ;
											$query1 = mysqli_query($dbconn, $sql1) or die ("Error: ".mysqli_error($dbconn)) ;
											$rows2 = mysqli_num_rows($query1) ;
											
											if($rows2 > 0) {
												while($rows3 = mysqli_fetch_assoc($query1)) {
													echo "<option value='".$rows3["pos_id"]."'>".$rows3["pos_name"]."</option>" ;
												}
											}
										?>
									</select>
								</td>
							</tr>
						</tbody>
						
					</table>
					
					<input type="submit" class="btn btn-primary right" value="Submit">
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