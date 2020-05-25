<?php 
session_start();
require_once('connection.php');

function register($username, $email,$password,$repassword) {

    $errors = validate($username, $email, $password, $repassword);


    if(!createConnection()) {
        array_push($errors,"Couldn't connect to DB");
        die('Could not connect to DB');
    }
    $connection = createConnection();

    
    if(empty($errors)) {
        $sql = $connection->prepare("SELECT * FROM info WHERE username = ? LIMIT 1");
        $sql->bind_param("s", $username);
        $sql->execute();
        $sql->bind_result($id,$user,$pass,$mail);
        while($sql->fetch()) {}
        $row_cnt = $sql->num_rows;
        $sql->close();
        if($row_cnt === 0) {
            $statement = $connection->prepare("SELECT * FROM info WHERE email = ? LIMIT 1");
            $statement->bind_param("s", $email);
            $statement->execute();
            $statement->bind_result($id,$user,$pass,$mail);
            while($statement->fetch()) {}
            $row_cnt = $statement->num_rows;
            $statement->close();
            if($row_cnt === 0) {
                $sql = "INSERT INTO `info`(`id`, `username`, `password`, `email`) VALUES (NULL, ? , ? , ?)";
                $stmnt = $connection->prepare($sql);
                $hashed_password = md5($password);
                $stmnt->bind_param("sss", $username ,$hashed_password, $email);
                $stmnt->execute();
                $stmnt->close();
                $connection->close();
                $_SESSION['username'] = $username;
                $_SESSION['logged_in'] = true;
                header("Location: subscribe.php");
                die();
            }
            else {
                array_push($errors,"E-mail already exists!");
                return $errors;
            }
        }
        else {
            array_push($errors,"Username already exists!");
            return $errors;
        }
    }
    else {
        return $errors;
    }
}

function login($username, $password) {
    $errors = validateLogin($username, $password);


    if(!createConnection()) {
        array_push($errors,"Couldn't connect to DB");
        die('Could not connect to DB');
    }
    $connection = createConnection();

    if(empty($errors)) {
        $statement = $connection->prepare("SELECT * FROM info WHERE username=?");
        $statement->bind_param("s",$username);
        $statement->execute();
        $statement->bind_result($id,$dbuser,$dbpass,$dbmail);
        while($statement->fetch()) {}
        $row_cnt = $statement->num_rows;
        if($row_cnt == 1) {
            if(md5($password) === $dbpass) {
                $_SESSION['username'] = $username;
                $_SESSION['logged_in'] = true;
                header("Location: subscribe.php");
                die();
            }
            else {
                array_push($errors, "This username or password is incorrect");
            }
        }
        else {
            array_push($errors, "This username or password is incorrect");
        }
        $statement->close();
    }

    return $errors;

}

function subscribe($firstname, $email) {
    $errors = validateSubscribe($firstname,$email);
    
    if(!createConnection()) {
        array_push($errors,"Couldn't connect to DB");
        die('Could not connect to DB');
    }
    $connection = createConnection();
    if(empty($errors)) {
        $statement = $connection->prepare("SELECT * FROM subscriber WHERE email = ? LIMIT 1");
        $statement->bind_param("s", $email);
        $statement->execute();
        $statement->bind_result($id,$name,$mail);
        while($statement->fetch()) {}
        $row_cnt = $statement->num_rows;
        $statement->close();
        if($row_cnt === 0) {
            $sql = "INSERT INTO `subscriber`(`id`, `firstname`, `email`) VALUES (NULL, ? , ?)";
            $stmnt = $connection->prepare($sql);
            $stmnt->bind_param("ss", $firstname, $email);
            $stmnt->execute();
            $stmnt->close();
            $to = $email;
            $subject = 'Thank You ' . $firstname .'!';
            $message ='Thank you for signing up to our awesome newsletter where we respect your inbox and will not send spam to you';
	    $headers = "From: admin@burjanbalazs.com" . "\r\n";
	    $headers .= "Conetnt-type: text/html; charset=iso-8859-1";
            mail($to,$subject,$message,$headers);
            $connection->close();
	}
	else {
	    array_push($errors,"Email Address already in DB");
	}
    }
    return $errors;
}

?>
