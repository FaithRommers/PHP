<?php
$koekje = 'zomaar iets';

setcookie("TestCookie", $koekje);
setcookie("TestCookie", $koekje, time()+3600);  /* expire in 1 hour */
setcookie("TestCookie", $koekje, time()+3600, "/~rasmus/", "example.com", 1, 1);
?>


<?php
// Een cookie weergeven...
echo $_COOKIE["TestCookie"];

// Alle cookies weergeven...
print_r($_COOKIE);
?>


<?php
session_start();

//alle waarden kun je weergeven met:
print_r($_SESSION);

$_SESSION['username'] = "Kees";
echo $_SESSION['username'] ; // Zo kun je de waarde weergeven.
?>