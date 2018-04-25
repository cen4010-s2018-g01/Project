<?php

include_once("../connection/query.php");

function FetchOne($table, $column, $mod, $parameter){
    
    $sql = 
        "SELECT * FROM `" . $table . "` " . 
        "WHERE `" . $column .  "` " . $mod . " '" . $parameter . "'";
    
    return SendQuery($sql);
    
}

function FetchTwo($table, $column1, $mod1, $parameter1, $column2, $mod2, $parameter2){
    
    $sql = 
        "SELECT * FROM `" . $table . "` " . 
        "WHERE `" . $column1 . "` " . $mod1 . " '" . $parameter1 . 
        "' AND `" . $column2 . "` " . $mod2 . " '" . $parameter2 . "'";
    
    return SendQuery($sql);
    
}

function FetchUnion($table1, $column1, $mod1, $parameter1, $table2, $column2, $mod2, $parameter2){
    $sql = "
        (SELECT * 
        FROM `$table1` 
        WHERE 
        `$column1` 
        $mod1 '$parameter1'
        ) 
            UNION
        (SELECT * 
        FROM `$table2` 
        WHERE 
        `$column2` 
        $mod2 '$parameter2'
        )";
    
    return SendQuery($sql);
}

function FetchSub($entry, $category){
    return $entry[$category];
}

function FetchAssoc($entry){
    return $entry -> fetch_assoc();
}

?>