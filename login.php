<?php
session_start();

require_once('connect.php');

$error = false;
$success = false;
if(@$_POST['login']) {

    $query = $dbh->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $result = $query->execute(
        array(
            'username' => $_POST['username'],
            'password' => $_POST['password']
        )
    );
    $userinfo = $query->fetch();

    if ($userinfo) {

        $success = "User, " . $_POST['user'] . " was successfully logged in.";

        $_SESSION["firstName"] = $userinfo['firstname'];
        $_SESSION["userName"] = $userinfo['username'];

        header("Location: index.html");
    } else {
        $success = "There was an error logging into the account.";
    }
}