var arrayEen = [1,2,3,4,5,6,7,8,9,10];
var arrayTwee = [2,4,6,8,10,12,14,16,18,20];

document.write("<h1>Array operatoren</h1>");
document.write(arrayEen.join(", "));

function optellen(arrayEen, arrayTwee) {
    var result = [];
    for (var i = 0; i < arrayEen.length; i++) {
      result.push(arrayEen[i] + arrayTwee[i]);
    }
    console.log(result);
  }
  
  function aftrekken(arrayEen, arrayTwee) {
    var result = [];
    for (var i = 0; i < arrayEen.length; i++) {
      result.push(arrayEen[i] - arrayTwee[i]);
    }
    console.log(result);
  }
  
  function vermenigvuldigen(arrayEen, arrayTwee) {
    var result = [];
    for (var i = 0; i < arrayEen.length; i++) {
      result.push(arrayEen[i] * arrayTwee[i]);
    }
    console.log(result);
  }
  
  function delen(arrayEen, arrayTwee) {
    var result = [];
    for (var i = 0; i < arrayEen.length; i++) {
      result.push(arrayEen[i] / arrayTwee[i]);
    }
    console.log(result);
  }
  
