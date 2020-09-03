<?php 

class Trapezoidal{
    public static $sisi1;
    public static $sisi2;
    public static $tinggi;

    public function countTrapezoidal($s1, $s2, $t){
        self :: $sisi1  = $s1;
        self :: $sisi2  = $s2;
        self :: $tinggi = $t;
        // rumus $t / 2 * ($s1 + $s2);
        return "Trapezoidal";
    }
}

// $count = new Trapezoidal();
// print_r($count->countTrapezoidal(3, 5, 2));