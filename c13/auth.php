<?php

requireAuth() ? sendResponse() : reject();

function requireAuth(){

    $AUTH_USER = 'admin';
    $AUTH_PASS = 'admin';
    return  !empty($_SERVER['PHP_AUTH_USER']) &&
            !empty($_SERVER['PHP_AUTH_PW']) &&
            $_SERVER['PHP_AUTH_USER'] === $AUTH_USER &&
            $_SERVER['PHP_AUTH_PW'] === $AUTH_PASS;
}

function sendResponse(){
    $endpoint = "https://jsonplaceholder.typicode.com/posts?_limit=10";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $endpoint);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);

    if(curl_errno($curl)){
        echo "Curl error: " , curl_error($curl) . '<br>';
    }

    curl_close($curl);

    echo $response;
}

function reject(){
    header("HTTP/1.1 401 Authentication Required");
    header('WWW-Authenticate: Basic realm="Access denied"');
    echo "Access denied mister";
    die;
}