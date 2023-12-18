<!DOCTYPE html>
<html>
<head>
  <title>Begroeting</title>
  <style>
    body {
      background-image: url('<?php echo getBackground(); ?>');
      background-size: cover;
      color: white;
      text-align: center;
      font-size: 48px;
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body>
  <h1><?php echo getGreeting(); ?></h1>
  <p>Het is nu: <?php echo date("H:i"); ?></p>
</body>
</html>

 <!-- L2F1BELP1O1 - Eindopdracht - Goedemorgen! -->
<?php
function getGreeting() { // function declaration
  $hour = date("H"); // get current hour

  // check current hour and return greeting
  if ($hour >= 6 && $hour < 12) {
    return "Goede morgen!";
  } elseif ($hour >= 12 && $hour < 18) {
    return "Goede middag!";
  } elseif ($hour >= 18 && $hour < 24) {
    return "Goede avond!";
  } else {
    return "Goede nacht!";
  }
}
// call function
function getBackground() {
  $hour = date("H");
// check current hour and return background
  if ($hour >= 6 && $hour < 12) {
    return "morning.png";
  } elseif ($hour >= 12 && $hour < 18) {
    return "afternoon.png";
  } elseif ($hour >= 18 && $hour < 24) {
    return "evening.png";
  } else {
    return "night.png";
  }
}
?>