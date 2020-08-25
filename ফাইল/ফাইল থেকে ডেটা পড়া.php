<?php

$filename = "C:/xampp/htdocs/hasin 2020/ফাইল/data/f1.txt";
if(is_readable($filename)){
$fp = fopen($filename, 'r');

while($line = fgets($fp))
{
    echo $line;
}
// rewind($fp);
fseek($fp,8);
// fseek($fp,-1, SEEK_END); //for reverse

while($line = fgets($fp))
{
    echo $line;
}

// $line = fgets($fp);
// echo $line;

fclose($fp);

$data = file($filename);
print_r($data);

$data = file_get_contents($filename);
echo $data;
}