<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdata";

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
    $sno=$_POST['sno'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
   
   
    $sql = "INSERT INTO `form1` (`S.no`, `name`, `Password`, `contact`) VALUES ('$sno','$name','$password','$contact')";
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