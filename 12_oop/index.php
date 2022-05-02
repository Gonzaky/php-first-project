<?php

// What is class and instance

//IMPORTANT NOTE:  in php '$this->name' is the same has in JS 'this.name'

/* class Person { 
public $name;
public $surname;
private $age;

public static $counter = 0; // static properties and methods only belong to this parent class itself it will not belong to the instances

public function __construct($name, $surname) {
// construtor everytime theres an instance of this object this function will run , 
// for example even when i make $p = new Person(); it will run this constructor which means,
// when i make $p = new Person('goncales','vasques'); i can provide arguments to it right away instead of make new lines for that i.e. $p-> name = 'goncales';

   //  echo $name.' '.$surname;
    $this->name = $name;
    $this->surname = $surname;
    self::$counter++;


}

    
//class can also have methods/functions:

public function setAge($age){
    $this->age = $age;
}

public function getAge(){
   return  $this->age;
}

public static function getCounter(){
    return self::$counter;
}


}
 */

require_once "Person.php";
require_once "Student.php";


$student = new Student('goncalo', 'basque','1254' , 45);


echo '<pre>';
var_dump($student);
echo '</pre>';





/* -------------------- // down here is before the student // ------------------------ */ 

$p = new Person('goncales','vasques');
echo '<pre>';
var_dump($p);
echo '</pre>';

// $p->age = 30 ; this doesnt work because age is private cannot be acessed outside of the class for that we created a public function
 $p->setAge(27); // this uses a public function inside ot the class to get acess to private $age and then converting it to the new value

 echo '<pre>';
var_dump($p);
echo '</pre>';

// echo $p->age; same thing doesn't work because its private $age; for that we need to make a new public function 
echo $p->getAge(); // we made public method to get the age outside of the class

$p2 = new Person('john','niceu');
echo '<pre>';
var_dump($p2);
echo '</pre>';

echo Person::$counter; // prints 2 // here we called the property
echo Person::getCounter(); // prints 22  // here we called the method function that returns the property

/* $p = new Person();
$p-> name = 'goncales';
$p-> surname = 'vasques'; */

/* echo '<pre>';
var_dump($p);
echo '</pre>'; */
 // echo $p->name. '<br>';

/* $p2 = new Person();
$p2-> name = 'john';
$p2-> surname = 'nice';
echo $p2->name. '<br>'; */



// Create Person class in Person.php

// Create instance of Person


// Using setter and getter