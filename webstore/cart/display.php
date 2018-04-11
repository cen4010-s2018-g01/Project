<?php

include "../universals/input.php";

function DisplayContents($bool){
        
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
        
        if ($bool === TRUE){
            echo "<br><form method='post' onsubmit='return validate(false, $number)' action='remove.php' id='form" . $number . "'>";
            echo Input(TRUE, 'number', 'column', $i);
            echo Input(TRUE, 'number', 'row', '2');
            echo Input(TRUE, 'text', 'partNumber', $_SESSION["cart"][$i][1]);
            echo "<p>" . Input(FALSE, 'number', 'itemQuant', "") . "</p>";
            echo "<p>" . Input(FALSE, 'submit', 'submit', 'Remove from Cart') . "</p>";
            echo "</form>";
            echo "<br><br>";
        }
        $number++;
    }
}
?>