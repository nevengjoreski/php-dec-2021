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

    // METHODS
    // najcesto se public

}

$viktor = new Student();

$viktor->lastname = 'Trajkovski';
$viktor->age = '33';
$viktor->email = 'v.t@gmail.com';
// $viktor->name = 'Viktor';

echo '<pre>';
print_r($viktor);
echo '</pre>';

echo $viktor->lastname;
