<head>

<link rel="stylesheet" href="dashboard_style.css">

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
		box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
	}

	.rn:hover{
		border: 3px solid #282633;
		transition: .5s;
	}

	.rn:focus{
		border: 3px solid #282633;
	}

	input[type=submit]{
		width: 200px;
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
		border-radius: 10px;
		color: #717171;
		outline: none;
		transition: .5s;
	}

	.sd td input{
		width: 230px;
		border: 2px solid #282633;
		border-radius: 10px;
		padding: 0px 7px;
	}

</style>

</head>
<?php 
if(isset($_POST['add_new_student'])){
	?>
	<form action="add_student_data.php" method="post">
		<p class="st">Add Student Details</p>
		<hr>
			<table class="sd">
				<tr>
					<th>
						Roll No:
					</th> 
					<td>
						<input type="text" name="roll_no" required>
					</td>
				</tr>
				<tr>
					<th>
						Name:
					</th> 
					<td>
						<input type="text" name="name" required>
					</td>
				</tr>
				<tr>
					<th>
						Father's Name:
					</th> 
					<td>
						<input type="text" name="father_name" required>
					</td>
				</tr>
				<tr>
					<th>
						Class:
					</th> 
					<td>
						<input type="text" name="class" required>
					</td>
				</tr>
				<tr>
					<th>
						Mobile:
					</th> 
					<td>
						<input type="text" name="mobile" required>
					</td>
				</tr>
				<tr>
					<th>
						Email:
					</th> 
					<td>
						<input type="text" name="email" required>
					</td>
				</tr>
				<tr>
					<th>
						Password:
					</th> 
					<td>
						<input type="password" name="password" required>
					</td>
				</tr>
			</table>
			<input type="submit" name="edit" value="Save">
		</form>
	<?php
	}
?>
						
