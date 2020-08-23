<?php

$name = "Rakib";

echo "My name is $name";
echo PHP_EOL;
$foo = 'bar';

$heredoc = <<<EOD
data \n1
I am Tanvir
Hello world $foo
EOD;

echo $heredoc;
