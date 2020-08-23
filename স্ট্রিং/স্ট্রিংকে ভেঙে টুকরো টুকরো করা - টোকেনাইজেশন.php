<?php

$string = "Hello World,world How are you";

$parts = explode(" ", $string);
print_r($parts);

echo PHP_EOL;

$original = implode(" ", $parts);
echo $original;

echo "\n";

//count each character
$parts2 = str_split($string);
sort($parts2);
$original2 = implode('', $parts2);
echo $original2;

for ($i = 0; $i < strlen($original2); $i+=$count) {
    $count = 1;
    for ($j = $i + 1; $j < strlen($original2); $j++) {
        if ($original2[$i] == $original2[$j]) {
            $count++;
        } else {
            break;
        }

    }

   echo "\n";
   echo "$original2[$i] = $count\n";
}
echo "\n";

// $parts3 = str_split($string);
// print_r($parts3);

$parts4 = strtok($string, " ,");
while($parts4 !== false)
{
    echo $parts4."\n";
    $parts4 = strtok(" ,");
}

echo PHP_EOL;

$parts5 = preg_split("/ |,/", $string);
print_r($parts5);