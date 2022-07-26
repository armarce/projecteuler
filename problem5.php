<?php

/*

Smallest multiple

*/

function isDivisible($number, $maxNaturalNumber){

    for($i = 1; $i <= $maxNaturalNumber; $i++){

        $mod = $number % $i;

        if($mod !== 0){

            return false;

        }

    }

    return true;

}


function smallestMultiple($maxNaturalNumber){

    $number = 0;

    while(true){

        $number++;

        if(isDivisible($number, $maxNaturalNumber)) break;

    }

    return $number;

}

//echo smallestMultiple(20);

?>