<?php

$names = array (
	'Kwee Zin', 
	'Aung Zin Latt',
	'Mg Aung Aung',
	'Daw Pyone'
);

function hello($arr) {
    foreach($arr as $key => $name) {
        echo "Hello, $name, How's it going!";
        echo "<br>";
    }
}

hello($names);

?>