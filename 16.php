<?php
	if($_POST){
		echo "POST Var <hr>";
		$phone=$_POST['phone'];
		if(!is_numeric($phone)){
			echo "Telefon Numarası Hatalı";
			header("Refresh:2");
		}else{
			echo $phone;
		}
	}else{
		echo "POST YOK <hr>";

		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Telefon Numarası</title>
			<meta charset="utf-8">
		</head>
		<body>
			<form method="POST" action="">
				<input type="text" name="phone" placeholder="Telefon Numarası" required maxlength="10" minlength="10">
				<input type="submit" value="Gönder">
			</form>
		</body>
		</html>

		<?php
	}

?>