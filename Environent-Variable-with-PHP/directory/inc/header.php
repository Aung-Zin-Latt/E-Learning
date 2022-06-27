<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <header>
        <a href=""><h1 class="logo">Developers Say the Darnedest Things</h1></a>
        <nav>
            <ul>
                <li><a href="index.php" class="<?php if ($section == "home") {echo "active"; } ?>">Home</a></li>
                <li><a href="contact.php" class="<?php if ($section == "contact") {echo "active"; } ?>">Contact</a></li>
            </ul>
        </nav>
    </header> 