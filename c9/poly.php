<?php

abstract class Blago {

    public $calories;
    public $price;
    public $type;

    function printAttributes(){
        echo "
            Ova Blago ima $this->calories kalorii <br>
            e od tipot $this->type <br>
            so cena od $this->price <br>
        ";
    }

    function pre(){
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }

    abstract public function jadi();
}

class Torta extends Blago {
    public $parcinja;

    function jadi(){
        echo 'Mf mf mf mnogu ubava torta';
    }
}

class Sladoled extends Blago{

    function jadi(){
        echo 'Uf ama vodenest sladoled';
    }
}

$tiramisu = new Torta();
$tiramisu->type = 'tiramisu';
$tiramisu->calories = '600';
$tiramisu->price = '450';
$tiramisu->pre();
$tiramisu->jadi();

$snikers = new Sladoled();
$snikers->type = 'snikers';
$snikers->calories = '190';
$snikers->price = '75';
$snikers->pre();
$snikers->jadi();