<?php

$string = "Hello World";

$len = strlen($string)-1;
for($i = $len; $i >= 0; $i--)
{
       echo $string[$i];
}

echo "\n";

 $len = strlen($string);

for($i = 1; $i <= $len; $i++)
{
       echo $string[$i*-1];
}
echo "\n";

echo strrev($string);

echo "\n";


//reverse string using space
$x=0;
$lim =0;
for($i = 0; $i < $len; $i++)
{
       if($string[$i]==' ')
       {
           $x = $i-1;
           for($j = $x; $j >= $lim ; $j--)
           {
              echo $string[$j];
           }
           $lim = $i + 1;
           echo " ";
       }

       else if($i == $len-1)
       {
        $x = $i;
        for($j = $x; $j >=  $lim; $j--)
        {
           echo $string[$j];
        }
       }

}