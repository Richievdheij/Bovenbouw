// var result = document.getElementById("h3");


// function optellen(array1, array2) {
//   document.getElementById("h3").innerHTML = "hallo";
//     let resultaat = [];
//     for (let i = 0; i < array1.length; i++) {
//         resultaat.push(array1[i] + array2[i]);
//     }
//     result.innerHTML = resultaat;
// }

// function aftrekken(array1, array2) {
//     let resultaat = [];
//     for (let i = 0; i < array1.length; i++) {
//         resultaat.push(array1[i] - array2[i]);
//     }
//     result.innerHTML = resultaat;
// }

// function vermenigvuldigen(array1, array2) {
//     let resultaat = [];
//     for (let i = 0; i < array1.length; i++) {
//         resultaat.push(array1[i] * array2[i]);
//     }
//     result.innerHTML = resultaat;
// }

// function delen(array1, array2) {
//     let resultaat = [];
//     for (let i = 0; i < array1.length; i++) {
//         resultaat.push(array1[i] / array2[i]);
//     }
//     result.innerHTML = resultaat;
// }

// console.log("Optellen:", optellen(arrayEen, arrayTwee));
// console.log("Aftrekken:", aftrekken(arrayEen, arrayTwee));
// console.log("Vermenigvuldigen:", vermenigvuldigen(arrayEen, arrayTwee));
// console.log("Delen:", delen(arrayEen, arrayTwee));

var rekenOptellen = document.getElementById("optellen").innerText = "hallo wereld";

document.getElementById("optellen").innerText = "hallo wereld";

function optellen(array1, array2) {
    let resultaat = [];
    for (let i = 0; i < array1.length; i++) {
        resultaat.push(array1[i] + array2[i]);
    }
    result.innerHTML = resultaat;
}

function aftrekken(array1, array2) {
    let resultaat = [];
    for (let i = 0; i < array1.length; i++) {
        resultaat.push(array1[i] - array2[i]);
    }
    result.innerHTML = resultaat;
}

function vermenigvuldigen(array1, array2) {
    let resultaat = [];
    for (let i = 0; i < array1.length; i++) {
        resultaat.push(array1[i] * array2[i]);
    }
    result.innerHTML = resultaat;
}

function delen(array1, array2) {
    let resultaat = [];
    for (let i = 0; i < array1.length; i++) {
        resultaat.push(array1[i] / array2[i]);
    }
    result.innerHTML = resultaat;
}

console.log("Optellen:", optellen(arrayEen, arrayTwee));
console.log("Aftrekken:", aftrekken(arrayEen, arrayTwee));
console.log("Vermenigvuldigen:", vermenigvuldigen(arrayEen, arrayTwee));
console.log("Delen:", delen(arrayEen, arrayTwee));