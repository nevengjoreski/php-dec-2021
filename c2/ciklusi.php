
<h1>Ciklusi</h1>
<?php
            // 0            1          2           3       4           5
$filmovi = ['Spider Man', 'Saw', 'La La Land', 'Vrba', 'Die Hard', 'Die Harder'];
//http://localhost/php-dec-2021/c2/ciklusi.php

echo '<ol>';
echo "<li> {$filmovi[0]} </li>";
echo "<li> {$filmovi[1]} </li>";
echo "<li> {$filmovi[2]} </li>";
echo "<li> {$filmovi[3]} </li>";
echo "<li> {$filmovi[4]} </li>";
echo '</ol>';

// FOR ciklus

echo '<ol>';
for ( $i = 0; $i < count($filmovi); $i++){
    echo "<li> {$filmovi[$i]} </li>";
}
echo '</ol>';

//   deklaracija ; uslov ; inkrement / dekrement
for ( $i = 0; $i < 4; $i++ ){
    echo $i . "<br>";
}


// FOREACH ciklus

$filmovi = ['Spider Man', 'Saw', 'La La Land', 'Vrba', 'Die Hard', 'Die Harder'];

echo '<ol>';
foreach( $filmovi as $film ){
    echo "<li> {$film} </li>";
}
echo '</ol>';


// zadaca 1 + 2 + 3 + 4
$niza = [12, 45 , 65, 87 , 72, 3 , 99 , 54 , -1];

// koj e min element od nizata 
// koj e max element od nizata
// sredna vrednost na nizata
// sredna vreednost = zbir od elementite / brojot na elementi
// proizvod na nizata
// proizvod na nizata = element 0 * element 1 * element 2 .....

// david N 48,444
// david S 436 proiz 0

$min = $niza[0];
$max = $niza[0];
$zbir = 0;
$proizvod = 1;

foreach($niza as $element){
    if($min > $element){
        $min = $element;
    }

    if($max < $element){
        $max = $element;
    }

    // $zbir = $zbir + $element;
    $zbir += $element;
    $proizvod *= $element;
}

$sredna = $zbir / count($niza);

echo "Min element od nizata e $min <br>";
echo "Max element od nizata e $max <br>";
echo "Srednata vrednost od nizata e $sredna <br>";
echo "Proizvod od nizata e $proizvod <br>";

// foreach $key => $value

$person = [
    'name' => 'Stavre',
    'age' => 33,
    'lastname' => 'Stavreski',
    'email' => 's.s@gmial.com',
];

foreach($person as $key => $value){
    // echo "Key => " . $key . "Value =>" . $value . "<br>";
    echo "Key => $key Value => $value <br>";
}
