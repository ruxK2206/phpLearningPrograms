<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bloodbase";

// Create a connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Die if connection was not successful
if (!$conn) {
    die("Failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

if (isset($_POST['submit'])) {
    $finame = $_POST['fname'];
    $laname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `bloodlineusers` (`First Name`, `Last Name`, `Email Address`, `Phone-no`, `Birth Date`, `Adderss`) 
            VALUES ('$finame', '$laname', '$email', '$phone', '$dob', '$address')";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        echo "Record inserted successfully<br>";
    } else {
        echo "Record not inserted successfully --> " . mysqli_error($conn);
    }
}

?>
