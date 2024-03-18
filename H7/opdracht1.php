
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
	<form action="./opdracht1RespondPagina.php" method="POST">
		Email: <br> <input type="text" name="email" value=""> <br>
    Wachtwoord: <br> <input type="password" name="wachtwoord" value="">
		<input type="submit" name="knop" value="verstuur">
	</form>
</body>
</html>


