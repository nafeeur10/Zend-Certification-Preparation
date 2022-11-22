<?php

// Example 1

$a = 5;
echo $a;
echo "\n";
eval("\$a = \$a + 10;");
echo $a;

// Example 2

$string = 'cup';
$name = 'coffee';
$str = 'This is a $string with my $name in it.';
echo $str. "\n";
eval("\$str = \"$str\";");
echo "\n";
echo "\n" . $str;
