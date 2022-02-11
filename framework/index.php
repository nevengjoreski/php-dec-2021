<?php
session_start();
// http://localhost/php-dec-2021/framework/student/show/1

$default = [
    "controller" => 'home',
    "method"     => 'show',
    "id"         => '',
];

$parameters =   isset($_GET['parameters']) ?
                explode('/', $_GET['parameters']) :
                [];

switch(count($parameters)){
    case 0 :
        $controller = $default['controller'];
        $method     = $default['method'];
        $id         = $default['id'];
        break;
    case 1 :
        $controller = $parameters[0];
        $method     = $default['method'];
        $id         = $default['id'];
        break;
    case 2 :
        $controller = $parameters[0];
        $method     = $parameters[1];
        $id         = $default['id'];
        break;
    case 3 :
        $controller = $parameters[0];
        $method     = $parameters[1];
        $id         = $parameters[2];
        break;
    default:
        die("Too many parameters in the url!!!");
}

// controller = StudentController
// model      = Student

// echo '<pre>';
// print_r($parameters);
// echo '</pre>';

$filename = ucfirst($controller);
$controller_filename = "controllers/{$filename}Controller.php";

if(!file_exists($controller_filename)){
    die("Unknown controller name");
}

require $controller_filename;

// ADDITIONAL LIBRARIES
require '_includes/db_connection.php';
require '_includes/variables.php';
require '_includes/general_functions.php';
require 'views/home/header_html.php';

$controller_name = $filename."Controller"; // StudentController
$application = new $controller_name;

if(!method_exists($application, $method)){
    die("Unknown method call");
}

$application->$method($id); // <-- THE ROAD TO THE APPLICATION

// TODO: Add messages
include '_includes/scripts.php';
