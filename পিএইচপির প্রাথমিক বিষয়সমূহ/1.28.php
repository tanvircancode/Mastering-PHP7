<?php

for ($i = 10; $i < 20; $i++) {


    if ($i < 15) {
            continue;
        }

    // if ($i == 15) {
    //     $i = $i + 1;
    //     continue;
    // }
    echo "$i\n";
}

echo "========= \n";

//using do-while loop
$a = 10;
do {
    if ($a == 15) {
        $a = $a + 1;
        continue;
    }

    printf("value of a: %d\n", $a);
    $a++;

} while ($a < 20);
