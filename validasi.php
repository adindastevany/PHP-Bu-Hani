<?php
    //
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin") {
        if (isset($_POST['remember'])) {
            setcookie("last_username", $username, time() + 3600 * 24);
        }
        header("Location: home.php");
    } else {
        header ("Location: login.php");
    }
?>