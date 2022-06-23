let cards = [];
let sum = 0;
let message = "";
let isAlive = false;
let hasBlackjack = false;
let mesEl = document.getElementById("mes-el");
let sumEl = document.getElementById("sum-el");
let cardEl = document.getElementById("cards-el");
let newGame = document.getElementById("startGameBtn");
let getCard = document.getElementById("get-card-btn");

getCard.style.display = "none";

function startGame() {
    isAlive = true;
    let firstcard = getRandomCard();
    let secondcard = getRandomCard();
    cards = [firstcard, secondcard];
    sum = firstcard + secondcard;
    newGame.textContent = "NEW GAME";
    renderGame();
}

function getRandomCard() {
    let randomcard = Math.floor(Math.random() * 13) + 1;
    if (randomcard === 1) {
        return 11;
    } else if (randomcard > 10) {
        return 10;
    } else
        return randomcard;
}

function renderGame() {

    cardEl.textContent = "Cards: ";
    for (let i = 0; i < cards.length; ++i) {
        cardEl.textContent += cards[i] + " + ";
    }

    sumEl.textContent = "TOTAL SCORE: " + sum;
    if (sum <= 20) {
        isAlive = true;
        message = "Do you want to draw a new card?";
        newGame.textContent = "NEW fdfv GAME";
        newGame.style.display = "none";
        getCard.style.display = "block";

    } else if (sum === 21) {
        isAlive = false;
        hasBlackjack = true;
        message = "Yeh! you got blackjack";
        newGame.style.display = "block";
        getCard.style.display = "none";

    } else if (sum > 21) {
        isAlive = false;
        hasBlackjack = false;
        message = "You have lost";
        newGame.style.display = "block";
        getCard.style.display = "none";

    }
    mesEl.textContent = message;
}

function newCard() {
    if (isAlive === true && hasBlackjack === false) {
        let newCard = getRandomCard();
        cards.push(newCard);
        sum += newCard;
        newGame.textContent = "START NEW GAME";
        renderGame();
    }
}
