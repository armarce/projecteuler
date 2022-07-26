<?php

/*

Sum square difference

*/

function sumSquareDifference($n){

    /* Apply Gauss series */

    $sumSquares = ($n*(($n + 1)*(2*$n + 1)))/6;

    $sum = ($n*($n + 1)) / 2;

    $diff = $sum*$sum - $sumSquares;

    return $diff;

}

echo sumSquareDifference(100);

?>