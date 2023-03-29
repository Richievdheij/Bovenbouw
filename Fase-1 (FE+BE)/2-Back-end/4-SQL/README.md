# J2F1BELP4L1 - Database aanmaken en vullen
Om te oefenen met het SELECT statement ga je op je localhost-webserver of via een databasetool/mysql cli tool een database met tabellen aanmaken. Om dit te doen krijg je twee bestanden (kolom rechts!) die dit voor je doen, namelijk:

- create-rubyquest.sql : het aanmaken van de database 'rubyquest' en de benodigde tabellen
- data-rubyquest.sql : het vullen van de tabellen met data

Bekijken en bestudeer de bestanden create.sql en data.sql goed om te zien wat deze bestanden voor je doen. Bestudeer vervolgens de volgende documentatie:

- SQL CREATE DATABASE Statement
- SQL DROP DATABASE Statement
- SQL CREATE TABLE Statement
- SQL ALTER TABLE Statement
- SQL INSERT INTO Statement
- Je levert hier een screenshot van je gevulde database in

Opdracht: Maak de database 'rubyquest' en benodigde tabellen aan en vul de tabellen met data. 
beantwoord daarna de onderstaande vragen

# J2F1BELP4L1 - Queries
RubyQuest - Vragen

Maak query's op de database met de juiste SQL statements (dit kan in “phpmyadmin” op je localhost, een 3rd-party databasetool, of de MySQL cli tool. 
Verkrijg antwoord op de onderstaande vragen.
Zet je antwoorden in een word bestand en lever die hier in.
SELECT *
1. Met welke query haal je alle helden op uit de database?
2. Met welke query haal je alle personen op uit de database?
3. Hoeveel personen zijn NPC’s?
4. Met welke query haal je alle opdrachten (taken) op uit de database?
5. Hoeveel dieren zijn er in RubyQuest?
6. Met welke query haal je alle wezens op uit de database?
7. Met welke query laat je alle personen zien gesorteerd op naam (ascending)?
8. Met welke query laat je alle steden zien gesorteerd op naam (descending)?
9. Hoeveel steden zijn er aanwezig?
 
SELECT [column], [column]
1. Met welke query haal je alle namen van bescherming op uit de database?
2. Met welke query haal je alle namen en aanvalskracht van wapens op uit de database?
3. Met welke query haal je alle namen en gezondheid van alle wezens op uit de database?
 
SELECT WHERE
1. Met welke query kan je alleen de schapen laten zien die er in RubyQuest te vinden zijn?
2. Met welke query kan je zien hoeveel schapen er in RubyQuest te vinden zijn?
3. Hoeveel zeeslangen zijn er te vinden in RubyQuest?
4. Welke persoon heeft id 7?
5. Met welke 2 query’s kan je nagaan of de persoon uit vraag 4 een held of een NPC is?

# J2F1BELP4L2 - Queries 2
RubyQuest - Vragen 2

Maak query's op de database met de juiste SQL statements, oftewel krijg antwoord op de onderstaande vragen.
Zet je antwoorden in een word bestand, dit bestand lever je hier in. 
 
DISTINCT
1. Met welke query kun je laten zien welke verschillende dieren er bestaan?
2. Met welke query kun je laten zien welke profession er zijn bij de NPC’s?
 
AND, OR and NOT
1. Met welke query kun je de creatures laten zien die voldoen aan ‘Killer Bee’ of ‘Orc’?
2. Met welke query kun je de dieren laten zien die voldoen aan snelheid 6 en verdediging 5?
3. Met welke query kun je alle dieren laten zien behalve de schapen?
4. Met welke query kun je het aantal dieren laten zien die voldoen aan ‘Wolf’ of ‘Bear’ of ‘Eagle’
5. Met welke query kun je de personen laten zien waarvoor geldt attack, defense en agility voor alle drie de waarde gelijk aan 10?
6. Met welke query kun je de steden laten zien die vallen in regio 1 of 2?
7. Met welke query kun je alle hero’s laten zien met intelligence anders dan 30 of 90?
 
MIN and MAX
1. Met welke query kun je zien welke minimale snelheid de dieren hebben?
2. Met welke query kun je zien wat de snelheid is van het snelste dier?
3. Met welke query kun je laten zien wat de minimale attack van een wapen is?
4. Met welke query kun je laten zien hoeveel het duurste wapen kost?
 
IN
1. Met welke query kun je de creatures laten zien die voldoen aan ‘Killer Bee’ of ‘Orc’?
2. Met welke query kun je het aantal dieren laten zien gesorteerd op alfabet die voldoen aan ‘Wolf’ of ‘Bear’ of ‘Eagle’
3. Met welke query kun je alle creatures laten zien behalve de ‘Killer Bee’ en de ‘Orc’?
4. Met welke query kun je alle namen van de steden laten zien die vallen in de regio South Groval of Nort Groval?
5. Met welke query kun je vraag 4 sorteren op alfabet?
6. Met welke query kun je bepalen hoeveel steden er vallen binnen de region South Groval of Nort Groval?
 
