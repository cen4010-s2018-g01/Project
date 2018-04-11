<?php

if (!isset($_SESSION["cart"])){
    $_SESSION["cart"] = array();
}

include 'collate.php';
include 'getc.php';
include 'intro.php';
include 'print.php';
include "../universals/fetch.php";
include 'cnames.php';



function Search($parameter, $category){    
    
    $database = "test";
    $table = "Inventory";
        
    $category = Categories($category);

    $column = GetColumn($database, $table, $category);
    
    if (strpos(strtoupper($column), 'KEY') !== FALSE){
        $column1 = "KEYWORD1";
        $column2 = "KEYWORD2";
        $results = FetchUnion($table, $column1, "LIKE", "%$parameter%", $table, $column2, "LIKE", "%$parameter%");
    }
    else{
        $results = FetchOne($table, $column, "LIKE", "%$parameter%");
    }
    
    echo "Logged in as " . strtoupper($_SESSION["firstname"]) . " " . strtoupper($_SESSION["lastname"]) . "<br>";
    echo
        "<br>Return to the <a href='../entry.php'>SEARCH ENTRY</a> screen<br>" . 
        "<a href='../index.php'>LOG OUT</a> and return to the Log In screen<br>";
    
    echo "<br><form action='../cart/cart.php'><input type='submit' value='Goto Cart'></form>";
    echo "<form action='../orders/orders.php'><input type='submit' value='Goto Orders'></form>";
                
    PrintIntro($parameter, $column);    
    PrintResults($results, Collate($database, $table));
        
}

?>