<?php
/* بسم الله الرحمن الرحيم */

// mencara nilai MIN & Max

echo "Inputkan jumlah Nilai : ";
$koleksi = (int) fgets(STDIN);

for ($i=0; $i <$koleksi ; $i++) { 
	echo "Inputkan Nilai : ";
	$nilai = (int) fgets(STDIN);
	$arr[] = $nilai ;
}
for ($j=0; $j < count($arr); $j++) { 
	
	echo $arr[$j] . ' '; 
}
// MAX
$max= max($arr); 
echo '=> nilai array ';
echo "\n";
echo "3 Nilai Tertinggi adalah ";
	for ($k=$max; $k >$max-3 ; $k--) { 
echo "$k, ";
}
echo "\n";
echo 'Nilai Terbesar dari array diatas ialah ' . $max;
echo "\n";

// MIN
$min= min($arr);
echo "3 Nilai Terendah adalah ";
	for ($l=$min; $l < $min+3 ; $l++) { 	
echo "$l, ";
} 
echo "\n";
echo 'Nilai Terendah dari array diatas adalah ' . $min;
echo "\n";


// HAPPY CODE! (*_~)


?>