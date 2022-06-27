<?php

$currentYear = date('Y');
$year = $currentYear - 100;

while(++$year <= $currentYear) {
	echo $year;
	echo "<br>";
}


?>