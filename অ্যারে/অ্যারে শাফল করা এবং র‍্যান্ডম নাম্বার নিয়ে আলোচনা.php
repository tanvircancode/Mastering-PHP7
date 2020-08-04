<?php

$numbers = range(40,72);
//print_r($numbers);

// echo count($numbers);

$random = mt_rand(0,32);
// echo $random;
//echo $numbers[$random];

$luck = $numbers[$random];
if($luck % 2 ==0)
{
    echo "Head\n";
    echo $luck;
}
else
{
    echo "Tail\n";
    echo $luck;
}
echo "\n";

shuffle($numbers);
print_r($numbers);
$randomNumber = $numbers[3];
echo $randomNumber;