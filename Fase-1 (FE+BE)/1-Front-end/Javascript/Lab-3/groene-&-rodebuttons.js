// Maak een variabele aan om het aantal knoppen per rij op te slaan:
const buttonsPerRow = 5;

// Maak een variabele aan om het totale aantal knoppen te bepalen:
const totalButtons = 30;

// Maak een variabele aan om de kleur van de knoppen bij te houden:
let buttonColor = "green";

// Maak een functie aan om de kleur van de knoppen te veranderen wanneer erop wordt geklikt:
function changeColor() {
    if (buttonColor === "green") {
      this.style.backgroundColor = "red";
      buttonColor = "red";
    } else {
      this.style.backgroundColor = "green";
      buttonColor = "green";
    }
  }

  // Maak een loop aan om de knoppen te maken en toe te voegen aan de container div:
  const container = document.getElementById("container");

for (let i = 1; i <= totalButtons; i++) {
  const button = document.createElement("button");
  button.innerHTML = i;
  button.style.backgroundColor = buttonColor;
  button.addEventListener("click", changeColor);
  container.appendChild(button);

  // Voeg een linebreak toe na buttonsPerRow knoppen
  if (i % buttonsPerRow === 0) {
    const br = document.createElement("br");
    container.appendChild(br);
  }
}