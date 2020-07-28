<?php


$n = 10;

//using if-else
if($n % 2 ==0):
       echo "$n is even";
       echo PHP_EOL;
else:
    echo "$n is odd";
    echo PHP_EOL;
endif;


//using switch
switch($n%2):
    case 0:
    echo "$n is even";
    break;

    default:
    echo "$n is odd";

endswitch;



