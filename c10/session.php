<?php
session_start();

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


if(1 == 1){
    $_SESSION['loggedIn'] = true;
    $_SESSION['user_name'] = "Neven";
}

session_destroy();
?>

<a href="cookie_theme.php">Go to cookie theme</a>

