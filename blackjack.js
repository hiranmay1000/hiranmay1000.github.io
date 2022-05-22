let firstCard = 5;
let secondCard = 7;
let cards = [firstCard, secondCard];
let sum = firstCard + secondCard;
let hasblackjack = false;
let isAlive = true;
let message = "";
let mesEl = document.getElementById("mes-el");
let sumEl = document.getElementById("sum-el");
let cardEl = document.getElementById("cards-el");

function startGame() {
    renderGame();
}

function renderGame() {

    cardEl.textContent = "Cards: ";
    for (let i = 0; i < cards.length; i++) {
        cardEl.textContent += cards[i] + " ";
    }

    sumEl.textContent = "Sum: " + sum;

    if (sum <= 20) {
        message = "Do you want to draw new card?";
    }
    else if (sum === 21) {
        hasblackjack = true;
        message = "Congrats you've got BlackJack";
    } else {
        isAlive = false;
        message = "You have lost :( ";
    }
    mesEl.textContent = message;
}

function newCard() {
    let drawnCard = 9;
    sum += drawnCard;
    cards.push(drawnCard);
    console.log(cards);
    renderGame();
}
