<?php

function celsiusToFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}

// Voorbeeldgebruik van de functie
$celsiusWaarde = 20; // Vervang dit met de gewenste temperatuur in Celsius
$fahrenheitWaarde = celsiusToFahrenheit($celsiusWaarde);

echo "$celsiusWaarde graden Celsius is gelijk aan $fahrenheitWaarde graden Fahrenheit.";

?>

<br><br>


<?php

function isDeelbaarDoorDrie($getal) {
    return ($getal % 3 === 0);
}

// Voorbeeldgebruik van de functie
$testGetal = 20; // Vervang dit met het gewenste getal om te testen

if (isDeelbaarDoorDrie($testGetal)) {
    echo "$testGetal is deelbaar door 3.";
} else {
    echo "$testGetal is niet deelbaar door 3.";
}

?>



<br><br>



<?php

function omgekeerdeString($inputString) {
    // Gebruik strrev() om de string om te keren
    $omgekeerdeString = strrev($inputString);
    return $omgekeerdeString;
}

// Voorbeeldgebruik van de functie
$origineleString = "Hey, kirby, pokemon, 123"; // Vervang dit met de gewenste string
$omgekeerdeString = omgekeerdeString($origineleString);

echo "Originele string: $origineleString<br>";
echo "Omgekeerde string: $omgekeerdeString";

?>
