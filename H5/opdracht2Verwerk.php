<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['dier'])) {
        $gekozenDier = $_POST['dier'];
        echo "Je hebt $gekozenDier gekozen!";
    } else {
        echo "Er is geen dier gekozen!";
    }
}
?>