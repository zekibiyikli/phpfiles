<?php
	$comment=$_POST['comment'];

	echo mb_substr($comment,0,10)."<br>";
	echo mb_substr($comment,3,10)."<br>";
	echo mb_substr($comment,10)."<br>";

?>