<?php
$filename = "C:\\xampp\\htdocs\\hasin 2020\\ফাইল\\data\\f3.txt";

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

$student = array(
    'fname' => 'Kamaal',
    'lname' => 'Ahmed',
    'age' => 14,
    'class' => 9,
    'roll' => 11,

);

// $data = serialize($students);
// file_put_contents($filename,$data);

$fileFromData = file_get_contents($filename);
$allStudents = unserialize($fileFromData);
print_r($allStudents);


//array_push($allStudents, $student);

// unset($allStudents[1]);
// $data = serialize($allStudents);
// file_put_contents($filename, $data);