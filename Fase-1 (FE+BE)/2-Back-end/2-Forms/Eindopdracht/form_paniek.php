<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $vraag1 = $_POST["vraag1"];
  $vraag2 = $_POST["vraag2"];
  $vraag3 = $_POST["vraag3"];
  $vraag4 = $_POST["vraag4"];
  $vraag5 = $_POST["vraag5"];
  $vraag6 = $_POST["vraag6"];
  $vraag7 = $_POST["vraag7"];
  $vraag7 = $_POST["vraag8"];

  // plaats de uitgelezen formuliergegevens in een grappige tekst
  echo "Laten we eens kijken naar jouw antwoorden: <br>";
  echo "Je zou graag $vraag1 willen kunnen, maar helaas, dat gaat je nooit lukken.<br>";
  echo "Met $vraag2 kun je goed opschieten? Dat is onwaarschijnlijk.<br>";
  echo "$vraag3 is je favoriete getal? Serieus? Dat is het ergste antwoord dat we ooit hebben gehoord.<br>";
  echo "Wat je altijd bij je hebt als je op vakantie gaat, is $vraag4? Dat klinkt nutteloos.<br>";
  echo "Je beste persoonlijke eigenschap is $vraag5? Dat is een grapje, toch?<br>";
  echo "Je slechtste persoonlijke eigenschap is $vraag6? Dat hadden we al wel gedacht.<br>";
  echo "Het ergste dat je kan overkomen is $vraag7? Maak je geen zorgen, dat gaat zeker gebeuren.<br>";
}

?>