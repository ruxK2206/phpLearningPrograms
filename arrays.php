<?php
echo "_____-----------------______";
echo"<br>";
echo"Array";
echo"<br>";

// Array and its types

$arr = array('i','me','myself');
echo $arr[0];
echo"<br>";
echo $arr[1];
echo"<br>";
echo $arr[2];
echo"<br>";
echo "_____-----------------______";
echo"<br>";
echo"Associative array";
echo"<br>";

// associative array

echo"<br>";


$favCol = array
(
    'Ronak' => 'black',
    'ruxK' => 'Dark_green',
    'Rawnak' => 'Cyan',
     5 => 'lucky number is 5'
);
echo $favCol['Ronak'];
echo"<br>";
echo $favCol['ruxK'];
echo"<br>";
echo $favCol['Rawnak'];
echo"<br>";
echo $favCol[5];
echo"<br>";
echo "_____-----------------______";
echo"<br>";

 

//array flip
 $arr = array("c" =>1, "C++" =>2, "Java" => 3, "python" => 8);
 echo "Output of first example <br>";
 print_r(array_flip($arr));

?>
