const hoeveelNamen = parseInt(prompt("Hoeveel namen wilt u in de array stoppen? (minimaal 3)"));

if (hoeveelNamen >= 3) {
  let naam = [];

  for (let i = 0; i < hoeveelNamen; i++) {
    naam[i] = prompt(`Voer naam ${i + 1} in:`);
  }

  document.write("<h2>De ingevoerde namen in de array zijn:</h2>");
  document.write(naam.join(", "));

  document.write("<h2>De ingevoerde namen in de array in omgekeerde volgorde zijn:</h2>");
  document.write(naam.reverse().join(", ")); }
    else {
  alert("U moet minimaal 3 namen invoeren!");
}