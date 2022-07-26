<?php

/*

Largest prime factor

*/

function primeNumbersGenerator($limit){

    $number = 2;

    $primeNumbers = array();

    while($number < $limit){
        
        $divCount = 0;

        for($i = 1; $i <= $number; $i++){

            if($number % $i == 0){

                $divCount++;

            }

        }

        if($divCount < 3) $primeNumbers[] = $number;

        $number++;

    }

    return $primeNumbers;

    
}

function largestPrimeFactor($number, $limitPrimeNumbers){

    $primeNumbers = primeNumbersGenerator($limitPrimeNumbers);
    
    $i = 0;

    $primeFactors = array();

    for($i; $i<=count($primeNumbers); $i++){

        foreach($primeNumbers as $primeNumber){

            $mod = $number % $primeNumber;

            if($mod == 0){
                
                $number = $number / $primeNumber;

                $primeFactors[] = $primeNumber;

                continue;
            
            }

        }

        if($number == 1){

            break;

        }

    }

    if($number == 1){

        return end($primeFactors);

    }else{

        return "Need more prime numbers than {$limitPrimeNumbers}";

    }

}

//echo largestPrimeFactor(600851475143, 10000);

?>