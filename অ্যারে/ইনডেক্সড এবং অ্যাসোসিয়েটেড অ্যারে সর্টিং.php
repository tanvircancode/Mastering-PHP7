<?php

$fruits = array('a'=>'apple', 'b'=>'banana', 'f'=>'orange', 'p'=>'plum', 'd'=>'dates', 'm'=>'mango');
//$numbers = array(6,2,3,1,8,7);
$numbers = array(6,2,22,3,11,8,7,35,43,55);
$random = ["banana","apple", "Banana", "Pineapple",  "Apple"];

// sort($fruits);
// print_r($fruits);

ksort($fruits);
print_r($fruits);

arsort($fruits);
print_r($fruits);

//for reverse
//arsort($fruits);
sort($random, SORT_STRING | SORT_FLAG_CASE);
print_r($random);

asort($numbers);
print_r($numbers);

sort($numbers, SORT_STRING);
print_r($numbers);
//for reverse
// krsort($numbers);
// print_r($numbers);

//use foreach loop to print
foreach($numbers as $number){
    echo $number."\n";
}
foreach($fruits as $fruit){
    echo $fruit."\n";
}