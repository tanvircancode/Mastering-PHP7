<?php
//process 1
for ($i = 0; $i < 100; $i++) {
    echo $i % 7 == 0 ? $i . " " : "";
    echo $i % 11 == 0 ? $i . " " : "";

}
echo PHP_EOL;

//process 2

for ($i = 0, $j = 0; $i < 100; $i += 7, $j += 11) {
    echo $i . "\n";
    echo $j < 100 ? $j . "\n" : "";

}
echo PHP_EOL;
