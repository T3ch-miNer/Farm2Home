<?
    print_r($_POST);
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "farmer_database";
    $fname=$_POST['first_name'];
    $mname=$_POST['middle_name'];               
    $lname=$_POST['last_name'];
    $state=$_POST['state'];
    $gender=$_POST['gender'];
    $phno=$_POST['mpno'];
    


    $connection=mysqli_connect('localhost','root',' ','farmer_database');
    if (!$connection)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
   $query="insert into f_details values('$fname','$mname','$lname','$state','$gender',$phno)";

        if(mysqli_query($connection,$query))
            {
                echo "inserted successfully";
            }
        else
        echo mysqli_error ($connection);
?>  
