<?php

function EmptyCart(){

    unset($_SESSION["cart"]);
    $_SESSION["cart"] = array();
    
}

?>