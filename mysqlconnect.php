<?php
//two ways to connect DB to php
//1... MySQLi/mprove.
//2... PDO(Php Data Objects)

//1... MySQLi>>>>>>>>>>
$servername = "localhost";
$username = "root";
$password = "";

//creating a connection

$conn = mysqli_connect($servername, $username, $password);
if(!$conn)
{
 die("Connection Unsuccessfull");
}
else
{
    echo"Connection Was Successfull";
}

//creating A database
$sql = "CREATE DATABASE DxB_Ronak";
$result = mysqli_query($conn, $sql);
if($result)
{
    echo "Database created successfully";

}
else
{
    echo "Fail to a create a database".mysqli_error( $conn);
}

?>