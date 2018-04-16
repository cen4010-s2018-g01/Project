<?php

function Collate($database, $table){
    
    $array = array();
    
    $array[] = getColumn($database, $table, 'npn');
    $array[] = getColumn($database, $table, 'desc');
    $array[] = getColumn($database, $table, 'sku');
    $array[] = getColumn($database, $table, 'keyword');
    /*
    $array[] = getColumn($database, $table, 'keyword1');
    $array[] = getColumn($database, $table, 'keyword2');
    */
    $array[] = getColumn($database, $table, 'quant');
    $array[] = getColumn($database, $table, 'price');
    
    return $array;
    
}

?>