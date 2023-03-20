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
// Maak een functie die haalt op de nummers van mijn inputvelden en zet deze in een array.
function getNumbers() {
   let numbers = [];
   let number1 = document.getElementById('number1').value;
   let number2 = document.getElementById('number2').value;
   numbers.push(number1, number2);
}

function getPeople(){
   let requiredAge = document.getElementById('requiredAge').value; // input ding
   personen.forEach(persoon => {
      if (persoon.leeftijd > requiredAge)
         {
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
         };
      });
   }


