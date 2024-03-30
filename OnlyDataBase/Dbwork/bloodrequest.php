<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bloodbase";

//create a connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);
//die if connection was not successfull
if(!$conn)
{
    die("fail to connect<br>". mysqli_connect_error());
}
else
{
echo"Connection was successfull<br>";
}

if(isset($_POST['submit']))
{
    $finame=$_POST['fname'];
    $laname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    
   
   
    $sql = "INSERT INTO `bloodlineusers` (`First Name`, `Last Name`, `Email Adderss`, `Birth Date`,'Phone-no','Adders') VALUES ('$finame','$laname','$email','$phone','$dob','$address')";
$result = mysqli_query( $conn, $sql);
if($result)
{
    echo"Record inserted successfully<br>";
}
else{
    echo "Record not inserted successfully --> ".mysqli_error($conn);
}
}

?>