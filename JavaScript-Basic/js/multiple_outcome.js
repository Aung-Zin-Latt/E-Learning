/*
The Random Number Guessing Game
Generates a number between 1 and 6
and gives a player two attempts to 
guess the number.
*/

// assume the player didn't guess correctly
var correctNumber = false;

// genereate random number from 1 to 6
var randomNumber = Math.floor(Math.random() * 6) + 1;
var guess = prompt("I am thinking of a number between 1 and 6. What is it?");

/* test to see if player is
1. correct
2. guessed too high
3. guessed too low
*/
if (parseInt(guess) === randomNumber) {
    correctNumber = true;
} else if (parseInt(guess) < randomNumber) {
    var guessMore = prompt("Try again, The number I am think of is more than " + guess);
    if (parseInt(guessMore) === randomNumber) {
        correctNumber = true;
    }
} else if (parseInt(guess) > randomNumber) {
    var guessLess = prompt("Try again. The number I am thinking of is less than " + guess);
    if (parseInt(guessLess) === randomNumber) {
        correctNumber = true;
    }
}

// test if player is correct and output response 
if (correctNumber) {
    document.write("<p>You guessed the correct number!</p>");
} else {
    document.write("<p>Sorry. The number was " + randomNumber + ".</p>");
}