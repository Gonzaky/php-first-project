<?php
 
 require_once "vendor/autoload.php";

 $client = new \GuzzleHttp\Client();
 $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
 
 echo $response->getStatusCode(); // 200
 echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
 echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'


use app\Email as E; // example to give it an alias
use app\Person;

 $email = new E();
 $person = new Person();
