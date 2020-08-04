<?php

$fruits = array('a'=>'apple', 'b'=>'banana', 'c'=>'cherry', 'd'=>'dates', 'm'=>'mango','p'=>'plum');
$_fruits = $fruits;//copying fruits array

$key = array_rand($fruits);
echo $key."\n";
echo $fruits[$key]."\n";

shuffle($_fruits);
print_r($_fruits);
