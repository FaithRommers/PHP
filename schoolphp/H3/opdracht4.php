<?php

for ($i = 0; $i < 9; $i++) {
    $imagePath = "./aaaap/aap" . ($i + 1) . ".jpg";
    
    // Bepaal of het huidige nummer even of oneven is
    $borderClass = ($i % 2 == 0) ? 'even-border' : 'odd-border';

    // Voeg de afbeelding toe met de juiste klasse voor de border
    echo "<img src=\"$imagePath\" class=\"$borderClass\">";


}
?>


<style>
  .even-border {
  border: 4px solid green;
}

.odd-border {
  border: 4px solid red;
} 
</style>