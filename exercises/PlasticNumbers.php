<?php

class PlasticNumbers 
{
    public function countSets(int $number): int
    {
        $numOfPlasticSets = 1;
        $digits = str_split($number);
        $countOfSixAndNine = substr_count($number, 6) + substr_count($number, 9);
        $uniqueDigits = array_unique($digits, SORT_NUMERIC);
        foreach($uniqueDigits as $digit) {
            $numOfOccurances = substr_count($number, $digit);
            if ($numOfOccurances > $numOfPlasticSets) {
                if ($digit != 6 && $digit != 9) {
                    $numOfPlasticSets = $numOfOccurances;
                }
            }
        }
        if ($numOfPlasticSets < ceil($countOfSixAndNine / 2)) {
            $numOfPlasticSets = ceil($countOfSixAndNine / 2);
        }
        return $numOfPlasticSets;
    }
}