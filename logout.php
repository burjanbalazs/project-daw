<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['logged_in']);
unset($_SESSION);
session_destroy();
header("Location:index.php");
die();
?>