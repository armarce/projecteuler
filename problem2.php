<?php

/*

Even Fibonacci numbers

*/


function fibonacciGenerator($limit){

    $number = 0;
    $first = 1;
    $second = 2;

    $serie = array($first, $second);

    while($number < $limit){

        $number = $first + $second;

        $first = $second;
        $second = $number;

        $serie[] = $number;

    }

    return $serie;

}

function sumEven($limit){

    $serie = fibonacciGenerator($limit);
    
    $sum = 0;

    foreach($serie as $number){
        
        if(!($number % 2)) $sum += $number;

    }

    return $sum;

}

//echo sumEven(4000000);


?>