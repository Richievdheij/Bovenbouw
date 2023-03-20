personen = [
{
    "voornaam": "Piet",
    "achternaam": "Heijn",
    "nationaliteit": "Nederlandse",
    "leeftijd": 47,
    "gewicht": 86
 },
 {
    "voornaam": "Masud",
    "achternaam": "Mohammed",
    "nationaliteit": "Iraans",
    "leeftijd": 37,
    "gewicht": 79
 },
 {
    "voornaam": "Marie",
    "achternaam": "Visser",
    "nationaliteit": "Belgische",
    "leeftijd": 42,
    "gewicht": 69
 },
 {
    "voornaam": "Klaas",
    "achternaam": "Wever",
    "nationaliteit": "Nederlandse",
    "leeftijd": 73,
    "gewicht": 85
 },
 {
    "voornaam": "Bjorn",
    "achternaam": "Hakke",
    "nationaliteit": "Zweeds",
    "leeftijd": 18,
    "gewicht": 71
 },
 {
    "voornaam": "Jouke",
    "achternaam": "Dijkstra",
    "nationaliteit": "Fries",
    "leeftijd": 29,
    "gewicht": 82
 },
 {
    "voornaam": "Bo",
    "achternaam": "Wáng",
    "nationaliteit": "Chinees",
    "leeftijd": 38,
    "gewicht": 65
 }]
  personen.forEach(persoon => {
    let personenElement = document.getElementById('personen');
    personenElement.innerHTML += `
    <div id="persoon">
      <p> <b>Voornaam:</b> ${persoon.voornaam}</p>
      <p> <b>Achternaam:</b> ${persoon.achternaam}</p>
      <p> <b>Nationaliteit:</b> ${persoon.nationaliteit}</p>
      <p> <b>Leeftijd:</b> ${persoon.leeftijd}</p>
      <p> <b>Gewicht:</b> ${persoon.gewicht}</p>
    </div>
    `;
  });
