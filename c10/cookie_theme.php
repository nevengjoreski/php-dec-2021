<?php
session_start();

if(isset($_COOKIE['theme'])){
    echo "
        <style>
            body {
                background-color: {$_COOKIE['theme']}
            }
        </style>
    ";
}

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

?>

<a href="session.php">Go to session</a>