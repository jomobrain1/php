<?php

// while

// Loop with $counter

// do - while

// for
for ($i=0; $i < 10 ; $i++) { 
    # code...
    echo '<span>'.$i.'</span>';
}
// foreach
$languages=["javascript","php","flutter","node"];
foreach ($languages as $language) {
    # code...
    echo '<br>'.$language.'<br>';
}
foreach ($languages as $index=> $language) {
    # code...
    echo '<br>'.$index .$language .'<br>';
}
// Iterate Over associative array.
$person=[
    'name'=>'jomobrain1',
    'age'=>'23',
    'job'=>'software developer',
    'salary'=>167000,
    'hobbies'=>["swimming","coding",'football']
];

foreach ($person as $key => $value) {
   if(is_array($value)){
    echo $key.' : '.implode(",",$value).'<br> ';
   }else{
    echo ' '.$key.' : '.$value;
   }
}