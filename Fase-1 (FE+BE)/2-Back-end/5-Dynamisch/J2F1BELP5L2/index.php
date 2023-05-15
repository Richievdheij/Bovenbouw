<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)");
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':email', $email);

  // insert a row
  $firstname = "John";
  $lastname = "Doe";
  $email = "john@example.com";
  $stmt->execute();

  // insert another row
  $firstname = "Mary";
  $lastname = "Moe";
  $email = "mary@example.com";
  $stmt->execute();

  // insert another row
  $firstname = "Julie";
  $lastname = "Dooley";
  $email = "julie@example.com";
  $stmt->execute();

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>


<?php 
$title = "Roblox";
$description = "Roblox is een immens populair online gamingplatform dat spelers van alle leeftijden uitnodigt om hun creativiteit te uiten en virtuele werelden te verkennen. Het platform, dat in 2006 werd gelanceerd, heeft de gamingindustrie veroverd met zijn unieke combinatie van gebruikersgeneratie-inhoud, sociale interactie en diverse gameplay-ervaringen.
In Roblox kunnen spelers hun eigen spellen maken en delen met de community. Met behulp van de intuïtieve ontwikkeltools kunnen ze hun verbeelding de vrije loop laten en alles bouwen wat ze maar kunnen bedenken, van eenvoudige obstakelbanen tot complexe simulaties en multiplayer-avonturen. Dit heeft geleid tot een enorm scala aan spellen, elk met een unieke gameplay en stijl, waardoor spelers nooit een tekort hebben aan nieuwe ervaringen om van te genieten.
Wat Roblox zo bijzonder maakt, is de sociale interactie tussen spelers. Ze kunnen samenwerken met vrienden of nieuwe mensen ontmoeten in virtuele werelden, waardoor ze een gevoel van gemeenschap en vriendschap ontwikkelen. Door middel van chatfuncties, groepen en evenementen kunnen spelers communiceren, samenwerken en zelfs concurreren in verschillende spellen en activiteiten.
Naast het spelen en creëren van spellen, stelt Roblox spelers ook in staat om hun virtuele personages aan te passen met een breed scala aan outfits, accessoires en cosmetische items die kunnen worden verkregen of gekocht met de in-game valuta genaamd 'Robux'. Hierdoor kunnen spelers hun eigen unieke stijl uitdrukken en zichzelf onderscheiden van anderen in de gemeenschap.
Roblox heeft een enorm en divers gebruikersbestand, variërend van jonge kinderen tot tieners en volwassenen. Het platform biedt een veilige omgeving met uitgebreide ouderlijke controles en moderatie om de privacy en veiligheid van gebruikers te waarborgen.
Al met al is Roblox een levendige en boeiende wereld waarin spelers hun eigen avonturen kunnen creëren, samen kunnen spelen met vrienden en nieuwe mensen kunnen ontmoeten. Het blijft een evoluerend platform met voortdurende updates en nieuwe content, waardoor het steeds weer nieuwe mogelijkheden biedt voor spelers om te verkennen en te genieten.";
$image = "images/pdo.png";

$page = $_GET['page'];

