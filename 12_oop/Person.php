<?php



class Person { 
    public string $name; // from php 7.4 we can also give "types" to the properties
    public string $surname;
    protected ?int $age; // if we give "?" before the type it always the type to change to something different
    // we changed from private to protected so we can access it with the student class

    public static int $counter = 0; // static properties and methods only belong to this parent class itself it will not belong to the instances
    
    public function __construct($name, $surname) {
    // construtor everytime theres an instance of this object this function will run , 
    // for example even when i make $p = new Person(); it will run this constructor which means,
    // when i make $p = new Person('goncales','vasques'); i can provide arguments to it right away instead of make new lines for that i.e. $p-> name = 'goncales';
    
       //  echo $name.' '.$surname;
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
        $this->age = null;
    
    
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