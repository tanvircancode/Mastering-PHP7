<?php

$person = [
  'fname' => "Hasan",
  'lname' => "Rahman"
];

//deep copy or copy by value
$newperson = $person;

$newperson['fname'] = 'Fahim';

print_r($person);
print_r($newperson);


//shallow copy or copy by reference

function printData(&$person)
{
    $person['fname'] = $person['fname']." changed";
    print_r($person);
}
printData($person);
print_r($person);

// $newperson = &$person;

// $newperson['fname'] = 'Fahim';

// print_r($person);
// print_r($newperson);