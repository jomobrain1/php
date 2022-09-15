<?php

$age = 20;
$salary = 300000;

// Sample if

// Without circle braces

// Sample if-else

// Difference between == and ===

// if AND
if($age >10 && $salary > 60000){
    echo "yes boss <br>";
}
// if OR

// Ternary if
echo $age < 15?'Young <br>': 'Old <br>';
// Short ternary

// Null coalescing operator

// switch
$userRole ='adminw';
switch($userRole){
    case 'admin':
        echo '<h1>You are admin</h1>';
    break;

    case 'teacher':
        echo '<h2>You are Teacher</h2>';
    break;

    default:
    echo '<i>jomo is indeed a beast</i>';

}
