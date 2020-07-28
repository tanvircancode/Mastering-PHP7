<?php

//factorial of n

$n = 20;
$j=1;

for ($i = $n, $fact = 1; $i >= 1; $i--) {
    $fact *= $i;
    $j++;
}
echo "factorial of $n is $fact \n";
echo $j;
echo PHP_EOL;
