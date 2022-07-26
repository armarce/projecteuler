<?php

/*

10001st prime

*/


function stPrimeNumber($st){

    $number = 2;
    $total = 0;
    $i = 0;

    while($total < $st){

        $divCount = 0;

        for($i = 1; $i <= $number; $i++){

            if($number % $i == 0){

                $divCount++;

            }

        }

        if($divCount < 3){

            $total++;
            $prime = $number;

        }

        $number++;

    }

    return $prime;


}

//echo stPrimeNumber(10001);


?>