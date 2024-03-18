<?php

// Database credentials
$host = 'localhost';  // e.g., 'localhost'
$username = 'root';
$password = '';
$database = 'phpschool';

$conn = '';

try {
    // Create a PDO connection
    $dsn = "mysql:host=$host;dbname=$database";
    $conn = new PDO($dsn, $username, $password);

    $sql = $conn->prepare( "SELECT * FROM cursist");
    $sql->execute();

    while($result = $sql->fetch(PDO::FETCH_ASSOC)) {
      print_r($result);
      echo "<br>";
    }
    

    // Set PDO to throw exceptions on errors
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Connected successfully";

    // Perform your database operations here
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}