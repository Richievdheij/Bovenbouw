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

  if (empty($vraag1) || empty($vraag2) || empty($vraag3) || empty($vraag4) || empty($vraag5) || empty($vraag6) || empty($vraag7) || empty($vraag8)) {
    $error = "Vul alle velden in";
  } else {

    // Maak grappige tekst met de gegevens van vraag 1 t/m 8
    $result = 
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