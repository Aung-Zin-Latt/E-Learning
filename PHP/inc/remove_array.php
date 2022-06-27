<?php

$learn = array('Conditionals', 'Array', 'Loops');
$learn[] = 'Build Something Awesome';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');

echo "You removed ".array_shift($learn);
echo "<br>";
echo "You removed ".array_pop($learn);
echo "<br>";

unset($learn[1], $learn[2]);
var_dump($learn);
echo "<br>";

$learn = array_values($learn);
var_dump($learn);

?>