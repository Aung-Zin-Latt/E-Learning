<?php

$iceCream = array(
    'Alena' => 'Black Cherry', 
    'Treasure' => 'Chocolate',
    'Dave McFarland' => 'Cookie and Cream',
    'Rialla' => 'Strawbery'
);
echo $iceCream['Alena'];
echo "<br>";

$iceCream['Dave Thamous'] = 'Cookie and Cream';
$iceCream[] = 'Vanilla';
$iceCream['Andrew'] = true;

var_dump($iceCream);
echo "<br>";

$key = array(
	1 => 'a',
	'1' => 'b',
	1.5 => 'c',
	true => 'd'
);

var_dump(($key));




?>