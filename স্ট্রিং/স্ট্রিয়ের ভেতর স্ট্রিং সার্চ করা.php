<?php

$string = "Quick brown fox jumps over the lazy dog";

echo strpos($string, 'fox' , 8); //strripos
echo PHP_EOL;

$offset = strpos($string,"Quick");
if($offset !== false)
{
    echo "Word is found";
}
else
{
    echo "Word is not found";
}