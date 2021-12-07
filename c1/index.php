<h1>This is php</h1>

<?php

// ova e komentar vo edna linija

/*
    Ova e
    Komentar
    Vo poveke linii
*/
echo 'Hello World';

// DATA TYPES

// Scalar

echo '<br>';

$string = 'ova e string';
echo $string . '<br>';

$integer = 12;
$float = 3.1415;
$boolean = true; // true ili false

// compound

$array = []; // array()
$array = [12 , 'Stavre', true, false, ['php', 'js']];

$object = new stdClass();

// special

// resource - file - database
// null / NULL


//printanje na array

// echo var_dump($array);
echo '<pre>';
print_r($array);
echo '</pre>';

echo '<br>';
// Operatori

// Aritmeticki ( + , - , * , / , % ...)
// Skrateni Aritmeticki ( +=, -=, *=, /= ...)

$num = 7;
$num = $num + 10;
echo $num;

echo '<br>';

$num = 7;
$num += 10;
echo $num;

echo '<br>';
// Inkrementiranje i dekrementiranje ( ++ , -- )

$num = 3;
$num+=1;
echo $num;
echo '<br>';

$num = 3;
$num++; // 3
//4
echo $num;
echo '<br>';

$num = 3;
echo ++$num; //4
echo '<br>';

$num = 7;
echo $num++;
echo '<br>';
echo ++$num;
echo '<br>';
echo $num;
echo '<br>';

// Relaciski // za sporedba
// ( == , ===, !=, !==, <, >, <= .....)

$num = 123; // integer
$num_s = '123'; // string

if($num == $num_s) { // uslov e ispolnet samo ako e true
    echo 'Ovoj uslov e ispolnet == <br>';
}

if($num === $num_s) { // uslov
    echo 'Ovoj uslov e ispolnet === <br>';
} else {
    echo 'Ovoj uslov NE e ispolnet === <br>';
}

// logicki ( and &&, or ||, xor !)

// AND && site uslovi treba da se true za da bide uslovot ispolnet
// OR || samo eden od uslovite treba da bide true za da e ispolnet

        // ture      &&       // false
if( ($num == $num_s) && ($num === $num_s)){
    echo 'ovde ne vleguva zosto e true && false';
} else {
    echo 'ovde vleguva zosto e else';
}

echo '<br>';

        // ture      ||       // false
if( ($num == $num_s) || ($num === $num_s)){
    echo 'ovde vleguva zosto e true || false';
} else {
    echo 'ovde NE vleguva zosto e else';
}

echo '<br>';

// ternaren
$ime = 'Neven';

if($ime === 'Neven'){
    echo 'Imeto e tocno <br>';
} else {
    echo 'Imeto ne e tocno <br>';
}

echo $ime === 'Neven' ? 'Imeto e tocno <br>' : 'Imeto ne e tocno <br>';


$pol = 'other';

if($pol === 'maski'){

} elseif($pol === 'zenski'){

} elseif($pol === 'other'){
    
} else {
    echo 'Pol is unknown';
}

// SWITCH
echo '<br>';
$pol = 'other';

switch($pol){
    case 'maski':
        echo 'polot e maski';
        break;
    case 'zenski':
        echo 'polot e zenski ili maski';
        break;  
    case 'other':
        echo 'polot e other';
        break;
    default:
        echo 'Pol is unknown';
}

$class = 'C1';
?>

<h2>END of class <?php echo $class ?></h2>