BETWEEN and SQL operators
1. Met welke query kun je de wapens laten zien met een prijs van 100 – 1000?
2. Met welke query kun je de wapens laten zien met een attack van 300 – 600?
3. Met welke query kun je het aantal dieren zien die een defense hebben van 7 – 9?
4. Met welke query kun je de personen laten zien die meer dan 1800 goud hebben?
5. Met welke query kun je de personen laten zien die meer dan 1850 goud hebben?
6. Met welke query kun je de personen laten zien die 1850 of meer goud hebben?
7. Met welke query kun je de wapens laten zien die minder dan 300 kosten?
 
LIKE
1. Met welke query kan je alle personen laten zien de beginnen met de letter B?
2. Met welke query kan je alle dieren laten zien waar de letter a in zit?
3. Met welke query kan je alle dieren laten zien waar achter de letter e een letter a in zit?
4. Met welke query kan je alle wapens laten zien die eindigen op de letter d?
 
TOP, LIMIT or ROWNUM
1. Met welke query kun je de eerste 10 personen laten zien
2. Met welke query kun je de 5 duurste wapens laten zien?
3. Met welke query kun je de beste 3 wapens laten zien die een attack hebben van 700 – 900?
* Combineren / Joins – optioneel
1. Met welke query vraag je de namen van de wezens op die gewond zijn?
2. Bij welke opdracht(en) krijg je geen geld?
3. Hoeveel steden zijn er in de regio Breach?
4. Met welke query kan je nagaan welke dieren zijn gevangen als huisdier?
5. Hoeveel opdrachten geven je meer dan 3000 ervaringspunten?
6. Met welke query kan je nagaan welke opdracht meer geld als ervaring uitgeeft?
7. Hoe heet het wapen van Bowser? 
8. Met welke query kun je bepalen welke tijger het snelst is?
9. In welke stad vind je de persoon Mukovo?
10. Welk persoon heeft meer dan 1 huisdier en welke huisdieren zijn dat?
11. Met welke query kom je erachter in welke stad de baas van de regio South Groval zit?

# J2F1BELP4L2 - Queries 3
RubyQuest - Vragen 3
Zet je antwoorden in een wordbestand. Lever dit wordbestand hier in.

Maak query's op de database met de juiste SQL statements: 

Voeg in de tabel animal een nieuw dier toe met de volgende gegevens: type = hond, speed en defense = 6 en loyalty en owner krijgen de waarde 0. Met welke query kun je het nieuwe dier toevoegen?
Met welke query kun je zien dat het dier is toegevoegd?
Wijzig de speed naar 7 en de defense naar 5 van de hond die je bij vraag 1 hebt toegevoegd. Met welke query kun je dit doen?
Met welke query kun je zien dat de gegevens bij vraag 3 zijn gewijzigd in de database?
Wijzig alle waarden van de hond die je hebt toegevoegd naar 0. Met welke query kun je dit doen?
Met welke query kun je zien dat de gegevens bij vraag 6 zijn gewijzigd in de database?
Verwijder de hond uit de tabel animal. Met welke query kun je dit doen?
Met welke query kun je zien dat de gegevens bij vraag 7 zijn verwijderd in de database?
Voeg 2 honden toe in de tabel animal waarbij voor beide honden alle velden op 0 staan. Met welke query kun je dit doen? Controleer ook of de 2 honden zijn toegevoegd.
Wijzig bij deze 2 honden de waarden speed en defense naar 6. Met welke query kun je dit doen? Controleer ook of de gegevens bij de 2 honden zijn toegevoegd.
Verwijder de 2 honden uit de tabel animal. Met welke query kun je dit doen? Controleer ook of beide honden zijn verwijderd.

# J2F1BELP4O1 - eindopdracht - SQLSchool queries
In deze opdracht ga je aan de slag met het schrijven van Queries in de tool SQLSchool. Mocht je niet weten hoe deze app werkt of waar je deze kan vinden, lees dan "SQLschool - uitleg" in itslearning. 

Kies in SQLschool in het uitklapmenu (vak 1) voor de database "Plant - A. Basis / operatoren" en schrijf de queries die het gevraagde resultaat teruggeven. Let hierbij op dat je in het uitklap menu (waar standaard "mssql" in staat) kiest voor mysql. Dit betekent dat we de queries gaan schrijven volgens de syntax van mysql.

Lever tevens het pdf bestand in van jouw persoonlijke statistieken (4e icoon linksbovenin - "PDF export" in vak 1). Hierin valt te zien hoeveel queries je correct hebt gemaakt. Het is niet belangrijk hoevaak je het hebt geprobeerd, dus als je 20 keer nodig had om het juiste antwoord te krijgen is dat prima. 