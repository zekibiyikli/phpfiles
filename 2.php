<?php
	$sayi1=10;
	$sayi2=20;
	$toplam=$sayi1+$sayi2;
	$fark=$sayi1-$sayi2;
	$carpim=$sayi1*$sayi2;
	$bolme=$sayi1/$sayi2;
	$kalan=$sayi2%$sayi1;

	$sayi1=$sayi1+10;
	echo "$sayi1 <br>";
	$sayi1++;
	echo "$sayi1 <br>";
	$sayi1+=10;
	echo "$sayi1 <br>";
	$sayi1-=10;
	echo "$sayi1 <br>";
	$sayi1/=10;
	echo "$sayi1 <br>";
	$sayi1*=10;
	echo "$sayi1 <br>";
	$sayi1%=2;
	echo "$sayi1 <br>";

	echo "$toplam $fark $carpim $bolme $kalan <br>";

	$sayi3=16;
	$kok=sqrt($sayi3); //kök alma
	echo "$kok <br>"; 
	$us=pow($sayi3, 2); // üst alma
	echo "$us <br>"; 
	$mutlakDeger=abs($sayi3); // mutlak değer
	echo "$mutlakDeger <br>"; 
	$min=min(2,3,5,4,2,9,5); // minimum değer
	echo "$min <br>"; 
	$max=max(2,3,5,4,2,9,5); // maximum değer
	echo "$max <br>";

	$kelime="sağlam";
	echo gettype($kelime)."<br>";// değerin tipini
	echo gettype($sayi3)."<br>";
?>