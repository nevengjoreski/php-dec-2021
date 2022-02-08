<?php

$db = new class() extends PDO {

    function __construct(){

        $config = file_get_contents('config.json');
        $config_parsed = json_decode($config, true);
        $database_config = $config_parsed['database'];

        extract($database_config);

        try{
            parent::__construct(
                $connection_string,
                $username,
                $password,
                [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]
            );
        } catch( PDOException $e){
            die($e->getMessage());
        }
    }
};