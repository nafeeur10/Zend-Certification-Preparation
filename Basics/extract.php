<?php

/**
  We can extract associative array and get the keys as variable.
  Also we can give them a prefix.
  
  extract(array, extract_rules, prefix)
*/

// With Prefix

$AssociativeArray = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
extract($AssociativeArray, EXTR_PREFIX_ALL, 'g');
echo $g_Peter;

// Without Prefix

$AssociativeArray = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
extract($AssociativeArray);
echo $Peter; // 35
