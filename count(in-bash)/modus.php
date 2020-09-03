<?php
/* بسم الله الرحمن الرحيم */

echo "Inputkan Jumlah Nilai  : "; 
$collection = (int) fgets(STDIN);    //masukkan berapa nilai yang akan anda masukkan

for ($i=0; $i <$collection ; $i++){ 
	echo "Inputkan Nilai : "; 
	$value = (int) fgets(STDIN);     //sekarang masukkan nilainya
	$arr[] = $value;
}


//modus adalah nilai tertinggi atau nilai dengan frekuensi tertinggi
for($x=0;$x<=count($arr)-1;$x++) {

    $count[$x]=0;
    
	for($y=0;$y<=count($arr)-1;$y++) {

		if($arr[$x]==$arr[$y]) {

            $count[$x]=$count[$x]+1;
        }
	}
}

$indeks=0;$mod = 0;
	for ($y=0;$y<=count($arr)-1;$y++) {

		if($mod < $count[$y]) {

			$mod = $count[$y]; 
			$indeks=$y;
		}
}
echo "Dengan frekuensi = $mod kali\n";

?>