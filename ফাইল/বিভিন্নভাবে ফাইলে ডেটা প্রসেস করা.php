<?php
$filename = "C:\\xampp\\htdocs\\hasin 2020\\ফাইল\\data\\f2.txt";

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

$fp = fopen($filename,"w");
foreach($students as $student) {
    //  $data =  sprintf("%s, %s, %s, %s, %s\n",$student['fname'], $student['lname'],$student['age'],$student['class'],$student['roll']);
    //  fwrite($fp, $data);
    fputcsv($fp, $student);
}
fclose($fp);

$fp = fopen($filename,"r");
while($student = fgetcsv($fp))
{
   // $student = explode(",",$data);
    printf("Name: %s %s\nAge: %s\nClass: %s\nRoll: %s\n\n", $student[0], $student[1], $student[2], $student[3],  $student[4]);
}
fclose($fp);

$student = array(
        'fname' => 'Kamaal',
        'lname' => 'Ahmed',
        'age' => 14,
        'class' => 9,
        'roll' => 11,

);
$fp = fopen($filename, "a");
fputcsv($fp, $student);
fclose($fp);

$data = file($filename);
print_r($data);
unset($data[1]);
print_r($data);


// file_put_contents($filename, $data);  //you can use this line for adding data or below of the lines
$fp = fopen($filename, "w");
foreach($data as $line)
{
    fwrite($fp,$line);
}
fclose($fp);
