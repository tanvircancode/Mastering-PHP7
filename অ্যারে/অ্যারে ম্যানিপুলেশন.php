<?php

//array manipulation

$students = [
    'Karim',
    'kholil',
    123,
    'jabbar'
];

$students[2] = 'Shofik';

for($i = 0; $i < count($students); $i++)
{
      echo $students[$i]."\n";
}
echo "===\n";

array_pop($students);
array_shift($students);

for($i = 0; $i < count($students); $i++)
{
      echo $students[$i]."\n";
}

$students[] = 'Jamaal';
array_push($students,'Kamaal');
array_unshift($students,'Nasrin');

echo "===\n";
for($i = 0; $i < count($students); $i++)
{
      echo $students[$i]."\n";
}

