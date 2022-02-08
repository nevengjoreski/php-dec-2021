<?php
require 'models/Student.php';

class StudentController {

    function show($id){
        $studentModel = new Student();

        if($id){
            $student = $studentModel->getById($id);
            $studenti = [$student];
        } else {
            $studenti = $studentModel->getAll();
        }

        include "views/student/index.php";
    }

    function create(){
        include "views/student/create_edit.php";
    }
    
    function insert(){
        // $studentModel = new Student();
        // $studentModel->store();

        (new Student)->store();
    }
}