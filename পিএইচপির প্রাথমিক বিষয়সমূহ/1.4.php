<?php
//var_dump for variable information
$name = 'Neptune';
var_dump($name);

$age=12;
var_dump($age);

$x=1.23;
var_dump($x);


$y=null;
var_dump($y);

$r=true;
var_dump($r);

//escaping
$name1='Earth';
echo 'We\'re living on '.$name1;
print("\n");

//using printf
$fname='Issac';
$lname='Newton';
printf("His %s name is %s %s\n","full",strtoupper($fname),strtoupper($lname));

//different printing examples
$planet1 = 'Mercury';
$planet2 = 'Jupiter';

echo 'The smallest planet is '.$planet1.' and the biggest planet is '.$planet2."\n";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}";
echo "\n";
printf("The smallest planet is %s and the biggest planet is %s\n",strtoupper($planet1),strrev($planet2));
