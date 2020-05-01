<?php
	/*
	if($_POST){
		$username=$_POST['username'];
		$comment=$_POST['comment'];
		echo $username."<br>";
		echo $comment."<br>";
	}else{
		echo "POST YOK";
	}
	*/
	error_reporting(0);
	$username=$_POST['username'] ? $_POST['username']:null;
	$comment=$_POST['comment'] ? $_POST['comment']:null;

	echo $username."<br>";
	echo $comment."<br>";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Başvuru Formu</title>
	<meta charset="utf-8">
</head>
<body style="text-align:center;">
	<form method="POST" action="">
		<input type="text" name="username" placeholder="Kullanıcı Adı" value="<?php echo $username;?>">
		<br><br>
		<textarea name="comment" rows="10" cols="50" placeholder="Yorumuzuu buraya yazabilirsiniz..."><?php echo $comment;?></textarea>
		<br><br>
		<input type="submit" name="Gönder">
	</form>
</body>
</html>