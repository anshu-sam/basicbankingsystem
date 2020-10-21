<?php
	include("head.php");
	error_reporting(1);
	$db_name="epiz_27010899_sparks";
	$cn=mysqli_connect("sql305.epizy.com","epiz_27010899","9eGdzB5w4m3kMC","epiz_27010899_sparks" ) or die("Could not Connect My Sql");
	mysqli_select_db ($cn ,$db_name ) or die("Could not connect")
?>
<html>
	<style>
		.art1 b
		{
            text-align:center;
			font-size:45px;
			color: black;
            
			margin-top:20px;
			font-family: "Times New Roman", Times, serif;
		}
	</style>
<body style="background-color:#e6ecff;">
<center>
<body>
<div class="container">
	 <div>
					<div class="art1">
							<center><b><u>Customer List</u></b></center>							
						</div>
							</div>
				</div>
	<br><br>
		<table border = 4>
			<th width=100 height=40>&#160;&#160;&#160;&#160;&#160;&#160;<b style="color:#1a1aff; font-size:15px;">Name</b></th>
			<th width=400 height=40>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<b style="color:#1a1aff; font-size:15px;">Email</th>
			<th width=150 height=40>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<b style="color:#1a1aff; font-size:15px;"><b>SELECT</b></th>
<?php
	$db_name="epiz_27010899_sparks";
	$cn=mysqli_connect("sql305.epizy.com","epiz_27010899","9eGdzB5w4m3kMC","epiz_27010899_sparks" ) or die("Could not Connect My Sql");
	$sql = "SELECT * from user";
	$qu =  mysqli_query($cn,$sql) or die("Could not Connect user");
	while($row = mysqli_fetch_array($qu)){
	// while($row = mysql_fetch_array($rs))
?>	
	<tr>
		<td>&#160;&#160;&#160;&#160;&#160;&#160;<b><?php echo $row[1];?></b></td>		
		<td>&#160;&#160;&#160;&#160;&#160;&#160;<b><?php echo $row[2];?></b></td>
		<td> &#160;&#160;&#160;&#160;&#160;&#160; <a href="amount.php?userid=<?php echo $row[0];?>"><button class="btn btn-primary" style="width:100px; height:30px; margin-top:2px; margin-bottom:2px; margin-left:-5px;">SELECT</button></td>

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
