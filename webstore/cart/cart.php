<?php
session_start();

include_once('../universals/check.php');
include_once('display.php');
include_once('../universals/links.php');
include_once('../universals/allowed.php');

CheckAllowed();


function Cart(){

    echo "<div class='text-center'>";
    CreateLinks(TRUE, FALSE, TRUE);
    echo "</div>";

    echo "<div class='text-center'>";
    echo "<div class='row'>";
    echo "<div class='col-sm-6'>";
    echo "<form action='clear.php' onsubmit='return confirmation(true)'>";
    echo Input(FALSE, "submit", "clear", "Clear Cart", 'btn btn-danger', '');
    echo "</form>";
    echo "</div>";
    echo "<div class='col-sm-6'>";
    echo "<form action='purchase.php' onsubmit='return confirmation(false)'>";
    echo Input(FALSE, "submit", "purchase", "Purchase All", 'btn btn-success', '');
    echo "</form>";
    echo "</div></div></div>";
    
    if (isset($_POST["itemQuant"])){

        $added = false;

        $quant = $_POST["itemQuant"];
        $pn = $_POST["partNumber"];
        $sku = $_POST["stockNumber"];
        $price = $_POST["price"];

        $group[] = $sku;
        $group[] = $pn;
        $group[] = $quant;
        $group[] = $price;
        
        echo "<div class='ml-4 mr-4'>";
        
        if ($quant <= 0 || !is_nan($quant)){
            echo 
                "<br>Invalid quantity<br>" . 
                "<a href='" . $_POST['url'] . "'>Click Here</a> to go back to your search results";
            return;
        }
        
        for ($i = 0; $i < sizeof($_SESSION["cart"]); $i++){
            for ($j = 0; $j < sizeof($group); $j++){
                if (CheckEquals($sku, $_SESSION["cart"][$i][$j])){
                    $_SESSION["cart"][$i][2] = $_SESSION["cart"][$i][2] + $group[2];
                    $_SESSION["cart"][$i][3] = $group[3];
                    $added = true;
                }
            }
        }

        if (CheckEquals($added, FALSE)){
            $_SESSION["cart"][] = $group;
        }
    }

    if (isset($_POST['url'])){
        echo "<br><br>" . $quant . " of " . $pn . " has been added to your cart.<br>"; 
        echo "<a href='" . $_POST['url'] . "'>Click Here</a> to go back to your search results<br>";
    }

    echo "</div>";
    
    if (sizeof($_SESSION["cart"]) > 0){
        echo "<div class='ml-4 mr-4'>";
            echo "<br>Your cart contains:<br><br>";
        echo "</div>";
            DisplayContents(TRUE);
    }

    else{
        echo "<div class='ml-4 mr-4'>";
        echo "<br>You have no items in your cart.";
        echo "</div>";
    }
}

?>

<!DOCTYPE html>

<html>
    <head>
        <script src="../universals/scripts.js"></script>
        <link rel="stylesheet" type="text/css" href="../universals/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <?php Cart(); ?>
    </body>
</html>
