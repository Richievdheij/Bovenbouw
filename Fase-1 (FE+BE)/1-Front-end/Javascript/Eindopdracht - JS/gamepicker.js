const games = [
    {
        "title": "CSGO",
        "price": 0.00,
        "genre": "FPS",
        "rating": 4,
    },
    {
        "title": "Dota 2",
        "price": 0.00,
        "genre": "MOBA",
        "rating": 3,
    },
    {
        "title": "Goose Goose Duck",
        "price": 4.99,
        "genre": "Action",
        "rating": 2,
    },
    {
        "title": "Apex Legends",
        "price": 0.00,
        "genre": "FPS",
        "rating": 4,
    },
    {
        "title": "PUBG",
        "price": 29.99,
        "genre": "FPS",
        "rating": 5,
    },
    {
        "title": "Lost Ark",
        "price": 49.99,
        "genre": "Action",
        "rating": 1,
    },
    {
        "title": "GTA V",
        "price": 29.99,
        "genre": "FPS",
        "rating": 3
    },
    {
        "title": "COD ®: Modern Warfare® II | Warzone™ 2.0",
        "price": 19.99,
        "genre": "FPS",
        "rating": 3,
    },
    {
        "title": "Team Fortress 2",
        "price": 0.00,
        "genre": "FPS",
        "rating": 5,
    },
    {
        "title": "Rust",
        "price": 39.99,
        "genre": "Action",
        "rating": 5,
    },
    {
        "title": "Unturned",
        "price": 0.00,
        "genre": "RPG",
        "rating": 1,
    },
    {
        "title": "ELDEN RING",
        "price": 59.99,
        "genre": "RPG",
        "rating": 5,
    },
    {
        "title": "ARK: Survival Evolved",
        "price": 10.00,
        "genre": "RPG",
        "rating": 1,
    },
    {
        "title": "War Thunder",
        "price": 0.00,
        "genre": "Simulation",
        "rating": 2,
    },
    {
        "title": "Sid Meier's Civilization VI",
        "price": 29.99,
        "genre": "Simulation",
        "rating": 3,
    },
    {
        "title": "Football Manager 2023",
        "price": 59.99,
        "genre": "Simulation",
        "rating": 3,
    },
    {
        "title": "Warframe",
        "price": 0.00,
        "genre": "Looter-shooter",
        "rating": 3,
    },
    {
        "title": "FIFA 23",
        "price": 59.99,
        "genre": "Sport",
        "rating": 1,
    },
    {
        "title": "Destiny 2",
        "price": 0.00,
        "genre": "FPS",
        "rating": 5,
    },
    {
        "title": "Red Dead Redemption 2",
        "price": 59.99,
        "genre": "RPG",
        "rating": 4,
    },
    {
        "title": "Tom Clancy's Rainbow Six Siege",
        "price": 19.99,
        "genre": "Simulation",
        "rating": 3,
    },
    {
        "title": "The Witcher 3: Wild Hunt",
        "price": 39.99,
        "genre": "RPG",
        "rating": 4,
    },
    {
        "title": "Terraria",
        "price": 9.99,
        "genre": "Sandbox",
        "rating": 2,
    },
    {
        "title": "Stardew Valley",
        "price": 14.99,
        "genre": "Sandbox",
        "rating": 1,
    },
    {
        "title": "Left 4 Dead 2",
        "price": 9.99,
        "genre": "FPS",
        "rating": 4,
    },
    {
        "title": "Don't Starve Together",
        "price": 5.09,
        "genre": "RPG",
        "rating": 3
    },
    {
        "title": "MIR4",
        "price": 19.99,
        "genre": "RPG",
        "rating": 3,
    },
    {
        "title": "PAYDAY 2",
        "price": 9.99,
        "genre": "Action",
        "rating": 2,
    },
    {
        "title": "Path of Exile",
        "price": 0.00,
        "genre": "RPG",
        "rating": 4,
    },
    {
        "title": "Project Zomboid",
        "price": 14.99,
        "genre": "Simulation",
        "rating": 4,
    },
    {
        "title": "Valheim",
        "price": 19.99,
        "genre": "Sandbox",
        "rating": 5,
    },
    {
        "title": "DayZ",
        "price": 44.99,
        "genre": "Simulation",
        "rating": 3,
    },
];

 // Variabelen voor filters
 let priceFilter = 0;
 let genreFilter = '';
 let ratingFilter = 0;
 
 // Functie om de games te filteren op basis van de geselecteerde filters
 function applyFilters() {
   priceFilter = parseFloat(document.getElementById('price-filter').value);
   genreFilter = document.getElementById('genre-filter').value;
   ratingFilter = parseInt(document.getElementById('rating-filter').value);
   generateGameList();
 }
 
 // Functie om de filters te resetten naar de standaardwaarden
 function clearFilters() {
   document.getElementById('price-filter').value = '';
   document.getElementById('genre-filter').value = '';
   document.getElementById('rating-filter').value = '';
   priceFilter = 0;
   genreFilter = '';
   ratingFilter = 0;
   generateGameList();
 }
 
 // Functie om de games weer te geven op basis van de toegepaste filters
 function generateGameList() {
   gameListContainer.innerHTML = '';
   const filteredGames = games.filter(game => {
     const meetsPriceFilter = game.price <= priceFilter || priceFilter === 0;
     const meetsGenreFilter = game.genre === genreFilter || genreFilter === '';
     const meetsRatingFilter = game.rating <= ratingFilter || ratingFilter === 0;
     return meetsPriceFilter && meetsGenreFilter && meetsRatingFilter;
   });
   filteredGames.forEach(game => {
     // Code om de games weer te geven
   });
 }

  const catalogBtn = document.getElementById('catalog-btn');
  const gameListContainer = document.getElementById('game-list');
  const cartContainer = document.getElementById('cart');
  const cartItemsElement = document.getElementById('cart-items');
  const totalPriceElement = document.getElementById('total-price');
  let cartItems = [];
  
  function generateGameList() {
    gameListContainer.innerHTML = '';
    games.forEach(game => {
      const gameElement = document.createElement('div');
      gameElement.classList.add('game');
      gameElement.innerHTML = `
        <h3>${game.title}</h3>
        <p>Prijs: €${game.price.toFixed(2)}</p>
        <p>Genre: ${game.genre}</p>
        <p>Rating: ${game.rating}</p>
        <button class="add-to-cart-btn" onclick="addToCart(${games.indexOf(game)})">Toevoegen aan winkelmandje</button>
      `;
      gameListContainer.appendChild(gameElement);
    });
  }
  
  function addToCart(index) {
    const selectedGame = games[index];
    cartItems.push(selectedGame);
    updateCart();
    alert(`Het spel "${selectedGame.title}" is toegevoegd aan het winkelmandje.`);
  }
  
  function removeFromCart(index) {
    cartItems.splice(index, 1);
    updateCart();
  }
  
  function updateCart() {
    cartItemsElement.innerHTML = '';
    let totalPrice = 0;
    cartItems.forEach(game => {
      const cartItem = document.createElement('div');
      cartItem.classList.add('cart-item');
      cartItem.innerHTML = `
        <h3>${game.title}</h3>
        <p>Prijs: €${game.price.toFixed(2)}</p>
        <p>Genre: ${game.genre}</p>
        <p>Rating: ${game.rating}</p>
        <button class="remove-from-cart-btn" onclick="removeFromCart(${cartItems.indexOf(game)})">Verwijderen</button>
      `;
      cartItemsElement.appendChild(cartItem);
      totalPrice += game.price;
    });
    totalPriceElement.textContent = `Totaalprijs: €${totalPrice.toFixed(2)}`;
  }
  
  catalogBtn.addEventListener('click', () => {
    cartContainer.style.display = 'block';
  });
  
  generateGameList();