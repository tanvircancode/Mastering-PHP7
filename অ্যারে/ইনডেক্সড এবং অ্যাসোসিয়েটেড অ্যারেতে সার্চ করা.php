<?php

$fruits = array('a'=>'apple', 'b'=>'banana', 'f'=>'orange', 'p'=>'plum', 'd'=>'dates', 'm'=>'mango');
$numbers = array(6,2,22,3,11,8,7,2,'93',43,55);

if(in_array(93, $numbers,true))
{
    echo "found\n";
}
else{
    echo "not found\n";
}

$offset = array_search(2, $numbers);
echo $offset."\n";

if(key_exists('d', $fruits))
{
    echo "key is exists";
}
else
{
    echo "not exists";
}
