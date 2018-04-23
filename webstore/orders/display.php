<?php

function DisplayOrders($row){
    
    $switch = 0;
    
    
    echo
        "<div class='card-header'>" . 
        "Order Number: " . 
        $row["orderNum"] .
        "</div>" . 
        "<p>SKU: " . 
        $row['sku'] . "<br>" . 
        "Quantity: " . 
        $row['quantity'] . "<br>" . 
        "Price: $" . 
        $row['price'] . "</p>" .
        "<form method='post' onsubmit='return cancel(" . $row["orderNum"] . ")' action='cancel.php' class='mt-2 mb-2'>
            <p><input type='submit' value='Cancel Order'></p>
            <input hidden type='number' name='orderNum' value='" . $row["orderNum"] . "'>
            </form>";

}
?>