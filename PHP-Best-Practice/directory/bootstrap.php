<?php 

spl_autoload_register(function ($class) {
	$classPath = str_replace('\\', '/', $class);
	include __DIR__.'/Include/'. $classPath. '.php';
});


?>