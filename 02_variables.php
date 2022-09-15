<?php

// What is a variable

// Variable types

// Declare variables
$name="jomobrain";
$willRich=true;
$phone=5739330;



// Print the variables. Explain what is concatenation
echo $name."<br>".$phone."<br>";
// Print types of the variables
echo gettype($name)."<br>";
// Print the whole variable
var_dump($name,$phone)."<br>";
// Change the value of the variable

// Print type of the variable

// Variable checking functions

// Check if variable is defined
echo "set name".isset($name)."<br>";
// Constants
define('PI',3.13);
echo PI."<br>";
// Using PHP built-in constants
