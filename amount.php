<?php
	include("head.php");
	error_reporting(1);
	$db_name="epiz_27010899_sparks";
	$cn=mysqli_connect("sql305.epizy.com","epiz_27010899","9eGdzB5w4m3kMC","epiz_27010899_sparks" ) or die("Could not Connect My Sql");
	mysqli_select_db ($cn ,$db_name ) or die("Could not connect");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/credit.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>
<center>
<body style="background-color:#e6ecff;">	
  <div class="container">
    <div class="row mt-4">
      <div class="col-6 mx-auto">
        <div class="card shadow text-center">
<?php
	$db_name="epiz_27010899_sparks";
	$cn=mysqli_connect("sql305.epizy.com","epiz_27010899","9eGdzB5w4m3kMC","epiz_27010899_sparks" ) or die("Could not Connect My Sql");
	mysqli_select_db ($cn ,$db_name ) or die("Could not connect");
	$userid = $_GET['userid'];
	$rs=mysqli_query($cn,"select * from user where userid='$userid'");
	while($row = mysqli_fetch_array($rs)){
?>
</body>
        <div class="card-header">
		<h3>Sending money to <?= $row['name'] ?></h3>
        </div>
		<div class="card-body">
            <h4><b>Email:</b><?= $row['email'] ?></h4>
            <h4><b>Current Credit of <?= $row['name'] ?>:</b> <?= $row['total'] ?></h4>
			<td>
		<form name="form"  method="post" action="amountcheck.php">
			<div class="input-group">
				<label for="amount">Enter amount:</label>
				<center><input type="number" class="form-control" style="width:200px;" id="amount" name="credit1" ></center>
				<input type="hidden" value="<?php echo $row[0];?>" name="userid">
			</div>
		
		</td>
			<td><button type="submit" value="submit" name="submit" class="btn btn-primary" style="width:300px; height:35px; margin-top:2px; margin-bottom:2px; margin-left:-5px;">SUBMIT</button></td>			
		</form>
		</div>
      </div>  
	</div>
</div>
<?php
	}
?>
<?php
	include("foot.php");
?>
</center>
</body>
</html>
