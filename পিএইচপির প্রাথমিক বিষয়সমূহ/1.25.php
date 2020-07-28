<?php

//efficient way of solving factorial of n, as same as 1.24

$j=1;

for ($n =1, $fact = 1; $n <= 10; $n++) {
    $fact *= $n;
    $j++;
    echo "factorial of $n is $fact \n";
}

echo "Total number of operations are $j \n";
