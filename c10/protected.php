<?php
session_start();

if(isset($_SESSION['loggedIn'])){
    echo ' OK You can see this page';
} else {
    header('Location: form.php');
}