<?php

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$newfruits=array('jackfruit','tamarind');

$somefruits = array_splice($fruits, -5, 3,$newfruits);
print_r($somefruits);
print_r($fruits);