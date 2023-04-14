<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->
  <?php include("includes/header.php"); ?>

	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  
  <?php
if(isset($_GET['content'])) {
    switch($_GET['content']) {
        case "index":
            $content = "content/index.php";
            break;
        case "onderwerp1":
            $content = "content/onderwerp1.php";
            break;
        case "onderwerp2":
            $content = "content/onderwerp2.php";
            break;
        case "onderwerp3":
            $content = "content/onderwerp3.php";
            break;
        default:
            $content = "content/index.php";
            break;
    }
} else {
    $content = "content/index.php";
}
?>


  <?php require('onderwerp1.php'); ?>
  <?php echo . $title; ?>
  <?php echo . $description; ?>
  <?php echo . $image; ?>
  <?php require('onderwerp2.php'); ?>
  <?php echo . $title; ?>
  <?php echo . $description; ?>
  <?php echo . $image; ?>
  <?php require('onderwerp3.php'); ?>
  <?php echo . $title; ?>
  <?php echo . $description; ?>
  <?php echo . $image; ?>
	
	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <?php include('includes/footer.php'); ?>

</body>
</html>