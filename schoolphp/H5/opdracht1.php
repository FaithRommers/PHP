<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action=”resultaat.php” method=”GET”>
	Inlognaam <input type=”text” name=”inlognaam” value=””>
	Wachtwoord <input type=”password” name=”wachtwoord” value=””>
	<input type=”submit” name=”knop” value=”verstuur”>
</form>
</body>
</html>

<?php
$inlognaam = $_POST['inlognaam'];
$wachtwoord = $_POST['wachtwoord'];

if(isset($_POST['inlognaam']) && !empty($_POST['inlognaam'])){
	$inlognaam = $_POST['inlognaam'];
}else{
	echo("je hebt niks je bent skeer");
}

if(isset($_POST['wachtwoord']) && !empty($_POST['wachtwoord'])){
	$inlognaam = $_POST['wachtwoord'];
}else{
	echo("je hebt niks je bent skeer");
}
?>
