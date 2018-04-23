<?php

include "../universals/check.php";

function PrintIntro($parameter, $column){
    
    if (CheckEquals(strtoupper($column), "KEYWORD1") || CheckEquals(strtoupper($column),  "KEYWORD2")){
        $column = "keywords";
    }
    
    echo
        "<div class='ml-4 mr-4 mt-4'>" . 
        "Search Term: <i>" . strtoupper($parameter) . "</i>" . 
        "<br> Search Category: <i>" . strtoupper($column) . "</i>" .  
        "</div>";
    
    echo 
        "<div class='card ml-4 mr-4' style='width: 30rem'>" . 
        "<div class='card-header'><b>Search Entry Number]</b> " . 
        "Newark Part Number</div>" . 
        "<p>Name / Description</p>" .
        "<p>Stock Keeping Unit</p>" .
        "<p>Quantity</p>" .
        "<p>Price</p>" .
        "<br><p>Keywords</p>" . 
        "</div><br><br>";
    
}
?>