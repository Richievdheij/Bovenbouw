<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
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
          if (isset($_GET['content'])) {
            include("pages/onderwerp1" . $_GET['content'] . ".php");
          } else {
            include("pages/home.php");
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