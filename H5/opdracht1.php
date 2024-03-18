<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $inlogNaam = true;
    } else {
        $inlogNaam = false;
				echo "je bent vergeten je naam in te voeren.";
    }

		if (isset($_POST['password']) && !empty($_POST['password'])) {
				$wachtwoord = true;
		} else {
				$wachtwoord = false;
				echo " je bent vergeten je wachtwoord in te voeren.";
		}

		if($inlogNaam == true && $wachtwoord == true){
			echo "je hebt alles ingevuld";
		}elseif(empty($_POST['name']) && empty($_POST['password'])){
			echo " je hebt nog niks ingevuld.";
		}
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="name">naam:</label><br>
    <input type="text" id="name" name="name"><br><br>

		<label for="password">wachtwoord:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>