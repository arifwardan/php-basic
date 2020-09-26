<?php
    
    // Calc Rectangle Area = Width x Length

    // $rectangle = function($width, $length){
    //     $result = $width * $length;
    //     echo $result;
    // };

    // echo "Masukkan Lebar Area : ";
    // $length = (int) fgets(STDIN);
    // // var_dump($length);
    // echo "Masukkan Panjang Area : ";
    // $width = fgets(STDIN);

    // echo "Luasnya Adalah : ";
    // echo $rectangle($width, $length);
    // echo ".cm";


    // echo "Masukkan float : ";
    // $length = (int) fgets(STDIN);
    // var_dump($length);


$multi_dimensi = [
    'buah' =>	[
        'durian' => [
            'durian_manis',
            'durian_asem',
        ],
        'nanas'
    ],
    'hewan' =>	[
        'kucing',
        'singa'
    ],
    'tumbuhan' =>	[ ]
];
// print_r($multi_dimensi['buah']['durian'][0]);

$array_baru = [
    'property'
];

// array_sum();
array_push($multi_dimensi, $array_baru);

print_r($multi_dimensi);