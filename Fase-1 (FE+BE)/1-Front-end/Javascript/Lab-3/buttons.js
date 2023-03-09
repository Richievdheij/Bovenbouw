//maak het panel met buttons
var panel = document.createElement("div");
panel.setAttribute("id", "panel");
panel.style.display = "flex";
panel.style.justifyContent = "center";
panel.style.marginTop = "50px";
panel.style.marginBottom = "50px";

// maak de groene button
var greenBtn = document.createElement("button");
greenBtn.innerHTML = "Button 1";
greenBtn.style.backgroundColor = "green";
greenBtn.style.color = "white";
greenBtn.style.padding = "10px 20px";
greenBtn.style.marginRight = "10px";

// voeg event listener toe aan groene button om achtergrondkleur te veranderen
greenBtn.addEventListener("click", function() {
document.body.style.backgroundColor = "green";
});

// maak de rode button
var redBtn = document.createElement("button");
redBtn.innerHTML = "Button 2";
redBtn.style.backgroundColor = "red";
redBtn.style.color = "white";
redBtn.style.padding = "10px 20px";
redBtn.style.marginRight = "10px";

// voeg event listener toe aan rode button om achtergrondkleur te veranderen
redBtn.addEventListener("click", function() {
document.body.style.backgroundColor = "red";
});

// maak de blauwe button
var blueBtn = document.createElement("button");
blueBtn.innerHTML = "Button 3";
blueBtn.style.backgroundColor = "blue";
blueBtn.style.color = "white";
blueBtn.style.padding = "10px 20px";

// voeg event listener toe aan blauwe button om achtergrondkleur te veranderen
blueBtn.addEventListener("click", function() {
document.body.style.backgroundColor = "blue";
});

// voeg buttons toe aan panel
panel.appendChild(greenBtn);
panel.appendChild(redBtn);
panel.appendChild(blueBtn);

// voeg panel toe aan container
var container = document.getElementById("container");
container.appendChild(panel);

// verander achtergrondkleur van de pagina naar grijs bij opstarten
document.body.style.backgroundColor = "gray";
