<?php

$name = "Abul Hossain  01234567891 abc@def.com";
$parts = sscanf($name, "%s %s %11s %s");
print_r($parts);

sscanf($name, "%s %s %11s %s", $fname, $lname, $number, $email);
echo $number;
echo PHP_EOL;

$hexColor = "#FF2F44";
$x = sscanf($hexColor, "#%2x%2x%2x", $red, $green, $blue);
echo $blue;
// print_r($x);