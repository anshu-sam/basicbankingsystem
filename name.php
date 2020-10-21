<?php
	include("head.php");
	error_reporting(1);
	$db_name="epiz_27010899_sparks";
	$cn=mysqli_connect("sql305.epizy.com","epiz_27010899","9eGdzB5w4m3kMC","epiz_27010899_sparks" ) or die("Could not Connect My Sql");
	mysqli_select_db ($cn ,$db_name ) or die("Could not connect")
    ?>
<html>
	<head>
		<title>Sparks</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css\default.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	</head>
	<style>
		.art1 b
		{
			font-size:30px;
			color: black;
			font-family: "Times New Roman", Times, serif;
		}
	</style>
<!--<body style="background-color:#ffd24d;">-->
<center>
<body>
<div class="container">
	 <div style=" position:absolute;">
					<div class="art1">
							<center><b style="
			margin-left:30px;">List of Users</b></center>							
						</div>
							</div>
				</div>
	<br><br>
		<table border = 10>
			<th width=70 height=70>Name</th>
			<th width=400 height=70>Email</th>
			<th width=500 height=70>Current Credit</th>
			<th width=100 height=70>GO</th>
<?php
	$sql = "SELECT * from user";
	$qu =  mysqli_query($sql) or die("Could not Connect user");
	while($row = mysql_fetch_array($qu)){
?>	
	<tr>
		<td>&#160;&#160;&#160;&#160;&#160;&#160;<b><?php echo $row[1];?></b></td>		
		<td>&#160;&#160;&#160;&#160;&#160;&#160;<b><?php echo $row[2];?></b></td>
		<td>&#160;&#160;&#160;&#160;&#160;&#160;<b><?php echo $row[3];?></b></td>
		<td> &#160;&#160;&#160;&#160;&#160;&#160; <a href="credit.php?userid=<?php echo $row[0];?>"><button class="w3-button w3-xlarge w3-circle w3-red">GO</button></td>

	</tr>
	</center>
</body>
	
<?php
	}
?>
		</table>
<?php
	include("foot.php");
?>
