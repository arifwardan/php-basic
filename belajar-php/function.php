<?php
    
    function greeting(){
        echo "hello world";
    }
    
    // $name = "arif";
    
    function hello($name = "arif"){
        echo "hello " . $name;
        echo getName();
    }
    
    
    function getName($name = "arif", $friend_name = "andi"):string
    {
        return "hello " . $name . " dan " . $friend_name;
    }
    // echo greeting();
    // echo hello();

    // echo "Inputkan nama : ";
    // $n = fgets(STDIN);

    // echo $nama1;

    // $nama1 = "arif";

    // echo hello();

    // var_dump(getName("5", "andi"));




    function show_number($digit) {
        if($digit<=8){
        echo "The number is $digit" . PHP_EOL;
        show_number($digit+1);
        }
    }
    show_number(1);


    


