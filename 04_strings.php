<?php

// Create simple string
$name="jomobrain";
$string='The person named '.$name.' is a Beast';
$string2="The person named $name is a Beast";
echo $string.'<br>';
echo $string2.'<br>';
echo '<hr/>';
// String concatenation
echo'<h2>String conctenation</h2>';
echo 'Hello world'. ' JomoBrain is tired'.'of this supidty called poverty';
echo '<hr/>';
// String functions
echo'<h2>String Functions</h2>';
$stringFunction=" Hello Beast ";
echo '1- '. strlen($stringFunction). '<br>';
echo '2- '. trim($stringFunction). '// removes whitespaces <br>';
echo '3- '. ltrim($stringFunction). '//removes white spaces from left<br>';
echo '4- '. rtrim($stringFunction). '// removes white spaces from right<br>';
echo '5- '. str_word_count($stringFunction). '...counts words <br>';
echo '6- '. strrev($stringFunction). '...reverses string<br>';
echo '7- '. strtoupper($stringFunction). '..UpperCases..<br>';
echo '8- '. strtolower($stringFunction). '..LowerCase..<br>';
echo '9- '. ucfirst($stringFunction). '<br>';
echo '10- '. lcfirst('HELLO'). '<br>';
echo '11- '. ucwords($stringFunction). '<br>';
echo '12- '. strpos($stringFunction,'Beast'). '<br>';
echo '13- '. substr('IamaBeastManzee',8). '<br>';
echo '14- '. str_replace('Beast','PHP',$stringFunction). '<br>';
echo '15- '. str_ireplace('beast','PHP',$stringFunction). '..ignores case <br>';
echo '<hr/>';

// Multiline text and line breaks
echo'<h2>MultiLine text</h2>';
$longText="
Hello, My name is <b>jomobrain1</b>,
i am A <b>Beast</b> from coast,
i like codding alot

";

echo $longText.'<br>';
echo nl2br($longText);

echo '<hr/>';
// Multiline text and reserve html tags
echo'<h2>Multiline text and reserve html tags</h2>';
echo htmlentities($longText).'<br>';
echo nl2br(htmlentities($longText)).'<br>';
echo '<hr/>';
echo html_entity_decode('&lt;b&gt;Beast&lt;/b&gt');
// https://www.php.net/manual/en/ref.strings.php
echo '<hr/>';