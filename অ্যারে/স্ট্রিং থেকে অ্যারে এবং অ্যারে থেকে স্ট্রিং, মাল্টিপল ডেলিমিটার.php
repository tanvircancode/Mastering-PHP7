<?php
//delimeter

//converts string to array
//$vegetables = explode(', ','brinjal, brocolli, carot, capsicum,potato, sweet-potato,ginger,lentil');
$vegetables = preg_split('/(, |,)/','brinjal, brocolli, carot, capsicum,potato, sweet-potato,ginger,lentil');
print_r($vegetables)."\n";
echo count($vegetables);
//print($vegetables[3]);

echo PHP_EOL;
//converts array to string
$vegetablesString = join(', ',$vegetables);

echo $vegetablesString."\n";


