<?php

include 'collateColumns.php';
include 'getColumnName.php';
include 'printIntro.php';
include 'printResults.php';
include 'useSearchParam.php';

function Search($conn){    
    
    $database = "test";
    $table = "inventory";
    
    if (isset($_POST['searchParam'])){
        $parameter = $_POST['searchParam'];
        $type = $_POST['searchType'];
        $column = getColumnName($conn, $database, $table, $type);
        $result = lookup($conn, $table, $column, $parameter);
        
        printIntro($parameter, $column);
    
        printResults($result, collate($conn, $database, $table));  
    }
    
    else{
        echo "No results.";
    }
        
}

?>