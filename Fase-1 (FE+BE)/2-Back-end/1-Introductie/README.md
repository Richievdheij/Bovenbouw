# 2F1BELP1L0 - Installeer een lokale server
1. Ga naar https://www.ampps.com/downloads (of https://www.apachefriends.org/download.html voor Xampp) en download daar de versie voor jouw besturings systeem
2. Installeer AMPPS/XAMPP op je computer (let goed op waar je deze installeerd dit heb je zo weer nodig)
3. Start AMPPS/XAMPP op (als dit niet automatisch gebeurt)
4. Ga naar de www map in AMPPS (of htdocs in XAMPP) en plaats daar het bestandje dat je in de kolom rechts vind (phpinfo.php).
5. Ga nu naar http://localhost/phpinfo.php en als het goed is zie je nu iets dat lijkt op onderstaande afbeelding

TIP: Maak voor elk project een aparte map aan in je www of htdocs map binnen AMPPS/XAMPP. 

Wanneer je een project met bijvoorbeeld de mapnaam "J2F2L1" hebt, kun je deze op je browser bekijken door localhost/J2F2L1 of localhost:8080/J2F2L1 te typen. LET OP! dit gaat ervan uit dat er een index.php bestaan in de projectmap.

# 2F1BELP1L1 - Hello world!
1. Maak een PHP applicatie die de zin "hello world!" in een h1 tag op het scherm laat zien (zonder gebruik te maken van variabelen of constanten)

2. Doe dit zelfde weer alleen maak nu gebruik van een constanten waar "hello world!" in staat

3. Doe dit zelfde weer alleen maak nu gebruik van een variabelen waar eerst "Learning PHP" in staat en op de volgende regel veranderd wordt met de waarde van de constanten (het resultaat moet nog het zelfde zijn als de vorige 2 opdrachten)

4. Toon nu de zin hello world! in een h1 tag maar maak gebruik van 2 variabelen, 1 met het woord "hello" en de andere met het woord "world!"

5. Probeer het nu eens met een array waar in de eerste plek in de array gevuld is met "hello" en de tweede met "world!" 

 (tip1: een array kan je op de zelfde manier maken als in JavaScript, tip2: Kijk naar de implode functie van PHP)

# J2F1BELP1L2 - Rekenen
# Lab 3a - Sommen
Maak een applicatie die met 2 random getallen een vermenigvuldiging, optelsom, aftreksom en deelsom laat zien, gebruik hiervoor de functie rand() of mt_rand() (https://www.w3schools.com/php/func_math_rand.asp).

Let op: de getallen die je gebruikt om de berekeningen te doen moeten voor iedere som het zelfde zijn totdat je de browser ververst.

# Lab 3b - Loops & functions
1. Maak een PHP applicatie die met een for loopje de tafel van 6 laat zien.
2. Zorg er nu voor dat de for loop in een functie staat die de waarde 6 mee krijgt als parameter.
3. Maak een array met de waardes 3, 5, 8 & 12 en loop hier doorheen met een foreach en laat zo voor ieder cijfer de tafel zien.