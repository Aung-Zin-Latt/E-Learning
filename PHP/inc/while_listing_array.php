<?php

$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Building Something Awesome';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');
asort($learn);      /* Sort according to values */

$count = 0;
while ((list($key, $val) = each($learn)) && $count++ <2 ) {
    echo "$key => $val";
    echo "<br>";
}


?>