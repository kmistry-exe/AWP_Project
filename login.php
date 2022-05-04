<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

	<script src="https://kit.fontawesome.com/cbfaff0888.js" crossorigin="anonymous"></script>

	<style>
		@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
  			font-family: 'Josefin Sans', sans-serif;
		}
		body{
			margin: 0;
			padding: 0;
			background-color: #dfe2ea;
			height: 100vh;
			overflow: hidden;
		}
		.center{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 650px;
			background: white;
			border-radius: 40px;
			box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;
		}
		.center h1{
			color: #282633;
			text-align: center;
			padding: 20px 0;
			border-bottom: 1px solid silver;
		}
		h1:hover{
			color: #0eaae7;
			transition: .5s;
		}
		.center form{
			box-sizing: border-box;
		}

		img{
			width: 80%;
		}
		input[type="submit"]{
			color: #282633;
			width: 250px;
			height: 50px;
			margin: 0 0 30px 0;
			border: 0;
			background: #dfe2ea;
			border-radius: 15px;
			font-size: 18px;
			font-weight: 700;
			cursor: pointer;
			outline: none;
			box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;
		}
		input[type="submit"]:hover{
			color: #f1f5fb;
			background: #282828;
			transition: .5s;
		}
	</style>
</head>

<body>
	<div class="center">
      <h1><i class="fa-solid fa-graduation-cap"></i> Student Management System</h1>
	  <center>
	  <img src="s1.jpg" alt="">
      <form method="post">
		<input type="submit" name="admin_login" value="Admin Login" required>
		&nbsp;
		<input type="submit" name="student_login" value="Student Login" required>	
      </form>
	  </center>
    </div>

	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
</body>
</html>