<?php


function br(){
    echo '<br>';
}

function pre($element){
    echo '<pre>';
    print_r($element);
    echo '</pre>';
}


// substr - returns a part of a string
$substring = substr('Go sakam PHP !', 9, 3);
echo $substring;

echo '<br>';
// strpos - return position of the desired string
echo strpos('Go sakam PHP !', 'sakam');

echo '<br>';
// strtolower / strtoupper

$str = 'opEN';

echo strtolower($str);
echo '<br>';
echo strtoupper($str);
echo '<br>';

// explode -converts string to array


function getStringToArrayValues($string, $delimiter){

    $exploded = explode($delimiter, $string);

    // pre($exploded);
    // kako da go zemam Stavreski od $exploded
    
    foreach($exploded as $element){
        // echo $element . br();
        $array = explode('=', $element);
        // pre($array);
    
        $key = $array[0];
        $value = $array[1];
    
        $response_converted[$key] = $value;
    }
    return $response_converted;
}

$response = 'name=Stavre##lastname=Stavreski##age=99';
$response_converted = getStringToArrayValues($response, '##');
pre($response_converted);
echo $response_converted['lastname'];

$response2 = 'q=adasdasd&rlz=1C1GCEU_enMK965MK965&oq=adasdasd&aqs=chrome..69i57j35i39j69i65l3j69i61l2j69i60.726j0j1&sourceid=chrome&ie=UTF-8';
$response2_converted = getStringToArrayValues($response2, '&');
pre($response2_converted);

$colors = ['yellow', 'brown', 'pink', 'blue', 'teal'];

$imploded = implode(', ', $colors);
echo $imploded;
br();


// str_replace - replaces a part of a string
$str = 'Ova se mnogu dosadni funkcii';
echo str_replace('dosadni', 'interesni', $str);

// count
// str_word_count

$str = 'Go sakam PHP !';
pre( count(explode(' ', $str)));
echo str_word_count($str);



// die($imploded);
// exit();
// sleep(5);

// phpinfo();

// round($float) 4.4 => 4 , 4.6 => 5 
// ceil($float) 4.1 => 5
// floor($float) 4.9 => 4
// abs($int) -5 => 5


// in_array - check if specifiend value is found in the array
br();
$colors = ['yellow', 'brown', 'pink', 'blue', 'teal'];

if( !in_array('black', $colors)){
    echo 'That color cannot be found in the given colors';
}
br();

// array_merge( $array1, $array2); 
// unset - remove element from array
$colors = ['yellow', 'brown', 'pink', 'blue', 'teal'];
unset($colors[1]);
pre($colors);

