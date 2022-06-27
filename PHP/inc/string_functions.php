<?php

$phrase = "We only hit what we aim for";

$len = strlen($phrase);
//echo $len;

//substr function

//echo substr($phrase, 0, 7);

//strpos function

$start = strpos($phrase, 'hit');
echo substr($phrase, $start);

//var_dump(strpos($phrase, 'bob')); 	  //return bool(false)


?>