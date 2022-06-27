<?php

$player1 = 0;
$player2 = 5;
$round = 0;

//var_dump(abs($player1 - $player2));
//var_dump($player2 - $player1);

while(abs($player1 - $player2) < 2 || ($player1 < 11 && $player2 <)) {
    $round++;
    echo "<h2>Round $round</h2>\n";
    
    if(rand(0, 1)) {
        $player1++;
    } else {
        $player2++;
    }

    echo "Player1 = $player1 <br>\n";
    echo "Player2 = $player2 <br>\n";
}

echo "<h1>";
if($player1 > $player2) {
    echo "Player1 ";
} else {
    echo "Player2 ";
}
echo "is the winner after $round rounds! </h1>\n";



?>