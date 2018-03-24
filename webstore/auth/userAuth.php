<?php

session_start();

include "../connectDatabase.php";

function LogIn(){
    
    $tableName = "user info";
    
    $userExist = FALSE;
    $passExist = FALSE;

    $passwordColumn = "znumber";

    $conn = Connect();
    
    $username = $_POST['userID'];
    $password = $_POST['userPass'];
    
    $sql = "SELECT * FROM `$tableName` WHERE email LIKE '$username@%'";
    
    $userEntry = $conn->query($sql);
    
    if ($userEntry != "" && $userEntry->num_rows == 1){
        $userExist = TRUE;
    }
    
    $userEntry = $userEntry->fetch_assoc();
    
    if ($password == $userEntry['znumber']){
        $passExist = TRUE;
    }
        
    $conn -> close();
    
    if ($userExist == TRUE && $passExist == TRUE){
        $_SESSION['userAuthorized'] = TRUE;
        header("Location: ../entry.php");
    }
    
    else{
        echo "Failed Login";
    }
}

?>