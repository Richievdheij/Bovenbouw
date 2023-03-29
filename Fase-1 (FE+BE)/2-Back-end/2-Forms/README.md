# J2F1BELP2L1 - HTML Formulier
Maak een HTML pagina aan met de naam welcome.html. Voeg op deze pagina een formulier toe waarin de volgende velden zitten:

- Naam
- Email
 
Zorg met CSS ervoor dat de lay-out van het formulier er netjes uitziet.

# J2F1BELP2L2 - HTML formulier verwerken - GET
Maak een php pagina aan met de naam welcome.php die de ingevulde gegevens van het formulier bij lab 1 verwerkt via een GET.

Het resultaat wat je op de welcome.php ziet is als volgt:
- Als h1 kopje "De ingevulde gegevens zijn:"
- Daaronder "Naam :" met daarachter de naam die ingevuld is in de input bij naam
- Daaronder "Emailadres :" met daarachter het e-mailadres die ingevuld is in de input bij email
 

Vragen:
- Wat valt je op bij de GET methode in de URL?
- Wanneer ga je de GET methode beslist niet gebruiken?
- Wanneer zou de GET methode handig zijn om wel te gebruiken?

# J2F1BELP2L2 - HTML formulier verwerken - POST
verwerken via POST
Pas de code van de vorige opdracht zo aan dat het formulier wordt verwerkt via een POST.

Vragen:

- Wanneer ga je een POST gebruiken om formuliergegevens te verwerken?
- Is er een reden te noemen wanneer je POST bewust niet gebruikt?

# J2F1BELP2L3 - HTML formulier met validatie - onderdeel 1
Bij lab 1 en 2 heb je twee pagina's gebruikt: 1 pagina om je formulier in te vullen en een 2e pagina waarin het resultaat van het ingevulde formulier wordt getoond. Bouw deze 2 pagina's om naar 1 php pagina waarin je het formulier kunt invullen en waarin ook de verwerking van het formulier plaats vindt. De werking blijft verder hetzelfde als jij bij lab2 hebt gemaakt.

Je zult hier dus een combinatie van <?php ?> tags en html moeten gebruiken

# J2F1BELP2L3 - HTML formulier met validatie - onderdeel 2
Voeg bij het veld naam het volgende in: <script>alert('hoi')</script>. Wat gebeurd er?
Zorg ervoor dat je het formulier veilig maakt zodat je bijzonder invoer correct afvangt!
Op deze wijze dient een script alert afgevangen te worden:

# J2F1BELP2L3 - HTML formulier met validatie - onderdeel 3

Het veld naam en email dienen beiden verplichte velden te worden. Zorg ervoor dat je aan de server-side de verplichte velden controleert en passende feedback aan de gebruiker terug geeft als deze velden niet zijn ingevuld. Het formulier mag niet verwerkt worden als de verplichte velden niet zijn ingevuld.

Als het formulier correct is ingevuld dan niet meer het formulier tonen, maar dan alleen het resultaat:

# J2F1BELP2O1 - eindopdracht - Mad libs
Tijdens deze opdracht ga je een dynamische web applicatie ontwikkelen waar de bezoeker een aantal woorden moet invullen die vervolgens in een grappige tekst worden geplaatst. Hierbij maak je gebruik van HTML, CSS en PHP.

De opdracht bestaat uit twee type eisen, functionele eisen en technische eisen. Je moet aan alle deze eisen voldoen!

Functionele eisen
Het spel moet aan de volgende functionele eisen voldoen:
- De pagina Er heerst paniek... bevat een formulier met de volgende velden (zie afbeelding formulier_paniek)
- Na verzenden van het formulier Er heerst paniek... worden de ingevulde gegevens als volgt gebruikt: (zie afbeelding resultaat_paniek)

- De pagina Onkunde bevat een formulier met de volgende velden: (zie afbeelding formulier_onkunde)
- Na verzenden van het formulier Onkunde worden de ingevulde gegevens als volgt gebruikt: (zie afbeelding resultaat_onkunde)
Technische eisen

- De web applicatie bestaat uit pagina's opgebouwd uit correct HTML en CSS
- Door gebruik te maken van html formulieren wordt de gebruiker om gegevens gevraagd
- Door gebruik te maken van php worden de post gegevens uitgelezen na verzenden van de html formulieren.
- Door gebruik te maken van php worden de uitgelezen formulier gegevens in een grappige tekst geplaatst.
- Alle velden zijn verplicht en er dient server-side validatie plaats te vinden
- Ook validatie van formulieren dient goed te gebeuren zoals o.a. correct afvangen van invoer van script tag en/of html tags
- Er is een menu aanwezig met links naar "Er heerst paniek..." en "Onkunde"
- In de footer staat je naam met copyright teken en jaar wanneer je de opdracht hebt gemaakt