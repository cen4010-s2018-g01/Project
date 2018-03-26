<?php

function getColumnName($conn, $database, $table, $type){
    
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

    $column = $conn->query($sql);
    $column = $column -> fetch_assoc();
    $column = $column[$alias1];
    return $column;
}
?>