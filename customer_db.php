<?php   
print_r($_POST);
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname="customer_database";
 $fname=$_POST['first_name'];
 $mname=$_POST['middle_name'];
 $lname=$_POST['last_name'];
 $gender=$_POST['Gender'];
 $eid=$_POST['eid'];                
 $password=$_POST['pswd'];
 $state=$_POST['state'];
 $dob=$_POST['DOB'];
 $phno=$_POST['mpno'];


 $connection=mysqli_connect('localhost','root','','customer_database');
 if (!$connection)
 {
     die("Connection failed: " . mysqli_connect_error());
 }
$query="insert into c_details values('$fname','$mname','$lname','$gender','$eid','$password','$state','$dob', $phno)";

     if(mysqli_query($connection,$query))
         {
             echo "inserted successfully";
         }
     else
     echo mysqli_error ($connection);
?>  



