<?php

//dividing function makes good look and maintainable code

function doTaskA()
{
    echo "Step A Done\n";
}
function doTaskB()
{
    echo "Step B Done\n";
}
function doTaskC()
{
    echo "Step C Done\n";
}
function doTaskD()
{
    echo "Step D Done\n";
}

function taskSection()
{
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
}
taskSection();

