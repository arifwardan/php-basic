<?php 

class Rectangle{
    public static $panjang;
    public static $lebar;

    public function countRectangle($panjang, $lebar){
        self::$panjang = $panjang;
        self::$lebar   = $lebar;

        return "Count";
    }
}

// $count = new Rectangle();
// print_r($count->countRectangle(4, 3));