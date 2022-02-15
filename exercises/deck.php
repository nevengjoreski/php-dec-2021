<?php

// You want to write a number out of plastic, and you have plastic sets of digits '0' to '9'.
// Each set has 10 digits, each digit exactly once. Given a number, you need to count the
// number of sets that have to be used to create the number.

// e.g.
// Number 10, can be written with '1' and '0' both of which are from one set.
// Number 100, in order to write the two zeros, you need to use two sets.
// At one point, you noticed that numbers 6 and 9 are the same, so you can easily reuse 6 as
// 9 and vice versa.
// e.g.
// Number 166, can be written by using one set, with numbers '1', '6' and then '9' rotated by
// 180 degrees.
// Input parameters:
// number - a number to be written with the plastic digits.
// Constraints:
// number will be between 0 and 1000000000 (one billion).
// Return:
// The count of plastic sets needed to write the number.
// Class Name:
// PlasticNumbers
// Method signature:
// public int countSets(int number)

class PlasticNumbers {

    private $plasticSet;
    
    function reset(){
        $this->plasticSet = [];
        $this->addSet();
    }
    
    function getPlasticSets(){
        return $this->plasticSet;
    }

    function getPlasticSetByIndex($i){
        
        return $this->plasticSet[$i];
    }

    function addSet(){
        $this->plasticSet[] = range(0, 9);
    }

    function countSets(int $number){

        $this->reset();

        while ($digit = $number % 10){
            $number = $number / 10;
            $this->removeDigit($digit);
        }
        return count($this->getPlasticSets());
    }

    function removeDigit($digit, $isSwapped = false) {

        $digit_swap = [6 => 9, 9 => 6];
        
        foreach($this->getPlasticSets() as $index => $set){
            if( $this->checkDigitRemoval($digit, $set)){
                $this->removeDigitFromSet($index, $digit);
                return ;
            } elseif(in_array($digit, [6, 9]) && !$isSwapped){
                $this->removeDigit($digit_swap[$digit], true);
                return ;
            }
        }
        
        $this->addSet();
        $this->removeDigitFromSet(++$index, $digit);
    }

    function checkDigitRemoval($digit, $set){
        return in_array($digit, $set);
    }

    function removeDigitFromSet($index, $digit){
        unset($this->plasticSet[$index][$digit]);
    }
}

$sets = new PlasticNumbers();

// echo '<br> Used plastic decks : ' . $sets->countSets(111111111);
echo '<br> Used plastic decks : ' . $sets->countSets(132123321113322);
echo '<br> plastic sets leftover cards';
echo '<pre>';
print_r($sets->getPlasticSets());
echo '</pre>';
die;
echo '<br> Used plastic decks : ' . $sets->countSets(66996996);
echo '<br> Used plastic decks : ' . $sets->countSets(66699699669);


