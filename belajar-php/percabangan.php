<?php

$a = 0;
$b = 0;

    //percabangan ganda
    // if($a == $b){
    //     echo "sama";
    // }else{
    //     echo "tidak sama";
    // }

    //percabangan banyak kondisi

    // if($a == $b){
    //     echo "sama";
    // }elseif($a <= $b){
    //     echo "kurang";
    // }elseif($a >= $b){
    //     echo "lebih besar";
    // }else{
    //     echo "kondisi di atas tidak ada yg benar";
    // }

    switch ($a) {
        case 1:
            echo "1";

            break;

        case 0:
            echo "0";
        
        default:
            # code...
            break;
    }