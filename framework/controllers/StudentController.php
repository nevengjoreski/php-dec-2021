<?php
require 'models/Student.php';

class StudentController {

    function show(){
        $studentModel = new Student();
        $studentModel->show();
    }
}