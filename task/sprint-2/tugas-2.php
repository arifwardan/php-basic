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


    echo "Masukkan Nilai Lebar  : ".PHP_EOL;
$nilaiLebar = (int) fgets(STDIN);
    echo "Masukkan NIlai Tinggi : ".PHP_EOL;
$nilaiTinggi = (int) fgets(STDIN);

try {
    if($nilaiLebar < 0 || $nilaiTinggi < 0){
        throw new InputDataMinus("504 Kesalahan !!! data yang anda input kurang dari 0.".PHP_EOL);
    }else{
        new Rectangle($nilaiLebar, $nilaiTinggi);
        echo "luas Rectangle : ". Rectangle::hitungLuas()."cm".PHP_EOL;
    }
} catch (InputDataMinus $minus) {
    echo $minus->getmessage();
}

class InputDataMinus extends Exception{}



