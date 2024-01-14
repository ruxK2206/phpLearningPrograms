<?php
$x = "welcome to the page";
echo "the original string is ($x)";
echo "<br>";
echo "the length is " . strlen($x);
echo "<br>";
echo "there are ". str_word_count($x);
echo "<br>";
echo "reversed version is ". strrev($x);
echo "<br>";
echo "the position of page is ". strpos($x, "page");
echo "<br>";
echo "replacement of page -- ". str_replace("page","webpage", $x);
?>