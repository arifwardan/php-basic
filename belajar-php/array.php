<?php
    $variabel = 'durian';
    $array1 = [
        'durian',
        'apel',
        'nanas'
    ];
    // var_dump($array1[2]);

    $array2 = [
        'first_name'    => 'arif',
        'last_name'     => 'wardan',
    ];

    // var_dump($array2['last_name']);


    $array3 = [
        [
            'name' => 'arif',
            'nama_palsu' => [
                'asdfasdf',
                'asdfasdf',
                'asdfasdf',
                'asdfasdf',
            ]
        ],
        ['age' => '20']
    ];

    // var_dump($array3);

    $studentInfo['status'] = 'training';
    $studentInfo['hobbies'] = ['membaca', 'mancing']; 
    $studentInfo['hobbies'][] = 'main bola';
    
    unset($studentInfo['hobbies'][1]);

    // var_dump($studentInfo);

    $array4 = [
        1,
        2,
        4,
        5,
        6,
        7,
    ];

    var_dump(array_sum($array4));




    // for($i = 0; )


