<?php

$tracking_sites = [
    'google' => 'https://google.com',
    'time' => 'https://time.mk',
];

if( isset($_GET['page']) ){

    logUserTracking();

    header("Location: " . $tracking_sites[$_GET['page']]);

}

function logUserTracking(){
    global $tracking_sites;
    // zapisi vo baza ... koe IP odtide na koja strana

    // zapisi vo fajl
    // $_SERVER['REMOTE_ADDR']
    $content = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">';

    $content .= '<li class="list-group-item">' .$_SERVER['REMOTE_ADDR'] . ' ' . $tracking_sites[$_GET['page']] . PHP_EOL . '</li>';
    file_put_contents('tracking.html', $content, FILE_APPEND);
}