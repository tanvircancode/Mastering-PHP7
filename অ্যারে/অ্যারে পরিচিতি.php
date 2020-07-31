<?php

//array can be declared like this

// $students = array(
//    'Karim',
//    'kholil',
//    123,
//    'jabbar'
// );

$students = [
    'Karim',
    'kholil',
    123,
    'jabbar'
];
// echo var_dump($students);
// echo PHP_EOL;

// echo count($students);

for($i = 0; $i < count($students); $i++)
{
      echo $students[$i]."\n";
}
echo "=====\n";

$k = count($students);
for($i = $k-1; $i >=0 ; $i--)
{
      echo $students[$i]."\n";
}