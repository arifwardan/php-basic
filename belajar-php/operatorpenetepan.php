<?php
    $a = 1;
    $b = 1;
    // jika nilai a dan b sama
   if($a == $b){
       echo "a = b <br>";
   }
    // jika nilai a dan b tidak sama bisa menggunakan != atau <>
   if($a != $b){
    echo "a != b <br>";
    }

    if($a < $b){
        echo "a < b <br>";
    }

    if($a > $b){
        echo "a > b <br>";
    }

    if($a >= $b){
        echo "a >= b <br>";
    }

    if($a <= $b){
        echo "a >= b <br>";
    }

    if($a <=> $b){
        echo "a <=> b <br>";
    }

    $c = 10;
    $d = "10";


    // if($c === $d){
    //     echo $c . 'dan' . $d . "adalah sama";
    // }else{
    //     echo $c . 'dan' . $d . "adalah tidak sama";
    // }

    if($c !== $d){
        echo $c . 'dan' . $d . "adalah tidak sama";
    }else{
        echo $c . 'dan' . $d . "adalah sama";
    }
