<?php

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $category = trim(filter_input(INPUT_POST, "category", FILTER_SANITIZE_STRING));
    $title = trim(filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING));
    $format = trim(filter_input(INPUT_POST, "format", FILTER_SANITIZE_STRING));
    $genre = trim(filter_input(INPUT_POST, "genre", FILTER_SANITIZE_STRING));
    $year = trim(filter_input(INPUT_POST, "year", FILTER_SANITIZE_NUMBER_INT));
    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS)); 

    if ($name == "" || $email =="" || $category == "" || $title == "") {
        $error_message = "Please fill in the required fields: Name, Email, Category and Title";
    }
    //Error Message Priority => !isset($error_message)
    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Bad form input";
    }
    
    //Checking Valid or Invalid email address with PHPMailer
    //Error Message Priority => !isset($error_message)
    if (!isset($error_message) && !PHPMailer::validateAddress($email)) {
        $error_message = "Invalid Email Address!";
    }

    if (!isset($error_message)) {
        $email_body = "";
        $email_body .= "Name " . $name . "\n";
        $email_body .= "Email " . $email . "\n";
        $email_body .= "\n\nSuggested Item\n\n";
        $email_body .= "Category " . $category . "\n";
        $email_body .= "Title " . $title . "\n";
        $email_body .= "Format " . $format . "\n";
        $email_body .= "Genre " . $genre . "\n";
        $email_body .= "Year " . $year . "\n";
        $email_body .= "Details " . $details . "\n";

        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // SMTP::DEBUG_OFF = off (for production use)
        // SMTP::DEBUG_CLIENT = client messages
        // SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'aungzinlatt007@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'qavagulthlgvfauo';

        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom('aungzinlatt007@gmail.com', $name);
        $mail->addReplyTo($email, $name);
        $mail->addAddress('aungzinlatt007@gmail.com', 'Aung Zin Latt');
        $mail->Subject = 'Library Suggestion Form ' . $name;
        $mail->Body = $email_body;
        if ($mail->send()) {
            header("location:suggest.php?status=thanks");
            exit;
        }
        $error_message = 'Mailer Error: ' . $mail->ErrorInfo;  
    }
}

$pageTitle = "Suggest a Media Item";
$section = "suggest";

include('Includes/header.php');

 ?>

