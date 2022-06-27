var correctNumber = false;

var randomNumber = Math.floor(Math.random() * 6) + 1;
var guess = prompt("I am thinking of a number between 1 and 6. What is it?");

if (parseInt(guess) === randomNumber) {
    correctNumber = true;
}

if (correctNumber) {
    document.write("<p>You guessed the correct number!</p>");
} else {
    document.write("<p>Sorry. The number was " + randomNumber + ".</p>");
}