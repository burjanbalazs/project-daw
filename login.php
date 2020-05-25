<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
require_once("dbmanagement/server.php");
if(isset($_POST['submit'])) {
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);
    $errors = login($username,$password);
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
    <link rel="stylesheet" href="css/style-auth.css">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script defer src="js/login.js"></script>
</head>

<body>
<div class="nav-bar">
        <div class="logo">
            <a href="index.php">< Back</a>
        </div>
    </div>
    <form class="box" action="login.php" method="POST" autocomplete="off">
        <h1>Login</h1>
        <input type="text" id="user" name="username" placeholder="Username">
        <input type="password" id="pass" name="password" placeholder="Password">
        <input type="submit" id="submit" name="submit" value="Login">
        <?php     
            if(!empty($errors)) {
                foreach($errors as $error) {
                echo "<p class='error'>". $error . "</p>";
                }
            }
        ?>
        <p>Don't have an account?</p>
        <a href=register.php>Register</a>
    </form>
</body>

</html>
