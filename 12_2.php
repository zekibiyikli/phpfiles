<?php

	$username=$_POST['username'];
	$password=$_POST['password'];

	echo "Kullanıcı Adı: ".$username."<br>";
	echo "şifre: ".$password."<br>";

	$username=$_GET['username'];
	$password=$_GET['password'];

	echo "Kullanıcı Adı: ".$username."<br>";
	echo "şifre: ".$password."<br>";


?>