var arrayEen = [1,2,3,4,5,6,7,8,9,10];
var arrayTwee = [2,4,6,8,10,12,14,16,18,20];

// Functie voor optellen
function optellen(arr1, arr2) {
  var resultaat = [];
  for (var i = 0; i < arr1.length; i++) {
    resultaat.push(arr1[i] + arr2[i]);
  }
  document.write("<h2>Optellen van de twee arrays:</h2>");
  document.write(resultaat + "<br>");
}

// Functie voor aftrekken
function aftrekken(arr1, arr2) {
  var resultaat = [];
  for (var i = 0; i < arr1.length; i++) {
    resultaat.push(arr2[i] - arr1[i]);
  }
  document.write("<h2>Aftrekken van de twee arrays:</h2>");
  document.write(resultaat + "<br>");
}

// Functie voor vermenigvuldigen
function vermenigvuldigen(arr1, arr2) {
  var resultaat = [];
  for (var i = 0; i < arr1.length; i++) {
    resultaat.push(arr1[i] * arr2[i]);
  }
  document.write("<h2>Vermenigvuldigen van de twee arrays:</h2>");
  document.write(resultaat + "<br>");
}

// Functie voor delen
function delen(arr1, arr2) {
  var resultaat = [];
  for (var i = 0; i < arr1.length; i++) {
    resultaat.push(arr1[i] / arr2[i]);
  }
  document.write("<h2>Delen van de twee arrays:</h2>");
  document.write(resultaat + "<br>");
}

// Uitvoeren van de functies
optellen(arrayEen, arrayTwee);
aftrekken(arrayEen, arrayTwee);
vermenigvuldigen(arrayEen, arrayTwee);
delen(arrayEen, arrayTwee);
