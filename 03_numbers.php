<?php

// Declaring numbers

$a = 5 ;
$b =4 ;
$c = 1.2;

// Arithmetic operations

echo $a + $b + $c .'<br>' ; // prints 10.2 on the browser
echo ($a + $b) * $c  .'<br>'; // prints 10.8 on the browser it uses the same rules as irl math 
echo $a % $b .'<br>' ; // remainder/resto , no numero 5 cabe 1 vez o numero 4, e fica a sobrar '1', reminder = 1 

// Assignment with math operators

 // $a = $a + $b; // same thing as $a += $b;
// echo $a.'<br>'; // now prints 9 

// Increment operator
echo $a++ .'<br>'; // with echo the way it reads is from left to right , its gonna print 5 and only after that its gonna add +1 on $a but wont show
echo ++$a .'<br>'; // with echo this will add the +1 before it prints $a , and because we already added +1 before $a was 6 and NOW its 7




// Decrement operator
echo $a-- .'<br>'; // it works the same way as the increment 
echo --$a .'<br>';


// Number checking functions

is_double(1.25); // true
is_float(1.25); // true  double and float are the same , its for decimals numbers

is_int(1);  // true 
is_integer(1); // they are both the exact same

is_numeric('3.45'); // true , it takes a string of numbers and if they are just numbers it can evaluate it as numbers
is_numeric('3g.45'); // false , because of letter 'g' it can no longer convert to a number 

// Conversion

$strNumber = '12.34';
$number = (float)$strNumber; // it converts a string of numbers to actual float number // float(12.34)
$number = (int)$strNumber; // it converts a string of numbers to an integer number // int(12)
var_dump($number); // prints float(12.34) , type of float decimal number

$number2 = intval($strNumber); // does the exact same thing as before with a diff syntax
$number2 = floatval($strNumber);


// Number functions

echo "abs(-15) " . abs(-15) . '<br>'; // absolute value / 15 
echo "pow(2,  3) " . pow(2, 3) . '<br>'; // 2^3 "dois ao cubo"
echo "sqrt(16) " . sqrt(16) . '<br>'; // raiz quadrada
echo "max(2, 3) " . max(2, 3 , 9) . '<br>'; // print to max number // 9 
echo "min(2, 3) " . min(2, 3, 5) . '<br>'; // print o min number (2)
echo "round(2.4) " . round(2.4) . '<br>'; // arredondar // 2
echo "round(2.6) " . round(2.6) . '<br>'; // arredondar // 3 
echo "floor(2.6) " . floor(2.6) . '<br>'; // arredondar para baixo // 2
echo "ceil(2.4) " . ceil(2.4) . '<br>'; // arredondar para cima // 3

// Formatting numbers
$number =123456789.12345;
//   of the $number it makes 2 decimals ie'.12' ,
//  then how to separate the integer with the decimal, then it makes the thousand separator to have ' ' space  
echo number_format($number , 2 , ',' , ' ');




// https://www.php.net/manual/en/ref.math.php

// it has all the math functions for php 
