<?php
require "openw-endpoint.php";

$city_names = @$_REQUEST['city_names'] ? 
                json_decode($_REQUEST['city_names'], true) :
                [];
$responses = [];
$mode = @$_REQUEST['mode'];

if(isset($_REQUEST['city'])){
    $city_names[] = $_REQUEST['city'];
    foreach($city_names as $city){
        $responses[] = getOpenWeatherData($city, $mode);
    }
}

if($mode === 'json'){

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
            <?php foreach($responses as $response){ 
                    $background_url = 'http://openweathermap.org/img/w/' . $response['weather'][0]['icon'] . '.png';?>
                <tr>
                    <td><?= $response['name'] ?></td>
                    <td><?= $response['weather'][0]['description'] ?></td>
                    <td><?= round($response['main']['temp']) ?></td>
                    <td><?= $response['wind']['speed'] ?></td>
                    <td><?= $response['weather'][0]['icon'] ?></td>
                    <td>
                        <img src="<?=$background_url?>" height="45" width="45" >
                    </td>
                </tr>
            <?php } ?>
    </tbody>
</table>

<?php } elseif($mode === 'html') {?>
    <div class="container">
        <?php foreach($responses as $response){ 
         echo $response;
        }?>
    </div>
<?php } ?>

<div class="container">
    <form method="post">
        <input type="hidden" name="city_names" value="<?= htmlentities(json_encode($city_names)) ?>">
        <div class="d-grid">
            <label for="">City</label>
            <input type="text" class="form-control" name='city' value="">
        </div>
        
        <div class="d-grid">
            <label for="">Mode</label>
            <select name="mode" class="form-control">
                <option>html</option>
                <option>json</option>
            </select>
        </div>

        <div class="d-grid mt-3">
            <input type="submit" value="Get API" class="btn btn-warning btn-block">
        </div>
    </form>
</div>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
