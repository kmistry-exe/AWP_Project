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
		$db = mysqli_select_db($connection,"awp");
	?>
</head>

<body ng-app="myApp">

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
					<a class="nav-link" href="#">| <i class="fa fa-user-graduate"></i>Student Dashboard</a>
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
				<a href="#" name=""><li><i class="fa-solid fa-gauge"></i>Dashboard</li></a>
				<a href="student_edit_student.php" name="edit_student"><li><i class="fa-solid fa-user-pen"></i>Edit Details</li></a>
				<a href="student_show_teacher.php" name="show teacher"><li><i class="fas fa-user-tie"></i>Show Teachers</li></a>
				<a href="Notice.php" name="edit_student"><li><i class="fa-solid fa-user-pen"></i>Notice</li></a>
			</ul> 
			</form>
		</div>

		<div class="main_content">
			<div class="header">
				<marquee>Note:- This portal is open till 31 March 2022...Please check or edit your information, if wrong.</marquee>
			</div>  
			<div class="banner-card">
				<div class="s1">
					<div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Student Information</h5>
									<hr>
									<table>
										<tr>
											<td width="150px">
												<i class="fas fa-user-graduate fa-4x"></i>
											</td>
											<td>
												<p class="card-text"><b>Name: </b><?php echo $_SESSION['name'];?></p>
												<p class="card-text"><b>Email: </b><?php echo $_SESSION['email'];?></p>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card">
							<div class="card-body">
							<h5 class="card-title">Other Information</h5>
								<hr>
								<?php
									{
										$query = "select * from students where email = '$_SESSION[email]'";
										$query_run = mysqli_query($connection,$query);
										while ($row = mysqli_fetch_assoc($query_run)) 
										{
									?>
										<table>
											<tr>
												<td>
													<b>Roll No:</b>
												</td> 
												<td>
													<input type="text" value="<?php echo $row['roll_no']?>" disabled>
												</td>
											</tr>
											<tr>
												<td>
													<b>Name:</b>
												</td> 
												<td>
													<input type="text" value="<?php echo $row['name']?>" disabled>
												</td>
											</tr>
											<tr>
												<td>
													<b>Father's Name:</b>
												</td> 
												<td>
													<input type="text" value="<?php echo $row['father_name']?>" disabled>
												</td>
											</tr>
											<tr>
												<td>
													<b>Class:</b>
												</td> 
												<td>
													<input type="text" value="<?php echo $row['class']?>" disabled>
												</td>
											</tr>
											<tr>
												<td>
													<b>Mobile:</b>
												</td> 
												<td>
													<input type="text" value="<?php echo $row['mobile']?>" disabled>
												</td>
											</tr>
											<tr>
												<td>
													<b>Email:</b>
												</td> 
												<td>
													<input type="text" value="<?php echo $row['email']?>" disabled>
												</td>
											</tr>
											<tr>
												<td>
													<b>Password:</b>
												</td> 
												<td>
													<input type="password" value="<?php echo $row['password']?>" disabled>
												</td>
											</tr>
										</table>
										<?php
										}	
									}
								?>
							</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
</div>
</body>
</html>