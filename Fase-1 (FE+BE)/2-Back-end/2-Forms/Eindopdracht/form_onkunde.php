<?php

$error = "";
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Valideer invoer en sla gegevens op
  $vraag1 = clean_input($_POST["vraag1"]);
  $vraag2 = clean_input($_POST["vraag2"]);
  $vraag3 = clean_input($_POST["vraag3"]);
  $vraag4 = clean_input($_POST["vraag4"]);
  $vraag5 = clean_input($_POST["vraag5"]);
  $vraag6 = clean_input($_POST["vraag6"]);
  $vraag7 = clean_input($_POST["vraag7"]);

  if (empty($vraag1) || empty($vraag2) || empty($vraag3) || empty($vraag4) || empty($vraag5) || empty($vraag6) || empty($vraag7)) {
    $error = "Vul alle velden in";
  } else {

    // Maak grappige tekst met de gegevens
    $result = "Er was eens iemand die graag " . $vraag1 . " wilde kunnen. 
    Hij/zij kon echter alleen goed opschieten met " . $vraag2 . ". 
    Het favoriete getal van deze persoon was " . $vraag3 . " en tijdens vakanties nam hij/zij altijd " . $vraag4 . " mee. 
    Zijn/haar beste persoonlijke eigenschap was " . $vraag5 . ", maar helaas was zijn/haar slechtste eigenschap " . $vraag6 . ". 
    Het ergste wat deze persoon kon overkomen was " . $vraag7 . ".";
  }
}

// Functie om invoer schoon te maken
function clean_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>