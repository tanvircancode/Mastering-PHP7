<?php

function fact(int $n)
{
    if ($n <= 1) {
        return 1;
    }
    // $n--;
    return $n * fact($n - 1);
}

echo fact(6);
