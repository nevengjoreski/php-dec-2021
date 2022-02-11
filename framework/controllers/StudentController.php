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
        $action = getSiteUrl('student/insert');
        $button_label = 'Create';

        include "views/student/create_edit.php";
    }
    
    function insert(){
        $new_student = post();
        // validation on fields for new_student
        (new Student)->store($new_student);
    }

    function edit($id){
        $action = getSiteUrl('student/update');
        $button_label = 'Update';

        $student = (new Student)->getById($id);
        include "views/student/create_edit.php";
    }
    
    function update(){
        $updated_student = post();
        (new Student)->update($updated_student);
        $_SESSION['message'] = [ 
            'body' => 'Successfull update !',
            'type' => 'danger',
        ];
    }

    function delete($id){
        (new Student)->delete($id);
        header("Location: " . getSiteUrl("student/show"));
    }
}