<?php

//fibonacci series using recursive function
// function rec(int $n)
// {

//     if ($n == 1) {
//         return 0;
//     }
//     if ($n == 2) {
//         return 1;
//     }

//     return rec($n - 1) + rec($n - 2);

// }

// for($i=1;$i<=10;$i++)
// {
//    $x= rec($i);
//    echo $x." ";
// }

function fibo($old, $new, $end)
{
    static $start;
    $start = $start ?? 1;

    static $value;
    $value = $value ?? 0;

    if ($start > $end ) {
        return;
    }
    $start++;
    //$end--;
    echo $value . " ";
    $new = $value + $old;
    $old = $value;
    $value = $new;
    fibo($old, $new,  $end);
}
fibo(1, 1, 15);
