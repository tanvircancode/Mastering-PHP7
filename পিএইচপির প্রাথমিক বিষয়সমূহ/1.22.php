<?php

//print star using for loop
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}
echo PHP_EOL;

//print star using while loop
$i = 0;
while ($i < 10) {
    $j = 0;
    while ($j <= $i) {
        echo "*";
        $j++;
    }
    echo PHP_EOL;
    $i++;
}


echo PHP_EOL;

//print star using do while loop
$i = 0;
do {
    $j = 0;
    do {
        echo "*";
        $j++;
    } while ($j <= $i);

    echo PHP_EOL;
    $i++;
} while ($i < 10);

echo PHP_EOL;

//do while loop simple number print
$i = 0;
do {
    $i++;
    echo $i.PHP_EOL;

} while ($i < 10);
