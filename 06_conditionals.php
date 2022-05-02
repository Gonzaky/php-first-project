<?php

$age = 20;
$salary = 300000;

// Sample if

if ( $age === 20) { 
    echo '1';
}

// Without circle braces
if ( $age === 20) echo '1';


// Sample if-else
if ( $age > 20) echo '1';
else echo '2';


// Difference between == and ===
if ( $age == 20) echo '1' .'<br>'; // true

if ( $age == '20') echo '1' .'<br>'; // true

if ( $age === '20') echo '1' .'<br>'; // false


// if AND
if ( $age > 20 && $salary === 300000) echo '3';

// if OR
if ( $age > 20 ||  $salary === 300000) echo '4' .'<br>';

// Ternary if

echo   $age <22 ? 'young' : 'old';

// Short ternary

$myAge = $age ?: 18;
// $myAge  if $age exists take that value if not take value 18
// if $age is '0' its a falsy value so it will still be false and then $myAge will take the value 18


// Null coalescing operator
$myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John'; // Equivalent of above
// if $name exists take the value if not take 'john'

echo $myName.'<br>';


// switch

$userRole = 'editor'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    default:
        echo 'invalid role<br>';
}

