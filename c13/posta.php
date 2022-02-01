<?php



$tracking_number = 'UB428666608LV';
$endpoint = "https://www.posta.com.mk/tnt/api/query?id=$tracking_number";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $endpoint);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);

if(curl_errno($curl)){
    echo "Curl error: " , curl_error($curl) . '<br>';
}

curl_close($curl);

$parsed_response = simplexml_load_string($response);

// echo '<pre>';
// print_r($parsed_response);
// echo '</pre>';

function checkAndReplaceChars($string){
    // take string and make it chars
    // if oneof some chars is found replace it with correct
    $return = '';

    foreach( str_split($string) as $char ){
        $return .= replaceChar($char);
    }
    return $return;
}

function replaceChar($char){
    // print_r($char);
    $replacemenets = [
        "}" => "kj",
        "{" => "sh",
        "[" => "sh",
        "!" => "ch",
        "~" => "ch",
        ];

    return $replacemenets[$char] ?? $char;
}

?>

<div class="container">
    <h3>Tracking Number - <?= $tracking_number ?></h3>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Од</th>
                <th>До</th>
                <th>Датум</th>
                <th>Забелешка</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($parsed_response->TrackingData as $record) { ?>
                <tr>
                    <td><?= checkAndReplaceChars($record->Begining) ?></td>
                    <td><?= $record->End ?></td>
                    <td><?= $record->Date ?></td>
                    <td><?= checkAndReplaceChars($record->Notice) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<!-- <input id="trackin_number" type="text" value="CM537476600DE">
<button onclick="callPosta()">Call Posta</button>

<script>
    function callPosta(){
        // debugger
        const trackin_number = document.getElementById('trackin_number').value

        fetch(`https://www.posta.com.mk/tnt/api/query?id=${trackin_number}`).then(res => res.text()).then(data => alert(data));
    }
</script> -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