<div class="section page">
    <div class="wrapper">
        <h1>Suggest a Media Item</h1>
        <?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
            echo "<p>Thanks for the email! I&rsquo;ll check out your suggestion shortly!</p>";
        } else {
            //Displaying Error Message with invalid email
            if (isset($error_message)) {
                echo '<p class="message">' . $error_message . '</p>';
            } else {
                echo '
                <p>If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.</p>';
            }
        ?>
        <form method="post" action="suggest.php">
            <table>
                <tr>
                    <th><label for="name">Name (required)</label></th>
                    <td><input type="text" id="name" name="name" value="<?php if (isset($name)) echo $name; ?>"></td>
                </tr>
                <tr>
                    <th><label for="email">Email (required)</label></th>
                    <td><input type="text" id="email" name="email" value="<?php if (isset($email)) echo $email; ?>"></td>
                </tr>
                <tr>
                    <th><label for="category">Category (required)</label></th>
                    <td>
                        <select name="category" id="category">
                            <option value="">Select One</option>
                            <option value="books"<?php if (isset($name) && $category == "Books") echo " selected"; ?>>Books</option>
                            <option value="movies"<?php if (isset($name) && $category == "Movies") echo " selected"; ?>>Movies</option>
                            <option value="music"<?php if (isset($name) && $category == "Music") echo " selected"; ?>>Music</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="title">Title (required)</label></th>
                    <td><input type="title" id="title" name="title" value="<?php if (isset($title)) echo $title; ?>"></td>
                </tr>
                <tr>
                    <th><label for="format">Format</label></th>
                    <td>
                        <select name="format" id="format">
                            <option value="">Select One</option>
                            <optgroup label="Books">
                                <option value="Audio"<?php if (isset($format) && $format == "Audio") echo " selected"; ?>>Audio</option>
                                <option value="Ebook"<?php if (isset($format) && $format == "Ebook") echo " selected"; ?>>Ebook</option>
                                <option value="Hardback"<?php if (isset($format) && $format == "Hardback") echo " selected"; ?>>Hardback</option>
                                <option value="Paperback"<?php if (isset($format) && $format == "Paperback") echo " selected"; ?>>Paperback</option>
                            </optgroup>
                            <optgroup label="Movies">
            						<option value="Blu-ray"<?php if (isset($format) && $format == "Blu-ray") echo " selected"; ?>>Blu-ray</option>
            						<option value="DVD"<?php if (isset($format) && $format == "DVD") echo " selected"; ?>>DVD</option>
            						<option value="Streaming"<?php if (isset($format) && $format == "Streaming") echo " selected"; ?>>Streaming</option>
            						<option value="VHS"<?php if (isset($format) && $format == "VHS") echo " selected"; ?>>VHS</option>
            					</optgroup>
            					<optgroup label="Music">
            						<option value="Cassette"<?php if (isset($format) && $format == "Cassette") echo " selected"; ?>>Cassette</option>
            						<option value="CD"<?php if (isset($format) && $format == "CD") echo " selected"; ?>>CD</option>
            						<option value="MP3"<?php if (isset($format) && $format == "MP3") echo " selected"; ?>>MP3</option>
            						<option value="Vinyl"<?php if (isset($format) && $format == "Vinyl") echo " selected"; ?>>Vinyl</option>
            					</optgroup>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="title">Genre</label></th>
                    <td>
                        <select name="genre" id="genre">
                            <option value="">Select One</option>
                            <optgroup label="Books">
            					<option value="Action"<?php if (isset($genre) && $genre == "Action") echo " selected"; ?>>Action</option>
            					<option value="Advanture"<?php if (isset($genre) && $genre == "Advanture") echo " selected"; ?>>Advanture</option>
            					<option value="Comedy"<?php if (isset($genre) && $genre == "Comedy") echo " selected"; ?>>Comedy</option>
            					<option value="Fantasy"<?php if (isset($genre) && $genre == "Fantasy") echo " selected"; ?>>Fantasy</option>
            					<option value="Historical"<?php if (isset($genre) && $genre == "Historical") echo " selected"; ?>>Historical</option>
            					<option value="Historical Fiction"<?php if (isset($genre) && $genre == "Historical Fiction") echo " selected"; ?>>Historical Fiction</option>
            					<option value="Horror"<?php if (isset($genre) && $genre == "Horror") echo " selected"; ?>>Horror</option>
            					<option value="Magical Realism"<?php if (isset($genre) && $genre == "Magical Realism") echo " selected"; ?>>Magical Realism</option>
            					<option value="Mystery"<?php if (isset($genre) && $genre == "Mystery") echo " selected"; ?>>Mystery</option>
            					<option value="Paranoid"<?php if (isset($genre) && $genre == "Paranoid") echo " selected"; ?>>Paranoid</option>
            					<option value="Philosophical"<?php if (isset($genre) && $genre == "Philosophical") echo " selected"; ?>>Philosophical</option>
            					<option value="Political"<?php if (isset($genre) && $genre == "Political") echo " selected"; ?>>Political</option>
            					<option value="Romance"<?php if (isset($genre) && $genre == "Romance") echo " selected"; ?>>Romance</option>
            					<option value="Saga"<?php if (isset($genre) && $genre == "Saga") echo " selected"; ?>>Saga</option>
            					<option value="Satire"<?php if (isset($genre) && $genre == "Satire") echo " selected"; ?>>Satire</option>
            					<option value="Sci-Fi"<?php if (isset($genre) && $genre == "Sci-Fi") echo " selected"; ?>>Sci-Fi</option>
            					<option value="Tech"<?php if (isset($genre) && $genre == "Tech") echo " selected"; ?>>Tech</option>
            					<option value="Thriller"<?php if (isset($genre) && $genre == "Thriller") echo " selected"; ?>>Thriller</option>
            					<option value="Urban"<?php if (isset($genre) && $genre == "Urban") echo " selected"; ?>>Urban</option>
            				</optgroup>
            				<optgroup label="Movies"> 
            					<option value="Action"<?php if (isset($genre) && $genre == "Action") echo " selected"; ?>>Action</option>
            					<option value="Adventure"<?php if (isset($genre) && $genre == "Adventure") echo " selected"; ?>>Adventure</option>
            					<option value="Animation"<?php if (isset($genre) && $genre == "Animation") echo " selected"; ?>>Animation</option>
            					<option value="Biography"<?php if (isset($genre) && $genre == "Biography") echo " selected"; ?>>Biography</option>
            					<option value="Comedy"<?php if (isset($genre) && $genre == "Comedy") echo " selected"; ?>>Comedy</option>
            					<option value="Crime"<?php if (isset($genre) && $genre == "Crime") echo " selected"; ?>>Crime</option>
            					<option value="Documentary"<?php if (isset($genre) && $genre == "Documentary") echo " selected"; ?>>Documentary</option>
            					<option value="Drama"<?php if (isset($genre) && $genre == "Drama") echo " selected"; ?>>Drama</option>
            					<option value="Family"<?php if (isset($genre) && $genre == "Family") echo " selected"; ?>>Family</option>
            					<option value="Fantasy"<?php if (isset($genre) && $genre == "Fantasy") echo " selected"; ?>>Fantasy</option>
            					<option value="Film-Noir"<?php if (isset($genre) && $genre == "Film-Noir") echo " selected"; ?>>Film-Noir</option>
            					<option value="History"<?php if (isset($genre) && $genre == "History") echo " selected"; ?>>History</option>
            					<option value="Horror"<?php if (isset($genre) && $genre == "Horror") echo " selected"; ?>>Horror</option>
            					<option value="Musical"<?php if (isset($genre) && $genre == "Musical") echo " selected"; ?>>Musical</option>
            					<option value="Mystery"<?php if (isset($genre) && $genre == "Mystery") echo " selected"; ?>>Mystery</option>
            					<option value="Romance"<?php if (isset($genre) && $genre == "Romance") echo " selected"; ?>>Romance</option>
            					<option value="Sci-Fi"<?php if (isset($genre) && $genre == "Sci-Fi") echo " selected"; ?>>Sci-Fi</option>
            					<option value="Sport"<?php if (isset($genre) && $genre == "Sport") echo " selected"; ?>>Sport</option>
            					<option value="Thriller"<?php if (isset($genre) && $genre == "Thriller") echo " selected"; ?>>Thriller</option>
            					<option value="War"<?php if (isset($genre) && $genre == "War") echo " selected"; ?>>War</option>
            					<option value="Western"<?php if (isset($genre) && $genre == "Western") echo " selected"; ?>>Western</option>
            				</optgroup>
            				<optgroup label="Music">			
            					<option value="Blues"<?php if (isset($genre) && $genre == "Blues") echo " selected"; ?>>Blues</option>
            					<option value="Classical"<?php if (isset($genre) && $genre == "Classical") echo " selected"; ?>>Classical</option>
            					<option value="Country"<?php if (isset($genre) && $genre == "Country") echo " selected"; ?>>Country</option>
            					<option value="Dance"<?php if (isset($genre) && $genre == "Dance") echo " selected"; ?>>Dance</option>
            					<option value="Easy Listening"<?php if (isset($genre) && $genre == "Easy Listening") echo " selected"; ?>>Easy Listening</option>
            					<option value="Electronic"<?php if (isset($genre) && $genre == "Electronic") echo " selected"; ?>>Electronic</option>
            					<option value="Folk"<?php if (isset($genre) && $genre == "Folk") echo " selected"; ?>>Folk</option>
            					<option value="Hip Hop/Rap"<?php if (isset($genre) && $genre == "Hip Hop/Rap") echo " selected"; ?>>Hip Hop/Rap</option>
            					<option value="Inspirational/Gospel"<?php if (isset($genre) && $genre == "Inspirational/Gospel") echo " selected"; ?>>Inspirational/Gospel</option>
            					<option value="Jazz"<?php if (isset($genre) && $genre == "Jazz") echo " selected"; ?>>Jazz</option>
            					<option value="Latin"<?php if (isset($genre) && $genre == "Latin") echo " selected"; ?>>Latin</option>
            					<option value="New Age"<?php if (isset($genre) && $genre == "New Age") echo " selected"; ?>>New Age</option>
            					<option value="Opera"<?php if (isset($genre) && $genre == "Opera") echo " selected"; ?>>Opera</option>
            					<option value="Pop"<?php if (isset($genre) && $genre == "Pop") echo " selected"; ?>>Pop</option>
            					<option value="R&B/Soul"<?php if (isset($genre) && $genre == "R&B/Soul") echo " selected"; ?>>R&amp;B/Soul</option>
            					<option value="Reggae"<?php if (isset($genre) && $genre == "Reggae") echo " selected"; ?>>Reggae</option>
            					<option value="Rock"<?php if (isset($genre) && $genre == "Rock") echo " selected"; ?>>Rock</option>
            				</optgroup>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="year">Year</label></th>
                    <td><input type="year" name="year" id="year" value="<?php if (isset($year)) echo $year; ?>"></td>
                </tr>
                <tr>
                    <th><label for="name">Additional Details</label></th>
                    <td><textarea name="details" id="details" cols="30" rows="5"><?php if (isset($details)) echo htmlspecialchars($_POST['details']); ?></textarea></td>
                </tr>
                <tr style="display: none">
                    <th><label for="address">Email</label></th>
                    <td><input type="text" id="address" name="address">
                    <p>Please leave this field blank</p>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Send" />
        </form>
        <?php } ?>
    </div>
</div>

<?php include('Includes/footer.php'); ?>