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

    // Body
    $vraag1t = isset($_POST["vraag1t"]) ? $_POST["vraag1t"] : "";
    $vraag2t = isset($_POST["vraag2t"]) ? $_POST["vraag2t"] : "";
    $vraag3t = isset($_POST["vraag3t"]) ? $_POST["vraag3t"] : "";
    $vraag4t = isset($_POST["vraag4t"]) ? $_POST["vraag4t"] : "";
    $vraag5t = isset($_POST["vraag5t"]) ? $_POST["vraag5t"] : "";
    $vraag6t = isset($_POST["vraag6t"]) ? $_POST["vraag6t"] : "";
    $vraag7t = isset($_POST["vraag7t"]) ? $_POST["vraag7t"] : "";

    if(empty($vraag1t) || !is_string($vraag1t)){
      // Error handling for question 1
    }

    if(empty($vraag2t) || !is_string($vraag2t)){
      // Error handling for question 2
    }

    if(empty($vraag3t) || !is_numeric($vraag3t)){
      // Error handling for question 3
    }

    if(empty($vraag4t) || !is_string($vraag4t)){
      // Error handling for question 4
    }

    if(empty($vraag5t) || !is_string($vraag5t)){
      // Error handling for question 5
    }

    if(empty($vraag6t) || !is_string($vraag6t)){
      // Error handling for question 6
    }

    if(empty($vraag7t) || !is_string($vraag7t)){
      // Error handling for question 7
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
