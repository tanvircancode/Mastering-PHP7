<?php

//variable scope

//$name = 'Earth'; //global scope

// function doSomething()
// {
//      global $name;
//      echo $name;
//     //echo $GLOBALS['name'];
// }
// doSomething();

// function doSomething()
// {
//     //global $name;
//     $name = 'Earth';  //local scope

//      echo $name;
// }
// doSomething();

function doSomething()
{
    static $i; //static scope
    $i = $i ?? 0;
    $i++;

    echo $i . " ";
}

function doExtra()
{
    static $i; //static scope
    $i = $i ?? 0;
    $i++;

    echo $i . " ";
}
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
doSomething();