// Haal de gegevens op uit het JSON-bestand
const persoon = {
  "voornaam": "Piet",
  "achternaam": "Heijn",
  "nationaliteit": "Nederlandse",
  "leeftijd": 47,
  "gewicht": 86
};

// Haal de gegevens op uit het JSON-bestand
const persoon2 = {
  "voornaam": "Masud",
  "achternaam": "Mohammed",
  "nationaliteit": "Iraans",
  "leeftijd": 37,
  "gewicht": 79
};
const persoon = [
{voornaam: 'Piet', 'Masud'},
{achternaam: 'Heijn', 'Mohammed'},
{nationaliteit: 'Nederlandse', 'Iraans'},
{leeftijd: '47', '37'},
{gewicht: '86', '79'}
];


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
