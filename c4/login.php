<?php


// pre($_GET);
// pre($_POST);
pre($_REQUEST);


$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

// $hashed_password = password_hash($password, PASSWORD_DEFAULT );
// echo password_hash('admin123', PASSWORD_DEFAULT);
// echo $hashed_password;

if(validateUser($username, $password)){
    echo 'Successful log in ' . $username;
} else {
    echo 'Wrong Username or Password';
}



function validateUser($username, $password){

    // username : admin
    // password : admin123
    $hashed_password = '$2y$10$Ax59e2PD5p3SlQMnUWbR8eggJ4YtM8L9jHjMMghhhI90Y2oVcSoBe';
    $user_username = 'admin';

    if(strlen($username) >= 8 || strlen($password) >= 8){
        // log user IP for BAN
        echo ' Stop trying to hack ' . $_SERVER['REMOTE_ADDR'];
    }

    return  isset($username) &&
            isset($password) &&
            password_verify($password, $hashed_password) &&
            $user_username === $username &&
            strlen($username) >= 8 &&
            strlen($password) >= 8;
}


function pre($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?>
<br>
<a href="form.php">Go to Form</a>