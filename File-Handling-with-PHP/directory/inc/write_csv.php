<?php

$new_person = [
    filter_input(INPUT_POST, 'first', FILTER_SANITIZE_STRING),
    filter_input(INPUT_POST, 'last', FILTER_SANITIZE_STRING),
    filter_input(INPUT_POST, 'website', FILTER_SANITIZE_URL),
    filter_input(INPUT_POST, 'twitter', FILTER_SANITIZE_STRING),
    filter_input(INPUT_POST, 'img', FILTER_SANITIZE_URL),
];

if (($fh = fopen('../data/csv/people.csv', 'a')) !== false){
    fputcsv($fh, $new_person);
    fclose($fh);
}
header ('location: ../people.php');

?>