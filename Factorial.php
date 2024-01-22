<?php
$num = 5;
$i = 1; // Initialize $i to 1
$fact = 1;
for ($i = $num; $i > 0; $i--) {
    $fact = $fact * $i;
}
echo($fact);
?>
