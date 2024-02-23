<?php 
for ($i = 0; $i < 5; $i++) 
{
    echo "The number is $i <br>";
}
echo"<br>";
echo "----------------------";
echo"<br>";
echo "----------------------";
echo"<br>";
echo "While Loop";
echo"<br>";
$i = 0;
while ($i < 10)
{
    echo $i+1;
    echo"<br>";
    $i++;
}


echo "----------------------";
echo"<br>";
echo "for each Loop";
echo"<br>";
$arr = array("Potato","Bread","eggs","Onion","Capsicum");

for($i=0;$i < count($arr);$i++)
{
  echo $arr[$i];
  echo "<br>";
}
echo "----------------------";
echo "<br>";
foreach ($arr as $value) 
{
    echo "$value <br>";
}
?>