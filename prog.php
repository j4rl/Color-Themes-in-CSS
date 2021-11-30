<?php

    

    //function to convert array to string


    class MathWiz{
            /**
     * primeNumbers($n)
     *
     * @param [type] $n HIGHETST number of prime
     * @return void
     */
    private function primeNumbers($n) {
        $primeNumbers = array();
        for ($i = 2; $i <= $n; $i++) {
            $isPrime = true;
            for ($j = 2; $j < $i; $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                $primeNumbers[] = $i;
            }
        }
        return $primeNumbers;
    }
    private function arrayToString($array) {
        $string = "";
        foreach ($array as $value) {
            $string .= $value . " ";
        }
        return $string;
    }
    public function getPrimesUpTo($x){
        return $this->arrayToString($this->primeNumbers($x));
    }
}



?>