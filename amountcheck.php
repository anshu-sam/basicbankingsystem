<?php
session_start();
include("connect.php");
extract($_POST);
if(isset($_POST['submit']))  
	{  	
			$query2="update user set ccredit = ccredit - '".$_POST['credit1']."' where userid='".$_POST['userid']."' ";
			$query3=mysqli_query($query2,'connect.php')or die("Could Not Perform the Query3");
			
			$query="update user set credit = '".$_POST['credit1']."' where userid='".$_POST['userid']."'";
			$query1=mysqli_query($query,'connect.php')or die("Could Not Perform the Query2");

			$query2="update user set total = ccredit + credit ";
			$query3=mysqli_query($query2,'connect.php')or die("Could Not Perform the Query3");
		?>
			<script language="javascript"> alert("Amount Credited successfully "); </script>
		<?php			
		echo"<script>window.location='list.php'</script>";
		
	}

	if(isset($_SESSION[$login]))
{
	echo"<script>window.location='list.php'</script>";
	
}

?>
