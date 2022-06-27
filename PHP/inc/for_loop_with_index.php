<?php

$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Building Some Awesome';

array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');
asort($learn);
sort($learn);

for($i=0; $i < count($learn); $i++) {
    echo $learn[$i]. "<br>";
}


?>