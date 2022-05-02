<?php

// Create simple string

// '.' dot is used for concatenation in php
$name = 'goncales';
$string = 'hello i am. '. $name .' im 27';
$string2 = "hello  i am $name, and im 27"; // "" in php is the same has backticks `` in js 

echo $string .'<br>';
echo $string2 .'<br>';

// String concatenation
echo 'hello '.'world '.'and php '.'im goncales '. '<br>';

// String functions
$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL; // length of the string 
echo "2 - " . trim($string) . '<br>' . PHP_EOL; // removes spaces at start and end
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL; // removes spaces at the left
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;// removes spaces at the right
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL; // counts the number of words
echo "6 - " . strrev($string) . '<br>' . PHP_EOL; // reverses the string
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL; // converts to Uppercase
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL; // converts to Lowercase
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL; // converts first letter to upper case 
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL; //  converts first letter to lower case 
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL; // converts the first letter of all the words to upper case
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // finds the index position of the "world" its cap sensitive //  null here
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL; // finds the index position of the "world" its  NOT cap sensitive // 10 
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL; // it gives us the string starting only from index 8 you can add a ', 6' to also give only 6 characters after index 8 
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL; // replaces word 'world' for 'php', in the variable $string it's CAP sensitive
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;// replaces word 'world' for 'php', in the variable $string it's NOT cap sensitive

// Multiline text and line breaks
$longText = "
  Hello, my name is goncales
  I am 27,
  I love my pc
";

echo $longText .'<br>'; // it will print always inline 
echo nl2br($longText) .'<br>'; // it makes <br> like the way its the source code 


// Multiline text and reserve html tags

$longText = "
  Hello, my name is <b>goncales</b>
  I am <b>27</b>,
  I love my pc
";

echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;



// https://www.php.net/manual/en/ref.strings.php
// lista de funçoes de strings para php