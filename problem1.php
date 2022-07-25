<?php

/*

Multiples of 3 or 5

*/

function sumMultiplesOfTwoNumbers($number1, $number2, $limit){

    $sum = 0;

    $i = $number1 - 1;

    for($i; $i < $limit; $i++){

        $mod1 = $i % $number1;
        $mod2 = $i % $number2;

        !($mod1 == 0 || $mod2 == 0) ?: $sum+=$i;

    }

    return $sum;

}

/*

echo sumMultiplesOfTwoNumbers(3, 5, 1000);

*/

?>