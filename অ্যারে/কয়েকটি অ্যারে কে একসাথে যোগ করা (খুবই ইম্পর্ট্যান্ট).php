<?php

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random = [
    'a' => 12,
    'b' => 45,
    'c' => 41,
    'd' => 56,
    'e' => 25,
     12 => 78,
    'f' => 32,
    'g' => 39,
];
$newFruits1 = array_slice($fruits,0,3);
$newFruits2 = array_slice($fruits,1,null, true);
$newFruits = array_merge($newFruits1,$newFruits2);
print_r($newFruits1);
print_r($newFruits2);
print_r($newFruits);

//perfect way to get key index using slice
$newFruitsplus = $newFruits1 + $newFruits2;
print_r($newFruitsplus);

//Associate array
//indexes are changed using splice
// $randomData = array_splice($random,2, 2, array("j"=>"25", "k"=>"16"));
// print_r($randomData);
// print_r($random);


//perfect way to get key index using slice
$r1 = array_slice($random,0,2,true);
$r2 = array_slice($random,4,null,true);
$r3 = array("j"=>"25", "k"=>"16");
$randomDataCorrectWay = $r1+$r3+$r2;
print_r($randomDataCorrectWay);