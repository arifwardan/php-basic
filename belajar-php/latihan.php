<?php

    $n = 9;
    for($i = 0; $i < $n; $i++){
        echo $i * 2 . ", ";
    }

    echo PHP_EOL;

    for($i = 1; $i <= 6; $i++){
        for ($j=1; $j <= 6; $j++) { 
            echo "($j , $i)";
        }
        echo PHP_EOL;
    }

    for($i = 1; $i <= 6; $i++){
        for ($j=1; $j <= 6; $j++) { 
            if ($j < $i){
                echo $j;
            }
            // echo "($j , $i)";
        }
        echo PHP_EOL;
    }

    // for($i = 1; $i <= $n; $i++){
    //     for ($j=1; $j <= $n; $j++) { 
    //         if ($i % 2){
    //             echo "-";
    //         }else{
    //             echo "+";
    //         }
    //     }
    //     echo PHP_EOL;
    // }

    for($i = 1; $i <= $n; $i++){
        for ($j=1; $j <= $n; $j++) { 
            if ($i == $j){
                echo "+";
            }else{
                echo "-";
            }
        }
        echo PHP_EOL;
    }
