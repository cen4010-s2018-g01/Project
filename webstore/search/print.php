<?php

include "input.php";

function PrintResults($result, $array){
    $number = 1;
    $add = "Add";
    
    if ($result != "" && $result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
                
            $seperator = " ";
            if ($row[$array[3]] != "" && $row[$array[4]] != ""){
                $seperator = "</p><p class='indented'> ";
            }
                        
            echo 
                "[$number]" . 
                "<p><b>" . $row[$array[0]] . "</b></p>" . 
                "<p>" . $row[$array[1]] . "</p>" .
                "<p>" . $row[$array[2]]. "</p>" .
                "<p>" . $row[$array[5]] . "</p>" .
                "<p>$" . $row[$array[6]] . "</p>" .
                "<br><p>Keywords: </p><p class='indented'>" . $row[$array[3]] . $seperator . $row[$array[4]] . "</p>" .
                "<form id='form$number' method='post'" .
                " action='../cart/cart.php'" .
                " onsubmit='return validate(true, $number)'" .
                "><br>" . 
                Input(TRUE, 'text', 'partNumber', $row[$array[0]]) . 
                Input(TRUE, 'text', 'stockNumber', $row[$array[2]]) .
                Input(TRUE, 'number', 'price', $row[$array[6]]) . 
                Input(TRUE, 'text', 'url', $_SERVER['REQUEST_URI']) .
                "<p>" . 
                Input(FALSE, 'number', 'itemQuant', NULL) .
                "</p><p>" . 
                Input(FALSE, 'submit', NULL, 'Add to Cart') . 
                "</p>" . 
                
                //"<input hidden type='text' name='stockNumber' value=" . $row[$array[2]] . ">" .
                //"<input hidden type='text' id= 'partNumber' name='partNumber' value=" . $row[$array[0]] . ">" . 
                //"<input hidden type='number' name='price' value=" . $row[$array[6]] . ">" .  
                //"<input hidden type='text' name='url' value=" . $_SERVER['REQUEST_URI'] . ">" . 
                //"<input type='number' id='itemQuant' name='itemQuant'>" . 
                //"<input type='submit' value='Add to Cart'>" . 
                
                "</form>" . 
                 
                "<br>" . str_repeat("-",50) . "<br>";
            
            $number = $number + 1;
        }

    }
    
    else{
        echo "<br><br>Zero results.";
    }
    
}

?>