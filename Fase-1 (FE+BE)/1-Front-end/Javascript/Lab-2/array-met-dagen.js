var daysOfWeek = ["Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"];

document.write("<h2>Alle dagen van de week zijn:</h2>");
document.write(daysOfWeek.join(", "));

document.write("<h2>De werkdagen zijn:</h2>");
document.write(daysOfWeek.slice(0, 5).join(", "));

console.log(daysOfWeek.slice(0, 5));