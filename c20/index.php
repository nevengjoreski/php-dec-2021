<?php

require_once("vendor/autoload.php");

$whoops = new \Whoops\Run;
$whoops->pushHandler( new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


// $tracking_number = 'UB428666608LV';
// $endpoint = "https://www.posta.com.mk/tnt/api/query?id=$tracking_number";

// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $endpoint);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($curl);

// if(curl_errno($curl)){
//     echo "Curl error: " , curl_error($curl) . '<br>';
// }

// curl_close($curl);

// $parsed_response = simplexml_load_string($response);

// dump($parsed_response);
// dump($parsed_response);
// die;
// dd($parsed_response);


// SPREADSHEET

// $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
// $spreadsheet = $reader->load('excel.xlsx');
// $sheetData = $spreadsheet->getActiveSheet()->toArray();
// dd($sheetData);

include_once('Twig.php');

echo $twig->render('first.html.twig', 
    [
        'name' => 'PHP TWIG INIT',
        'users' => [
            'Stavre', 'Eminem', 'Dr Dre', 'Tuturu'
        ]
    ]);