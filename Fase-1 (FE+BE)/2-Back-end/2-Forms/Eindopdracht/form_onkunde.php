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
  <div class="form">
    <?php
    // Header
    include 'includes/header.php';

    // Validate form submission
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $vraag1t = isset($_POST["vraag1t"]) ? trim(htmlspecialchars(stripslashes($_POST["vraag1t"]))) : "";
      $vraag2t = isset($_POST["vraag2t"]) ? trim(htmlspecialchars(stripslashes($_POST["vraag2t"]))) : "";
      $vraag3t = isset($_POST["vraag3t"]) ? trim(htmlspecialchars(stripslashes($_POST["vraag3t"]))) : "";
      $vraag4t = isset($_POST["vraag4t"]) ? trim(htmlspecialchars(stripslashes($_POST["vraag4t"]))) : "";
      $vraag5t = isset($_POST["vraag5t"]) ? trim(htmlspecialchars(stripslashes($_POST["vraag5t"]))) : "";
      $vraag6t = isset($_POST["vraag6t"]) ? trim(htmlspecialchars(stripslashes($_POST["vraag6t"]))) : "";
      $vraag7t = isset($_POST["vraag7t"]) ? trim(htmlspecialchars(stripslashes($_POST["vraag7t"]))) : "";

      $errors = array();

      if(empty($vraag1t) || !is_string($vraag1t)){
        $errors[] = "Vraag 1 is onjuist ingevuld.";
      }

      if(empty($vraag2t) || !is_string($vraag2t)){
        $errors[] = "Vraag 2 is onjuist ingevuld.";
      }

      if(empty($vraag3t) || !is_numeric($vraag3t)){
        $errors[] = "Vraag 3 is onjuist ingevuld.";
      }

      if(empty($vraag4t) || !is_string($vraag4t)){
        $errors[] = "Vraag 4 is onjuist ingevuld.";
      }

      if(empty($vraag5t) || !is_string($vraag5t)){
        $errors[] = "Vraag 5 is onjuist ingevuld.";
      }

      if(empty($vraag6t) || !is_string($vraag6t)){
        $errors[] = "Vraag 6 is onjuist ingevuld.";
      }

      if(empty($vraag7t) || !is_string($vraag7t)){
        $errors[] = "Vraag 7 is onjuist ingevuld.";
      }

      if(count($errors) == 0){
        //Formulier correct ingevuld, voer hier verdere acties uit
        echo "Bedankt voor het invullen van het formulier!";
      }else{
        // Formulier onjuist ingevuld, toon foutmeldingen in label
        echo "<label class='error'>";
        foreach($errors as $error){
          echo $error . "<br>";
        }
        echo "</label>";
      }
    }
    ?>

    <!-- plaats de uitgelezen formuliergegevens in een grappige tekst -->
    <p>
    <?php echo "
      Er was eens iemand die graag $vraag1t wilde kunnen.
      Hij/zij kon echter alleen goed opschieten met $vraag2t.
      Het favoriete getal van deze persoon was $vraag3t en tijdens vakanties nam hij/zij altijd $vraag4t mee.
      Zijn/haar beste persoonlijke eigenschap was $vraag5t, maar helaas was zijn/haar slechtste eigenschap $vraag6t.
      Het ergste wat deze persoon kon overkomen was $vraag7t. ";
    ?>
    </p>

    <?php
      // Footer
      include 'includes/footer.php';
    ?>

  </div>
</body>
</html>
