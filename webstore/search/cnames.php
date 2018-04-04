<?php

function Categories($type){
    
    $categories = array();
    
    $categories[] = "SKU";
    $categories[] = "DESC";
    $categories[] = "KEYWORD1";
    $categories[] = "KEYWORD2";
    $categories[] = "NEWARK";
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
            $type = "KEY";
            break;
        case "NEWARK":
            $type = $categories[4];
            break;
        case "QUANTITY":
            $type = $categories[5];
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