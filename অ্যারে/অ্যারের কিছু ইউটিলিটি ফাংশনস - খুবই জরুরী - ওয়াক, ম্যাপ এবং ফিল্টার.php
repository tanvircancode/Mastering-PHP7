<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);
$persons = array('sujon','kabir','sahab','selim','kabir','roni','jamal','kamal','sayma');

function square($n)
{
    printf("Square of %d is %d\n",$n, $n*$n);
    return $n*$n;
}

function even($n)
{
    return $n % 2 == 0;
}
function odd($n)
{
    return $n % 2 == 1;
}

//array_walk($numbers, 'square');
$newArray = array_map('square', $numbers); //callback function square
$evenNUmbers = array_filter($numbers,'even');  //callback function even
$oddNUmbers =  array_filter($numbers,'odd');  //callback function odd

print_r($numbers);
print_r($newArray);
print_r($evenNUmbers);
print_r($oddNUmbers);

function filterByS($s)
{
      return $s[0] == 's';
}

$newNames = array_filter($persons,'filterByS');
print_r($newNames);
