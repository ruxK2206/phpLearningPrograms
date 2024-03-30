<?php
//ways to connect
//1. MySQLi [Procedural and OOPS]
//PDO(Php Data Objects)

// to connect 3 variables reqirs.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SAMPLE2";

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

//sql query running part

$sql = "INSERT INTO `project` (`Roll_no`, `Name`, `Password`, `email`) VALUES ('1', 'Ronak', '2106', 'nn9115987')";
$result = mysqli_query( $conn, $sql);
if($result)
{
    echo"Record inserted successfully<br>";
}
else{
    echo "Record not inserted successfully --> ".mysqli_error($conn);
}
?>