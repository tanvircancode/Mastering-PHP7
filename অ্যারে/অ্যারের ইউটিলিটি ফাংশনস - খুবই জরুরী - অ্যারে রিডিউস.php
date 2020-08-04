<?php

$numbers = array(1, 2, 3, 4, 5, 6);

function sum($oldvalue, $newvalue)
{
    return $oldvalue + $newvalue;
}
$sum = array_reduce($numbers, 'sum');
echo $sum . "\n";


function sumOfEven($oldvalue, $newvalue)
{
    if ($newvalue % 2 == 0) {
        return $oldvalue + $newvalue;
    }
    return $oldvalue;
}
$sumofeven = array_reduce($numbers, 'sumOfEven');
echo $sumofeven."\n";


function sumOfOdd($oldvalue, $newvalue)
{
    if ($newvalue % 2 == 1) {
        return $oldvalue + $newvalue;
    }
    return $oldvalue;
}
$sumofodd = array_reduce($numbers, 'sumOfOdd');
echo $sumofodd;
