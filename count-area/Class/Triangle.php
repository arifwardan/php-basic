<?php

class Triangle{
    public static $alas;
    public static $tinggi;

    public function countTriangle($alas, $tinggi){
        self::$alas   = $alas;
        self::$tinggi = $tinggi;
        // rumus $a * $t 
        return "Triangle";
    }
}

// $count = new Triangle();
// print_r($count->countTriangle(2, 4, 4));