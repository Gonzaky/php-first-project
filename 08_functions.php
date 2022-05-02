<?php

// Function which prints "Hello I am gonvales"

function hello(){
    echo 'hello i am goncales<br>';
}
hello();

// Function with argument
function hello2($name){
   //  echo "hello i am $name";
   return "hello i am $name <br>";
}

 echo hello2('goncales');



// Create sum of two functions

function sum($a ,$b){  
    return $a + $b ;
 }

echo sum(10,5) . '<br>';

// Create function to sum all numbers using ...$nums


function sum2(...$nums) { 
 $total = 0; 
    for($i = 0 ; $i< count($nums) ; $i++){ 
        $total += $nums[$i];
    }
    return $total;
// foreach($nums as $n){ $total += $n;  } this could have been another option

}
echo sum2(1,2,3,4,5,50,2);


// Arrow functions

function sum3(...$nums) {
 // its like .reduce on js fist takes the $nums array , 
 //  no primeiro round:  fn( $carry = 1º elemento to array , $n = 2º elemento do array) => faz $carry + $n // etc
    return array_reduce($nums, fn($carry , $n) => $carry + $n  );
}