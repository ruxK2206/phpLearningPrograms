<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DxB_Ronak";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
 die("Connection Unsuccessfull<br>");
}
else
{
    echo"Connection Was Successfull<br>";
}


//add a new line to the database
$sql = "INSERT INTO `ruxk_1` (`Name`, `S_ID`, `Password`, `Email`) VALUES (RADIANS('Swarup'), '60', '0060', 'swarupsurvase@gmail.com')";
$result = mysqli_query($conn, $sql);
if($result)
{
    echo "Record inserted successfully";

}
else
{
    echo "Fail to a insert record".mysqli_error( $conn);
}

//query make to be executed





?>