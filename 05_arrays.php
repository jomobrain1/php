<?php

// Create array

use JetBrains\PhpStorm\Language;

echo'<h2>Create array</h2>';
$fruits=["banana","orange","mangoes","apple"];
echo '<hr/>';
// Print the whole array
echo'<h2>Print the whole array</h2>';
echo "<pre>".var_dump($fruits)."</pre>";
echo '<hr/>';
// Get element by index
echo'<h2>Get element by index</h2>';
echo $fruits[2];
// Set element by index
echo  '<h2>Set element by index</h2>';
echo $fruits[3]."<br>";
echo '<hr/>';

// Check if array has element at index 2
echo'<h2>Check if array has element at index 2</h2>';
echo isset($fruits[2]);
echo '<hr/>';
// Append element
echo'<h2>Append element</h2>';
$fruits[]="pineapple";
echo  var_dump($fruits)."<br>";
echo '<hr/>';
// Print the length of the array
echo'<h2>Print the length of the array</h2>';
count($fruits);
echo '<hr/>';
// Add element at the end of the array
echo'<h2>Add element at the end of the array</h2>';
array_push($fruits,'guavas');
echo var_dump($fruits)."<br>";
echo '<hr/>';
// Remove element from the end of the array
echo'<h2>Remove element from the end of the array</h2>';

echo '<hr/>';
// Add element at the beginning of the array
echo'<h2>Add element at the beginning of the array</h2>';
echo '<hr/>';
// Remove element from the beginning of the array
echo'<h2>Remove element from the beginning of the array</h2>';
echo array_shift($fruits);
echo '<hr/>';
// Split the string into an array
echo'<h2>Split the string into an array</h2>';
echo '<hr/>';
// Combine array elements into string
echo'<h2>Combine array elements into string</h2>';
echo '<hr/>';
// Check if element exist in the array
echo'<h2>Check if element exist in the array</h2>';
echo '<pre>';
echo var_dump(in_array('orange',$fruits)).'<br>';
echo '</pre>';
echo '<hr/>';
// Search element index in the array
echo'<h2>Search element index in the array</h2>';

;
echo '<hr/>';
// Merge two arrays
echo'<h2> Merge two arrays</h2>';
$languages=["javascript","php","flutter","node"];
$places=['jomvu','kisauni','kikambala'];
$merged=array_merge($languages,$places);
echo var_dump($merged) .'<br>';
echo var_dump([...$languages]).'<br>';

echo '<hr/>';
// Sorting of array (Reverse order also)
echo'<h2>Sorting of array (Reverse order also)</h2>';
echo var_dump($languages).'<br>';
 sort($languages).'<br>';
 echo '<pre>'.var_dump($languages).'</pre><br>';
echo '<hr/>';
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
echo'<h2>Create an associative array</h2>';
$person=[
    'name'=>'jomobrain1',
    'age'=>'23',
    'job'=>'software developer',
    'salary'=>167000,
    'hobbies'=>["swimming","coding",'football']
];
echo "<pre>".var_dump($person )."</pre> <br>";
echo '<hr/>';
// Get element by key
echo'<h2>Get element by key</h2>';
echo $person['salary'].'<br>';
echo '<hr/>';
// Set element by key
echo'<h2>Set element by key</h2>';
$person['wife']='destiny codder';
echo var_dump($person).'<br>';

echo '<hr/>';
// Null coalescing assignment operator. Since PHP 7.4
echo'<h2>Null coalescing assignment operator. Since PHP 7.4</h2>';
if(!isset($person['address'])){
    $person['address']='unknown';
    
}
echo $person['address'].'<br>';
$person['phone'] ??= "07453";
echo $person['phone'].'<br>';
echo '<hr/>';
// Check if array has specific key
echo'<h2>Check if array has specific key</h2>';
echo '<hr/>';
// Print the keys of the array
echo'<h2>Print the keys of the array</h2>';
echo '<hr/>';
// Print the values of the array
echo'<h2>Print the values of the array</h2>';
echo '<hr/>';
// Sorting associative arrays by values, by keys
echo'<h2>Sorting associative arrays by values, by keys</h2>';
echo '<hr/>';

// Two dimensional arrays
echo'<h2>Two dimensional arrays</h2>';
$todos=[
    ['title'=>'learn js','completed'=>true],
    ['title'=>'learn node','completed'=>true],
];
echo var_dump($todos).'<br>';
echo '<hr/>';
