<?php

require_once 'db.php';

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
    echo '
    <div class="alert alert-success" role="alert">
        Student was successfully created
    </div>
    ';
} else {
    echo '
    <div class="alert alert-danger" role="alert">
        Student was not created
    </div>
    ';
}

?>

<a href="index.php">Go back to Students</a>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
