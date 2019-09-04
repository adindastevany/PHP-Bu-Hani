<?php
    $last_username = "";
    if (isset($_COOKIE['last_username'])) {
        $last_username = $_COOKIE['last_username'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="validasi.php" method="POST">
        <p>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $last_username; ?>">
        </p>
        
        <p>
            <label>Password</label>
            <input type="password" name="password">
        </p>
        <p>
            <input type="checkbox" name="remember"> Remember Me ?
        </p>
        <p>
            <input type="submit" value="Login">
        </p>
    </form>
</body>
</html>