<?php

$niza = [12 , 15 , 20 , 65, 75 , 46, 99, 19, 22];
$niza2 = [46, 99, 19, 22];

printGivenArray($niza);
printGivenArray($niza2);

printZbirNaBroevi(2,4,6);
br();

$zbir = getZbirNaBroevi(2,4,6);
echo $zbir;
br();

echo getZbirNaBroevi(2,4,6);
br();

printZbirNaBroevi(2,4);
br();





//printsNewLine
function br(){
    echo '<br>';
}

function printGivenArray($element){
    echo '<pre>';
    print_r($element);
    echo '</pre>';
}


function getZbirNaBroevi($a, $b, $c){
    return $a + $b + $c;
}


function printZbirNaBroevi($a, $b, $c = 0){
    echo $a + $b + $c;
}

function presmetkiOdNiza($niza){
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
}


$niza = [12, 45 , 65, 87 , 72, 3 , 99 , 54 , -1];
$niza_2 = [12 , 15 , 20 , 65, 75 , 46, 99, 19, 22];

echo '<hr>';
presmetkiOdNiza($niza);
echo '<hr>';
presmetkiOdNiza($niza_2);
echo '<hr>';
?>
<h1>Predefined functions</h1>

<?php


//string

// trim removes wihitespace
$trim = ' admin ';

if( 'admin' === trim($trim)){
    echo 'logiraj go userot';
} else {
    echo 'ne go logiraj userot';
}
br();

// ucfirst = converts first charachter to upper case
echo ucfirst('neven');
br();

// strlen - returns length of a given string;
echo strlen('Ova e PHP !!!');
br();



















echo '<div style="height:300px;"></div>';