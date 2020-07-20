<?php

//use of sprintf as it returns printf
$fname='Tanvir';
$lname='Ahmed';

$output = sprintf('His name is %2$s %1$s',$lname,$fname);
echo $output;
echo "\n";

echo strtoupper($output);