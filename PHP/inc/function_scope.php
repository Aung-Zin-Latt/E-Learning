<?php

function hello() {
    echo 'Hello, World!';
}

$current_user = 'Mike';

function is_Mike() {
    global $current_user;
    if ($current_user == 'Mike') {
        echo "It is Mike!";
    } else {
        echo "Nope, It is not Mike!";
    }
}


?>