<?php 

class Circle{
    public static $jari;

    public function countCircle($jrjr){
        self :: $jari = $jrjr;

        $phi        = 22 / 7;
        $luasCircle = $phi * $jrjr * $jrjr;
        $keliling   = $phi * ($jrjr + $jrjr);

        return "Circle";
    }
}

// $count = new Circle ();
// print_r($count->countCircle(4));