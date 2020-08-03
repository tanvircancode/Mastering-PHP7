<?php

$name=0;

if(isset($name))
{
    echo "Name is set\n";
}
else
{
    echo "not set\n";
}



if(empty($name))
{
    echo "Name is empty\n";
}
else
{
    echo "not empty\n";
}

if(isset($name) && (is_numeric($name) || $name != ''))
{
    echo "Name is set and it's not empty";
}
else
{
    echo 'Name is either not set or it\'s empty';
}


