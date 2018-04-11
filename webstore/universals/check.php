<?php

function CheckSingleEntry($entry){
    
    if ($entry && $entry->num_rows === 1){
        return true;
    }
    
    else{
        return false;
    }
    
}

function CheckEquals($left, $right){
    
    if ($left === $right){
        return true;
    }
    
    else{
        return false;
    }
}

function CheckTableExists($dbname, $table){
    
    $sql = "SELECT * FROM `information_schema`.`TABLES` WHERE `TABLE_SCHEMA` = '" . $dbname . "' AND `TABLE_NAME` = '" . $table . "'; ";
    
    $results = SendQuery($sql);
    
    return CheckSingleEntry($results);
    
}

?>