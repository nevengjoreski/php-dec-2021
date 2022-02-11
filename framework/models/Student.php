<?php

class Student {

    function getAll(){
        global $db;
        // $GLOBALS['db'];

        $sql = "SELECT * FROM studenti";
        $query = $db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getById($id){
        global $db;
        // $GLOBALS['db'];

        $sql = "SELECT * FROM studenti
                WHERE id = :id"; 
        $query = $db->prepare($sql);
        $query->execute([
            ":id" => $id
        ]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    function store($new_student){
        global $db;

        $sql = "
            INSERT INTO studenti
                (name, lastname, age, email, phone)
            VALUES
                (:name, :lastname, :age, :email, :phone)
        ";

        $query = $db->prepare($sql);
        $isInsertedSuccessfull = $query->execute([
            ":name"     => $new_student['name'],
            ":lastname" => $new_student['lastname'],
            ":age"      => $new_student['age'],
            ":email"    => $new_student['email'],
            ":phone"    => $new_student['phone'],
        ]);
        
        if($isInsertedSuccessfull){
            header("Location: " . getSiteUrl("student/show/" . $db->lastInsertId()));
        }
    }

    
    function update($updated_student){
        global $db;

        $sql = "
            UPDATE studenti
            SET
                name = :name,
                lastname = :lastname,
                age = :age,
                email = :email,
                phone = :phone
            WHERE id = :id
        ";

        $query = $db->prepare($sql);
        $isInsertedSuccessfull = $query->execute([
            ":id"       => $updated_student['id'],
            ":name"     => $updated_student['name'],
            ":lastname" => $updated_student['lastname'],
            ":age"      => $updated_student['age'],
            ":email"    => $updated_student['email'],
            ":phone"    => $updated_student['phone'],
        ]);
        
        if($isInsertedSuccessfull){
            header("Location: " . getSiteUrl("student/show/" . $updated_student['id']));
        }
    }

    function delete($id){
        global $db;
        $sql = "DELETE FROM studenti
                WHERE id = :id"; 
        $query = $db->prepare($sql);
        $query->execute([
            ":id" => $id
        ]);
    }
}