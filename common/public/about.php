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
					<li class="active">
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

				<h1 class="display-4">About</h1>
				<p>
				 <b>SYSTEM OBJECTIVES </b> <br />
						1.	To make a friendly-user system that ease the administrator and the user when they use it. <br />
						2.	To categorized and recognize the student who are qualified to apply the parking. <br />
						3.	To display all of the related information in more organized and structured way. <br />


				</p>
				<p>
				 <b>OAPS PURPOSES </b> <br />
						1.	To apply the parking application in much more ease and efficient way. <br />
						2.	To help Student Affair Department (HEP) to store the database and prevent from losing the data.  <br />
						3.	To ease Student Affair Department (HEP) to monitor and analyse each application. <br />
						4.	 To let the applicator(student) get the result of their own applications much more faster <br />
						5.	To avoid unfairness judgement on the application of parking system. <br />

				</p>
				<p>
				 <b>OAPS ADVANTAGES </b> <br />
						1.	Administrator(HEP) will be able to monitor student’s parking application much easier. <br />
						2.	Parking application can be done anywhere and anytime. <br />
						3.	User(student) could get the result of their own application through online. <br />
						4.	Avoid biasness and unfair judgement on the application <br />


				</p>
				
				
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