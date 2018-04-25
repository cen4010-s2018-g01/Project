<?php

session_start();

include_once('../auth/allowed.php');
include_once('../connection/query.php');
include_once('../universals/links.php');
include_once('display.php');
include_once('empty.php');

CheckAllowed();

function totalCost(){
    $total = 0;
    for($i = 0; $i < sizeof($_SESSION["cart"]); $i++){
        $total = $total + ($_SESSION["cart"][$i][3] * $_SESSION["cart"][$i][2]);
    }
    return $total;
}

function Purchase(){

    CreateLinks(TRUE, TRUE, TRUE);
    
    echo "<div class='text-center'>";
    echo "<br>THANK YOU FOR YOUR PURCHASE!<br>";
    
    echo "<br>For a total of $" . totalCost() . "<br>you have purchased:<br><br>";
    echo "</div>";
    
    DisplayContents(FALSE);
    
    $sql = "SELECT MAX(`orderNum`) FROM `CEN4010_S2018g01`.`Orders`; ";
    $max = SendQuery($sql);
    
    if ($max){    
        $max = $max -> fetch_assoc();
        
        if ($max['MAX(`orderNum`)'] === NULL){
            $orderNum = 0;
        }
        
        else{
            $orderNum = $max['MAX(`orderNum`)'];
        }
    }
    
    else{
        $orderNum = 0;
    }
    
    for ($i = 0; $i < (sizeof($_SESSION["cart"])); $i++){
        $sql = 
            "INSERT INTO `Orders` (`username`, `orderNum`, `sku`, `quantity`, `price`) 
            VALUES ('" . $_SESSION["username"] . "', '" . ($orderNum + 1) . "', '" . $_SESSION["cart"][$i][0] . "', '" . 
            $_SESSION["cart"][$i][2] . "', '" . $_SESSION["cart"][$i][2] * $_SESSION["cart"][$i][3] . "' ); ";
        SendQuery($sql);
    }
    
    EmptyCart();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../universals/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <script src="../javascript/scriptsAlpha.js"></script>
    <body>
        <?php Purchase(); ?>
    </body>

</html>