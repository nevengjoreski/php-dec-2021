<a href="naracka.php">Kon Naracka</a>
<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';


$ceni = [
    "hamburger" => 200,
    "chicken" => 280,
    "hotdog" => 170,
    "pomfrit" => 50,
    "pavlaka" => 35,
    "pecurki" => 30,
    "kecap" => 20,
    "majonez" => 20,
    "senf" => 25
];

$glaven_obrok   = $_REQUEST['glaven_obrok'];
$dodatoci       = $_REQUEST['dodatoci']; 
$sosovi         = $_REQUEST['sosovi']; 

$dodatoci_print         = implode(', ', $dodatoci);
$sosovi_print           = implode(', ', $sosovi);
$glaven_obrok_print     = ucfirst($_REQUEST['glaven_obrok']);

$smetka = $ceni[$glaven_obrok];

foreach($dodatoci as $dodatok){
    $smetka += $ceni[$dodatok];
}

foreach($sosovi as $sos){
    $smetka += $ceni[$sos];
}

echo "
    Naracavte : $glaven_obrok_print kako glaven obrok, <br>
    so dodatoci : $dodatoci_print <br>
    a sosovi : $sosovi_print .<br>
    Cenata na vasata smetka e samo : $smetka denari!
";

/*
    Naracavte : Hamburger kako glaven obrok, <br>
    so dodatoci : pomfrit, pavlaka, pecurki <br>
    a sosovi : kecap, senf <br>.
    Cenata na vasata smetka e samo : 450 denari!
*/


