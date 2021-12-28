<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php 

    $button_label = 'Create Student';
    $action = 'insert.php';

    if(isset($_GET['id'])){
        // zemi mi go korisnikot od baza i zapisi gi negovite vrednosti
        // vo polinjata dole

        require_once 'db.php';

        $sql = "SELECT * FROM studenti WHERE id = :id";
        
        $query = $db->prepare($sql);
        $executed = $query->execute([
            ':id' => $_GET['id']
        ]);

        $student = $query->fetch(PDO::FETCH_ASSOC);
        // echo $studenti[0]['name'];
        // echo $student['name'];

        // echo '<pre>';
        // print_r($student);
        // echo '</pre>';
        $button_label = 'Update Student';
        $action = 'update.php';
    }
    
    
?>

<div class="container">
    <form action="<?= $action ?>" method="POST" class="row">
        
    <input type="hidden" name="id" value="<?= $_GET['id'] ?? '' ?>">

        <div class="col-md-6">
            <label class="form-label">Name</label>
            <input type="text" 
                    class="form-control" 
                    name="name"
                    value="<?= $student['name'] ?? '' ?>"
                    required>

            <label class="form-label">Lastname</label>
            <input type="text" 
                class="form-control" 
                name="lastname"
                value="<?= @$student['lastname']?>"
                required>
        </div>

        <div class="col-md-6">
            <label class="form-label">age</label>
            <input type="number" 
                    class="form-control" 
                    name="age"
                    value="<?= $student['age'] ?? ''?>"
                    required>

            <label class="form-label">Email</label>
            <input type="email" 
                class="form-control" 
                name="email"
                value="<?= $student['email'] ?? ''?>"
                required>

            <label class="form-label">Phone</label>
            <input type="text" 
                class="form-control" 
                name="phone"
                value="<?= $student['phone'] ?? ''?>"
                required>
        </div>

        <div class="col-md-12 mt-2">
        <input type="submit" 
            value="<?= $button_label ?>" 
            class="btn d-block btn-warning form-control">
        </div>  
    </form>

    <?php if(isset($_GET['id'])){ ?>
    <div class="col-md-12">
        <a href="delete.php?id=<?=$_GET['id']?>"
            onclick="return confirm('Are you sure?')"
            class="btn d-block btn-danger mb-3">
            Delete Student
        </a>
    </div>
    <?php } ?>

    <a href="index.php" class="btn btn-outline-danger">
        Back to all studenti
    </a>
    
</div>