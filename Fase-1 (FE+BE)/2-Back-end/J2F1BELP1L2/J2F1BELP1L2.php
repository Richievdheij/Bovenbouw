<?php
/// Lab-3a / Sommen
// Genereer twee willekeurige getallen tussen 1 en 10
echo "<h3>Genereer twee willekeurige getallen tussen 1 en 10</h3>";
$nummer1 = mt_rand(1, 10);
$nummer2 = mt_rand(1, 10);

// Bereken de vermenigvuldiging, optelsom, aftreksom en deelsom
$vermenigvuldiging = $nummer1 * $nummer2;
$optelsom = $nummer1 + $nummer2;
$aftreksom = $nummer1 - $nummer2;
$deelsom = $nummer1 / $nummer2;

// Toon de resultaten
echo "Nummer 1: " . $nummer1 . "<br>";
echo "Nummer 2: " . $nummer2 . "<br>";
echo "<br>";
echo "Vermenigvuldiging: " . $vermenigvuldiging . "<br>";
echo "Optelsom: " . $optelsom . "<br>";
echo "Aftreksom: " . $aftreksom . "<br>";
echo "Deelsom: " . $deelsom . "<br>";

/// Lab 3b - Loops & functions
echo "<h3>Lab 3b - Loops & functions</h3>";

// Tafel van 6 met for-loop
echo "<h3>Tafel van 6 met for-loop:</h3>";
for ($i = 1; $i <= 10; $i++) {
  echo "6 x " . $i . " = " . ($i * 6) . "<br>";
}

// Tafel functie
function printTafel($getal) {
  echo "<h3>Tafel van $getal met functie:</h3>";
  for ($i = 1; $i <= 10; $i++) {
    echo $getal . " x " . $i . " = " . ($i * $getal) . "<br>";
  }
}

// Tafel van 3, 5, 8 en 12 met foreach-loop en functie
$waardes = array(3, 5, 8, 12);

foreach ($waardes as $waarde) {
  printTafel($waarde);
}

?>