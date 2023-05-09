<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Eindopdracht</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- laad hier via php je header in (vanuit je includes map) -->
  <section>
    <header>
      <nav>
        <?php include("includes/header.php"); ?>
      </nav>
    </header>
  </section>

	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <main>
    <section>
      <article>

      <?php
        $page = $_GET['index.php'];
        if ($page == "onderwerp1") {
          include("pages/onderwerp1.php");
        } elseif ($page == "onderwerp2") {
          include("pages/onderwerp2.php");
        } elseif ($page == "onderwerp3") {
          include("pages/onderwerp3.php");
        } else {
          echo "Selecteer een onderwerp";
        }
      ?>

      </article>
    </section>
  </main>

	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <section>
    <footer>
      <?php include('includes/footer.php'); ?>
    </footer>
  </section>
  
</body>
</html>