if ($page === 'een') {
  $title = "Vrijetijdbesteding";
  $description = "Mijn vrijetijdsbesteding omvat een aantal verschillende activiteiten die ik graag doe om te ontspannen en mijn energie kwijt te kunnen. Een van mijn favoriete bezigheden is gamen. Ik vind het leuk om verschillende games te spelen, van actievolle first-person shooters tot strategische games zoals Civilization. Het is een geweldige manier om mijn geest te prikkelen en mijn probleemoplossend vermogen te oefenen.
  Naast gamen vind ik het belangrijk om actief te zijn en regelmatig te sporten. Zwemmen is daarbij een van mijn favoriete sporten. Het voelt heerlijk om in het water te zijn en mijn spieren te gebruiken om vooruit te komen. Bovendien is zwemmen een uitstekende cardio-oefening die goed is voor mijn conditie en gezondheid. Naast zwemmen speel ik ook graag waterpolo, een intensieve teamsport waarbij ik zowel fysiek als mentaal uitgedaagd wordt.
  Naast deze sportactiviteiten hou ik me ook bezig met het ontwikkelen van mijn programmeervaardigheden. Ik vind het leuk om te experimenteren met verschillende programmeertalen en frameworks, en om kleine projecten te bouwen om nieuwe technologieën te leren kennen. Coderen is een creatieve uitlaatklep voor mij waarin ik mijn ideeën kan omzetten in praktische toepassingen.
  Tenslotte vind ik het ook belangrijk om af en toe te feesten en plezier te maken met vrienden en familie. Ik hou van gezellige avonden waarin we samen kunnen lachen, dansen en genieten van het leven. Het is een geweldige manier om te ontspannen en de dagelijkse stress even achter me te laten.
  Al met al biedt mijn vrijetijdsbesteding mij een geweldige balans tussen fysieke en mentale uitdaging, creativiteit en ontspanning. Het stelt me in staat om mijn interesses en talenten verder te ontwikkelen en tegelijkertijd te genieten van het leven.";
  $image = "images/vrijetijdpic.jpg";
} elseif ($page === 'twee') {
  $title = "COD";
  $description = "Call of Duty: Modern Warfare 2 is een first-person shooter-videogame die in 2009 is ontwikkeld door Infinity Ward en uitgegeven door Activision. Het is het zesde deel in de Call of Duty-serie en de opvolger van Call of Duty 4: Modern Warfare.
  De game speelt zich af in de nabije toekomst en volgt de strijd tussen de Verenigde Staten en Rusland. Het verhaal van de singleplayer-campagne is verdeeld over verschillende missies die zich afspelen in verschillende delen van de wereld. Spelers nemen de rol aan van verschillende personages in de strijd tegen de ultranationalisten, een Russische militaire groepering die de wereld wil domineren.
  De multiplayer-modus van Modern Warfare 2 is een van de meest populaire aspecten van de game. Het biedt een breed scala aan speelmodi, waaronder Team Deathmatch, Search and Destroy, en Domination. Spelers kunnen ook hun eigen classes maken en hun uitrusting aanpassen met verschillende wapens en accessoires.
  Modern Warfare 2 werd geprezen om zijn verhaal en gameplay, en de multiplayer-modus is nog steeds populair onder fans van de serie. De game heeft ook kritiek ontvangen vanwege de grafische weergave van geweld en het gebrek aan een waarschuwing voor gevoelige inhoud.
  Kortom, Call of Duty: Modern Warfare 2 is een intense first-person shooter die een gedenkwaardige singleplayer-campagne combineert met een uitstekende multiplayer-ervaring. Het blijft een van de meest populaire games in de Call of Duty-serie en heeft een blijvende invloed gehad op het genre van first-person shooters.";
  $image = "images\codpic.jpg";
} elseif ($page === 'drie') {
  $title = "Fortnite";
  $description = "Fortnite is een online multiplayer videogame die in 2017 werd uitgebracht door Epic Games. Het spel heeft een unieke stijl en is bekend geworden door zijn Battle Royale-modus, waarin 100 spelers tegen elkaar strijden om als laatste speler of team over te blijven. Het spel heeft zich ontwikkeld tot een wereldwijd fenomeen en heeft meer dan 350 miljoen geregistreerde spelers.
  Het doel van het spel is om te overleven en de laatste speler of het laatste team te zijn dat overblijft. Spelers moeten wapens, materialen en voorraden verzamelen terwijl ze de strijd aangaan met andere spelers. De kaart van Fortnite is groot en bestaat uit verschillende gebieden, elk met hun eigen unieke kenmerken. Het spel biedt verschillende speelmodi, waaronder Solo, Duo, Squad en Creative.
  Fortnite biedt ook veel cosmetische items die spelers kunnen kopen om hun personages en uitrusting aan te passen. Het spel wordt ook regelmatig bijgewerkt met nieuwe inhoud, zoals wapens, skins, kaartupdates en meer.
  Het succes van Fortnite heeft ook geleid tot een breed scala aan merchandise, waaronder kleding, speelgoed en accessoires. Fortnite heeft ook verschillende e-sporttoernooien georganiseerd, waaronder de Fortnite World Cup, waarbij spelers een kans hebben om enorme geldprijzen te winnen.
  Fortnite heeft ook kritiek gekregen vanwege het verslavende karakter van het spel en het feit dat het geweld bevat. Ondanks deze kritiek blijft het spel immens populair en heeft het een enorme impact gehad op de videogame-industrie en popcultuur.";
  $image = "images/fortnitepic.jpg";
}
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>J2F1BELP5L2 - Content uit je database</title>
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

	<!-- Haal hier uit de URL welke pagina uit het menu is opgevraagd. Gebruik deze om de content uit de database te halen. -->


	<!-- Laat hier de content die je op hebt gehaald uit de database zien op de pagina. -->
  <main>
    <section>
      <article>


    <h1><?php echo $title; ?></h1>
    <p><?php echo $description; ?></p>
    <div>
      <img src="<?php echo $image; ?>" alt="Roblox">
    </div>

  
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