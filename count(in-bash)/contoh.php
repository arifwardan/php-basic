<?php
    echo "Jumlah Input : ";
    $banyakData = fgets(STDIN);
    echo "Banyak data input : ". $banyakData;

    for ($i=1; $i <= $banyakData ; $i++) { 
        echo "Input data ke ". $i ." : " ;
        $data = fgets(STDIN);
        $array[] = $data;
    }
    var_dump($array);
    $sum = array_sum($array);
    $count = count($array);
    echo $sum / $count;
    // var_dump($array);
    // var_dump($count);

    // echo "Nilai rata rata dari n = " . array_sum($array)/count($array);
    








