<?php
//two ways to connect DB to php
//1... MySQLi/mprove.
//2... PDO(Php Data Objects)

//1... MySQLi>>>>>>>>>>
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DxB_Ronak";

//creating a connection

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
 die("Connection Unsuccessfull<br>");
}
else
{
    echo"Connection Was Successfull<br>";
}

//creating A Table
$sql = "CREATE TABLE `ruxk_1` (`Name` VARCHAR(25) NOT NULL , `S_ID` INT(255) NOT NULL , `Password` INT(10) NOT NULL , `Email` VARCHAR(35) NOT NULL )";


//check for creation
$result = mysqli_query($conn, $sql);
if($result)
{
    echo "table created successfully";

}
else
{
    echo "Fail to a create a table".mysqli_error( $conn);
}



?>