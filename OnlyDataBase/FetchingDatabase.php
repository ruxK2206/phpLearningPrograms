<?php
//ways to connect
//1. MySQLi [Procedural and OOPS]
//PDO(Php Data Objects)

// to connect 3 variables reqirs.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdata";

//create a connection 
$conn = mysqli_connect($servername, $username, $password,$dbname);
//die if connection was not successfull
if(!$conn)
{
    die("fail to connect<br>". mysqli_connect_error());
}
else
{
echo"Connection was successfull<br>";
}

$sql = "SELECT * FROM form1";
$result = mysqli_query($conn,$sql);
//find the no of recorsd return


$trows =  mysqli_num_rows($result);
echo $trows;
echo"<br>";

//Row returne by sql qry
if($trows> 0)
{
    for($i=0; $i <= $trows;$i++)
    {
    $rows = mysqli_fetch_assoc($result);
    $rows = implode("- ", $rows); //converting array into string
    echo ($rows);
    echo"<br>";
    }
}


?>