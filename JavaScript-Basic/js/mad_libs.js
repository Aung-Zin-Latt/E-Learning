//There once has a [adjective] programmer who wanted to use JavaScript to [verb] the [noun]

var adjective = prompt("Please type an adjective!");
var sentence = "<h3>There once has a " + adjective;
console.log(adjective);

var verb = prompt("Please type a verb!");
console.log(verb);

var noun = prompt("Please type a noun!");
alert("All done. Ready for the message?");
console.log(noun);

sentence += " programmer who wanted to use JavaScript to " + verb;
sentence += " the " + noun + "</h3>";
console.log(sentence);

document.write(sentence);