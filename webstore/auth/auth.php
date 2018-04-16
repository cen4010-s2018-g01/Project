<?php

include "../universals/query.php";
include "../universals/check.php";
include "../universals/fetch.php";
include "tables.php";
include "encode.php";

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
    
    $entry = FetchOne($table, $ucolumn, "=", $username);
    
    $uexist = CheckSingleEntry($entry);
    
    Table();
    
    if (CheckEquals($uexist, TRUE)){
        $entry = $entry->fetch_assoc();
    }
    
    else{
        echo "No such user found.";
        return;
    }

    echo FetchSub($entry, $pcolumn);
    
    if (password_verify($password, FetchSub($entry, $pcolumn))){
        $pexist = TRUE;
    }
    else{
        $pexist = FALSE;
    }
        
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