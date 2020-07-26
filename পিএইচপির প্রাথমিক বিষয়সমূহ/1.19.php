<?php

$f = true || false;  // '||' has more precedence than =
$s = false or true;    // 'or' has less precedence than =

$k = false || true;
$h = false or true;

var_dump($f, $s, $k ,$h);
