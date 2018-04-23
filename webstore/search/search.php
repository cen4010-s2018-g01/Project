<?php

session_start();

include_once('collate.php');
include_once('getc.php');
include_once('intro.php');
include_once('print.php');
include_once('../universals/fetch.php');
include_once('cnames.php');
include_once('../universals/links.php');
include_once('decode.php');
include_once('../universals/allowed.php');

CheckAllowed();

$page = $_SERVER['REQUEST_URI'];

$chunks = Decode("&", DecodeRight("?", $page));
$parameter = DecodeRight("=", $chunks[0]);
$category = DecodeRight("=", $chunks[1]);

function Search($parameter, $category){    
    
    $database = "CEN4010_S2018g01";
    $table = "inventory";
    CreateLinks(TRUE, TRUE, TRUE);
        
    $category = Categories($category);

    $column = GetColumn($database, $table, $category);
    
    /*
    if (strpos(strtoupper($column), 'KEY') !== FALSE){
        $column1 = "KEYWORD1";
        $column2 = "KEYWORD2";
        $results = FetchUnion($table, $column1, "LIKE", "%$parameter%", $table, $column2, "LIKE", "%$parameter%");
    }
    else{
        $results = FetchOne($table, $column, "LIKE", "%$parameter%");
    }
    */
    
    $results = FetchOne($table, $column, "LIKE", "%$parameter%");
                
    PrintIntro($parameter, $column);    
    PrintResults($results, Collate($database, $table));
        
}
?> 




<!DOCTYPE html>

<html>    
    
    <head>
        <script src="../universals/scripts.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="../universals/style.css">
    </head>
        
    <body>
        <?php
            Search($parameter, $category);
        ?>
        
    </body>
</html>
