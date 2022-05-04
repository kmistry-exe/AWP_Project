<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="dashboard_style.css">
	<script src="https://kit.fontawesome.com/cbfaff0888.js" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

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
				<li class="nav-item active">
					<a class="nav-link" href="#"><i class="fa fa-user"></i>Admin Dashboard<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="student_login.php">| <b><i class="fa fa-user-graduate"></i>Student Dashboard</b></a>
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
			<h4 style="text-align: center;">Admin Dashboard</h4>
			<p></p>
			<form action="" method="post">
			<ul>
				<a href="#/" name=""><li><i class="fa-solid fa-gauge"></i>Dashboard</li></a>
				<a href="#!Search" name="search_student"><li><i class="fa-solid fa-magnifying-glass"></i>Search Student</li></a>
				<a href="#!Edit" name="edit_student"><li><i class="fa-solid fa-user-pen"></i>Edit Student</li></a>
				<a href="#!Add" name="add_new_student"><li><i class="fa-solid fa-user-plus"></i>Add New Student</li></a>
				<a href="#!Delete" name="delete_student"><li><i class="fa-solid fa-user-minus"></i>Delete Student</li></a>
			</ul> 
			</form>
		</div>


		
		<div class="main_content">

			<div class="header">
				<marquee>Note:- This portal is open till 31 March 2022...Please check or edit your information, if wrong.</marquee>
			</div>

			<div ng-view></div>
			<script src="app.js"></script>

			<!-- dashboard  --------------------------------------------->
			<div class="db">
				<script type="text/ng-template" id="pages/home.php">
					<div class="banner-card">
						<div class="card-deck">
							<div class="card" style="background-color: #eb3134;">
								<div class="card-body">
									<div class="content">
										<h5 class="card-title">Students</h5>
										<h3 class="card-text"><b>20</b></h3>
									</div>
									<div class="ca-i">
										<i class="fas fa-users fa-3x"></i>
									</div>
								</div>
							</div>
							<div class="card" style="background-color: #7eeb31">
								<div class="card-body">
									<div class="content">
										<h5 class="card-title">Teachers</h5>
										<h3 class="card-text"><b>07</b></h3>
									</div>
									<div class="ca-i">
									<i class="fas fa-user-tie fa-3x" style="margin-left: 15px;"></i>
									</div>
								</div>
							</div>
							<div class="card" style="background-color: #31dbeb">
								<div class="card-body">
									<div class="content">
										<h5 class="card-title">Courses</h5>
										<h3 class="card-text"><b>10</b></h3>
									</div>

									<div class="ca-i">
										<i class="fas fa-book fa-3x" style="margin-left: 15px;"></i>
									</div>
								</div>
							</div>
							<div class="card" style="background-color: #9e31eb">
								<div class="card-body">
									<div class="content">
										<h5 class="card-title">Classes</h5>
										<h3 class="card-text"><b>02</b></h3>
									</div>
									<div class="ca-i">
										<i class="fas fa-school fa-3x"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="cn">
						<div class="card" style="background-color: #f5bb02">
							<div class="card-body">
								<h5 class="card-title">Notice</h5>
								<hr>
								<p class="card-text">..</p>
								<p class="card-text">..</p>
							</div>
						</div>
					</div>
				</script>
			</div>

				<center>
			<!-- Search  --------------------------------------------->
			<div class="ss">
				<script type="text/ng-template" id="pages/Search.php">
					<div class="info">
						<div class="searchS">
							<center>
								<form action="" method="post">
									<table class="searchS2">
										<tr>
											<td>
												<h2 style="color: #282633;">Search Student</h2>
											</td>
											<td>
												<h2>|</h2>
											</td>
											<td>
												<input type="text" name="roll_no" placeholder="Enter roll no." class="rn">&nbsp;
												<input type="submit" name="search_by_roll_no_for_search" value="Search" class="sb">
											</td>
										</tr>
									</table>
									<hr>
								</form>
								<?php include('Search_Student.php');?>
							</center>
						</div>
						
					</div>
				</script>
			</div>

			<!-- Edit  --------------------------------------------->
			<div class="es">
				<script type="text/ng-template" id="pages/Edit.php">
					<div class="info">
						<div class="searchS">
							<center>
								<form action="" method="post">
									<table class="searchS2">
										<tr>
											<td>
												<h2 style="color: #282633;">Edit Student</h2>
											</td>
											<td>
												<h2>|</h2>
											</td>
											<td>
												<input type="text" name="roll_no" placeholder="Enter roll no." class="rn">
												<input type="submit" name="search_by_roll_no_for_edit" value="Search" class="sb">
											</td>
										</tr>
									</table>
									<hr>
								</form>
								<?php include 'Edit_Student.php';?>
							</center>
						</div>
					</div>
				</script>
			</div>

			<!-- Add  --------------------------------------------->
			<div class="as">
				<script type="text/ng-template" id="pages/Add.php">
					<div class="info">
						<div class="searchS">
							<center>
								<form action="" method="post">
									<table class="searchS2">
										<tr>
											<td>
												<h2 style="color: #282633;">Add New Student</h2>
											</td>
											<td>
												<h2>|</h2>
											</td>
											<td>
												<input type="submit" name="add_new_student" value="Add New Student" class="sb">
											</td>
										</tr>
									</table>
									<hr>
								</form>
								<?php include 'Add_Student.php';?>
							</center>
						</div>
					</div>
				</script>
			</div>

			<!-- Delete  --------------------------------------------->
			
				<script type="text/ng-template" id="pages/Delete.php">
					<div class="info">
						<div class="searchS">
							<center>
								<form action="delete_student_data.php" method="post">
									<table class="searchS2">
										<tr>
											<td>
												<h2 style="color: #282633;">Delete Student</h2>
											</td>
											<td>
												<h2>|</h2>
											</td>
											<td>
												<input type="text" name="roll_no" placeholder="Enter roll no." class="rn">
												<input type="submit" name="search_by_roll_no_for_delete" value="Delete" class="sb">
											</td>
										</tr>
									</table>
									<hr>
								</form>
								<?php include 'Delete_Student.php';?>
							</center>
						</div>
					</div>
				</script>
			
			</center>
		</div>
		
	</div>
</div>

</body>
</html>