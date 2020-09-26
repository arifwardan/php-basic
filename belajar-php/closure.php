<?php
    $closure = function($name){
        echo "Haay ". $name;
    };

    // $closure = "haay";
    

    // echo $closure("arif");

    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $oddNumbers = array_filter(
    $numbers,
        function (int $n): int {
            // ganjil jika dibagi 2 memberikan sisa
            return $n % 2;
        }
    );

// print_r($oddNumbers);

    $time = "pagi";

    $greet = function()use($time){
        echo "selamat " . $time;
    };
    // var_dump($greet);
    echo $greet();