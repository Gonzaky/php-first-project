<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.

$resource = curl_init($url);

curl_setopt($resource, CURLOPT_RETURNTRANSFER, true); // setting up options for the curl on $resource

$result = curl_exec($resource);// executes the curl

// curl_close($resource); //  does NOT work on php 8 +
$info = curl_getinfo($resource); // gets all the info;





echo $result;
// Get response status code
$code = curl_getinfo($resource, CURLINFO_HTTP_CODE); // gets only the http code i.e. 200

echo '<pre>';
var_dump($code);
echo '</pre>';

// set_opt_array

// Post request
$resource = curl_init();

$user = [
'name' => 'goncales',
'username' => 'vasques',
'email' => 'goncales@example.com'

];

// make a post request with options we want
curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)

]);

$result = curl_exec($resource); // here we execute the curl post we made 

echo $result; // here we print it to the browser the object user we posted



