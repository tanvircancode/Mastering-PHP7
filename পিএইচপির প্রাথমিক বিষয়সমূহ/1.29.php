<?php

//fibonacci series using loop
$o = 1;
$n = 1;
$v = 0;

for ($i = 0; $i < 20; $i++) {

    echo $v . " ";

    $n = $o + $v;
    $v = $o;
    $o = $n;

}
//be concerned about these logic
