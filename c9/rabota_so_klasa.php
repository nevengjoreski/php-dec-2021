<?php

require_once "student.class.php";

$viktor = new Student('Viktor', 'Trajkovski', 'v.t@gmail.com', 45, '071354654');
$viktor->pre();

$biljana = new Student('Biljana', 'Murdjevska', 'b.m@gmail.com', 38, '077556688');

echo $biljana->lastname . '<br>';
$biljana->lastname = 'Koluci';
// $biljana->name = 'Mia';
$biljana->setName('Mia');
echo $biljana->getName();

$biljana->pre();

echo Student::$no_of_students;
echo '<br>';
echo Student::$max_number_of_students;