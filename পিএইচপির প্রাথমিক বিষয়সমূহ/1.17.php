<?php

//checking evn or odd using switch case
$n = -10;
$r = $n % 2;

switch (true) {
    case ($r == 1 && $n > 0):
        echo "$n is positive odd number";
        break;
    case ($r == -1 && $n < 0):
        echo "$n is negative odd number";
        break;
    case ($r == 0 && $n > 0):
        echo "$n is positive even number";
        break;
    case ($r == 0 && $n < 0):
        echo "$n is negative even number";
        break;
}
