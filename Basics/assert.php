<?php

// Empty String Checking in assert Function
function getFirstLetter($string) {
    assert(strlen($string) > 0);
    return substr($string, 0, 1);
}

echo getFirstLetter("Bismillah");
echo getFirstLetter("");

// Data Type and Zero Checking with assert Function

function variableTypes($x, $y){
    assert(is_int($x), '$x must be an integer value');
    assert(is_int($y), '$y must be an integer value');
    assert($x === 0, 'The value of $x cannot be zero');
 
    return $x / $y;
 
}
variableTypes(1, 0);

/*
[::1]:42282 [500]: GET / - Uncaught AssertionError: The value of $x cannot be zero in /var/www/html/Zend-Prep/Basics/index.php:17
Stack trace:
#0 /var/www/html/Zend-Prep/Basics/index.php(17): assert()
#1 /var/www/html/Zend-Prep/Basics/index.php(22): variableTypes()
#2 {main}
  thrown in /var/www/html/Zend-Prep/Basics/index.php on line 17
*/