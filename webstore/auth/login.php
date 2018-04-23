<?php

session_start();

include_once('../universals/query.php');
include_once('../universals/check.php');
include_once('../universals/fetch.php');
include_once('encode.php');

function LogIn(){
    
    $table = "accounts";
    $pcolumn = "password";
    $ucolumn = "Username";
    $firstc = "firstname";
    $lastc = "lastname";
    
    $uexist = FALSE;
    $pexist = FALSE;
    
    $username = $_POST['userID'];
    $password = $_POST['userPass'];
    
    $entry = FetchOne($table, $ucolumn, "=", $username);
    
    $uexist = CheckSingleEntry($entry);
    
    if (CheckEquals($uexist, TRUE)){
        $entry = $entry->fetch_assoc();
    }
    
    else{
        echo "No such user found.";
        return;
    }
    
    if (password_verify($password, FetchSub($entry, $pcolumn))){
        $pexist = TRUE;
    }
    else{
        $pexist = FALSE;
    }

    echo $password . "<br>";
    echo password_verify($password, FetchSub($entry, $pcolumn)) . "<br>";
	echo FetchSub($entry, $pcolumn) . "<br>";
    echo $username . "<br>";
        
    if (CheckEquals($uexist, $pexist)){
        $_SESSION['userAuthorized'] = TRUE;
        $_SESSION['username'] = $username;
        $_SESSION["firstname"] = FetchSub($entry, $firstc);
        $_SESSION["lastname"] = FetchSub($entry, $lastc);
        header("Location: ../entry.php");
        return;
    }
    
    else{
        echo "Failed Login";
        return;
    }
}

?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../universals/style.css">
    </head>
    
    <body>
    
    <?php LogIn() ?>
        
    </body>
    
</html>