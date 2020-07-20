<?php

//use of %2 %1 in single quote
$fname='Issac';
$lname='Newton';
printf('His name is %2$s %1$s',$lname,$fname);
echo "\n";

printf('Binary equivalent of %1$d is %1$b',12);

echo "\n";

//2 numbers after dot
$n1= 12.129;
printf("%.2f",$n1);

echo "\n";

//placing zero before numbers
$x1=124.146431;
$x2= 32.415;
printf("%8.3f",$x1);
echo "\n";
printf("%6.2f",$x2);
