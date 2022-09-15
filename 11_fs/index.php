<?php
// ============Magic constants=====================
//Returns the path of the directorate of the current file 
echo __DIR__ .'<br>'  ;
//Returns the path of the file of the current file 
echo __FILE__ .'<br>' ;
echo __LINE__ .'<br>' ;
// Create directory

// mkdir('test');
// Rename directory
// rename('test','test2');
// Delete directory
// rmdir('test2');
// Read files and folders inside directory
;
$files=scandir('./');
echo '<pre>';
echo var_dump($files).'<br>';
echo '</pre>';
// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt') ;
//creates the sample.txt file and inputs the file
file_put_contents('sample.txt','This is the added text in here and it is very good');
echo '<hr>';
// file_get_contents from URL
$photosJson=file_get_contents('https://jsonplaceholder.typicode.com/photos?&_limit=8');
echo '<pre>';
echo $photosJson.'<br>';
echo '</pre>';

echo '<hr>';
echo '<pre>';
echo var_dump(json_decode($photosJson,true)).'<br>';
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
echo 'yes'.file_exists('sample.txt').'<br>';
echo 'Yes?'.is_dir('test');
// is_dir
// filemtime
// filesize
// disk_free_space
// file