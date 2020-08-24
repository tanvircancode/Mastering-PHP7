<?php

$string = "Quick brown Brown fox Fox jumps over the lazy dog";
$string = str_ireplace(array('brown', 'fox', 'dog'), array('red', 'cat', 'hen'), $string, $count);

//$string = str_ireplace(array('brown', 'fox', 'dog'), 'word', $string, $count);

// $replacedString = str_ireplace('Brown','red', $string,$count);
// echo $replacedString;
// echo PHP_EOL;
echo $string;
echo PHP_EOL;
echo "Total replacement : $count";