<?php 
session_start();
if(isset($_POST['submit'])) {
    error_reporting(E_ALL);
    require_once('dbmanagement/server.php');
    
    $username = strip_tags($_POST['username']);
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    $repassword = strip_tags($_POST['repassword']);
    $errors = register($username,$email,$password,$repassword);
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
    <link rel="stylesheet" href="css/style-register.css?2">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script defer src="js/register.js"></script>
</head>

<body>
<div class="nav-bar">
        <div class="logo">
            <a href="index.php">< Back</a>
        </div>
    </div>
    <form class="box" action="register.php" method="POST" autocomplete="off">
        <h1 id="reg">Register</h1>
        <input type="text" id="user" name="username" placeholder="Username">
        <input type="text" id="email" name="email" placeholder="E-mail">
        <input type="password" id="pass" name="password" placeholder="Password">
        <input type="password" id="repass" name="repassword" placeholder="Password Again">
        <input type="submit" id="submit" name="submit" value="Register">
        <br>
        <?php     
            if(!empty($errors)) {
                foreach($errors as $error) {
                echo "<p class='error'>". $error . "</p>";
                }
            }
        ?>
    </form>
</body>

</html>
