<?php
	error_reporting(0);
	if($_POST){
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$lessons=$_POST['lessons'];

		echo $name."<br>";
		echo $gender."<br>";
		foreach ($lessons as $key => $value) {
			echo $value."<br>";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Başvuru Formu</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="">
		<h3>Ad Soyad</h3>
		<input type="text" name="name">
		<h3>Cinsiyet</h3>
		<input type="radio" name="gender" value="bay">Bay
		<input type="radio" name="gender" value="bayan">Bayan
		<h3>Eğitim Seçimi</h3>
		<input type="checkbox" name="lessons[]" value="HTML">HTML
		<input type="checkbox" name="lessons[]" value="CSS">CSS
		<input type="checkbox" name="lessons[]" value="PHP">PHP
		<hr>
		<input type="submit" name="Gönder">
	</form>
</body>
</html>