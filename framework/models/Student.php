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

    function store(){
        pre($_POST);
    }
}