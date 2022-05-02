<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];
$fruits2 = array();

// Print the whole array
echo '<pre>'; // this makes it more readable
var_dump($fruits);
echo '</pre>';


// Get element by index
echo $fruits[0] . '<br>';


// Set element by index
$fruits[0] = 'peach';

echo '<pre>'; 
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2

isset($fruits[2]); // will give true or false , if the index element 2 exists or not

echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';


// Append element

$fruits[] = ' banana' ; // this adds element to the end of array , its like '.push' from JS

echo '<pre>'; 
var_dump($fruits);
echo '</pre>';

// Print the length of the array

echo count($fruits) . '<br>'; // prints the length of the array


// Add element at the end of the array
array_push($fruits, 'foo' );

echo '<pre>'; 
var_dump($fruits);
echo '</pre>';



// Remove element from the end of the array

echo array_pop($fruits); // with echo we can still print the element we removed on the browser

echo '<pre>'; 
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array

array_unshift($fruits, 'bar'); 

echo '<pre>'; 
var_dump($fruits);
echo '</pre>';


// Remove element from the beginning of the array

echo array_shift($fruits); 

echo '<pre>'; 
var_dump($fruits);
echo '</pre>';

// Split the string into an array

$string = "banana,apple,peach";
// explode("," , $string);

echo '<pre>'; 
var_dump(explode("," , $string)); // its the  '.split' from JS
echo '</pre>';

// Combine array elements into string

echo implode('&', $fruits); // this is the '.join' in js , we can also link the string with the element that's inside the i.e "&" 


// Check if element exist in the array
echo '<pre>'; 
var_dump(in_array('Apple', $fruits)); // will print true or false
echo '</pre>';


// Search element index in the array
echo '<pre>'; 
var_dump(array_search('Apple', $fruits)); // it will return the index of the element if it exists , if not returns false
echo '</pre>';

// Merge two arrays

$vegetables = ['Potato', 'Cucumber'];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables)); // merge fruits array with vegetables
var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4 its new sugar syntax to merge arrays
echo '</pre>';

// Sorting of array (Reverse order also)

sort($fruits); //sort para ascendente ou alfabetico , rsort() para reverse
echo '<pre>';
var_dump($fruits);
echo '</pre>';





// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [ // this seems to be the objects in php!
    'name' => 'goncales',
    'surname' => 'vasques',
    'age' => 27,
    'hoobies' => ['calisthenics', 'coding']
];

echo '<pre>';
var_dump($person);
print_r($person); // this is another way to print array a bit mone cleaner with less info
echo '</pre>';


// Get element by key

echo $person['name']. '<br>'; // works the same way as objects in JS

// Set element by key

$person['channel'] = 'goncalesTV';

echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])){
    $person['address'] = 'Unknown';
};
// both do the same it checks if key address exists if it doesn't it will take the value we give 'unknown'; 
$person['address'] ??= 'Unknown'; //  $person['address']= $person['address'] ?? 'Unknown';
echo $person['address'].'<br>';


// Check if array has specific key
isset($person['address']);


// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';


// Print the values of the array

echo '<pre>';
var_dump(array_values($person));
echo '</pre>';


// Sorting associative arrays by values, by keys

// ksort => is by keys // asort is by the values
ksort($person); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($person);
echo '</pre>';



// Two dimensional arrays

$todos = [
    'teste' => 'tests',
    ['title' => 'todo tittle 1', 'completed' => true],
    ['title' => 'todo tittle 2', 'completed' => false]

];

echo '<pre>';
var_dump($todos);
echo '</pre>';