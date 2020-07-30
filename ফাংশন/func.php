<?php

//determines if the argument is even or odd
function evenOrodd(int $n)
{
    if($n % 2 == 0)
    {
        return true;
    }
    return false;
}

//factorial of n
function factorial(int $n)
{
    // if(gettype($n) != "integer")
    // {
    //     return "invalid";
    // }
    $res=1;
    // if($n == 0)
    // return 1;
    for($i = 2; $i <=$n ; $i++)
    {
        $res *= $i;
    }
    return $res;
}

function serve($foodType, $numberOfItems=1)
{
    echo "$numberOfItems cup(s) of $foodType have/has been served";
}
