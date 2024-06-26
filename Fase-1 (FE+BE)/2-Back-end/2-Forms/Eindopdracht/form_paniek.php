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
      $vraag8t = isset($_POST["vraag8t"]) ? trim(htmlspecialchars(stripslashes($_POST["vraag8t"]))) : "";

      $errors = array();

      if(empty($vraag1t) || !is_string($vraag1t)){
        $errors[] = "Vraag 1 is onjuist ingevuld.";
        
      }

      if(empty($vraag2t) || !is_string($vraag2t)){
        $errors[] = "Vraag 2 is onjuist ingevuld.";
      }

      if(empty($vraag3t) || !is_string($vraag3t)){
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

      if(empty($vraag8t) || !is_string($vraag8t)){
        $errors[] = "Vraag 8 is onjuist ingevuld.";
      }
    }
    ?>

    <p>
    <?php echo "
    Je zou graag $vraag1t willen kunnen, maar helaas, dat gaat je nooit lukken.<br>
    Met $vraag2t kun je goed opschieten? Dat is onwaarschijnlijk.<br>
    $vraag3t is je favoriete getal? Serieus? Dat is het ergste antwoord dat we ooit hebben gehoord.<br>
    Wat je altijd bij je hebt als je op vakantie gaat, is $vraag4t? Dat klinkt nutteloos.<br>
    Je beste persoonlijke eigenschap is $vraag5t? Dat is een grapje, toch?<br>
    Je slechtste persoonlijke eigenschap is $vraag6t? Dat hadden we al wel gedacht.<br>
    Het ergste dat je kan overkomen is $vraag7t? Maak je geen zorgen, dat gaat zeker gebeuren.<br>
    Meneer $vraag8t wilt jou wel eten, ik zou rennen.<br>";
    ?>
    </p>

    <?php
      // Footer
      include 'includes/footer.php';
    ?>

  </div>
</body>
</html>