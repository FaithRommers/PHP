<?php

//10 2 65 12

$leeftijd = 12;
 

if ($leeftijd > 65) {
	echo "je hebt 50% korting en prijs is 5,00";
} else if($leeftijd <= 12 && $leeftijd > 3){
	 echo "je hebt 50% korting en prijs is 5,00";
} else if($leeftijd <= 3){
  echo "je hebt 100% korting en prijs is 0,00";
} else {
  echo "jij leeft niet";
}


