<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/cbfaff0888.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="center">
      <h1><i class="fa fa-user"></i>  Admin Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>Email ID</label>
        </div>

        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>

		<div class="alert_msg">
		<?php
			session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"awp");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: admin_home.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
				}
				
			}
		?>
		</div>
		

        <div class="pass">Forgot Password?</div>

        <input type="submit" name="submit" value="Log In">

        <div class="signup_link">
           Or Go to <a href="student_login.php">Student Login</a>
        </div>

      </form>
    </div>

</body>
</html>