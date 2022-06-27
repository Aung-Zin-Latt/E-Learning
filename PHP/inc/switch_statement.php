<?php

$date = date("l");

switch ($date) {
    case 'Monday':
        echo "Watch on Monday";
    break;

    case 'Tuesday':
        echo "Code on Tuesday";
    break;

    case 'Wednesday':
        echo "Project on Wednesday";
    break;

    case 'Thursday':
        echo "Car on Thursday";
    break;

    case 'Friday':
        echo "Clean on Friday";
    break;

    case 'Saturday':
        echo "Bake on Saturday";
    break;

    case 'Sunday':
        echo "Rest on Sunday";
    break;
    
    default:
        echo "I don't know what day it is";
    break;
}



?>








