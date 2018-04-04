<?php

include "../universals/check.php";

function PrintIntro($parameter, $column){
    
    if (CheckEquals(strtoupper($column), "KEYWORD1") || CheckEquals(strtoupper($column),  "KEYWORD2")){
        $column = "keywords";
    }
    
    echo
            "<br> SEARCH RESULTS <br>
            <br> Search Term: " . strtoupper($parameter) . 
             "<br> Search Category: " . strtoupper($column) . "<br>";
    
    echo 
                "<b><br>[Search Entry Number]" . 
                "<p>Newark Part Number</p>" . 
                "<p>Name / Description</p>" .
                "<p>Stock Keeping Unit</p>" .
                "<p>Quantity</p>" .
                "<p>Price</p>" .
                "<br><p>Keywords</p></b>";
    
    echo
        "<br>" . str_repeat("=",50) . "<br>";
    
}
?>