<?php

//null coalescing operator
$x = 23.9;

$a=13.8;

// $res = isset($a) ? $a : $y;

$res = $a ?? $x;
echo $res;
