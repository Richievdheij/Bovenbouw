# J2F1BELP3L1 - Includes en Requires - onderdeel 1
Je gaat in deze lab kennis maken met de werking van Require en Include. Volg de volgende stapppen nauwkeurig:

- Maak in een map in je serverfolder (www of htdocs), een php bestand aan met de naam variables.php waarin jij een variabele aanmaakt met daarin je voor en achternaam. 
- Maak in diezelfde map een index.php die dit bestand "gebruikt" (require)
- zorg ervoor dat de uitkomst van de variabele uit je variables.php in je index.php op het scherm komt. 

# J2F1BELP3L1 - Includes en Requires - onderdeel 2
Volg dezelfde stappen als hierboven, echter maak nu in plaats van een variabele met je naam en achternaam, een variabele met een lijst met 3 fruitsoorten. 

Zorg in je index.php dat de 3 fruitsoorten op het scherm komen

# J2F1BELP3L1 - Includes en Requires - onderdeel 3
Je gaat nu leren om stukken code te includen. 

Volg de volgende stapppen nauwkeurig:

- Maak in een map in je serverfolder, een php bestand aan met de naam content.php waarin jij een variabele aanmaakt met daarin je voor en achternaam. 
- Maak in diezelfe map een index.php
- Vul de index.php met een correcte HTML5 structuur.
- Zorg ervoor dat in je content.php 1 afbeelding (naar keuze) komt, met daarnaast een paragraaf aan lorem ipsum text.
- Zorg er nu voor dat de content vanuit content.php, op de index.php pagina weergegeven wordt. 

# J2F1BELP3O1 - Eindopdracht - Includes are Required
Let op: je hebt deze eindopdracht nodig voor het leerpad Back End 5 – Dynamische pagina. Maak deze dus goed! 

Bekijk goed de structuur in het aangeleverde zipje als je niet direct uit de teksts komt. 

In deze eindopdracht ga je een standaard paginaopbouw maken waarbij we verschillende content inladen vanuit verschillende bestanden. 
De paginaopbouw van je index.php is alsvolgt:

- Header (met afbeelding en menu). 
- Een content pagina (deze verschilt per onderwerp)
- Een footer met je naam en de actuele datum
 
De bedoeling is dat jij nu verschilllende inhoudspagina's gaat maken waarin jij verschillende onderwerpen behandeld.
Bij elk onderwerp benoem je ten minste de titel, de description en gebruik je een afbeelding.
De description zijn ten minste 200 zelfgeschreven woorden over het specifieke onderwerp. 

Behandel ten minste 4 onderwerpen die je aanspreken (denk aan een sport die je beoefent, een vrijetijdsbesteding, of 4 games die je graag speelt). 

Je krijgt een structuur aangeleverd (lab2_includes.zip), ga deze gebruiken om je opdracht uit te werken. 

Technische eisen:
- De enige pagina die je aanroept vanuit je menu is je index.php. Hierbinnen worden de header, de footer en de inhoud ingeladen. 
- In je menu geef je een URL parameter mee (kijk hiervoor naar get_parameters/URL_parameters in php -> https://www.w3schools.com/php/php_superglobals_get.asp). Deze parameter bepaald welke inhoud je in je index.php in moet laden. 
- Je index.php valideert als correcte HTML (gebruik hiervoor de broncode uit je browser, aangezien php niet als valide html wordt gezien door de validator https://validator.w3.org/#validate_by_input ). 
- Je maakt gebruik van Includes om je title, footer en gekozen content in te laden. 

Bronnen:
-get_parameters: https://www.w3schools.com/php/php_superglobals_get.asp
