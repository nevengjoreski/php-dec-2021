
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="document">
    <br><br>
    <input type="submit" value="Upload">
</form>

<?php

if($_FILES){

    // echo '<pre>';
    // print_r($_FILES);
    // echo '</pre>';

    $dozvoleni_tipovi = [
        "text/plain",
        "text/html",
    ];

    if( 
        $_FILES['document']['error'] === 0 &&
        $_FILES['document']['size'] < 5*1024 &&
        in_array($_FILES['document']['type'], $dozvoleni_tipovi)
    ){
        if(!file_exists('uploads')){
            mkdir('uploads');
        }

        $from = $_FILES['document']['tmp_name'];
        // 654654654text.txt
        $filename = rand() . $_FILES['document']['name'];
        $to = "uploads/$filename";

        $status = move_uploaded_file($from, $to);

        if($status){
            echo "<h3>Successfull Upload</h3>";
        } else {
            echo "<h4>Unsuccessfull Upload</h4>";
        }
    } else {
        $errors = [];

        if($_FILES['document']['error'] !== 0 ){
            $errors[] = "There was an error uploading the document";
        }
        
        if($_FILES['document']['size'] >= 5*1024 ){
            $errors[] = "Please Upload file smaller than 5KB";
        }

        if(!in_array($_FILES['document']['type'], $dozvoleni_tipovi)){
            $errors[] = "File type not allowed";
        }

        $errors_strings = implode('<br>', $errors);
        echo "<h4>$errors_strings</h4>";
    }
}
?>

<style>
    h3{
        color:green
    }
    h4{
        color:red;
    }
</style>



