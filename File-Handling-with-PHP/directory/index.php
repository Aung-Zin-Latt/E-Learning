<?php

$title = "Personal Recommendation";
include 'inc/header.php';

?>

<div class="container-fluid">
    <h1>Welcome</h1><hr>
    <div class="fist-page">
        <p class="text">This site is used to explore the file handling features of PHP:reading, writing and parsing.</p>
        <ul>
            <li>
                <a href="#">People</a> are read from a CSV flie and the <a href="#">Add People</a> form appends a CSV
                formated line to the end of a file. </li>
            <li>
                <a href="#">Books</a> are read from a JSON file and the <a href="#">Add Book</a> form adds another
                book to the JSON book collection then rewrites the file.
            </li>
            <li>
                <a href="#">Podcasts</a> are read from an XML file and the <a href="#">Add Episode</a> form adds another episode to the Podcasts
                selected. Thies Episode is added to XML collection of episode items then rewrites the flie.
            </li>
        </ul>
       <p>You will find some personal recommendation of Alex, learner at <a href="itvisionhub.comm">ITVISIONHUB</a></p>
    </div>

</div>

<?php include 'inc/footer.php'; ?>