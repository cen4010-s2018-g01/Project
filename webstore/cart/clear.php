<?php

session_start();

include_once('../universals/allowed.php');

CheckAllowed();

function ClearCart(){
    unset($_SESSION['cart']);
    $_SESSION['cart'] = array();
    header("Location: cart.php");
}

?>

<!DOCTYPE html>
<html>

    <body>
    
        <?php ClearCart(); ?>
    
    </body>
</html>