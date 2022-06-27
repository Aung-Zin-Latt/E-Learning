<?php
$title = "Add Books Form";

require 'inc/header.php';

    echo "<div class='container-fluid'>";
    echo "<h1>Add Book</h1>";
    echo "<hr>";
    echo "<div class='add_form'>";
    echo '<form action="inc/write_json.php" method="post">';
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlInput1">Title</label>';
    echo '<input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="">';
    echo "</div>";
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlSelect1">Link</label>';
    echo '<input type="text" class="form-control" name="link" id="exampleFormControlInput1" placeholder="http://">';
    echo "</div>";
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlSelect2">Image</label>';
    echo '<input type="text" class="form-control" name="book_image_url" id="inlineFormInputGroupUsername2" placeholder="http://">';
    echo "</div>";
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlTextarea1">Description</label>';
    echo '<textarea class="form-control" name="book_description" id="exampleFormControlTextarea1" rows="3"></textarea>';
    echo '</div>';
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlTextarea1">Pages</label>';
    echo '<input type="text" class="form-control" name="num_pages" id="exampleFormControlInput1" placeholder="">';
    echo "</div>";
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlTextarea1">Author</label>';
    echo '<input type="text" class="form-control" name="author_name" id="exampleFormControlInput1" placeholder="">';
    echo "</div>";
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlTextarea1">ISBN</label>';
    echo '<input type="text" class="form-control" name="isbn" id="exampleFormControlInput1" placeholder="">';
    echo "</div>";
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlTextarea1">Rating</label>';
    echo '<input type="text" class="form-control" name="average_rating" id="exampleFormControlInput1" placeholder="">';
    echo "</div>";
    echo '<div class="form-group">';
    echo '<label for="exampleFormControlTextarea1">Published</label>';
    echo '<input type="text" class="form-control" name="book_published" id="exampleFormControlInput1" placeholder="">';
    echo "</div>";
    echo '<button type="submit" class="btn btn-success">Add Book</button>';
    echo "</form>";
    echo "</div>";
    echo "</div>";
    
require 'inc/footer.php';

?>