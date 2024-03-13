<style>
    .container {
        display: grid;
        grid-template-columns: repeat(3, max-content);
    }

    .containerChild {
        border: 1px solid black;
        border-right: none;
        padding-right: 15px;
        padding-left: 5px;
    }

    .containerChild > p {
        margin: 3px;
    }

    img {
        height: 24px;
        width: auto;
        margin: 1.5px 0 1.5px 0;
    }
</style>





<?php

// Associatieve array met zwemclubs en ledenaantallen
$zwemclubs = array(
    "De Spartelkuikens" => 25,
    "De Waterbuffels"   => 32,
    "Plonsmderin"       => 11,
    "Bommetje"          => 23
);

// Loop door de array en geef de informatie weer
foreach ($zwemclubs as $club => $ledenaantal) {
    echo "<p>$club: $ledenaantal zwemmers</p>";

    // Bereken het aantal plaatjes op basis van ledenaantal (elke 5 zwemmers)
    $aantalPlaatjes = floor($ledenaantal / 5);

    // Geef de plaatjes weer
    for ($i = 0; $i < $aantalPlaatjes; $i++) {
        echo "<img src=\"swim.jpg\" alt=\"Zwemmer\">";
    }

    echo "<br><br>"; // Voeg wat ruimte toe tussen elke zwemclub
}

?>





<div class="container">
    <div class="containerChild">
        
    </div>

    <div class="containerChild">
        
    </div>

    <div class="containerChild" style="border-right: 1px solid black">
        
    </div>
</div>
