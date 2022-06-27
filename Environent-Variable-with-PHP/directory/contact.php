<?php
include 'inc/bootstrap.php';
$pageTitle = "Developers Say the Darndest Things";
$section = "contact";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'inc/process_form.php';
    $error_message = process_form();
    // var_dump($error_message);
    // exit;
}
require 'inc/header.php';
?>
<div class="main-form">
<h1>Contact</h1>
<p>Have a comment or additional suggestion?</p>
<p>Complete the form to send me an email.</p>
    <form class="text-form" action="" method="post">
        <?php
        if (isset($error_message))
        {echo '<h4 class="error">' . $error_message . '</h4>';
        }
        ?>
        <input type="text" class="name" name="name" placeholder="Name"><br>
        <input type="email" class="email" name="email" placeholder="Email"><br>
        <textarea class="form-control" id="exampleFormControlTextarea1" row="3" placeholder="Message"></textarea><br>
        <div class="g-recaptcha form-label-group" name="success" data-sitekey="<?php echo getenv('SITE_KEY')?>">
        </div>
        <input type="submit" class="btn" value="send">
    </form>
</div>
<?php
include 'inc/footer.php';
?>