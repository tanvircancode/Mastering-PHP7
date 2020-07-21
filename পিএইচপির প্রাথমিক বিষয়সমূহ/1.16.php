<?php

$color = 'Green';

switch ($color) {
    case 'Red':
        echo "The color is red";
        break;
    case 'Green':
        echo "The color is green";
        break;
    case 'Blue':
        echo "The color is blue";
        break;
    default:
        echo "The color is Ok";
}
echo "\n";

//easiest way
$color2 = 'green';

switch ($color2) {
    case 'red':
    case 'green':
    case 'indigo':
        echo "color is ".ucwords($color2);
        break;
    case 'blue':
        echo "color is ".ucwords($color2);
        break;
    default:
        echo "The color is Ok";
}
