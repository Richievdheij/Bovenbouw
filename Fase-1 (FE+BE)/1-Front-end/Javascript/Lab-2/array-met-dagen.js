var daysOfWeek = ["Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"];

document.write("<h2>Alle dagen van de week zijn:</h2>");
document.write(daysOfWeek.join(", "));

document.write("<h2>De werkdagen zijn:</h2>");
document.write(daysOfWeek.slice(0, 5).join(", "));

document.write("<h2>De weekenddagen zijn:</h2>");
document.write(daysOfWeek.slice(5, 7).join(", "));

document.write("<h2>Alle dagen van de week in omgekeerde volgorde zijn:</h2>");
document.write(daysOfWeek.reverse().join(", "));

document.write("<h2>De werkdagen in omgekeerde volgorde zijn:</h2>");
document.write(daysOfWeek.slice(2, 7).reverse().join(", "));

document.write("<h2>De weekenddagen in omgekeerde volgorde zijn:</h2>");
document.write(daysOfWeek.slice(5).reverse().join(", "));