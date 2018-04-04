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
    
    <style>
        .indented {
            padding-left: 30pt;
        }
        p{
            padding-left: 15pt;
            margin: 0px;
        }
    </style>
        
    <body>
        <?php
            Search($parameter, $category);
        ?>
        
    </body>
</html>
