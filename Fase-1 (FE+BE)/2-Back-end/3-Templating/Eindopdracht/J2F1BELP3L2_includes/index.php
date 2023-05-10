<?php 
$title = "Roblox";
$description = "Roblox is een immens populair online gamingplatform dat spelers van alle leeftijden uitnodigt om hun creativiteit te uiten en virtuele werelden te verkennen. Het platform, dat in 2006 werd gelanceerd, heeft de gamingindustrie veroverd met zijn unieke combinatie van gebruikersgeneratie-inhoud, sociale interactie en diverse gameplay-ervaringen.
In Roblox kunnen spelers hun eigen spellen maken en delen met de community. Met behulp van de intuïtieve ontwikkeltools kunnen ze hun verbeelding de vrije loop laten en alles bouwen wat ze maar kunnen bedenken, van eenvoudige obstakelbanen tot complexe simulaties en multiplayer-avonturen. Dit heeft geleid tot een enorm scala aan spellen, elk met een unieke gameplay en stijl, waardoor spelers nooit een tekort hebben aan nieuwe ervaringen om van te genieten.
Wat Roblox zo bijzonder maakt, is de sociale interactie tussen spelers. Ze kunnen samenwerken met vrienden of nieuwe mensen ontmoeten in virtuele werelden, waardoor ze een gevoel van gemeenschap en vriendschap ontwikkelen. Door middel van chatfuncties, groepen en evenementen kunnen spelers communiceren, samenwerken en zelfs concurreren in verschillende spellen en activiteiten.
Naast het spelen en creëren van spellen, stelt Roblox spelers ook in staat om hun virtuele personages aan te passen met een breed scala aan outfits, accessoires en cosmetische items die kunnen worden verkregen of gekocht met de in-game valuta genaamd 'Robux'. Hierdoor kunnen spelers hun eigen unieke stijl uitdrukken en zichzelf onderscheiden van anderen in de gemeenschap.
Roblox heeft een enorm en divers gebruikersbestand, variërend van jonge kinderen tot tieners en volwassenen. Het platform biedt een veilige omgeving met uitgebreide ouderlijke controles en moderatie om de privacy en veiligheid van gebruikers te waarborgen.
Al met al is Roblox een levendige en boeiende wereld waarin spelers hun eigen avonturen kunnen creëren, samen kunnen spelen met vrienden en nieuwe mensen kunnen ontmoeten. Het blijft een evoluerend platform met voortdurende updates en nieuwe content, waardoor het steeds weer nieuwe mogelijkheden biedt voor spelers om te verkennen en te genieten.";
$image = "Bovenbouw/Fase-1 (FE+BE)/2-Back-end/3-Templating/Eindopdracht/J2F1BELP3L2_includes/images/pdo.png";
?>

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

    <h1><?php echo $title; ?></h1>
    <p><?php echo $description; ?></p>
    <div>
      <img src="<?php echo $image; ?>" alt="Roblox">
    </div>

    <!-- Include via php je onderwerp 1, onderwerp2 en onderwerp 3 met een if statement -->
      <?php
      
      $page = $_GET['page'] ?? '';
      print($page);

      if ($page === 'een') {
        print($page);
  
        //include('pages/onderwerp1.php');
      } elseif ($page === 'twee') {
        print($page);

        //include('pages/onderwerp2.php');
      } elseif ($page === 'drie') {
        print($page);

        //include('pages/onderwerp3.php');
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