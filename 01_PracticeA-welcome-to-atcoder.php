<?php

$line1 = trim(fgets(STDIN));
$line2 = trim(fgets(STDIN));
[$line2_1, $line2_2] = explode(" ", $line2);
$line3 = trim(fgets(STDIN));

$sum = (function ($num1, $num2, $num3){
   return $num1 + $num2 + $num3;
})($line1, $line2_1, $line2_2);

print("$sum $line3");

