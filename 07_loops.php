<?php

// while

// while (true) { // Infinite loop: DON'T run this }


// Loop with $counter

$counter = 0; // When counter is 10??
while ($counter < 10) {
    echo $counter.'<br>';
    // if ($counter === 5) break;
    $counter++;
}


// do - while

$counter = 0; // When counter is 10?
do { // the difference is that the do-while will always run once and only after that it will check the while condition
    // Do some code right here
    $counter++;
} while ($counter < 10);



// for

for($i = 0 ; $i < 10 ; $i++){
    echo $i . '<br>';
}

// foreach

$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) { // $i é o index e $fruit o value
    echo $i . ' ' . $fruit . '<br>';
}


// Iterate Over associative array.

$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
foreach ($person as $key => $value) {
  //   if ($key === 'hobbies') {break; }

  if(is_array($value)){ // checks if its an array
    echo $key . ' ' . implode(',' , $value) . '<br>'; // implode() the array to be able to print it on screen
  } else  echo $key . ' ' . $value . '<br>';
}
