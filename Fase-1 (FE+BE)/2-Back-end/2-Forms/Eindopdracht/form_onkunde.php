<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $vraag1 = $_POST["vraag1"];
  $vraag2 = $_POST["vraag2"];
  $vraag3 = $_POST["vraag3"];
  $vraag4 = $_POST["vraag4"];
  $vraag5 = $_POST["vraag5"];
  $vraag6 = $_POST["vraag6"];
  $vraag7 = $_POST["vraag7"];

  // plaats de uitgelezen formuliergegevens in een grappige tekst
  echo "Er was eens iemand die graag $vraag1 wilde kunnen."     ;
  echo "Hij/zij kon echter alleen goed opschieten met $vraag2. ";
  echo "Het favoriete getal van deze persoon was $vraag3 en tijdens vakanties nam hij/zij altijd $vraag4 mee.";
  echo "Zijn/haar beste persoonlijke eigenschap was $vraag5, maar helaas was zijn/haar slechtste eigenschap $vraag6.";
  echo "Het ergste wat deze persoon kon overkomen was $vraag7";
}

?>