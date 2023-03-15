# Javascript / Lab 1 Fibonacci reeks
In deze labopdracht ga jij een applicatie bouwen in javascript die de eerste 20 getallen uit de getallenreeks berekent en op het scherm toont. Hierbij maak je gebruik van de kennis die je hebt opgedaan over de afgelopen paar weken.

Je maakt in de uitwerking ten minste gebruik van de volgende onderdelen:
- Variabelen
- Loops
- Functions
- Parameters
- Returnwaarden

# Javascript / Lab 2 Opdracht 1: Array met dagen
Maak een array aan waarin de dagen van de week zitten: maandag t/m zondag. De volgende uitvoer laat je op je scherm zien waarbij je gebruik moet maken van het 'aanspreken' van de array met de dagen die je hebt aangemaakt.

# Javascript / Lab 2 Opdracht 2: Array met namen
Via een prompt stel je aan de gebruiker de volgende vraag: 'Hoeveel namen wilt u in de array stoppen? (minimaal 3)'. Nadat je de namen hebt ingevoerd is de uitvoer naar het scherm als volgt:

Kopje h2: 'De ingevoerde namen in de array zijn:' met daaronder alle ingevoerde namen.

Kopje h2: 'De ingevoerde namen in de array in omgekeerde volgorde zijn:' met daaronder alle ingevoerde namen in omgekeerde volgorde.

# Javascript / Lab 2 Opdracht 3: Rekenen met 2 arrays
Je maakt de volgende 2 arrays aan:

var arrayEen = [1,2,3,4,5,6,7,8,9,10];
var arrayTwee = [2,4,6,8,10,12,14,16,18,20];

De volgende uitvoer moet je op het scherm tonen (zie PDF): Array operatoren.pdf
In je oplossing maak je 4 functies aan die de berekeningen uitvoeren en de uitvoer naar het scherm schrijven:

optellen(arrayEen, arrayTwee);
aftrekken(arrayTwee, arrayEen);
vermenigvuldigen(arrayEen, arrayTwee);
delen(arrayTwee, arrayEen);

# Javascript / Lab 2 - Array met tafels 
Maak een array aan waarin de volgende tafels zitten: 2, 4, 6 en 8. De uitvoer naar het scherm wordt dan: Array met tafels.pdf

Als je in de array andere getallen zet dan worden die tafels naar het scherm geschreven. Je weet dus van te voren niet hoeveel getallen er in de array zitten en ook niet welke getallen.

# Javascript / Lab 2 - Piramide oplopend
Je vraagt aan de gebruiker via een prompt 'Voer een getal in:'.

Maak eerst een array aan waarin je de getallen 1 t/m 20 toevoegd (als de invoer 20 is). Vervolgens ga je met behulp van de array de oplopende pyramide naar het scherm printen.

# Javascript / Lab 2 - Piramide aflopend
Je vraagt aan de gebruiker via een prompt 'Voer een getal in:'.

Maak eerst een array aan waarin je de getallen 1 t/m 20 toevoegd (als de invoer 20 is). Vervolgens ga je met behulp van de array de aflopende pyramide naar het scherm printen.

# Javascript / Lab 2 - Horeca app met arrays
In jaar 1 heb je een horeca app gemaakt (ijssalon Papi Gelato). Je hebt hier veel variabelen gebruikt om bij te houden hoeveel ijsjes en bolletjes je hebt besteld en ook alle prijzen heb je vastgelegd in constantes of variabelen.

Is het handig om voor elk ijsje of smaak een aparte variabele te hebben die het aantal bijhoud?
Of zou dit ook opgelost kunnen worden met een array? Wat is het voordeel van een array?
 
Je maakt een kopie van je Papi Gelato bestanden en je gaat deze ombouwen naar een array oplossing. Dus het bijhouden van het aantal Bolletjes, hoorntjes of bakjes etc. en prijzen ga je oplossen met behulp van arrays.

In JavaScript kun je niet echt spreken van Associative Arrays, feitelijk is dit een object, maar je gaat de Papi Gelato app wel ombouwen zodat het lijkt op Associative Arrays.

Wat is het voordeel van een associative Array ten opzichte van een array met numbered indexes?
var cars = ['Saab', 'Volvo', 'BMW']; // array numbered indexed

Aanmaken van een associative array met auto's waar aantal van alle auto's op 0 wordt gezet.
var cars = {saab:0, volvo:0, bmw:0};

cars['saab'] = 2; // aantal van saab wordt 2 gemaakt.

# Javascript / Lab 3 - Buttons
Maak het volgende ontwerp na en zorg ervoor dat je middels JavaScript de HTML toevoegt aan de pagina. Het enige wat je binnen de body mag hebben als HTML code is:

<body class="bgc">
    <div id="container"></div>
    <script src="script.js"></script>
 </body>

De applicatie voldoet aan de volgende eisen:

- Panel met buttons is gecentreerd in de pagina en de achtergrondkleur is wit
- Bij het opstarten is de achtergrondkleur van de pagina grijs
- Er zitten 3 buttons in het panel met de kleuren groen, rood en blauw
- Als je op button 1 (groen) klikt wordt de achtergrondkleur van de pagina groen
- Als je op button 2 (rood) klikt wordt de achtergrondkleur van de pagina rood
- Als je op button 3 (blauw) klikt wordt de achtergrondkleur van de pagina blauw

# Javascript / Lab 3 - Groene en rode buttons
Voeg via een JavaScript applicatie de HTML code toe aan de pagina (dynamisch dus). Het enige wat je als HTML in de pagina mag hebben is een container waarin je de HTML gaat toevoegen, bijvoorbeeld dit:

<body>
      <div id="container"></div>
      <script src="buttons.js"></script>
 </body>

De applicatie voldoet aan de volgende eisen:

- Maak het ontwerp exact na
- Per rij zijn er 5 buttons aanwezig
- Het aantal buttons kun je in de JS code opgeven als variabele, bijvoorbeeld: 10, 15, 20, 25, ... In dit geval zijn er 30 buttons aanwezig
- Elke keer als je op een groene button klikt wordt de kleur rood

# Javascript / Lab 3 - Verschillende kleuren
De applicatie voldoet aan de volgende eisen:

Maak het ontwerp exact na (dit heb je in opdracht 1 al gedaan)
Standaard zijn alle buttons groen (0 x klikken)
Na 1 x klikken wordt de kleur van de button rood (zie button 2)
Na 2 x klikken wordt de kleur van de button paars (zie button 3)
Na 3 x klikken wordt de kleur van de button blauw (zie button 4)
Na 4 x klikken wordt de kleur van de button zwart (zie button 5)
Na 5 x klikken verdwijnt de button. De button is dus niet meer aanwezig in de DOM!

# Javascript / Lab 3 - Zelf de kleuren kunnen instellen
Misschien heb je dit bij opdracht 2 al zo opgelost... Maar de uitbreiding/aanpassing die je moet maken op basis van opdracht 2 is het volgende:

- je moet zelf in code kunnen aangeven welke kleuren de buttons worden (de startkleur blijft voor alle buttons groen)
- de laatste kleur is altijd zwart en klik je op een zwarte button dan verdwijnt de button uit de DOM.
 
Bijvoorbeeld bij opdracht 2 zijn de kleuren als volgt: groen, rood, paars, blauw en zwart. Je moet ook de volgende instelling kunnen doen: groen, rood en zwart.
Zorg ervoor dat je met minimale aanpassingen in de JS code dit voor elkaar krijgt.