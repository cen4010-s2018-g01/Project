<?php

include "../universals/query.php";

session_start();

if ($_SESSION['userAuthorized'] !== TRUE){
    header('Location: ../index.php');
    exit();
}

include "display.php";
include "empty.php";

function totalCost(){
    $total = 0;
    for($i = 0; $i < sizeof($_SESSION["cart"]); $i++){
        $total = $total + ($_SESSION["cart"][$i][3] * $_SESSION["cart"][$i][2]);
    }
    return $total;
}

function Purchase(){

    echo "<br>THANK YOU FOR YOUR PURCHASE!<br>";
    
    echo "<br><a href='../orders/orders.php'>Click Here</a> to go to your orders.<br>";
    
    echo "<br>For a total of $" . totalCost() . "<br>you have purchased:<br><br>";
    
    DisplayContents(FALSE);
    
    $sql = "SELECT MAX(`orderNum`) FROM `test`.`Orders`; ";
    $max = SendQuery($sql);
    
    if ($max){    
        $max = $max -> fetch_assoc();
        
        if ($max['MAX(`orderNum`)'] === NULL){
            $orderNum = 0;
        }
        
        else{
            $orderNum = $max['MAX(`orderNum`)'];
        }
    }
    
    else{
        $orderNum = 0;
    }
    
    for ($i = 0; $i < (sizeof($_SESSION["cart"])); $i++){
        $sql = 
            "INSERT INTO `Orders` (`username`, `orderNum`, `sku`, `quantity`, `price`) 
            VALUES ('" . $_SESSION["username"] . "', '" . ($orderNum + 1) . "', '" . $_SESSION["cart"][$i][0] . "', '" . 
            $_SESSION["cart"][$i][2] . "', '" . $_SESSION["cart"][$i][2] * $_SESSION["cart"][$i][3] . "' ); ";
        SendQuery($sql);
    }
    
    EmptyCart();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../universals/style.css">
    </head>
    <script src="../universals/scripts.js"></script>
    <body>
        <?php Purchase(); ?>
    </body>

</html>