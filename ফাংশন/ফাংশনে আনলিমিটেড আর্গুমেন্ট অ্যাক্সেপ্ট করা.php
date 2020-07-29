<?php

function sum(int...$numbers): int
{
    $res = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $res += $numbers[$i];
    }
    return $res;
}

echo sum(1, 2, 6, 8, 4);
