<?php
$num1 = 10;
$num2 = 20;
$num3 = 30;
$num4 = 40;

$add = $num1 + $num2;
$sub = $num3 - $num2;
$mult = $num1 * $num4;
$div = $num4 / $num2;


$ttl = $add + $sub + $mult + $div;

$ave = $ttl / 4;



echo "the sum of $num1 and $num2 is $add.<br>";
echo " the difference between $num3 and $num2 is $sub.<br>";
echo "the product  of $num1 and $num4 is $mult.<br>";
echo "the division total of $num4 by $num2 is $div.<br>";
echo "the total of all result $ttl.<br>";
echo "the average of all result $ave";



?>