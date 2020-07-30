<?php

//recursive function and recursion
function rec(int $n)
{

    if ($n == 0) {
        return;
    }
    // echo "n is : $n \n";
    rec($n - 1);

    echo $n . " ";

}

//rec(10);

function printNumber($counter, $end, $stepping=4)
{
    if ($counter > $end) {
        return;
    }
    echo $counter." ";
    $counter += $stepping;
    printNumber($counter, $end, $stepping);

}
printNumber(10,22,2);