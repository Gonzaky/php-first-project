<?php

// What is a variable

// Variable types

/* 
string
integer = numero inteiro
float/double  = numeros decimais
boolean
null
array
object
resource
*/


// Declare variables
$name ='zura';
$age = 28;
$isMale = true;
$height= 1.85;
$salary = null;




// Print the variables. Explain what is concatenation

echo $name. '<br>'; // precisa de o '.' final para o <br> funcionar senao da syntax error
echo $age. '<br>';
echo $isMale.'<br>'; // true converts to string '1' / false converts to an empty string '' 
echo $height.'<br>';
echo $salary.'<br>'; // null also converts to empty string



// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';


// Print the whole variable
var_dump($name , $age , $isMale); // prints the type, the length and the value



// Change the value of the variable

$name = false;

// Print type of the variable
echo gettype($name).'<br>';

// Variable checking functions

is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true 

// Check if variable is defined
isset($name); //true 
isset($adress); // false 



// Constants
define('PI', 3.14); // this is the same as "const pi = 3.14" in JS

echo PI.'<br>'; // in php to call a constant you dont need the '$' sign like the ones we used before


// Using PHP built-in constants

echo SORT_ASC.'<br>'; // sorts numbers ascendent
echo PHP_INT_MAX.'<BR>'; // prints the max integer the php can have // i.e. 9223372036854775807