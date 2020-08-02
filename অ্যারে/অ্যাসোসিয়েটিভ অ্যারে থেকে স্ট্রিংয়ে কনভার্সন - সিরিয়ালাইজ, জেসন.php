<?php

$student = [
    'fname' => 'Jamil',
    'lname' => "Ahmed",
    'age' => 15,
    'class' => 8,
    'section' => 'A',
];

print_r($student);
//you can print using these two
echo $student['fname'] . " " . $student['lname'];
echo PHP_EOL;
printf("%s %s\n", $student['fname'], $student['lname']);

//serialize
$serialized = serialize($student);
echo $serialized;
echo PHP_EOL;

//unserialize
$new_student = unserialize($serialized);
print_r($new_student);

//json

$jsondata = json_encode($student);
echo $jsondata;
echo PHP_EOL;
$student2 = json_decode($jsondata, true);
print_r($student2);

