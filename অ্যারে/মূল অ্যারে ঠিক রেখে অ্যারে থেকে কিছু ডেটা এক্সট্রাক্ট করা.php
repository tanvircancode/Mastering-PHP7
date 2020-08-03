<?php

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');

$somefruits = array_slice($fruits, 2, -2, true);
print_r($somefruits);

echo PHP_EOL;

//for associative array
$random = [
    'a' => 12,
    'b' => 45,
    'c' => 41,
    'd' => 56,
    'e' => 25,
    12 => 15,
    'f' => 32,
    'g' => 39,
];
$randomData = array_slice($random, -5, 3, true);
print_r($randomData);
