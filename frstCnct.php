<?php
echo"connecting to database <br> Ways to connect Mysql db. <br> 1. MySqli Extention <br>2. PDO(Php Data objects)" ;
echo "<br>";
echo "-----------------------------------------";
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
echo "<br>";




$sql = "CREATE DATABASE sampRon1";
$res = mysqli_query($conn, $sql);
echo "the result  ".var_dump($res);
echo "<br>";


if(!$conn)
{
die("❌Fail to connect❌". mysqli_connect_error());
}
else
{
    echo "<br>✔️connection was successfull✔️<br>";
}



?>
