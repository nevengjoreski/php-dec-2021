<?php

class Student {

    // PROPERTIES
    // private, public, protected
    // private -> moze da se promeni samo preku metodite od klasata
    // public -> moze da se promeni i nadvor od klasata

    private $name;
    public $lastname;
    public $age;
    public $email;
    public $phone;

    public static $no_of_students = 0;
    public static $max_number_of_students = 100;

    // METHODS
    // najcesto se public

    function __construct($n, $l, $e, $a, $p){
        // echo 'Ova se povikuva pri kreiranje instanca od klasa';
        $this->name = $n;
        $this->lastname = $l;
        $this->email = $e;
        $this->age = $a;
        $this->phone = $p;

        self::$no_of_students++;
    }
    
    function setName($newName){
        $this->name = $newName;
    }

    function getName(){
        return $this->name;
    }

    function pre(){
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }

}


