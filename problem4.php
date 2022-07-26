<?php

/*

Largest palindrome product

*/

function isPalindromic($number){

    $number = (string) $number;

    $length = strlen($number);

    if($length > 1){

        if($length % 2 === 0){

            $part1 = substr($number, 0, $length / 2);
            $part2 = substr($number, $length / 2);

        }else{

            $part1 = substr($number, 0, (($length - 1) / 2));
            $part2 = substr($number, (($length + 1) / 2));

        }

        return strrev($part1) === $part2;

    }else{

        return true;

    }


}

function products($digits){

    $numberMax = (integer) str_repeat('9', $digits);
    $numberMin = ((integer) str_repeat('9', $digits - 1)) + 1;

    $total = $numberMax - $numberMin;
    $i = 0;

    $numberMaxDec = $numberMax;

    $products = array();

    $numberMaxDec = $numberMax;
    $numberMinInc = $numberMin;

    while($i <= $total){

        $i++;
        $k = 0;

        $numberMaxDec = $numberMax;

        while($k <= $total){

            $k++;
            $numberMaxDec." - ".$numberMinInc;
            $product = $numberMaxDec * $numberMinInc;

            $numberMaxDec--;
            $products[$product] = 1;

        }

        $numberMinInc++;

    }

    return array_keys($products);

}

function largestPalindromeProduct($digits){

    $products = products($digits);

    arsort($products);

    foreach($products as $product){

        if(isPalindromic($product)){

            $palindromic = $product;

            break;
            
        }

    }

    return $palindromic;

}

//echo largestPalindromeProduct(3);

?>
