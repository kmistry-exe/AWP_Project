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

		.sd td:focus{
			border-bottom: 3px solid #282633;
		}

		.sd td:hover{
			border-bottom: 3px solid #282633;
		}

		.sd td input{
			border: none;
			background: none;
			outline: none;
		}

	</style>

<?php
							if(isset($_POST['search_by_roll_no_for_search']))
							{
								$query = "select * from students where roll_no = '$_POST[roll_no]'";
								$query_run = mysqli_query($connection,$query);
								while ($row = mysqli_fetch_assoc($query_run)) 
								{
									?>
									<p class="st">Student Details</p>
									<hr>
									<table class="sd">
										<tr>
											<th>
												Roll No:
											</th> 
											<td>
												<input type="text" value="<?php echo $row['roll_no']?>" disabled>
											</td>
										</tr>
										<tr>
											<th>
												Name:
											</th> 
											<td>
												<input type="text" value="<?php echo $row['name']?>" disabled>
											</td>
										</tr>
										<tr>
											<th>
												Father's Name:
											</th> 
											<td>
												<input type="text" value="<?php echo $row['father_name']?>" disabled>
											</td>
										</tr>
										<tr>
											<th>
												Class:
											</th> 
											<td>
												<input type="text" value="<?php echo $row['class']?>" disabled>
											</td>
										</tr>
										<tr>
											<th>
												Mobile:
											</th> 
											<td>
												<input type="text" value="<?php echo $row['mobile']?>" disabled>
											</td>
										</tr>
										<tr>
											<th>
												Email:
											</th> 
											<td>
												<input type="text" value="<?php echo $row['email']?>" disabled>
											</td>
										</tr>
										<tr>
											<th>
												Password:
											</th> 
											<td>
												<input type="password" value="<?php echo $row['password']?>" disabled>
											</td>
										</tr>
									</table>
									<?php
								}
							}
						?>