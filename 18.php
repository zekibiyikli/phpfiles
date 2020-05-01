<?php
	if(isset($_POST['lessons'])){
		$lessons=$_POST['lessons'];
		foreach ($lessons as $key => $value) {
			echo $value."<br>";
		}
	}else{
		echo "Post Yok";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Başvuru Formu</title>
	<meta charset="utf-8">
</head>
<body style="text-align:center;">
	<form method="POST" action="">
		<h3>Almak istediğiniz eğitimi seçiniz</h3>
		<select multiple name="lessons[]">
			<option value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option value="PHP">PHP</option>
			<option value="JAVA">JAVA</option>
			<option value="C#">C#</option>
		</select>
		<input type="submit" name="Gönder">
	</form>
</body>
</html>