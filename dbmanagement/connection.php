<?php

session_start();

function createConnection()
{
    $dbpass = getenv('DB_PASS');
    $connection = new mysqli('localhost','root',$dbpass,'users','3306');
    if($connection->connect_errno) {
        return false;
    }

    return $connection;
}

function validate($username, $email, $password, $repassword) {

    $errors = array();

    if(empty($username) || empty($email) || empty($password) || empty($repassword)) {
        array_push($errors, "All fields are obligatory");
    }
    else {    
        if(strlen($username) < 4 || strlen($username) > 20) {
            array_push($errors,"Username must be between 4 and 20 chars long");
        }
        else {
            if(strlen($password) < 4 || strlen($password) > 20) {
                array_push($errors,'Password must be between 4 and 20 chars long');
            }
            else {
                $re = '/[A-Za-z0-9_.!]+@[A-Za-z]+\.[A-Za-z]+/';
                preg_match_all($re,$email,$matches);
                if(empty($matches[0])) {
                    array_push($errors,'E-mail must be in valid format');
                }
                else {
                    if($password !== $repassword) {
                        array_push($errors,"The passwords don't match");
                    }
                }
            }
        }
    }

    return $errors;
}
function validateLogin($username, $password) {
    $errors = array();
    if(empty($username) || empty($password)) {
        array_push($errors, "All fields are obligatory");
    }
    return $errors;
}

function validateSubscribe($firstname, $email) {
    $errors = array();
    if(empty($firstname) || empty($email)) {
        array_push($errors, "All fields are obligatory");
    }
    else {
        $re = '/[A-Za-z0-9_.!]+@[A-Za-z]+\.[A-Za-z]+/';
        preg_match_all($re,$email,$matches);
        if(empty($matches[0])) {
            array_push($errors,'E-mail must be in valid format');
        }
    }
    return $errors;
}

?>
