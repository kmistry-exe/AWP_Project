<table class="table table-striped">				
<?php
{
	?>
	<tr>
		<td id="td"><b>ID</b></td>
		<td id="td"><b>Name</b></td>
		<td id="td"><b>Mobile</b></td>
		<td id="td"><b>Courses</b></td>
		<td id="td"><b>View Detail</b></td>
	</tr>
	
	<?php
	$query = "select * from teachers";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)) 
	{
		?>
	<tr>
		<td><?php echo $row['t_id']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['mobile']?></td>
		<td><?php echo $row['courses']?></td>
		<td><a href="#">View</a></td>
	</tr>
		<?php
	}
}
?>
</table>