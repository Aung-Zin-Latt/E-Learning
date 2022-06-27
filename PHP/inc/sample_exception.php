<?php

error_reporting(1);
//ini_set('display_errors', 'off');

class myData {
    function getData() {
        if(!$file = fopen("data.txt", "r")) {
            throw new Exception('Unable to access file. ');
        }
    }
}

$data = new myData();

try {
    $data->getData();
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "End of the File";

?>