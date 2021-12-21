<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php


$connection_string = 'mysql:host=127.0.0.1;dbname=php';
$username = 'root';
$password = '';

$db = new PDO( $connection_string, $username, $password);


$sql = 'SELECT * FROM studenti';
$query = $db->prepare($sql);
$query->execute();
$studenti = $query->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// print_r($studenti);
// echo '</pre>';

//Stavrikolandis
// echo $studenti[4]['lastname'];
?>

<div class="container">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach( $studenti as $student) { ?>
                <tr>
                    <td></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['lastname'] ?></td>
                    <td><?= $student['age'] ?></td>
                    <td><?= $student['email'] ?></td>
                    <td><?= $student['phone'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="create.php" class="btn btn-primary d-block">
        Create Student
    </a>
</div>