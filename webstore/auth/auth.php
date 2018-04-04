<?php

include "../universals/query.php";
include "../universals/check.php";
include "../universals/fetch.php";

function LogIn(){
    
    $table = "Students";
    $pcolumn = "Password";
    $ucolumn = "Username";
    $firstc = "firstname";
    $lastc = "lastname";
    
    $uexist = FALSE;
    $pexist = FALSE;
    
    $username = $_POST['userID'];
    $password = $_POST['userPass'];
    
    $entry = FetchTwo($table, $ucolumn, "=", $username, $pcolumn, "=", $password);
    
    $uexist = CheckSingleEntry($entry);
    
    if (CheckEquals($uexist, TRUE)){
        $entry = $entry->fetch_assoc();
    }
    
    else{
        echo "No such user found.";
        return;
    }

    $pexist = CheckEquals($password, FetchSub($entry, $pcolumn));
        
    if (CheckEquals($uexist, $pexist)){
        $_SESSION['userAuthorized'] = TRUE;
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