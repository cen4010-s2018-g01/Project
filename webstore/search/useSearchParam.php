<?php

function lookup($conn, $table, $column, $parameter){
    
    if (strpos(strtoupper($column), 'KEY') !== FALSE){
        $sql = "
            (SELECT * 
            FROM `$table` 
            WHERE 
            `Keyword1` 
            LIKE '%$parameter%'
            ) 
                UNION
            (SELECT * 
            FROM `$table` 
            WHERE 
            `Keyword2` 
            LIKE '%$parameter%'
            )";
        $column = "Keyword";
    }

    else{
        $sql = 
            "SELECT * 
            FROM `$table` 
            WHERE `$column` 
            LIKE '%$parameter%'";
    }
    
    $result = $conn->query($sql);
    return $result;
}
?>