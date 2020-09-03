<?php
/* بسم الله الرحمن الرحيم */

echo "Inputkan Jumlah Nilai  : "; 
$collection = (int) fgets(STDIN);    //masukkan berapa nilai yang akan anda masukkan

for ($i=0; $i <$collection ; $i++){ 
	echo "Inputkan Nilai : "; 
	$value = (int) fgets(STDIN);     //sekarang masukkan nilainya
	$arr[] = $value;
}


//median adalah nilai tengah dari data yang telah di urutkan
$nmid = $collection/2;
$nmid1= ($arr[$nmid]);
$nmid2 = (($arr[$nmid])+($arr[$nmid-1]))/2;

if ($collection%2==1) {
	echo "Nilai median : ".$nmid1."\n";
} else {
	echo "Nilai median : ".$nmid2."\n";
}


?>