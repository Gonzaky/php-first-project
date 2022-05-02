<?php
// Magic constants
echo __DIR__ . '<br>'; // gives file directory

echo __FILE__ . '<br>'; // gives file directory and the exact file that we are using

echo __LINE__ . '<br>'; // prints the number of the line where this is being written ex:7

// Create directory
// mkdir('test');


// Rename directory
// rename('test','test2');

// Delete directory
// rmdir('test2');

// Read files and folders inside directory
$files = scandir('../');
echo implode(' / ' , $files);
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt'); // reads the content inside
// echo file_put_contents('sample.txt' , 'hello world!!!'); // created the file with the text content inside

// file_get_contents from URL
$jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo $jsonContent . '<br> <br>';
$users = json_decode($jsonContent , true); // converts normal json to associative Array in php which is the "objects" in php
// the ', true ' its to make it legit an associative array
var_dump($users);

file_exists('sample.txt');// true
is_dir('test'); // false because there is not folder in this directory named 'test



// https://www.php.net/manual/en/book.filesystem.php
// file_exists

// is_dir
// filemtime
// filesize
// disk_free_space
// file