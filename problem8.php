<?php

function largestProductInASeries($nAdjacent, $serie){

    $arrayReplace = array("\r\n", "\n", "\r");

    $serie = str_replace($arrayReplace, '', $serie);

    $totalSerie = strlen($serie);

    $serie = str_split($serie);

    $numbers = array();
    
    for($i = 0; $i <= $totalSerie - $nAdjacent; $i++){

        $j = 0;

        $arrayAdjacent = array();

        $arrayAdjacent[] = $serie[$i];

        while($j < $nAdjacent - 1){

            $j++;

            $arrayAdjacent[] = $serie[$i+$j];

        }

        $numbers[] = $arrayAdjacent;

    }

    $results = array();

    foreach($numbers as $arrayAdjacent){

        $product = array_reduce($arrayAdjacent, function($acc, $number){

            $acc *= $number;

            return $acc;

        }, 1);

        $results[$product] = $arrayAdjacent;

    }

    $keys = array_keys($results);

    sort($keys);

    $greatestProduct = end($keys);
    
    return $greatestProduct;

}


//echo largestProductInASeries($nAdjacent, $serie);


?>