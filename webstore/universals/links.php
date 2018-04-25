<?php

include_once('input.php');

function CreateLinks($search, $cart, $orders){

    $divider = 12;
    
    $array = array($search, $cart, $orders);
    
    switch ($array){
        case [TRUE, TRUE, TRUE]:
            $divider = 3;
            break;
        case [FALSE, TRUE, TRUE]:
            $divider = 4;
            break;
        case [TRUE, FALSE, TRUE]:
            $divider = 4;
            break;
        case [TRUE, TRUE, FALSE]:
            $divider = 4;
            break;
        case [TRUE, FALSE, FALSE]:
            $divider = 6;
            break;
        case [FALSE, TRUE, FALSE]:
            $divider = 6;
            break;
        case [FALSE, FALSE, TRUE]:
            $divider = 6;
            break;
        default:
            $divider = 12;
            break;
    }
    echo "<div class='text-center'>";
    
    echo "<br>Logged in as " . strtoupper($_SESSION["firstname"]) . " " . strtoupper($_SESSION["lastname"]) . "<br><br>";
    
    echo "<div class='row'>";
    
    echo "<div class='col-sm-$divider'>" .
        '<a href="../index.php" class="btn btn-info">LOG OUT</a>' . 
        "</div>";
    
    if ($search === TRUE){
        echo "<div class='col-sm-$divider'>" . 
             '<a href="../entry.php" class="btn btn-info">SEARCH</a>' .  
            "</div>";
    }
    
    if ($cart === TRUE){
        echo "<div class='col-sm-$divider'>" . 
             '<a href="../cart/cart.php" class="btn btn-info">CART</a>' . 
            "</div>";
    }
    
    if ($orders === TRUE){
        echo "<div class='col-sm-$divider'>" . 
             '<a href="../orders/orders.php" class="btn btn-info">ORDERS</a>' . 
            "</div>";
    }
    
    echo "</div></div>";
    
    /*
    echo
        "<br>Return to the <a href='../entry.php'>SEARCH ENTRY</a> screen<br>" . 
        "<a href='../index.php'>LOG OUT</a> and return to the Log In screen<br>";
        */
    
}

function CreateLinksEntry($search, $cart, $orders){
    
    $divider = 12;
    
    echo "<br>Logged in as " . strtoupper($_SESSION["firstname"]) . " " . strtoupper($_SESSION["lastname"]) . "<br><br>";  
    
    $array = array($search, $cart, $orders);
    
    
    switch ($array){
        case [TRUE, TRUE, TRUE]:
            $divider = 3;
            break;
        case [FALSE, TRUE, TRUE]:
            $divider = 4;
            break;
        case [TRUE, FALSE, TRUE]:
            $divider = 4;
            break;
        case [TRUE, TRUE, FALSE]:
            $divider = 4;
            break;
        case [TRUE, FALSE, FALSE]:
            $divider = 6;
            break;
        case [FALSE, TRUE, FALSE]:
            $divider = 6;
            break;
        case [FALSE, FALSE, TRUE]:
            $divider = 6;
            break;
        default:
            $divider = 12;
            break;
    }
    
    echo "<div class='row'>";
    
    echo "<div class='col-sm-$divider'>" .
        '<a href="index.php" class="btn btn-info">LOG OUT</a>' . 
        "</div>";
    
    if ($search === TRUE){
        echo "<div class='col-sm-$divider'>" . 
             '<a href="entry.php" class="btn btn-info">SEARCH</a>' .  
            "</div>";
    }
    
    if ($cart === TRUE){
        echo "<div class='col-sm-$divider'>" . 
             '<a href="cart/cart.php" class="btn btn-info">CART</a>' . 
            "</div>";
    }
    
    if ($orders === TRUE){
        echo "<div class='col-sm-$divider'>" . 
             '<a href="orders/orders.php" class="btn btn-info">ORDERS</a>' . 
            "</div>";
    }
    
    echo "</div>";
}

?>