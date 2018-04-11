<?php
session_start();
include "../universals/query.php";

function FetchOrders(){
    $dbname = 'test';
    $table = 'Orders';
    $sql = "SELECT * FROM `" . $dbname . "`.`" . $table . "` WHERE `username` = '" . $_SESSION["username"] . "'; ";
    return SendQuery($sql);
}

function DisplayOrders(){
    
    $results = FetchOrders();
    $number = 0;
    
    if ($results->num_rows === 0){
        echo "No orders found.";
    }
    
    else{
        echo "<br>Here is a list of your orders:<br><br>";
    }
    
    while ($row = $results->fetch_assoc()){
        echo
            "<p>Order Number:</p>" . 
            "<p class='indented'>" . $row["orderNum"] . "</p>" .
            "<p>SKU: </p>" . 
            "<p class='indented'>" . $row['sku'] . "</p>" . 
            "<p>Quantity: </p>" . 
            "<p class='indented'>" . $row['quantity'] . "</p>" . 
            "<p>Price: </p>" . 
            "<p class='indented'>$" . $row['price'] . "</p>" .
            "<form method='post' onsubmit='return cancel(" . $row["orderNum"] . ")' action='cancel.php'>
                <input type='submit' value='Cancel Order'>
                <input hidden type='number' name='orderNum' value='" . $row["orderNum"] . "'>
                </form><br>";
    }
}

?>

<!DOCTYPE html>
<html>
    <script src='../universals/scripts2.js'> 
    </script>
    
    <head>
        <link rel="stylesheet" type="text/css" href="../universals/style.css">
    </head>
    <body>
        <?php DisplayOrders(); ?>    
    </body>
</html>