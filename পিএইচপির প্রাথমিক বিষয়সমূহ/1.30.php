<?php

//spaceship operator

$x = 5;
$y = 5;
$res = ($x <=> $y);

if($res == 1)
{
    echo "$x is greater than $y";
}
else if($res == -1)
{
    echo "$x is smaller than $y";
}
else if($res == 0)
{
    echo "$x is equal to  $y";
}
