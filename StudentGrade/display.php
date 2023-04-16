<?php


	$host="localhost";
	$user="root";
	$password="";
	$db="studentgrade";

	$data=mysqli_connect($host,$user,$password,$db);

	$sql="SELECT * from studentgrades";

	$result=mysqli_query($data,$sql);

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Grades</title>
	<link rel="stylesheet" href="styles.css">
	

	
	<style type="text/css">

		.table_th
		{
			padding: 20px;
			font-size: 20px;
			border-collapse: collapse;
			margin: auto;
		}

		.table_td
		{

			padding: 20px;
			background-color: skyblue;
		}
		

	</style>

</head>
<body>
	<?php
	include 'display_side.php';
	 ?>
  <div class="content">
  	<center>

		<h1>Students Grades</h1><br><br>

		<table border="1px">

			<tr>
				<th class="table_th">StudentID</th>
				<th class="table_th">Web1</th>
				<th class="table_th">Design1</th>
				<th class="table_th">Programming1</th>
			</tr>

			<?php

			while($info=$result->fetch_assoc())
			
			{
			
			?>

			<tr>
				<td class="table_td">
				<?php echo "{$info['StudentID']}";?>
				</td>

				<td class="table_td">	
				<?php echo "{$info['Web1']}";?>
				</td>

				<td class="table_td">
				<?php echo "{$info['Design1']}";?>
				</td>
				
				<td class="table_td">		
				<?php echo "{$info['Programming1']}";?>
				</td>

			</tr>
			<?php
			
			}

			?>

		</table>
	</center>

	</div>


</body>
</html>

