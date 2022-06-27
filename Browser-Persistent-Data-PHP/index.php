<?php
 include("inc/header.php");
?>
    <?php
    echo "<div class='container text-center pt-4'>";
    echo "<h1>Welcome to our</h1>";
    echo "<h1>  ITVISIONHUB Story Game </h1>";
    echo "<p>  Enter the requested words and create your story. </p>";
    echo "<a href= 'play.php?' class='btn btn-outline-secondary'>Play</a>";
    echo "<h1 class='mt-3'>Reread Your Saved Stories</h1>";
    echo "</div>";

    if (isset($_COOKIE)){
        foreach($_COOKIE as $key => $value){
            echo '<div class="form-group text-center">';
            echo '<a class="btn btn-info" href="inc/cookie.php?read='
                . urlencode($key) . '">';
            echo substr($key, 0, -10);
            echo ' ';
            echo date('d M Y H:i:s',(int) substr($key, -10));
            echo '</a>';
            echo '<a class="btn btn-danger" href="inc/cookie.php?delete='
                . urlencode($key) . '">';
            echo 'X</a>';
            echo '</div>';
        }
    }

include("inc/footer.php");

?>
