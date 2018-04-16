<?php

session_start();

include "auth/encode.php";

$_SESSION['userAuthorized'] = FALSE;

if (!isset($_SESSION["cart"])){
    $_SESSION["cart"] = array();
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
	<br>
	To log in using a test account use:<br>
	Username: user<br>
	Password: pass<br>
	<br>
	This system uses a password encoding tool. If you create a new student tuple, go to<br>
	<a href="auth/generate.php">"webstore/auth/generate.php"</a> to encode the desired password<br>
	and then put the encoded password into the new tuple.<br><br>
	<?php echo "For example, for 'pass', the encoded password is: " . Encode("pass"); ?>
    </body>
</html>