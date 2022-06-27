<?php

$currentYear = date('Y');
$year = $currentYear - 100;


do {
	echo $year;
	echo "<br>";
} while (++$year <= $currentYear);


?>