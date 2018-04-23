<?php

function Categories($type){
    
    $categories = array();
    
    $categories[] = "SKU";
    $categories[] = "DESC";
    $categories[] = "KEYWORD";
    $categories[] = "NPN";
    $categories[] = "QUANT";
    $categories[] = "PRICE";
    
    switch (strtoupper($type)){
        case "SKU":
            $type = $categories[0];
            break;
        case "NAME":
            $type = $categories[1];
            break;
        case "KEY":
            $type = $categories[2];
            break;
        case "NEWARK":
            $type = $categories[3];
            break;
        case "QUANTITY":
            $type = $categories[4];
            break;
        case "PRICE":
            $type = $categories[5];
            break;
        default:
            echo "Category not found";
    }
    return $type;
}


?>