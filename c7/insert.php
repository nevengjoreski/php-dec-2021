<?php

$connection_string = 'mysql:host=127.0.0.1;dbname=php';
$username = 'root';
$password = '';

$db = new PDO( $connection_string, $username, $password);

$sql = "
    INSERT INTO studenti
    (name, lastname, age, email, phone)
    VALUES
    (:name, :lastname, :age, :email, :phone)
";

$query = $db->prepare($sql);
$executed = $query->execute([
    ':name' => $_POST['name'],
    ':lastname' => $_POST['lastname'],
    ':age' => $_POST['age'],
    ':email' => $_POST['email'],
    ':phone' => $_POST['phone'],
]);

if($executed){
    echo 'Student was successfully created';
} else {
    echo 'Student was not created';
}

?>

<a href="index.php">Go back to Students</a>