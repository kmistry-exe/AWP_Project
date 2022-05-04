<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="dashboard_style.css">
	<script src="https://kit.fontawesome.com/cbfaff0888.js" crossorigin="anonymous"></script>

	<style>
		h2{
			margin-top: 7px;
		}

		.searchS{
			font-size: large;
			margin-top: 7px;
		}

		.searchS2 td{
			padding: 10px 20px;
		}

		.rn{
			width: 200px;
			border: 3px solid #dfe2ea;
			height: 40px;
			border-radius: 10px;
			color: #282633;
			padding: 10px;
			outline: none;
			transition: .5s;
			box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
		}

		.rn:hover{
			border: 3px solid #282633;
			transition: .5s;
		}

		.rn:focus{
			border: 3px solid #282633;
		}

		input[type=submit]{
			width: 100px;
			text-align: center;
			color: #282633;
			border: none;
			height: 40px;
			border-radius: 10px;
			padding: 9px 10px;
			background: #dfe2ea;
			box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
		}

		input[type=submit]:hover{
			color: #dfe2ea;
			background: #282633;
			transition: .5s;
		}

		/* ---  */
		.st{
			font-size: larger;
			font-weight: bold;
		}

		.st:hover{
			color: #282633;
			transition: .5s;
		}

		/* table  */
		.sd{
			border-collapse: collapse;
			margin: 25px 0;
			font-size: .9em;
			min-width: 400px;
		}

		.sd td{
			padding: 5px 10px;
			border: 3px solid #f3f5f9;
			border-radius: 10px;
			color: #717171;
			outline: none;
			transition: .5s;
		}

		.sd td input{
			width: 230px;
  			background:  #f1f5fb;	
			border: 2px solid #282633;
			border-radius: 10px;
			padding: 0px 7px;
		}

	</style>
	
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"awp");
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
					<a class="nav-link" href="student_login.php">| <i class="fa fa-user-graduate"></i>Student Dashboard</a>
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
			<div class="info">
				<div>
					<div class="searchS">
						<center>
							<table class="searchS2">
								<tr>
									<td>
										<h2 style="color: #282633;">Edit Student</h2>
									</td>
								</tr>
							</table>
							<hr>
							
							<!-- php code  -->
							<?php
							{
								$query = "select * from students where email = '$_SESSION[email]'";
								$query_run = mysqli_query($connection,$query);
								while ($row = mysqli_fetch_assoc($query_run)) 
								{
									?>
									<form action="edit_student_s.php" method="post">
										<table class="sd">
										<tr>
											<td>
												<b>Roll No:</b>
											</td> 
											<td>
												<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
											</td>
										</tr>
										<tr>
											<td>
												<b>Name:</b>
											</td> 
											<td>
												<input type="text" name="name" value="<?php echo $row['name']?>">
											</td>
										</tr>
										<tr>
											<td>
												<b>Father's Name:</b>
											</td> 
											<td>
												<input type="text" name="father_name" value="<?php echo $row['father_name']?>">
											</td>
										</tr>
										<tr>
											<td>
												<b>Class:</b>
											</td> 
											<td>
												<input type="text" name="class" value="<?php echo $row['class']?>">
											</td>
										</tr>
										<tr>
											<td>
												<b>Mobile:</b>
											</td> 
											<td>
												<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
											</td>
										</tr>
										<tr>
											<td>
												<b>Email:</b>
											</td> 
											<td>
												<input type="text" name="email" value="<?php echo $row['email']?>">
											</td>
										</tr>
										<tr>
											<td>
												<b>Password:</b>
											</td> 
											<td>
												<input type="password" name="password" value="<?php echo $row['password']?>">
											</td>
										</tr>
									</table>
										<input type="submit" value="Save">
									</form>
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
</body>
</html>

