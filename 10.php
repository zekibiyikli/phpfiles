<?php
	$isimler=array("Ahmet","Mehmet","Hasan","Hüseyin","Ayşe","Fatma");

	$sayilar=range(1,10);
	$harfler=range("a","z");

	foreach ($isimler as $isim) {
		echo "$isim <br>";
	}
	foreach ($sayilar as $sayi) {
		echo "$sayi <br>";
	}
	foreach ($harfler as $harf) {
		echo "$harf <br>";
	}

	foreach ($isimler as $indexs => $isim) {
		echo "$indexs - $isim <br>";
	}
	foreach ($sayilar as $indexs => $sayi) {
		echo "$indexs - $sayi <br>";
	}
	foreach ($harfler as $indexs => $harf) {
		echo "$indexs - $harf <br>";
	}

?>