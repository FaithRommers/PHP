 
 <?php
	//print_r $_SERVER; 
// Toont de totale inhoud van array $_SERVER.


//echo $_SERVER[‘PHP_SELF’]; 
// Geeft de naam van de huidige php-pagina weer


  // Set PDO to throw exceptions on errors
  // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // echo "Connected successfully";

  // Perform your database operations here

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
	<form action="./opdracht2Responsepage.php" method="POST">
		Email: <br> <input type="text" name="email" value=""> <br>
    Wachtwoord: <br> <input type="password" name="wachtwoord" value="">
		<input type="submit" name="knop" value="verstuur">
	</form>
</body>
</html>