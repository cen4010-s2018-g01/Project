<?php
session_start();

include_once('../connection/query.php');
include_once('../universals/links.php');
include_once('display.php');
include_once('../auth/allowed.php');

CheckAllowed();

function FetchOrders(){
    $dbname = 'CEN4010_S2018g01';
    $table = 'Orders';
    $sql = "SELECT * FROM `" . $dbname . "`.`" . $table . "` WHERE `username` = '" . $_SESSION["username"] . "'; ";
    return SendQuery($sql);
}

function Orders(){
    
    $results = FetchOrders();
    $number = 0;
    $switch = 0;
    
    CreateLinks(TRUE, TRUE, FALSE);
    
    if ($results->num_rows === 0){
        echo "<br>No orders found.";
    }
    
    else{
        echo "<br><div class='ml-4'>Here is a list of your orders currently being processed:</div><br>";
    }
    
    while ($row = $results->fetch_assoc()){
        
    if ($switch === 0){
        echo "<div class='card-deck ml-1 mr-1 mb-4'>";
        $switch = $switch + 1;
    }
        
        echo "<div class='card'>";
        
        DisplayOrders($row);
        
        echo "</div>";
        
        $switch = $switch + 1;
        
        if ($switch === 4){
            echo "</div>";
            $switch = 0;
        }
    }
    
    switch ($switch){
        case 3:
            echo "<div class='card border-0'></div></div>";
            break;
        case 2:
            echo "<div class='card border-0'></div>";
            echo "<div class='card border-0'></div></div>";
            break;
        case 1:
            echo "<div class='card border-0'></div>";
            echo "<div class='card border-0'></div>";
            echo "<div class='card border-0'></div></div>";
            break;
        default:
            break;
    }
}

?>

<!DOCTYPE html>
<html>
    <script src='../javascript/scriptsBeta.js'> 
    </script>
    
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../universals/style.css">
    </head>
    <body>
        <?php Orders(); ?>    
    </body>
</html>