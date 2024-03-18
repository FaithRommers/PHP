 
 <?php
	//print_r $_SERVER; 
// Toont de totale inhoud van array $_SERVER.


//echo $_SERVER[‘PHP_SELF’]; 
// Geeft de naam van de huidige php-pagina weer
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<?php if(!isset($_POST['knop'])) { ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Email: <br> <input type="text" name="email" value=""> <br>
    Wachtwoord: <br> <input type="text" name="wachtwoord" value="">
		<input type="submit" name="knop" value="verstuur">


	</form>
<?php 
		} else {
      if(isset($_POST['email'])) {

        if ($_POST['email'] == 'piet@worldonline.nl' && $_POST['wachtwoord'] == 'doetje123' ||
         $_POST['email'] == 'klaas@carpets.nl' && $_POST['wachtwoord'] == 'snoepje777' ||
         $_POST['email'] == 'truushendriks@wegweg.nl' && $_POST['wachtwoord'] == 'arkiearkie201') {
         
          echo 'welkom';
        } else {
          echo 'Sorry niet welkim. Geen toegang';
        }
      }
		}
?>


</body>
</html>