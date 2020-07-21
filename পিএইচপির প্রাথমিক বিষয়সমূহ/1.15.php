<?php

//ternary operator

//checking a number
$n1=12;
$output1 = (12 == $n1) ? "Twelve" : "A number that's not recognised";
echo $output1;

echo "\n";

//multiples check, beware of braces
$n2=20;
$output2 = (12 == $n2) ? "Twelve" : (10 == $n2 ? "Ten" : (20 == $n2 ? "Twenty": "A number that's not recognised"));
echo $output2;

echo "\n";

//checking even or odd
$result = ($n2 % 2 ==0) ? "Even" : "Odd";
echo "$n2 is $result";





