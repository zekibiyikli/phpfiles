<?php
	// < , > , <= , >= , == , !=
	echo 20<10 ? "Küçüktür <br>" : "Büyüktür <br>";
	echo 20>10 ? "Büyüktür <br>" : "Küçüktür <br>";
	echo 20<=10 ? "Küçük Eşittir <br>" : "Küçük Eşit Değildir <br>";
	echo 20>=10 ? "Büyük Eşittir <br>" : "Büyük Eşiit Deildir <br>";
	echo 20==10 ? "Eşittir <br>" : "Eşit Değildir <br>";
	echo 20!=10 ? "Eşit Değildir <br>" : "Eşittir <br>";

	// && , ||
	$kullaniciAdi="admin";
	$sifre="123456";

	if($kullaniciAdi=="admin" && $sifre=="1234"){
		echo "Giriş Yapıldı <br>";
	}else{
		echo "Giriş Yapılamadı <br>";
	}

	if($kullaniciAdi=="admin" and $sifre=="1234"){
		echo "Giriş Yapıldı <br>";
	}else{
		echo "Giriş Yapılamadı <br>";
	}

	if($kullaniciAdi=="admin" || $sifre=="1234"){
		echo "Giriş Yapıldı <br>";
	}else{
		echo "Giriş Yapılamadı <br>";
	}

	if($kullaniciAdi=="admin" or $sifre=="1234"){
		echo "Giriş Yapıldı <br>";
	}else{
		echo "Giriş Yapılamadı <br>";
	}

?>