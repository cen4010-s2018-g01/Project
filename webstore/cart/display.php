<?php

include_once('../universals/input.php');

function DisplayContents($bool){
    
    $switch = 0;
    $number = 1;

    for ($i = 0; $i < sizeof($_SESSION["cart"]); $i++){
        $j = $i + 1;
        
        if ($switch === 0){
            echo "<div class='card-deck ml-1 mr-1'>";
            $switch = $switch + 1;
        }
        
        echo "<div class='card'>";
        
        echo "<div class='card-header'><b>$j]</b> " . 
            $_SESSION["cart"][$i][1] . 
            "</div>";
        
        echo "<p>" . 
            "Quantity: " . $_SESSION["cart"][$i][2] . 
            "<br>" . 
            "Total Price: $" . $_SESSION["cart"][$i][2] * $_SESSION["cart"][$i][3] . "</p>";
        
        if ($bool === TRUE){
            echo "<form method='post' onsubmit='return validate(false, $number)' action='remove.php' id='form" . $number . "'><p>";
            echo Input(TRUE, 'number', 'column', $i, '', '', '');
            echo Input(TRUE, 'number', 'row', '2', '', '', '');
            echo Input(TRUE, 'text', 'partNumber', $_SESSION["cart"][$i][1], '', '', '');
            echo Input(FALSE, 'number', 'itemQuant', '', 'form-control', 'width:20rem', '');
            echo Input(FALSE, 'submit', 'submit', 'Remove from Cart', 'btn btn-warning', '', '');
            echo "</p></form>";
        }
        echo "</div>";
        $number++;
        
        $switch = $switch + 1;
            
        if ($switch === 4){
            echo "</div><br>";
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