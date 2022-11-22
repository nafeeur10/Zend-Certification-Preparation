<?php

// Empty Function

$null = null;
if(empty($null)) {
  echo "It's null";
  echo "<br>";
}

$emptyString = "";
if(empty($emptyString)) {
  echo "It's empty string";
  echo "<br>";
}

$emptyArray = array();
if(empty($emptyArray)) {
  echo "It's empty Array";
  echo "<br>";
}

$zero = 0;
if(empty($zero)) {
  echo "It's Zero";
  echo "<br>";
}

$stringZero = "0";
if(empty($stringZero)) {
  echo "It's Zero String";
  echo "<br>";
}

$boolean = false;
if(empty($boolean)) {
  echo "It's Boolean False";
  echo "<br>";
}
