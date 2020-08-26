<?php

$filename = "C:\\xampp\\htdocs\\hasin 2020\\ফাইল\\data\\f2.txt";

$fp = fopen($filename, "r+");
$line = fgets($fp);
echo $line;

fwrite($fp,"Uranus\n");
$line = fgets($fp);
echo $line;
fseek($fp, 0);   //rewind($fp);

fwrite($fp,"Venus\n");
fclose($fp);


//write w+
//  $line = fgets($fp);
//  echo $line;
// fwrite($fp,"Uranus");
// rewind($fp);

// $line = fgets($fp);
// echo $line;



// //append a+

// fwrite($fp,"Uranus\n");
// fseek($fp,0);
// fwrite($fp,"Neptune");
// fseek($fp,0);   //rewind($fp);


// $line = fgets($fp);
// echo $line;
// fclose($fp);


//f2.txt
// Mercury
// Venus
// Earth