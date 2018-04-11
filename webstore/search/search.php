<?php

session_start();

if ($_SESSION['userAuthorized'] !== TRUE){
    header('Location: ../index.php');
    exit();
}

include 'smain.php';
include 'decode.php';

$page = $_SERVER['REQUEST_URI'];

$chunks = Decode("&", DecodeRight("?", $page));
$parameter = DecodeRight("=", $chunks[0]);
$category = DecodeRight("=", $chunks[1]);
        
?> 




<!DOCTYPE html>

<html>
    
    <script src="../universals/scripts.js"></script>
    
    <head>
        <link rel="stylesheet" type="text/css" href="../universals/style.css">
    </head>
        
    <body>
        <?php
            Search($parameter, $category);
        ?>
        
    </body>
</html>
