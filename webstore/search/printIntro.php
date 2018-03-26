<?php

function printIntro($parameter, $column){
    
    echo
            "<br> SEARCH RESULTS <br>
            <br> Search Term: '" . strtoupper($parameter) . 
             "'<br> Search Category: " . strtoupper($column) . 
             "<br>" . str_repeat("-",50) . "<br>";
    
}
?>