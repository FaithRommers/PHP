<?php
$host = 'localhost';  // e.g., 'localhost'
$username = 'root';
$password = '';
$database = 'h6opdracht2inlogpagina';

$conn = '';

try {
  // Create a PDO connection
  $dsn = "mysql:host=$host;dbname=$database";
  $conn = new PDO($dsn, $username, $password);

  $sql = $conn->prepare( "SELECT * FROM inlog WHERE email = :email");
  $sql->bindParam(":email", $_POST["email"]);
  $sql->execute();

  $result = $sql->fetchAll(PDO::FETCH_ASSOC);


  if(isset($result[0]["wachtwoord"]) && ($result[0]["wachtwoord"] == $_POST["wachtwoord"])) {
    echo "succesvol ingelogd";
  } else {
    echo "sorry geen toegang";
  }

} catch (PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}