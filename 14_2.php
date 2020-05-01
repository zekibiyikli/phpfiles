<?php

	print_r($_POST);

	$username=$_POST['username'];
	$comment=$_POST['comment'];

	$index=strpos($comment, ".");//. kaçıncı indexte var

	echo $index;
	echo strlen($username);// türkçe karakterleri ikşier olarak sayılıyor
	echo mb_strlen($username); // türkçe karakterler için

?>