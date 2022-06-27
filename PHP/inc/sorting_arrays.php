<?php

$learn = array('Conditional', 'Arrays', 'Loops');
$learn[] = 'Building Something Awesome';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');

asort($learn);      /* Sort according values */
sort($learn);       /* Re-index array key */

//echo "You removed ".array_shift($learn);
//echo "You removed ".array_pop($learn);

rsort($learn);      /* reverse sort */

// echo "You removed ".array_shift($learn);
//echo "You removed ".array_pop($learn);

var_dump($learn);
echo "<br>";

shuffle($learn);
echo "Random result = ".$learn[0];


?>