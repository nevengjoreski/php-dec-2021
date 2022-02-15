<?php
require 'PlasticNumbers.php';

$response = "";
$style = "";
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    if (
        !is_numeric($number)
        || $number < 0
        || $number > 1000000000
    ) {
        $response = "Please provide a number between 0 and 1000000000";
        $style = "alert alert-danger";
    } else {
        $plasticNumbers = new PlasticNumbers();
        $plasticSets = $plasticNumbers->countSets($number);
        $response = "{$plasticSets} plastic sets are used to create this number";
        $style = "alert alert-info";
    }
}

require 'view.php';