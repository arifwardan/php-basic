<?php
    $a = true;
    $b = true;

    // tidak akan di eksekusi jika
    //  a = false dan b = false
    //  a = true dan b = false
    //  a = false dan b = true
    // akan muncul jika keduanya sama sama true
    // operator dan bisa menggukan && atau AND
    // if($a && $b){
    //     echo "sama";
    // }

    // tidak akan di eksekusi jika nilainya sama sama false
    // a = false dan b = false;
    if($a OR $b){
        echo "sama";
    }
    