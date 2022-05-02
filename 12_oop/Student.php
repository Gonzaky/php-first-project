<?php


require_once "Person.php";

class Student extends Person {
    public string $studentId;


     public function __construct($name, $surname, $studentId){ // here we added studentId for this class , ps. order of properties matters
        $this->studentId = $studentId;
        parent::__construct($name,$surname); // name and surname come from the parent
        
        $this->age = 25; // if we call it after the parent constructor it will change from NULL we had there to this new value for student
    } 
}