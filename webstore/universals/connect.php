<?php

function Connect(){
    
    $servername = "localhost";
    $username = "username";
    $password = "";
    $dbName = "test";
    
    /*
    $servername = "lamp.cse.fau.edu";
    $username = "CEN4010_S2018g01";
    $password = "cen4010_s2018";
    $dbName = "test";
    */
        
    $conn = new mysqli($servername, $username, $password, $dbName);
    
    if ($conn->connect_error){
        die("Connection Failed: " . mysqli_connect_error());
    }
    else{
        return $conn;
    }
}

?>