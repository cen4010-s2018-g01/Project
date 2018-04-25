<?php

include_once("../connection/query.php");
include_once("../auth/encode.php");

function CreateAccount(){
    $username = $_POST["newUser"];
    $password = $_POST["newPass"];
    $znumber = $_POST["znumber"];
    $first = $_POST["firstName"];
    $last = $_POST["lastName"];

    $db = "cen4010_s2018g01";
    $table = "accounts";

    $sql = "SELECT * FROM `$db`.`$table` WHERE `username` = '" . $username . "';";
    $userRes = SendQuery($sql);
    $sql = "SELECT * FROM `$db`.`$table` WHERE `znumber` = '" . $znumber . "';";
    $zRes = SendQuery($sql);

    if ($userRes->num_rows || $zRes->num_rows){
        echo "Username and/or Z-Number already exists.";
        return;
    }
    
    $password = Encode($password);

    $sql = "INSERT INTO `accounts` (`znumber`, `username`, `password`, `firstname`, `lastname`) VALUES ('$znumber', '$username', '$password', '$first', '$last');";
    SendQuery($sql);

    echo "Account created!";
    return;
}

?>

<!DOCTYPE html>
<html>

    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    
    <body class="text-center">
        <br><br><br>
        <h2><?php CreateAccount() ?></h2>
        <br><br>
        <form action="../index.php">
            <input type="submit" value="Return to Log In" class="btn btn-info">
        </form>
        <br>
        <form action="account.php">
            <input type="submit" value="Return to Account Creation" class="btn btn-info">
        </form>
    </body>
    
</html>