<?php 	//include "../../php/session.php";
		include '../../php/dbconn.php';
		session_start();
		if(isset($_SESSION["staffid"])) {
			$name = $_SESSION['firstname'];
		
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<title>BANK RAKYAT</title>
		<!-- <script
			src="https://code.jquery.com/jquery-3.4.1.js"
			integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			crossorigin="anonymous"></script> -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		
		
		<!--DATA TABLES CDN-->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
		
		<!--END DATA TABLE CDN-->

		<link rel="stylesheet" href="../../css/common.css">
		<link rel="stylesheet" href="../../css/dashboard.css">
		
		<style>
		.btn-upload{
			position: -webkit-sticky;
			position: sticky;
			bottom: 10px;
			float: right;
			font-size: 20px;
			border-radius: 30%;
		}
		</style>

	</head>
	<body>
		<div class="wrapper">
			<!-- Sidebar  -->
			<nav id="sidebar">
				<div class="sidebar-header">
				<center><img src="../../asset/BRL.png" alt="oaps logo" height="150" width="150"></center>	
				
				</div>

				<ul class="list-unstyled components">
				<center><h4>BANK RAKYAT MEETING SYSTEM</h4></center><br>

					<!-- <li class="active">
						<a href="dashboard.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li> -->
                    <li>
						<a href="dashboardAdmin.php" > Home</a>
						
					</li>
					<li>
						<a href="minutemeetingAdmin.php" >Minute Meeting</a>
						
					</li>
					<li>
						<a href="manualmgtAdmin.php">Manual Management</a>
						
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
								<li class="nav-item">
									<a class="nav-link" href="profile.php"><?php echo $name?></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="../../php/logout.php">Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>

				<h1 class="display-4">Manual Management</h1>
				<br />

				<form action="departmentProcessAdmin.php" method="POST">
				<div class="form-group row">
				<div class="col-sm-3"> 
				<select id="department" name="department" class="form-control" required>
					<option>Select Department</option>
					<option value="MIS">MIS</option>
					<option value="EXTR">EXTR</option>

				</select>
				</div>
				<div class="col-sm-2"> 
				<input type="submit" name="search" class="form-control" value="SEARCH"></input>
				</div>			
				</div>
				</form>


				</br>
				
				<table  id="main_table" class="table table-bordered">
					<thead>
						<tr>
                            <th>File Name</th>
							<th>Date</th>
							<th>Description</th>
                            <th>Department</th>
							<th>Uploader</th>
							<th>View</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 

						$sql= "Select * from man m join systemuser s on m.man_staffid = s.staffid where m.man_dpt='MIS'";
						$query = mysqli_query($dbconn,$sql);

						while($fetch=mysqli_fetch_assoc($query)){ ?>
							<tr>
								<td><?php echo $fetch['man_fname']	?></td>
								<td><?php echo $fetch['man_update']	?></td>
								<td><?php echo $fetch['man_desc']	?></td>
                                <td><?php echo $fetch['man_dpt']	?></td>
								<td><?php echo $fetch['firstname']	?></td>
								<td><?php echo $fetch['man_floc']	?></td>
								<td><input type="submit" class="btn btn-danger right" value="Delete"></td>
							</tr>
						<?php 
						} 
						?>
					</tbody>
				</table>
				<!-- <input type="submit" class="btn btn-primary right" value="Submit"> -->
				<!--<button type="button" class="btn btn-success btn-upload">+</button> -->
				<?php include 'manualModal.php'; ?>
				<a href="#manualModal" class="btn btn-success btn-upload" data-toggle="modal" data-target="#manualModal">+</a>
				<div class="line"></div>
				
			</div>
			
		</div>
	
		<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
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
			$(document).ready( function () {
				$('#main_table').DataTable();
			} );

		</script>
	</body>
</html>

	<?php }
	
	else {
		header("Location: ../../index.php") ;
		
	} ?>