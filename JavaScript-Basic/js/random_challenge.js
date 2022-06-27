var randomInput1 = prompt("Please Enter a starting number");
var startNumber = parseInt(randomInput1);

var randomInput2 = prompt("Please Enter an ending number");
var endNumber = parseInt(randomInput2);

var randomNumber = Math.floor(Math.random() * (startNumber - endNumber + 1)) + endNumber;

var message = "<p>" + randomNumber + " is a number between " + startNumber + " and " + endNumber + "</p>";
document.write(message);