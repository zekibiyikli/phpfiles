<?php
	$sayi1=10;
	$sayi2=20;
	$kontrol=$sayi1 == $sayi2 ? "Sayılar Eşittir!":"Sayılar Eşit Değildir";
	$kontrol2=$sayi1 > $sayi2 ? "Sayı1 Büyüktür":"Sayı1 Büyük Değildir";
	$kontrol3=$sayi1 != $sayi2 ? "Sayılar Eşit Değildir!":"Sayılar Eşittir";

	echo $kontrol."<br>";
	echo $kontrol2."<br>";
	echo $kontrol3."<br>";

	if ($sayi1 == $sayi2) {
		echo "Sayılar Eşittir <br>";
	}else{
		echo "Sayılar Eşit Değildir <br>";
	}

	if ($sayi1 > $sayi2) {
		echo "Sayı1 Büyüktür <br>";
	}elseif ($sayi1 < $sayi2){
		echo "Sayı2 Büyüktür <br>";
	}else{
		echo "Sayılar Eşittir <br>";
	}

?>