<?php

$numbers = range(12, 20, 2);
print_r($numbers);

foreach(range(12,20,2) as $evennumber)
{
    echo $evennumber."\n";
}
echo"====\n";

foreach(range(0,50,7) as $number)
{
    if($number > 0)
    {
        echo $number."\n";

    }

}

echo"====\n";

foreach(range(0, 60,11) as $number)
{
    if($number > 0)
    {
        echo $number."\n";

    }

}
