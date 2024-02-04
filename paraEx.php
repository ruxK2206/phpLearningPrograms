<?php

//functions
function cube($x)
{
echo $x * $x * $x;
}

$var = "cube";
echo"cube of 10 is ";
$var(10);
echo "<br>";

echo "----------------------";

echo "<br>";
//anonomos function

$square = function($a)
{
    return $a * $a;
};
echo "Result of 5 is ".$square(5);
?>