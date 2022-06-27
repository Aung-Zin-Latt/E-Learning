<?php 

// Report simple running errors
error_reporting(E_ALL);

// Make sure they're on screen
ini_set('display_errors', 1);

// Do some errors

// Notice
$nope = 0;
var_dump(5 + $nope);

// Warning
$wrestler = new stdClass;
$wrestler->name = 'Aung Zin Latt';

// Strict
class Foo
{
	public static function bar() {}

	public static function nope() {}
}
Foo::bar();

// Error

Foo::nope();

echo "We'll never get here.";
