<h1>Cas 2</h1>


<h2>Nizi</h2>

<?php

// Indeksirani

//   0   1    2   3  4    5
$indeksirani = [56, 72, 49, 98, 1, 17];

echo $indeksirani[3];
echo '<br>';

$serii = ['Game of Thrones', 'Gossip Girl', 'Picky Blinders'];

echo '<pre>';
print_r($serii);
echo '</pre>';

echo $serii[1];

echo '<br>';

// Asocijativni

$person = [
    'name' => 'Stavre',
    'age' => 33,
    'lastname' => 'Stavreski',
    'email' => 's.s@gmial.com',
];

echo $person['lastname'];
echo '<hr>';

echo "
    Licnoste e : ime => {$person['name']} <br>
    prezime => {$person['lastname']} <br>
    godini => {$person['age']} <br>
    email => {$person['email']} <br>
";
echo '<hr>';


echo "
    Licnoste e : ime => " . $person['name'] . " <br>
    prezime => " . $person['lastname'] . " <br>
    godini => " . $person['age'] . " <br>
    email => " . $person['email'] . " <br>
";
echo '<hr>';

$ime = 'Neven';

echo "imeto e $ime <br>";
echo 'imeto e $ime <br>';
echo 'imeto e ' . $ime . '<br>';

// Multidimenzionalni

$serii = ['Game of Thrones', 'Gossip Girl', 'Picky Blinders'];
$filmovi = ['Spider Man', 'Saw', 'La La Land', 'Vrba'];

$multi = [
    "serii" => $serii,
    "filmovi" => $filmovi
];

echo '<pre>';
print_r($multi);
echo '<hr>';
print_r($multi['filmovi']);
echo '</pre>';

echo $multi['filmovi'][3]; // Vrba
echo '<br>';
echo $multi['serii'][2]; // Picky Blinders
echo '<br>';
?>