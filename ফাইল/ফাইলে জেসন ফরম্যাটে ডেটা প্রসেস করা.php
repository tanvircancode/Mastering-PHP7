<?php
$filename = "C:\\xampp\\htdocs\\hasin 2020\\ফাইল\\data\\f4.txt";

$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 2,
    ),

    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age' => 15,
        'class' => 9,
        'roll' => 4,
    ),

    array(
        'fname' => 'Nikhil',
        'lname' => 'Chandra',
        'age' => 10,
        'class' => 5,
        'roll' => 8,
    ),
);

$encodeData = json_encode($students);
file_put_contents($filename, $encodeData,LOCK_EX);

$data = file_get_contents($filename);
$decodeData = json_decode($data,true);
print_r($decodeData);

//echo $decodeData[0] -> fname;
echo $decodeData[2]['lname'];