<?php

$endpoint = 'http://localhost/php-dec-2021/c13/auth.php';

$user = 'admin';
$pass = 'admin';
$userpwd = "$user:$pass";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $endpoint);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERPWD, $userpwd);
$response = curl_exec($curl);

if(curl_errno($curl)){
    echo "Curl error: " , curl_error($curl) . '<br>';
}

$status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
// echo 'Status code : ' . $status_code . '<br>';
curl_close($curl);

echo $response;

