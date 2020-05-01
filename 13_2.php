<?php

	if(isset($_POST['username']))//post var mı diye kontrol
		echo "POST VAR";
	else
		echo "POST YOK";

	if(empty($_POST['username']))
		echo "Veri Yok";
	else
		echo "Veri Var";

?>