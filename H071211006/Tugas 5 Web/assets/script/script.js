let player = 5000;
let cards = [];
let sum = 0;
let currentBet = 0;
let hasBlackJack = false;
let isAlive = false;
let message = "";
let message2 = "";
let messageEl = document.getElementById("message-el");
let messageEl2 = document.getElementById("message-el2");
let sumEl = document.getElementById("sum-el");
let cardsEl = document.getElementById("cards-el");
let money = document.getElementById("money-el");
let betEl = document.getElementById("bet-el");
let takeCards = document.getElementById("takeCard");

function getRandomCard() {
	return Math.floor(Math.random() * 11) + 1;
}

function startGame() {
	isAlive = true;
	let firstCard = getRandomCard();
	let secondCard = getRandomCard();
	cards = [firstCard, secondCard];
	sum = firstCard + secondCard;
	document.getElementById("btnstart").innerText = "PLAY AGAIN?";
	renderGame();
}

function renderGame() {
	document.getElementById("bet-el").value = "";
	cardsEl.textContent = "Your Cards: ";
	for (let i = 0; i < cards.length; i++) {
		cardsEl.textContent += cards[i] + " ";
	}
	sumEl.textContent = "Sum: " + sum;
	document.getElementById("takeCard").disabled = false;
	if (sum <= 20) {
		message2 = "";
		message = "Draw a new card?";
	} else if (sum == 21) {
		player += currentBet * 5;
		money.innerHTML = player;
		message = "You Win!";
		message2 = "Wohoo!, You already got BlackJack!";
		hasBlackJack = true;
	} else {
		message = "You Lose!";
		isAlive = false;
	}
	messageEl.textContent = message;
	messageEl2.textContent = message2;
}
document.getElementById("takeCard").disabled = true;
function takeCard() {
	document.getElementById("takeCard").value = "";
	if (sum < 21) {
		let card = getRandomCard();
		sum += card;
		cards.push(card);
		renderGame();
	} else {
		if (sum >= 21) {
			message2 =
				"Game is over you can't take a new card! set your bet and play again!";
		}
	}
	messageEl2.textContent = message2;
}

function bet() {
	if (betEl.value > 0) {
		if (betEl.value <= player) {
			currentBet = Number(betEl.value);
			player -= betEl.value;
			money.innerHTML = player;
			messageEl2.textContent = "";
			startGame();
		} else if (player === 0) {
			alert("Your money = 0 Please reset your money!");
		} else {
			alert("Your money is less than your bet!");
		}
	} else {
		document.getElementById("bet-el").value = "";
		alert("Set your bet first!");
	}
}

function resetMoney() {
	document.getElementById("bet-el").value = "";
	location.reload();
}
