<?php
    session_start();
    
    $_SESSION["cart"] = array();

    $_SESSION['userAuthorized'] = FALSE;

    //if (!isset($_SESSION["cart"])){
        //$_SESSION["cart"] = array();
    //}

?>

<!DOCTYPE html>

<html>
    <head>
    </head>
    
    <h3>FAU Engineering Web Store</h3>
    <body>
        <form action="auth/login.php" method="post">
            FAU Username:
            <input type="text" name="userID">
            <br>
            Password:
            <input type="text" name="userPass">
            <br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>