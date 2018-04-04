<?php
    session_start();

    include "../search/input.php";

    if ($_SESSION['userAuthorized'] !== TRUE){
        header('Location: ../index.php');
        exit();
    }

    include "../universals/check.php";
    
    if (!isset($_SESSION['userAuthorized'])){
        header('Location: ../index.php');
        exit();
    }
    
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
        
        if (sizeof($_SESSION["cart"]) > 0){
            echo "<br>Your cart contains:<br><br>";
            $number = 1;
            
            for ($i = 0; $i < sizeof($_SESSION["cart"]); $i++){
                $j = $i + 1;
                echo "[" . $j . "]<br>";
                echo "<p>Part Number:</p>";
                echo "<p class = 'indented'>" . $_SESSION["cart"][$i][1] . "</p>";
                echo "<p>Quantity:</p>";
                echo "<p class = 'indented'>" . $_SESSION["cart"][$i][2] . "</p>";
                echo "<p>Total Price:</p>";
                echo "<p class = 'indented'>$" . $_SESSION["cart"][$i][2] * $_SESSION["cart"][$i][3] . "</p>";
                echo "<br><form method='post' onsubmit='return validate(false, $number)' action= 'remove.php' id=form" . $number . ">";
                echo Input(TRUE, 'number', 'column', $i);
                echo Input(TRUE, 'number', 'row', '2');
                echo Input(TRUE, 'text', 'partNumber', $_SESSION["cart"][$i][1]);
                echo "<p>" . Input(FALSE, 'number', 'itemQuant', "") . "</p>";
                echo "<p>" . Input(FALSE, 'submit', 'submit', 'Remove from Cart') . "</p>";
                echo "</form>";
                echo "<br><br>";
                $number++;
            }
        }
        
        else{
            echo "<br>You have no items in your cart.";
        }
    }

?>

<!DOCTYPE html>

<html>
    <script src="../universals/scripts.js"></script>
    <style>
        .indented {
            padding-left: 30pt;
        }
        p{
            padding-left: 15pt;
            margin: 0px;
        }
    </style>
    <body>
        <?php Cart(); ?>
    </body>
</html>
