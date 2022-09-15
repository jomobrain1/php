<?php

// Function which prints "Hello I am Zura"
function beast(){
    echo'i am a beast who has woken up <br>';
}
beast();
// Function with argument
function funcWithArg($name){
 echo   "i  am $name  who has woken up <br>";
}
funcWithArg('jomobrain1');
// Create sum of two functions
function addTwo($num1,$num2){

  return $num1+ $num2 ; 
}
echo addTwo(200,202);

// Create function to sum all numbers using ...$nums

function sumAll(...$num){
 
    echo '<pre>';
    // echo var_dump($num);
    $sum=0;
    foreach ($num as $n) {
         $sum += $n;        
    }
    echo'</pre>';
    return $sum;
}

echo sumAll(1,2,3);
// Arrow functions
