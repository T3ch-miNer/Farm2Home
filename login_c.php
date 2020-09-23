<?php

session_start();
$e_id=$_POST['e_id'];
$password=$_POST['pswd'];

$con=mysqli_connect("localhost","root","","customer_database");
$query="select * from c_details where e_id='$e_id' and password='$password'";
$result=mysqli_query($con,$query);

	if(mysqli_num_rows($result)>0)
	{
		$_SESSION["e_id"]="$e_id";
		header('Location: welcome_c.php');
	}
	else
	{
		
		echo "Error in no. or password";
	}
	
	?>