<?php

//array manipulation

// $students = [
//     '12k' => 'Karim',
//     '13' => 'kholil',
//     '20' => 'jalal'
// ];

// echo $students['12k'];

$foods = [
    'vegetables' => 'brinjal , brocolli , carrot, capsicum',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk',
];

$foods['drinks'] = $foods['drinks'] . ", orange juice";
//echo $foods['drinks'];

foreach($foods as $key=>$value)
{
    echo $key."=".$value."\n";
}

echo "=======\n";


$keys = array_keys($foods);
for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];
    echo $foods[$key] . "\n";
    // echo $key." ";
}

echo "=======\n";

$values = array_values($foods);
for($i = 0; $i < count($values); $i++)
{
    $value = $values[$i];
    echo $value."\n";

}
