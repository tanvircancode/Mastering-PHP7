<?php

$filename = "C:\\xampp\\htdocs\\hasin 2020\\ফাইল\\data\\f2.txt";
if (is_writable($filename)) {
//  $existingData = file_get_contents($filename);

    $fp = fopen($filename, "a");

//  fwrite($fp, $existingData);
    fwrite($fp, "Mercury\n");
    fwrite($fp, "Venus\n");
    fwrite($fp, "Earth\n");

    fclose($fp);
}
