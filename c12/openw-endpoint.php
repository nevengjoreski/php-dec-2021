<?php

function getOpenWeatherData($city, $mode){
    
    $api_key = 'e8b5e755995d25633d3ae9f52219fd0c';
    $url = 'https://api.openweathermap.org/data/2.5/weather';
    $units = 'metric';

    $data_parameters = [
        "q" => $city,
        "appid" => $api_key,
        "mode" => $mode,
        "units" => $units,
    ];

    $endpoint_url = $url . '?' . http_build_query($data_parameters);

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $endpoint_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    switch($mode){
        case "json":
            $response = json_decode($response, true);
            break;
    }
    return $response;
}