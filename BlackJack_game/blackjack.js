let cards = [];
let sum = 0;
let message = "";
let isAlive = false;
let hasBlackjack = false;
let mesEl = document.getElementById("mes-el");
const sumEl = document.getElementById("sum-el");
const cardEl = document.getElementById("cards-el");
const newGame = document.getElementById("start-game-btn");
const getName = document.getElementById("new-player");

function startGame() {
    isAlive = true;
    let firstcard = getRandomCard();
    let secondcard = getRandomCard();
    cards = [firstcard, secondcard];
    sum = firstcard + secondcard;
    newGame.textContent = "NEW GAME";
    getName.textContent = "Player-1";
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
    for (let i = 0; i < cards.length; i++) {
        cardEl.textContent += cards[i] + " ";
    }

    sumEl.textContent = "Sum: " + sum;
    if (sum < 21) {
        message = "Do you want to draw a new card?";
        newGame.textContent = "NEW GAME";
    } if (sum == 21) {
        newGame.textContent = "START NEW GAME";
        hasBlackjack = true;
        message = "Yeh! you got blackjack";
    } else if (sum > 21) {
        newGame.textContent = "START NEW GAME";
        isAlive = false;
        message = "You have lost";
    }
    mesEl.textContent = message;
}

function newCard() {
    if (isAlive == true && hasBlackjack == false) {
        let newCard = getRandomCard();
        cards.push(newCard);
        sum += newCard;
        newGame.textContent = "START NEW GAME";
        renderGame()
    }
}