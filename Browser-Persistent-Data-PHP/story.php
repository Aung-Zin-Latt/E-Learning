<?php
session_start();
$word1 = htmlspecialchars($_SESSION['word'][1]);
$word2 = htmlspecialchars($_SESSION['word'][2]);
$word3 = htmlspecialchars($_SESSION['word'][3]);
$word4 = htmlspecialchars($_SESSION['word'][4]);
$word5 = htmlspecialchars($_SESSION['word'][5]);
include 'inc/header.php';
?>
    <div class="row">
        <div class="offset-lg-3 col-lg-6 text-center">
            <h1>My Itvision Story</h1>
            <p class="mb-1">There was once a(n) <?php echo $word1; ?> programmer named <?php echo $word2; ?>.</p>
            <p>This <?php echo $word3; ?> programmer used Itvision to learn to <?php echo $word4; ?> the <?php echo $word5; ?>.</p>
            <a href="inc/cookie.php?save" class="btn btn-outline-secondary btn-lg">Save Story</a>
            <a href="play.php" class="btn btn-outline-secondary btn-lg">Play Again</a>
            <a href="index.php" class="btn btn-outline-secondary btn-lg">Other Stories</a>
        </div>
    </div>
<?php
include 'inc/footer.php';