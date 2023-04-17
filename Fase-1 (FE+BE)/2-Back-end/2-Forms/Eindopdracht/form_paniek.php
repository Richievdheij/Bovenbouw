<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paniek form</title>
  <link rel="stylesheet" href="onkunde_paniek.css">
</head>
<body>
<?php
  // Header
  include 'header.php';

  // Body
  $vraag1t = $_POST["vraag1t"];
  $vraag2t = $_POST["vraag2t"];
  $vraag3t = $_POST["vraag3t"];
  $vraag4t = $_POST["vraag4t"];
  $vraag5t = $_POST["vraag5t"];
  $vraag6t = $_POST["vraag6t"];
  $vraag7t = $_POST["vraag7t"];
  $vraag8t = $_POST["vraag8t"];

  // plaats de uitgelezen formuliergegevens in een grappige tekst
  echo "Je zou graag $vraag1t willen kunnen, maar helaas, dat gaat je nooit lukken.<br>";
  echo "Met $vraag2t kun je goed opschieten? Dat is onwaarschijnlijk.<br>";
  echo "$vraag3t is je favoriete getal? Serieus? Dat is het ergste antwoord dat we ooit hebben gehoord.<br>";
  echo "Wat je altijd bij je hebt als je op vakantie gaat, is $vraag4t? Dat klinkt nutteloos.<br>";
  echo "Je beste persoonlijke eigenschap is $vraag5t? Dat is een grapje, toch?<br>";
  echo "Je slechtste persoonlijke eigenschap is $vraag6t? Dat hadden we al wel gedacht.<br>";
  echo "Het ergste dat je kan overkomen is $vraag7t? Maak je geen zorgen, dat gaat zeker gebeuren.<br>";
  echo "Meneer $vraag8t wilt jou wel eten, ik zou rennen.<br>";

  // Footer
  include 'footer.php';
?>
</body>
</html>