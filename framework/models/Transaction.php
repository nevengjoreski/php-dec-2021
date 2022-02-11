<?php

class Transaction {

    function getAll(){
        global $db;
        // $GLOBALS['db'];

        $sql = "SELECT t.* , CONCAT( s.name , \" \", s.lastname) as student
                FROM transactions t
                JOIN studenti s
                ON s.id = t.student_id
                ";
        $query = $db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getById($id){
        global $db;
        // $GLOBALS['db'];

        $sql = "SELECT t.* , CONCAT( s.name , \" \", s.lastname) as student
                FROM transactions t
                JOIN studenti s
                ON s.id = t.student_id
                WHERE t.id = :id"; 
        $query = $db->prepare($sql);
        $query->execute([
            ":id" => $id
        ]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    function store($new_transaction){
        global $db;

        $sql = "
            INSERT INTO transactions
                (transaction_number, type, sum, date_created, student_id)
            VALUES
                (:transaction_number, :type, :sum, :date_created, :student_id)
        ";

        $query = $db->prepare($sql);
        $isInsertedSuccessfull = $query->execute([
            ":transaction_number"     => $new_transaction['transaction_number'],
            ":type" => $new_transaction['type'],
            ":sum"      => $new_transaction['sum'],
            ":date_created"    => $new_transaction['date_created'],
            ":student_id"    => $new_transaction['student_id'],
        ]);
        
        if($isInsertedSuccessfull){
            header("Location: " . getSiteUrl("transaction/show/" . $db->lastInsertId()));
        }
    }

    
    function update($updated_transaction){
        global $db;

        $sql = "
            UPDATE transactions
            SET
                transaction_number = :transaction_number,
                type = :type,
                sum = :sum,
                date_created = :date_created,
                student_id = :student_id
            WHERE id = :id
        ";

        $query = $db->prepare($sql);
        $isInsertedSuccessfull = $query->execute([
            ":id"       => $updated_transaction['id'],
            ":transaction_number"     => $updated_transaction['transaction_number'],
            ":type" => $updated_transaction['type'],
            ":sum"      => $updated_transaction['sum'],
            ":date_created"    => $updated_transaction['date_created'],
            ":student_id"    => $updated_transaction['student_id'],
        ]);
        
        if($isInsertedSuccessfull){
            header("Location: " . getSiteUrl("transaction/show/" . $updated_transaction['id']));
        }
    }

    function delete($id){
        global $db;
        $sql = "DELETE FROM transactions
                WHERE id = :id"; 
        $query = $db->prepare($sql);
        $query->execute([
            ":id" => $id
        ]);
    }
}