<?php

$title = "Add People Form";
require 'inc/header.php';

    echo "<div class='container-fluid'>";
    echo "<h1>Add People</h1>";
    echo "<hr>";
    echo "<div class='add_form'>";
    echo '<form action="inc/write_csv.php" method="post">';
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlInput1">First Name</label>';
    echo '<input type="text" class="form-control" name="first" id="exampleFormControlInput1">';
    echo "</div>";
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlSelect1">Last Name</label>';
    echo '<input type="text" class="form-control" name="last" id="exampleFormControlInput1">';
    echo "</div>";
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlSelect2">Website</label>';
    echo '<div class="input-group mb-2 mr-sm-2">';
    echo '<div class="input-group-prepend">';
    echo '<div class="input-group-text">http://</div>';
    echo "</div>";
    echo '<input type="text" class="form-control" name="website" id="inlineFormInputGroupUsername2">';
    echo "</div>";
    echo "</div>";
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlTextarea1">Twitter</label>';
    echo '<div class="input-group mb-2 mr-sm-2">';
    echo '<div class="input-group-prepend">';
    echo '<div class="input-group-text">@</div>';
    echo "</div>";
    echo '<input type="text" class="form-control" name="twitter" id="inlineFormInputGroupUsername2">';
    echo "</div>";
    echo "</div>";
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlTextarea1">Image</label>';
    echo '<input type="text" class="form-control" name="img" id="exampleFormControlInput1" placeholder="http://">';
    echo "</div>";
    echo '<button type="submit" class="btn btn-success">Add Person</button>';
    echo "</form>";
    echo "</div>";
    echo "</div>";

require 'inc/footer.php';
?>