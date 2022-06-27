<?php
session_start();
$total = 5;
$page = filter_input(INPUT_GET,'p',FILTER_SANITIZE_NUMBER_INT);
if (empty($page)){
    $page = 1;
}
if (isset($_POST['word'])){
    $_SESSION['word'][$page-1] = filter_input(INPUT_POST,'word', FILTER_SANITIZE_STRING);
}

if ($page > $total) {
    header('location: story.php');
    exit;
}

include 'inc/header.php';

echo '<div class="row">';
echo '<div class="col-lg-6 offset-lg-3 text-center">';
echo "<h1>Step $page of $total</h1>";
echo '<form action="play.php?p='. ($page + 1).'" method="post">';
echo '<div class="form group form-group-lg">';
    switch ($page) {
        case 2:
            echo '<label for="word" class="control-label h3">Enter a name</label>';
            echo '<input type="text" class="form-control mb-3" id="word" name="word" placeholder="Name">';
            break;

        case 3:
            echo '<label for="word" class="control-label h3">Enter a verb ending in- ing</label>';
            echo '<input type="text" class="form-control" id="word" name="word" placeholder="Verb-ing">';
            echo '<span class="d-block pb-3">An verb is a word used to describe an action, state, or occurence.</span>';
            break;

        case 4:
            echo '<label for="word" class="control-label h3">Enter a verb</label>';
            echo '<input type="text" class="form-control" id="word" name="word" placeholder="verb">';
            echo '<span class="d-block pb-3">An verb is a word used to describe an action, state, or occurence.</span>';
            break;

        case 5:
            echo '<label for="word" class="control-label h3">Enter a noun</label>';
            echo '<input type="text" class="form-control" id="word" name="word" placeholder="noun">';
            echo '<span class="d-block pb-3">An noun is a word(other than a pronoun) used to identify any of a class of people, places, or things.</span>';
            break;
        
        default:
            echo '<label for="word" class="control-label h3">Enter a adjective</label>';
            echo '<input type="text" class="form-control" id="word" name="word" placeholder="Adjective">';
            echo '<span class="d-block pb-3">An adjective is a word or phrase naming an attribute, added to a noun to modify or describe it.</span>';
            break;
    }
    echo '<input type="submit" value="Submit" class="btn btn-outline-secondary btn-lg">';
echo '</div>';     

echo '</div>';
echo '</div>';

include 'inc/footer.php';