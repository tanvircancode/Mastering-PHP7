<?php

function isChecked($arr,$value)
{
    if( isset($_REQUEST[$arr])  &&  is_array($_REQUEST[$arr])  &&  in_array($value, $_REQUEST[$arr]))
    {
        echo " checked ";
    }
}

//for short
function isFruitChecked($value)
{
    if( isset($_REQUEST['fruits'])  &&  is_array($_REQUEST['fruits'])  &&  in_array($value, $_REQUEST['fruits']))
    {
        echo " checked ";
    }
}
