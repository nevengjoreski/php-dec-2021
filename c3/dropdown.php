<?php

$colors = ['yellow', 'brown', 'pink', 'blue', 'teal'];

?>

<h5>Nacin 1</h5>
<select>
<?php foreach( $colors as $color){
    echo "<option>$color</option>";
}?>
</select>

<h5>Nacin 2</h5>
<select>
    <?php foreach( $colors as $color){ ?>
        <option><?= $color ?></option>
    <?php } ?>
</select>

<!-- <option><?= $color ?></option> -->
<!-- <option><?php echo $color ?></option> -->

<h5>Nacin 3</h5>
<?php
echo '<select>';
foreach( $colors as $color){
    echo "<option>$color</option>";
}
echo '</select>';




// $crno = [11, 13, 15, 22, 24, 26, 31, 33, 35];
// $belo = [12, 14, 16, 21, 23, 25, 32, 34, 36];

// if( $broj % 2 === 0){
//     echo 'brojot e paren';
// } else {
//     echo 'brojot e neparen';
// }

$crna_kocka = "<td height='30px' width='30px' bgcolor='#000000'></td>";
$bela_kocka = "<td height='30px' width='30px' bgcolor='#FFFFFF'></td>";

$redovi = 8;
$koloni = 8;

?>
<table>
    <?php 
    for($row = 1; $row <= $redovi; $row++){
        echo '<tr>';
        for($column = 1; $column <= $koloni; $column++){
            $total = $row + $column;
            if( $total % 2 === 0){
                echo $crna_kocka;
            } else {
                echo $bela_kocka;
            }
            // echo "<td>$row $column</td>";
        }
        echo '<tr>';
    }   
    ?>

</table>

<!-- <table>
    <tr>
        <td>0 0</td>
        <td>0 1</td>
        <td>0 2</td>
    </tr>
    <tr>
        <td>1 0</td>
        <td>1 1</td>
        <td>1 2</td>
    </tr>
    <tr>
        <td>2 0</td>
        <td>2 1</td>
        <td>2 2</td>
    </tr>
</table> -->

<style>
    table, td {
        border-collapse: collapse;
        border: 1px solid black;
        padding: 10px;
    }
</style>




<?php

// da se dobie niza od parnite i niza od neparnite broevi
$niza = [12 , 15 , 20 , 65, 75 , 46, 99, 19, 22];

$parni = [];
$neparni = [];

// dodavanje na elementi vo niza
$parni[] = 4; 
$neparni[] = 5; 

foreach($niza as $element ){
    if($element % 2 === 0){
        $parni[] = $element;
    } else {
        $neparni[] = $element;
    }
}

echo ' Parni se <pre>';
print_r($parni);
echo '</pre>';

echo ' Neparni se <pre>';
print_r($neparni);
echo '</pre>';



?>