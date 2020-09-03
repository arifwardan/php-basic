<?php
/* بسم الله الرحمن الرحيم */

echo "Inputkan Jumlah Nilai  : "; 
$collection = (int) fgets(STDIN);    //masukkan berapa nilai yang akan anda masukkan

for ($i=0; $i <$collection ; $i++){ 
	echo "Inputkan Nilai : "; 
	$value = (int) fgets(STDIN);     //sekarang masukkan nilainya
	$arr[] = $value;
}


//mean adalah nilai rata-rata dari nilai yang di inputkan
echo "This is mean "." => ".array_sum($arr)/count($arr)."\n";

