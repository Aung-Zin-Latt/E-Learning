//There once has a [adjective] programmer who wanted to use Javascript to [verb] the noun

var questions = 3;

var questionLeft = "[" + questions + "questions left]";
var adjective = prompt("Please type an adjective" + questionLeft);
questions -= 1;

questionLeft = "[" + questions + "questions left]";
var verb = prompt("Please type a verb" + questionLeft);
questions -= 1;

questionLeft = "[" + questions + "questions left]";
var noun = prompt("Please type a noun" + questionLeft);

var sentence = "<h3>There once has a " + adjective;
alert("All done. Ready for the message");

sentence += ' programmer who wanted to use Javascript to ' + verb;
sentence += ' the ' + noun + '</h3>';

document.write(sentence);