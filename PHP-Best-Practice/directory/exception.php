<?php

// Send errors to output
ini_set('display_errors', 1);

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
	throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

try{

	// Read a file
	$handle = fopen('nope.txt', 'r');

} catch (ErrorException $e){
	echo "<p>Can't find the file!</p>";
}
echo "<p>Do something else.</p>";