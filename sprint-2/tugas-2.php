<?php
/* بسم الله الرحمن الرحيم */

class Rectangle {
    static $lebar;
    static $tinggi;

    public function __construct($lebar, $tinggi){
        self::$lebar = $lebar;
        self::$tinggi = $tinggi;
    }

    public static function hitungLuas()
    {
        return self::$lebar * self::$tinggi;
    }
}

$l = 5;
$t = 4;
$obj= new Rectangle($l, $t);
echo "luas Rectangle : ". Rectangle::hitungLuas()."cm".PHP_EOL;