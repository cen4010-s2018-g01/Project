<?php

session_start();

$_SESSION['userAuthorized'] = FALSE;

if (!isset($_SESSION["cart"])){
    $_SESSION["cart"] = array();
}

include_once('universals/tables.php');
include_once('auth/encode.php');

Table();

?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    
    <br>
    <h1 style="font-family:Times"><b>P</b>erry's <b>P</b>arts <b>P</b>avilion</h1>
    <h4>Florida Atlantic University<br> Engineering Web Store</h4><br>
    <body class="text-center">
        <form action="auth/login.php" method="post">
            FAU Username<br>
            <input type="text" name="userID" required>
            <br><br>
            Password<br>
            <input type="password" name="userPass" required>
            <br><br>
            <input type="submit" value="Login" class="btn btn-success">
        </form>
        <br>
        <form action="account/account.php">
            <input type="submit" value="Create New Account" class="btn btn-warning">
        </form>
        <br>
        To log in using a test <b>customer</b> account use:<br>
        Username: user<br>
        Password: pass<br>
        <br>
        To log in using a test <b>admin</b> account use:<br>
        Username: admin<br>
        Password: admin<br>
        <br>
        <b>Please Note:</b> This program does not work correctly in the Safari browser.
        <br><br>
        This system uses a password encoding tool. If you create a new accounts tuple, go to<br>
        <a href="auth/generate.php">"webstore/auth/generate.php"</a> to encode the desired password<br>
        and then put the encoded password into the new tuple.<br><br>
        <?php echo "For example, for 'pass', the encoded password is: " . Encode("pass"); ?>
    </body>
</html>