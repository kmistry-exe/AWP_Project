<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="dashboard_style.css">
	<script src="https://kit.fontawesome.com/cbfaff0888.js" crossorigin="anonymous"></script>

	<style>
		.row{
			padding: 30px;
		}
		table td i{
			padding: 20px;
		}
		table td{
			padding: 10px;
		}
		table td input{
			border: none;
			background: none;
		}
	</style>
	
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>

<!-- navbar  -->
<div class="card1">
	<nav class="navbar navbar-expand-lg navbar-light" style="color: #282633; font-size: 15px;">
	
		<a class="navbar-brand" href="#">
			<i class="fa-solid fa-graduation-cap"></i> Student Management System
  		</a>
  
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   	
		  <span class="navbar-toggler-icon"></span>
  		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="admin_login.php"><i class="fa fa-user"></i>Admin Dashboard</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="student_login.php">| <i class="fa fa-user-graduate"></i><b>Student Dashboard</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">| <i class="fas fa-sign-out-alt"></i>Log Out</a>
				</li>
			</ul>
		</div>
	</nav>


<!-- middle part  -->
	<div class="wrapper">
		<div class="sidebar">
			<h4 style="text-align: center;">Student Dashboard</h4>
			<p></p>
			<form action="" method="post">
			<ul>
				<a href="student_home.php" name=""><li><i class="fa-solid fa-gauge"></i>Dashboard</li></a>
				<a href="student_edit_student.php" name="edit_student"><li><i class="fa-solid fa-user-pen"></i>Edit Details</li></a>
				<a href="student_show_teacher.php" name="show teacher"><li><i class="fas fa-user-tie"></i>Show Teachers</li></a>
				<a href="Notice.php" name="edit_student"><li><i class="fa-solid fa-user-pen"></i>Notice</li></a>

			</ul> 
			</form>
		</div>

		<div class="main_content">
			<div>
				<div class="searchS">
					<center>
						<h2 style="color: #282633; margin-top: 21px">Notice</h2>		
					</center>
				</div>
				<hr>
				
			<div class="cn">
				<div class="card" style="background-color: #f5bb02">
					<div class="card-body" style="height: 30vh;">
						<h5 class="card-title">Important Notice</h5>
						<hr>
						<p class="card-text">All Good</p>
					</div>
				</div>
			</div>
			</div>  
		</div>
	</div>
</div>
</body>
</html>