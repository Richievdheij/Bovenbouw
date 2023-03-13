// Create an array to keep track of the amount of flavors
const flavours = ["Aardbei", "Chocolade", "Vanille"];

// Create an array to keep track of the number of ice creams, cones or bowls etc. and prices.
const items = [
{name: 'bolletje', price: 0.95, amount: 0 },
{name: 'liter', price: 9.8, amount: 0 },
{name: 'hoorntje', price: 1.25, amount: 0 },
{name: 'bakje', price: 0.75, amount: 0 }
];

// Create an array to keep track of the amount of toppings and their prices
const toppings = [
  {name: "geen", price: 0, amount: 0},
  {name: "slagroom", price: 0.5, amount: 0},
  {name: "sprinkels", price: 0.3, amount: 0},
  {name: "caramel_saus", price: 0.6, amount: 0,
    container: [
      {name: "hoorntje", price: 0.6, amount: 0},
      {name: "bakje", price: 0.9, amount: 0},
    ],
  },
];

// Get the role
function userRole() {
    let roleChoosing = true; // If the user must choose a valid answer

    const roles = ["particulier", "zakelijk"]; // All the roles
    
    let question = "Bent u "; // Beginning of the question

    // Add the roles to the question
    roles.forEach((value, num) => {
        num += 1;
        question += `${num}) ${value}`;

        // If it is the last role
        if (num === ( roles.length - 1)) {
            question += " of ";
        }
    });
    question += "? ";

    // Loop the question if the user did not choose a valid option
    while (roleChoosing) {
        const roleNum = prompt(question);

        try {
            const parsedRoleNum = parseInt(roleNum); // Check if it's a number without decimal

            // Get the role with the number the user chose
            if (parsedRoleNum > 0 && parsedRoleNum <= roles.length) {
                const role = roles[parsedRoleNum - 1];
                
                roleChoosing = false; // Stops the question
                
                return role;
            } else {
                alert("Ongeldige optie");
            }

        } catch (error) {
            alert("Ongeldige optie");
        }
    }
}

// Get the amount of ice litres / scoops
function userIce(role) {
    let iceChoosing = true; // If the user must choose a valid answer

    while (iceChoosing) {
        // Makes / ask the question 
        const option = role === "zakelijk" ? "liter" : "bolletjes";
        const amount = prompt(`Hoeveel ${option} wilt u?`);

        try {
            const parsedAmount = parseInt(amount); // Check if it's a number without decimal
            
            if (parsedAmount > 8 && role !== "zakelijk") {
                alert("Sorry, zulke grote bakken hebben we niet");
            } else {
                iceChoosing = false; // Stops the question
                
                return parsedAmount;
            }

        } catch (error) {
            alert("Ongeldige optie");
        }
    }
}

// Get the scoop
function scoopFlavours(scoops) {
    const flavours = ["Aardbei", "Chocolada", "Vanille"]; // All the flavours

// Get the type of ice cream
function user_flavour() {
let flavour_choosing = true; // If the user must choose a valid answer
let question = "Welke smaak wilt u hebben? ";

// Add the flavours to the question
for (let i = 0; i < flavours.length; i++) {
    question += (i + 1) + ") " + flavours[i];

    // If it is the second last flavour
    if (i === flavours.length - 2) {
        question += " of ";
    }
}

question += "? ";

// Loop the question if the user did not choose a valid option
while (flavour_choosing) {
    let flavour_num = prompt(question);

    try {
        flavour_num = parseInt(flavour_num); // Check if its a number without decimal

        // Get the flavour with the number the user chose
        if (flavour_num > 0 && flavour_num <= flavours.length) {
            let flavour_index = flavour_num - 1;
            let flavour = flavours[flavour_index]; 

            flavour_choosing = false; // Stops the question

            return flavour;
        }
        else {
            alert(error_message);
        }
    }
    catch(error) {
        alert(error_message);
    }
}
}
}