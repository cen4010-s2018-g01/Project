<?php

function CheckAllowed(){
    if ($_SESSION['userAuthorized'] !== TRUE){
        header('Location: ../index.php');
        exit();
    }
}

?>