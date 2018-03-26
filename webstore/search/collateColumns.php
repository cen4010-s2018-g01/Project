<?php

function collate($conn, $database, $table){
    
    $array = array();
    
    array_push($array, getColumnName($conn, $database, $table, 'newark'));
    array_push($array, getColumnName($conn, $database, $table, 'name'));
    array_push($array, getColumnName($conn, $database, $table, 'sku'));
    array_push($array, getColumnName($conn, $database, $table, 'keyword1'));
    array_push($array, getColumnName($conn, $database, $table, 'keyword2'));
    array_push($array, getColumnName($conn, $database, $table, 'quant'));
    array_push($array, getColumnName($conn, $database, $table, 'price'));
    
    return $array;
    
}

?>