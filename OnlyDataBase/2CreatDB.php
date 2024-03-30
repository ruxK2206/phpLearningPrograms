<?php
//ways to connect
//1. MySQLi [Procedural and OOPS]
//PDO(Php Data Objects)

// to connect 3 variables reqirs.
$servername = "localhost";
$username = "root";
$password = "";



//create a connection 
$conn = mysqli_connect($servername, $username, $password);

//Creating a DBase
$sql = "CREATE DATABASE SAMPLE2";
$result = mysqli_query( $conn, $sql );

echo"The result is ".var_dump($result);

//die if connection was not successfull
if(!$conn)
{
    die("fail to connect<br>". mysqli_connect_error());
}
else
{
echo"Connection was successfull<br>";
}
if($result)
{
    echo"DB created successfully<br>";
}
else{
    echo "Not created successfully --> ".mysqli_error($conn);
}

?>