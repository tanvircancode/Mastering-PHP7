<?php

$string = "Hello World";
echo $string[-5];
echo PHP_EOL;

$len = strlen($string);
//echo substr($string, $len-3);
echo substr($string, -7, -3);