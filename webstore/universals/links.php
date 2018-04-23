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
        "<form action='../index.php'>" . 
        Input(FALSE, 'submit', 'submit1', 'Back to Login', 'btn btn-info', '', '') . 
        "</form>" . 
        "</div>";
    
    if ($search === TRUE){
        echo "<div class='col-sm-$divider'>" . 
            "<form action='../entry.php'>" . 
            Input(FALSE, 'submit', 'submit2', 'Back to Search Entry', 'btn btn-info', '', '') . 
            "</form>" . 
            "</div>";
    }
    
    if ($cart === TRUE){
        echo "<div class='col-sm-$divider'><form action='../cart/cart.php'>" . 
            Input(FALSE, 'submit', 'submit3', 'Go to Cart', 'btn btn-info', '', '') . 
            "</form>" . 
            "</div>";
    }
    
    if ($orders === TRUE){
        echo "<div class='col-sm-$divider'><form action='../orders/orders.php'>" . 
            Input(FALSE, 'submit', 'submit3', 'Go to Orders', 'btn btn-info', '', '') . 
            "</form>" . 
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
    
    echo "<div class='col-sm-$divider'><form action='index.php'><input type='submit' class='btn btn-info' value='Back to Login'></form></div>";
    
    if ($search === TRUE){
        echo "<div class='col-sm-$divider'><form action='entry.php'><input type='submit' class='btn btn-info' value='Back to Search Entry'></form></div>";
    }
    
    if ($cart === TRUE){
        echo "<div class='col-sm-$divider'><form action='cart/cart.php'><input type='submit' class='btn btn-info' value='Go To Cart'></form></div>";
    }
    
    if ($orders === TRUE){
        echo "<div class='col-sm-$divider'><form action='orders/orders.php'><input type='submit' class='btn btn-info' value='Go To Orders'></form></div>";
    }
    
    echo "</div>";
}

?>