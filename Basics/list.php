<?php

// List: extract array values to variables

$myLovingCountries = array("Bangladesh", "Saudi Arab", "Turkey");
list($a, , $b) = $myLovingCountries;

echo "List of my Loving Countries";
echo "<br>";
echo $a;
echo "<br>";
echo $b;

/*
Output: 
List of my Loving Countries
Bangladesh
Turkey
*/
