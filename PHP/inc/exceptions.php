<?php

ini_set("display_errors","Off");
function exception_error_handler($severity, $message, $file, $line){
throw new ErrorException($message, 0, $severity, $file, $line);
}

set_error_handler("exception_error_handler");

try {
    strpos();
} catch(Exception $e) {
    echo "ERROR!" .$e->getMessage();
}

echo "End Of File";

        
?>