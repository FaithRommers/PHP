<?php


// Voorbeeld van de kappersagenda
$kappersagenda = array(
  "09:15" => "Mevr. Pietersen",
  "09:30" => "Mevr. Willems",
  "09:45" => "",
  "10:00" => "Paul van den Broek",
  "10:15" => "Karel de meeuw",
  "10:30" => ""
); 

// Weergave van beschikbare momenten
print("De volgende momenten zijn nog beschikbaar:<ul>");

foreach ($kappersagenda as $tijd => $afspraak) {
  if ($afspraak == "") {
      print("<li>".$tijd."</li>");
  }
}

print("</ul>");