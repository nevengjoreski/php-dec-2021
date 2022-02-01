<?php

// phpinfo();

$endpoint = 'https://www.nbrm.mk/klservice/kurs.asmx?WSDL';
$webservice =  new SoapClient($endpoint);

$data = [
    'StartDate' => '01.02.2022',
    'EndDate' => '01.02.2022',
];

$response = $webservice->GetExchangeRate($data);

$response_parsed = simplexml_load_string($response->GetExchangeRateResult);
// echo '<pre>';
// print_r($response_parsed);
// echo '</pre>';

// da se napravi tabela so slednive koloni
// NazivMak Drzava Sreden
?>

<div class="container">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>NazivMak</th>
                <th>Drzava</th>
                <th>Sreden</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($response_parsed->KursZbir as $record) {?>
                <tr>
                    <td><?= $record->NazivMak ?></td>
                    <td><?= $record->Drzava ?></td>
                    <td><?= $record->Sreden ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>







<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
