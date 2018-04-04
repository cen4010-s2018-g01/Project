<!DOCTYPE html>

<?php 
    include "auth.php";
    session_start();

    if (!isset($_SESSION['userAuthorized']) === TRUE){
        header('Location: ../index.php');
        exit();
    }
?>

<html>
    <head>
    </head>
    
    <body>
    
    <?php LogIn() ?>
        
    </body>
    
</html>