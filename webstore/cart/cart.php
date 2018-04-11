<?php
    session_start();

    if ($_SESSION['userAuthorized'] !== TRUE){
        header('Location: ../index.php');
        exit();
    }

    include "../universals/check.php";
    include "display.php";
    
    
    function Cart(){
        
        echo "Logged in as " . strtoupper($_SESSION["firstname"]) . " " . strtoupper($_SESSION["lastname"]) . "<br>";
        echo
            "<br>Return to the <a href='../entry.php'>SEARCH ENTRY</a> screen<br>" . 
            "<a href='../index.php'>LOG OUT</a> and return to the Log In screen<br>";
        
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
            
            if ($quant <= 0){
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
        
        echo "<br><form action='../orders/orders.php'><input type='submit' value='Goto Orders'></form>";
        
        echo "<br><form action='clear.php' onsubmit='return confirmation(true)'><input type='submit' value='Clear Cart'></form>";
        echo "<form action='purchase.php' onsubmit='return confirmation(false)'><input type='submit' value='Purchase All'></form>";
        
        if (sizeof($_SESSION["cart"]) > 0){
                echo "<br>Your cart contains:<br><br>";
                DisplayContents(TRUE);
        }
        
        else{
            echo "<br>You have no items in your cart.";
        }
    }

?>

<!DOCTYPE html>

<html>
    <script src="../universals/scripts.js"></script>
    <head>
        <link rel="stylesheet" type="text/css" href="../universals/style.css">
    </head>
    <body>
        <?php Cart(); ?>
    </body>
</html>
