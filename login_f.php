<?php

session_start();

$f_name=$_POST['first_name'];
$pno=$_POST['mpno'];

$con=mysqli_connect("localhost","root","","farmer_database");
$query="select * from f_details where first_name='$f_name' and PH_no='$pno'";
$result=mysqli_query($con,$query);

	if(mysqli_num_rows($result)>0)
	{
		$_SESSION["first_name"]="$f_name";
		header('Location: f_sell.php');
	}
	else
	{
		
		echo "Error in no. or password";
	}
	
	?>