<?php

$api_key = 'e8b5e755995d25633d3ae9f52219fd0c';
$url = 'https://api.openweathermap.org/data/2.5/weather';
$mode = 'json';
$units = 'metric';
$city = 'Cancun';

$data_parameters = [
    "q" => $city,
    "appid" => $api_key,
    "mode" => $mode,
    "units" => $units,
];

$endpoint_url = $url . '?' . http_build_query($data_parameters);

$response = file_get_contents($endpoint_url);

$response_parsed = json_decode($response, true);

echo '<pre>';
// print_r($response_parsed);
echo '</pre>';

$background_url = 'http://openweathermap.org/img/w/' . $response_parsed['weather'][0]['icon'] . '.png';
?>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>City Name</th>
            <th>Description</th>
            <th>Temperature</th>
            <th>Wind Speed</th>
            <th>Icon Name</th>
            <th>Secret</th>
        </tr>
    </thead>
    <tbody>
        <!-- DA SE ISKUCA TABELA SO PODATOCITE OD JSON -->
        <tr>
            <td><?= $response_parsed['name'] ?></td>
            <td><?= $response_parsed['weather'][0]['description'] ?></td>
            <td><?= round($response_parsed['main']['temp']) ?></td>
            <td><?= $response_parsed['wind']['speed'] ?></td>
            <td><?= $response_parsed['weather'][0]['icon'] ?></td>
            <td>
                <img src="<?=$background_url?>" height="45" width="45" >
            </td>
        </tr>
    </tbody>
</table>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


