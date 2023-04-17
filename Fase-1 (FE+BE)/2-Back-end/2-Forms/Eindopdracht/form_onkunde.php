<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Onkunde form</title>
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

  // plaats de uitgelezen formuliergegevens in een grappige tekst
  echo "Er was eens iemand die graag $vraag1t wilde kunnen. ";
  echo "Hij/zij kon echter alleen goed opschieten met $vraag2t. ";
  echo "Het favoriete getal van deze persoon was $vraag3t en tijdens vakanties nam hij/zij altijd $vraag4t mee. ";
  echo "Zijn/haar beste persoonlijke eigenschap was $vraag5t, maar helaas was zijn/haar slechtste eigenschap $vraag6t. ";
  echo "Het ergste wat deze persoon kon overkomen was $vraag7t. ";

  // Footer
  include 'footer.php';
?>
</body>
</html>
