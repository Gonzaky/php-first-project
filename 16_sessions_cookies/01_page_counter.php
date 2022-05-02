<?php 
 session_start(); // generates a cookie that connects to the browser
// echo session_id();

$_SESSION['page_counter'] = $_SESSION['page_counter'] ?? 0 ;
$_SESSION['page_counter']++;


$pageCounter =  $_SESSION['page_counter'] ??  0;

if($_SESSION['page_counter'] === 10) {
    echo 'thank you for visiting us 10 times' . '<br>';
    session_unset(); // removes all the values from the sessions but doesn't destroy the session
    session_destroy(); // after destroy its impossible to set more values inside the session

}



 // $_SESSION['name'] = 'goncales';  
// the session name is saved with the cookie even if I delete this it will stay 'goncales' until i remove the session cookie or change it
echo '<pre>';
var_dump($_SESSION); 
echo '</pre>';

// unset($_SESSION['name']); // this removes the session name 'goncales' I gave before keeping the same session cookie
//session_unset(); // removes all the values from session;


?> 

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>My Awesome page, visited: <?php echo $pageCounter?> times  </h1>
</body>
</html>
