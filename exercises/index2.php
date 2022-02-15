<?php

class PlasticNumbers
{

    private $digits = ['A' => '0' ,'B' =>  '1','C' =>  '2','D' =>  '3','E' =>  '4','F' =>  '5','G' =>  '6','H' =>  '7','I' =>  '8','J' =>  '9'];

    public function countSets($number)
    {
        $numberArray = str_split(strval($number));
        $setsNeeded = 1;
        foreach ($numberArray as $number) {
            
            if ($plasticDigitKey = array_search($number, $this->digits)) {
                unset($this->digits[$plasticDigitKey]);
            } else if ($number == '6' &&  $plasticDigitKey = array_search('9', $this->digits)) {
                unset($this->digits[$plasticDigitKey]);
            } else if ($number == '9' &&  $plasticDigitKey = array_search('6', $this->digits)) {
                unset($this->digits[$plasticDigitKey]);
            } else {
                $this->digits = ['A' => '0' ,'B' =>  '1','C' =>  '2','D' =>  '3','E' =>  '4','F' =>  '5','G' =>  '6','H' =>  '7','I' =>  '8','J' =>  '9'];
                $plasticDigitKey = array_search($number, $this->digits);
                unset($this->digits[$plasticDigitKey]);
                $setsNeeded++;
            }
        }
        return $setsNeeded;
    }
}

print_r((new PlasticNumbers)->countSets(12312312366));
