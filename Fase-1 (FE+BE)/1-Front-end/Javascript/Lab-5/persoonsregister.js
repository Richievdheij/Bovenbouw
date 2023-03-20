// Haal de gegevens op uit het JSON-bestand
const persoon = {
  "voornaam": "Piet",
  "achternaam": "Heijn",
  "nationaliteit": "Nederlandse",
  "leeftijd": 47,
  "gewicht": 86
};

// Zoek de HTML-elementen op basis van hun ID
const voornaamElement = document.getElementById('voornaam');
const achternaamElement = document.getElementById('achternaam');
const nationaliteitElement = document.getElementById('nationaliteit');
const leeftijdElement = document.getElementById('leeftijd');
const gewichtElement = document.getElementById('gewicht');

// Vul de HTML-elementen met de gegevens van de persoon
voornaamElement.innerText = persoon.voornaam;
achternaamElement.innerText = persoon.achternaam;
nationaliteitElement.innerText = persoon.nationaliteit;
leeftijdElement.innerText = persoon.leeftijd;
gewichtElement.innerText = persoon.gewicht;
