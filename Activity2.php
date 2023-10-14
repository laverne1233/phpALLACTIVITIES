<?php

    //Create a function that will return the square root of every number from 1 - N
    //function should return array

    function calculateSquareRoot($N){
        $result = array();
        for($i = 1 ; $i <= $N; $i++){
            $result[] = sqrt($i);
        }
        return $result;
    }

    $N = 10;
    $squareRoots = calculateSquareRoot($N);
    print_r($squareRoots);


?>