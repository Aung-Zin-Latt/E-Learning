function alertRandom() {
    var randomNumber = Math.floor(Math.random() * 6) + 1;
    alert(randomNumber);
    document.write("Random number is " + randomNumber + "<br>");
}

alertRandom();
alertRandom();
alertRandom();


// Anonymous Function

var writeRandom = function() {
    var randomNo = Math.floor(Math.random() * 4) + 1;
    alert(randomNo);
    document.write("The result of random number using anonymous function is " + randomNo + "<br>");
};

writeRandom();
writeRandom();