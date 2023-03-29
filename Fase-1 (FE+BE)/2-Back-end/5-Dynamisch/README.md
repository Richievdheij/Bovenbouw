# J2F1BELP5L1 - Databank aanmaken
Let op: je hebt voor deze lab de uitwerking van de eindopdracht van leerpad Back End 3 – Templating nodig.
Let op: je hebt de uitwerking van deze lab nodig voor Lab 2 (J2F1BELP5L2). Maak deze dus goed!
 
In deze lab ga je content in een database zetten via het PHPMyAdmin dashboard of een 3rd party tool of sql-CLI. 
Volg de volgende stappen om de database aan te maken.
1. Navigeer naar je PHPMyAdmin (localhost/phpmyadmin of localhost:8080/phpmyadmin). Dashboard en maak hier een nieuwe database aan, noem deze database "databank_php". 
2. Maak in de zojuist aangemaakte database een tabel aan met de naam "onderwerpen"
3. voeg in de tabel "onderwerpen" de volgende kolommen toe:
    * id (primary key, integer , auto_increment)
    * name (not null, varchar 255)
    * description (not null, text)
    * image (not null, varchar 255)
 
De bedoeling is dat jij nu de verschillende "onderwerpen" (zoals behandeld in de eindopdracht van leerpad “Back End 3 – Templating”) aan gaat maken in de database, je mag dit doen via een sql query of via de interface van phpmyadmin. 
Bij elk "onderwerp" benoem je ten minste de titel, de description en een afbeelding (net als bij de eindopdracht van leerpad “Back End 3 – Templating”.)
* De id's worden automatisch aangemaakt. (zorg wel dat deze begint bij 1). 
* De ‘name’ beschrijft de naam van het onderwerp. 
* Bij de ‘description’ van elk onderwerp gebruik je de geschreven text uit de eindopdracht van leerpad “Back End 3 – Templating”. kijk dus nog eens terug naar de eindopdracht. 
* De ‘image’ is een string met de bestandsnaam van een afbeelding in je images map van je project. bijvoorbeeld gtav.png.
 
Behandel ook hier weer dezelfde onderwerpen als je hebt gedaan in de uitwerking van de eindopdracht van leerpad “Back End 3 – Templating”.

# J2F1BELP5L2 - Content uit je database
Dynamische content op je pagina

Let op: je hebt voor deze opdracht de uitwerking van "J2F1BELP3O1 - Eindopdracht – Includes are Required” & "J2F1BELP5L1 - Databank aanmaken" nodig.
 
In deze lab ga je de aangemaakte database van J2F1BELP5L1 gebruiken om een website met dynamische content te maken. 
Je gebruikt de aangeleverde zip om de opdracht te maken. Hierin staat in de bestanden extra uitleg in de vorm van comments. 
 
De pagina bestaat uit de volgende onderdelen op de volgende volgorde:
1. Een header + navigatiemenu
2. Een stuk waarin de content van de pagina te zien is.
3. Een footer met je naam en de datum
 
De bedoeling is om je index.php zo op te bouwen dat deze de gemaakte bestanden (header en footer) laat zien op je pagina. Het voordeel van je pagina opdelen in verschillende stukken is dat je bepaalde onderdelen (het menu bijvoorbeeld) maar 1 keer hoeft te typen.
Zorg dat je header en footer de juiste inhoud krijgen. Je header bestaat ten minste uit een menu. In de footer staat weer je naam en de actuele datum. 
 
Tussen de header en de footer, moet de content uit de database weergegeven worden.
Het is aan jouw de taak om te bepalen wanneer welke content opgehaald moet worden, en deze weer te geven op de pagina. Je kunt hier weer goed gebruik maken van get_parameters.
 
Technische eisen:
* De enige pagina die je aanroept vanuit je menu is je index.php. Hierbinnen worden de header en de footer ingeladen. 
* In je menu geef je een URL parameter mee (kijk hiervoor naar get_parameters/URL_parameters in php -> https://www.w3schools.com/php/php_superglobals_get.asp). Deze parameter bepaald welke inhoud je in je index.php in moet laden. 
* Je index.php valideert als correcte HTML (gebruik hiervoor de broncode uit je browser, aangezien php niet als valide html wordt gezien door de validator – https://validator.w3.org/#validate_by_input ). 
* Je maakt gebruik van Includes om je header en footer in te laden.

# J2F1BELP5O1 - Dynamische Applicatie
Je gaat een dynamische applicatie bouwen die bestaat uit 2 verschillende pagina's, waarbij de content bestaat uit de aangeleverde tabel en afbeeldingen. De vormgeving krijg je, je moet het alleen nog dynamisch maken.
 
Functionele eisen:
 
Algemeen
1. Je gebruikt de aangeleverde database/tabel structuur (zie het bijgeleverde characters.sql)
2. Je maakt gebruik van github om versie van je code bij te houden
3. Je checkt meerdere malen per dag goed omschreven commits in
 
Pagina 1 (index) bestaat uit: 
1. Het totaal aantal characters moet zichtbaar zijn op de plaats van [X]. 
2. Een overzicht van alle characters (gesorteerd op naam) met zijn/haar naam, levenskracht, aanvalskracht en verdediging en een link naar hun detail pagina (hiervoor kun je URL parameters gebruiken)
 
Pagina 2 (character) bestaat uit: 
1. De naam van karakter.
2. Zijn/haar avatar.
3. Al zijn gegevens uit de database.
4. De kleur die bij hem/haar in de database staat.
5. Een knop/link om terug te gaan naar het overzicht.
Technische eisen:
1. Alle pagina's zijn valide HTML (W3Cvalidator).
2. Code voor karakterkaarten/detailpagina's mag je niet meer dan 1 keer hebben geschreven (je gaat dit dus dynamisch hergebruiken).
3. Je database connectie is veilig en je maakt gebruik van PDO!.
4. Als je een character in de database toevoegd moet alles blijven werken.
5. Onderaan alle paginas staat je naam een copyright.
6. Maak gebruik van includes en/of requires.
7. De applicatie moet blijven werken als er 1 of meerdere characters in de database word toegevoegd en als er 1 of meerdere verwijderd worden.
