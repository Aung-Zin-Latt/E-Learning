<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo $pageTitle;  ?> 
    </title>
    <link rel="stylesheet" type="text/css" href="css/new_style.css">
</head>

<body>

    <div class="header">
        <div class="wrapper">
            <a href="/"><h1 class="branding-title">Personal Media Library</h1></a>
            <!-- <h1 class="branding-title"><a href="/">Personal Media Library</a></h1> -->
            <ul class="nav">
                <li class="books<?php if ($section == "books") { echo " on"; } ?>"><a href="catalog.php?cat=books">Books</a></li>
                <li class="movies<?php if ($section == "movies") { echo " on"; } ?>"><a href="catalog.php?cat=movies">Movies</a></li>
                <li class="music<?php if ($section == "music") { echo " on"; } ?>"><a href="catalog.php?cat=music">Music</a></li>
                <li class="suggest<?php if ($section == "suggest") { echo " on"; } ?>"><a href="suggest.php">Suggest</a></li>
            </ul>
        </div>
    </div>

    <div id="content">