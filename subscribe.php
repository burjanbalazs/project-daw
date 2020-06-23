<?php 
error_reporting(E_ERROR | E_PARSE);
session_start();
require_once("dbmanagement/server.php");
if(!isset($_SESSION['logged_in'])) {
    die("You need to be authenticated in order to view this page");
}

if(isset($_POST['submit'])) {
    $firstname = strip_tags($_POST['firstname']);
    $email = strip_tags($_POST['mail']);

    $errors = subscribe($firstname,$email);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastering UI Design</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="css/subscribe.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
</head>

<body>
    <div class="nav-bar">
        <div class="logo">
		    <a><?php echo "Hello, " . $_SESSION['username']. "!"?></a>
        </div>
        <div class="nav-about">
        </div>
        <div class="nav-chapters">
        </div>
        <div class="nav-author">
        </div>
        <div class="buy">
            <a href="logout.php">Log Out</a>
        </div>
    </div>
    <div class="chapters">
        <div class="empty"></div>
        <div class="text">
            <h2>Sadly, we are out of copies at the moment!</h2>
            <p>But be sure to subscribe to our newsletter to be the first one notified when we have copies in stock</p>
        </div>
        <div class="empty"></div>
    </div>
    <div class="email">
        <div class="empty"></div>
        <form class="subscribe" action="subscribe.php" method="POST" autocomplete="off">
            <input type="text" name="firstname" class="name" placeholder="Enter your first name">
            <input type="text" name="mail" class="mail" placeholder="Enter your email address">
            <input type="submit" class="btn-buy" id="submit" name="submit" value="Sign me up">
            <?php     
            if(!empty($errors)) {
                foreach($errors as $error) {
                echo "<p class='error'>". $error . "</p>";
                }
            }
            else {
                if(isset($_POST['submit']))
                echo "<p class='error'>Mail Successfully Sent!</p>";
            }
        ?>
        </form>
        <div class="empty"></div>
    </div>
</body>

</html>
