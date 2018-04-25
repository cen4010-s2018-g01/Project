<?php

include_once("../connection/query.php");

function GetColumn($database, $table, $type){
    
    $alias1 = "beans";
    $alias2 = "tacos";
    
    $sql = 
        "SELECT * FROM 
            (SELECT `COLUMN_NAME` 
            AS $alias1 
            FROM `INFORMATION_SCHEMA`.`COLUMNS` 
            WHERE `TABLE_SCHEMA`='$database' 
            AND 
            `TABLE_NAME`='$table'
            ) 
        AS $alias2  
        WHERE $alias1 LIKE '%" . $type . "%'";

    $column = SendQuery($sql);
    $column = $column -> fetch_assoc();
    return $column[$alias1];
}
?>