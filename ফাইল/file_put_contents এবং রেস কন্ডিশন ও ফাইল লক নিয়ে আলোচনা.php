<?php
$filename = "C:\\xampp\\htdocs\\hasin 2020\\ফাইল\\data\\f2.txt";
//$fp = fopen($filename,"r+");

file_put_contents($filename,"Mars\n",FILE_APPEND | LOCK_EX);
// rewind($fp);

// $line = fgets($fp);
// echo $line;

file_put_contents($filename, "Jupiter\n",FILE_APPEND | LOCK_EX);
