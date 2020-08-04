<?php

$fruits1 = array('a'=>'apple', 'b'=>'banana', 'c'=>'lemon', 'p'=>'plum', 'd'=>'dates', 'm'=>'mango');
$fruits2 = array('d'=>'pineapple', 'b'=>'malta', 'g'=>'grapes', 'e'=>'lemon');

$numbers1 = array(1,5,2,7,16,31,25,10);
$numbers2 = array(25,5,2,8,12,8,7,10);
$common = array_intersect($numbers1,$numbers2);//common
$commonf = array_intersect($fruits1,$fruits2);
//$commonf = array_intersect_assoc($fruits1,$fruits2);
print_r($common);
print_r($commonf);

$diff = array_diff($numbers1, $numbers2);//not common
$difff = array_diff($fruits2, $fruits1);
// $difff = array_diff_assoc($fruits2, $fruits1);
print_r($diff);
print_r($difff);