<?php

define('PI',3.14159);

//variables are mutable
$task1 = 'hello';
echo $task1;
echo "\n";
$task1 = 46;
echo $task1;
echo "\n";


echo "The value of pi is ".PI;
echo "\n";

//constant value doesn't change
$PI = 123;
echo "The value of pi is {PI}";
echo "\n";

//using constant function
echo constant('PI');
echo "\n";

$constant = 'constant';
echo "Value : {$constant('PI')}";

