<?php
	$baslik="Değişken Başlık";
	$metin="Php Metin";
?>

<!DOCTYPE html>
<hmtl>
<head>
	<title>Title</title>
	<meta charset="utf-8">
	<style type="text/css">
		h1{
			color:#FF0000;
		}
		p{
			color:#0000FF;
		}
	</style>
</head>
<body>
	<h1>Başlık</h1>
	<p>Paragraf</p>
	<?php
		echo "PHP BAŞLIK<br>";
	?>
	<p> <?="Bir Başka yazdırma yöntemi"?> </p>
	<h1>
		<?php
			echo "PHP BAŞLIK";
		?>
	</h1>
		<?php
			echo "<h1>PHP BAŞLIK</h1>";
		?>
	<p>
		<?php
			echo "PHP Paragraf";
		?>
	</p>
	<h1>
		<?php 
			echo "$baslik";
		?>
	</h1>
	<p>
		<?php 
			echo "$metin";
		?>
	</p>

</body>
</hmtl>