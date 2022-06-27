<?php

$iceCream = array(
    'Aung Zin Latt' => 'Black Cherry',
    'Treasure' => 'Chocolate',
    'Dave McFarland' => 'Cookie and Cream',
    'Rialla' => 'Strawberry'
);
$iceCream['Dave Thamous'] = 'Cookie and Cream';
$iceCream['Andrew'] = true;

ksort($iceCream);       /* Sort array key */
krsort($iceCream);      /* Sort array key with reverse order */
asort($iceCream);       /* Sort by array value */

var_dump($iceCream);


?>