<?php
require 'models/Transaction.php';
require 'models/Student.php';

class TransactionController {

    private $types = ['deposit', 'withdraw'];

    function show($id){
        $transactionModel = new Transaction();

        if($id){
            $transaction = $transactionModel->getById($id);
            $transactioni = [$transaction];
        } else {
            $transactioni = $transactionModel->getAll();
        }

        include "views/transaction/index.php";
    }

    function create(){
        $action = getSiteUrl('transaction/insert');
        $button_label = 'Create Transaction';
        $studenti = (new Student)->getAll();

        include "views/transaction/create_edit.php";
    }
    
    function insert(){
        $new_transaction = post();
        // validation on fields for new_transaction
        // pre($new_transaction);die;
        // YYYY-MM-DDThh:mm  // 2017-06-01T08:30
        // 2022-02-01 00:00:00
        $date = (new DateTime($new_transaction['date_created']))->format('Y-m-d H:i:s');
        $new_transaction['date_created'] = $date;
        
        (new Transaction)->store($new_transaction);
    }

    function edit($id){
        $action = getSiteUrl('transaction/update');
        $button_label = 'Update';

        $studenti = (new Student)->getAll();

        $transaction = (new Transaction)->getById($id);

        $pre_formated_date = new DateTime($transaction['date_created']);
        $date = $pre_formated_date->format('Y-m-d') . 'T'. $pre_formated_date->format('H:i');
        $transaction['date_created'] = $date;

        include "views/transaction/create_edit.php";
    }
    
    function update(){
        $updated_transaction = post();

        $date = (new DateTime($updated_transaction['date_created']))->format('Y-m-d H:i:s');
        $updated_transaction['date_created'] = $date;

        (new Transaction)->update($updated_transaction);
        $_SESSION['message'] = [ 
            'body' => 'Successfull update !',
            'type' => 'danger',
        ];
    }

    function delete($id){
        (new Transaction)->delete($id);
        header("Location: " . getSiteUrl("transaction/show"));
    }
}