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

//Creating a table
$sql="CREATE TABLE `project` (`Roll_no` INT(4) NOT NULL , `Name` VARCHAR(15) NOT NULL , `Password` VARCHAR(4) NOT NULL , `email` VARCHAR(10) NOT NULL ) ";
$result = mysqli_query( $conn, $sql );
if($result)
{
    echo"Table created successfully<br>";
}
else{
    echo "Table not created successfully --> ".mysqli_error($conn);
}
?>