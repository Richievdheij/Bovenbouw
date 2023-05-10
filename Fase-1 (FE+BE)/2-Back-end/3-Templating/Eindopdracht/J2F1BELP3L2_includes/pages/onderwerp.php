<?php 

$page = $_GET['page'];

if ($page === 'een') {
  $title = "Vrijetijdbesteding";
  $description = "Mijn vrijetijdsbesteding omvat een aantal verschillende activiteiten die ik graag doe om te ontspannen en mijn energie kwijt te kunnen. Een van mijn favoriete bezigheden is gamen. Ik vind het leuk om verschillende games te spelen, van actievolle first-person shooters tot strategische games zoals Civilization. Het is een geweldige manier om mijn geest te prikkelen en mijn probleemoplossend vermogen te oefenen.
  Naast gamen vind ik het belangrijk om actief te zijn en regelmatig te sporten. Zwemmen is daarbij een van mijn favoriete sporten. Het voelt heerlijk om in het water te zijn en mijn spieren te gebruiken om vooruit te komen. Bovendien is zwemmen een uitstekende cardio-oefening die goed is voor mijn conditie en gezondheid. Naast zwemmen speel ik ook graag waterpolo, een intensieve teamsport waarbij ik zowel fysiek als mentaal uitgedaagd wordt.
  Naast deze sportactiviteiten hou ik me ook bezig met het ontwikkelen van mijn programmeervaardigheden. Ik vind het leuk om te experimenteren met verschillende programmeertalen en frameworks, en om kleine projecten te bouwen om nieuwe technologieën te leren kennen. Coderen is een creatieve uitlaatklep voor mij waarin ik mijn ideeën kan omzetten in praktische toepassingen.
  Tenslotte vind ik het ook belangrijk om af en toe te feesten en plezier te maken met vrienden en familie. Ik hou van gezellige avonden waarin we samen kunnen lachen, dansen en genieten van het leven. Het is een geweldige manier om te ontspannen en de dagelijkse stress even achter me te laten.
  Al met al biedt mijn vrijetijdsbesteding mij een geweldige balans tussen fysieke en mentale uitdaging, creativiteit en ontspanning. Het stelt me in staat om mijn interesses en talenten verder te ontwikkelen en tegelijkertijd te genieten van het leven.";
  $image = "Bovenbouw/Fase-1 (FE+BE)/2-Back-end/3-Templating/Eindopdracht/J2F1BELP3L2_includes/images/vrijetijdpic.jpg";
} elseif ($page === 'twee') {
  $title = "COD";
  $description = "Call of Duty: Modern Warfare 2 is een first-person shooter-videogame die in 2009 is ontwikkeld door Infinity Ward en uitgegeven door Activision. Het is het zesde deel in de Call of Duty-serie en de opvolger van Call of Duty 4: Modern Warfare.
  De game speelt zich af in de nabije toekomst en volgt de strijd tussen de Verenigde Staten en Rusland. Het verhaal van de singleplayer-campagne is verdeeld over verschillende missies die zich afspelen in verschillende delen van de wereld. Spelers nemen de rol aan van verschillende personages in de strijd tegen de ultranationalisten, een Russische militaire groepering die de wereld wil domineren.
  De multiplayer-modus van Modern Warfare 2 is een van de meest populaire aspecten van de game. Het biedt een breed scala aan speelmodi, waaronder Team Deathmatch, Search and Destroy, en Domination. Spelers kunnen ook hun eigen classes maken en hun uitrusting aanpassen met verschillende wapens en accessoires.
  Modern Warfare 2 werd geprezen om zijn verhaal en gameplay, en de multiplayer-modus is nog steeds populair onder fans van de serie. De game heeft ook kritiek ontvangen vanwege de grafische weergave van geweld en het gebrek aan een waarschuwing voor gevoelige inhoud.
  Kortom, Call of Duty: Modern Warfare 2 is een intense first-person shooter die een gedenkwaardige singleplayer-campagne combineert met een uitstekende multiplayer-ervaring. Het blijft een van de meest populaire games in de Call of Duty-serie en heeft een blijvende invloed gehad op het genre van first-person shooters.";
  $image = "Bovenbouw\Fase-1 (FE+BE)\2-Back-end\3-Templating\Eindopdracht\J2F1BELP3L2_includes\images\codpic.jpg";
} elseif ($page === 'drie') {
  $title3 = "Fortnite";
  $description3 = "Fortnite is een online multiplayer videogame die in 2017 werd uitgebracht door Epic Games. Het spel heeft een unieke stijl en is bekend geworden door zijn Battle Royale-modus, waarin 100 spelers tegen elkaar strijden om als laatste speler of team over te blijven. Het spel heeft zich ontwikkeld tot een wereldwijd fenomeen en heeft meer dan 350 miljoen geregistreerde spelers.
  Het doel van het spel is om te overleven en de laatste speler of het laatste team te zijn dat overblijft. Spelers moeten wapens, materialen en voorraden verzamelen terwijl ze de strijd aangaan met andere spelers. De kaart van Fortnite is groot en bestaat uit verschillende gebieden, elk met hun eigen unieke kenmerken. Het spel biedt verschillende speelmodi, waaronder Solo, Duo, Squad en Creative.
  Fortnite biedt ook veel cosmetische items die spelers kunnen kopen om hun personages en uitrusting aan te passen. Het spel wordt ook regelmatig bijgewerkt met nieuwe inhoud, zoals wapens, skins, kaartupdates en meer.
  Het succes van Fortnite heeft ook geleid tot een breed scala aan merchandise, waaronder kleding, speelgoed en accessoires. Fortnite heeft ook verschillende e-sporttoernooien georganiseerd, waaronder de Fortnite World Cup, waarbij spelers een kans hebben om enorme geldprijzen te winnen.
  Fortnite heeft ook kritiek gekregen vanwege het verslavende karakter van het spel en het feit dat het geweld bevat. Ondanks deze kritiek blijft het spel immens populair en heeft het een enorme impact gehad op de videogame-industrie en popcultuur.";
  $image3 = "Bovenbouw/Fase-1 (FE+BE)/2-Back-end/3-Templating/Eindopdracht/J2F1BELP3L2_includes/images/fortnitepic.jpg";
}

?>

<!-- jouw HTML met de inhoud over onderwerp 1 komt hier... -->
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="../css/style.css">
  </head>
<body>
    <?php require ('../includes/header.php'); ?>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $description; ?></p>
    <div>
      <img src="<?php echo $image; ?>" alt="Vrijetijdbesteding">
    </div>
    <?php include('../includes/footer.php'); ?>
</body>
</html>