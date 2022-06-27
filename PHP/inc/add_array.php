<?php

$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Build Something Awesome';
array_push($learn, 'Functions', 'Forms', 'Objects');
var_dump($learn);
echo "<br>";
array_unshift($learn, 'HTML', 'CSS');
var_dump($learn);


?>