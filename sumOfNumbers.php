<?php

function sumOfDigits($number) {
    $sum = 0;
    while ($number != 0) {
        $digit = $number % 10;
        $sum += $digit;
        $number = (int)($number / 10);
    }
    return $sum;
}

// Example usage:
$number = 12345;
$result = sumOfDigits($number);

echo "The sum of digits in $number is: $result";

?>
