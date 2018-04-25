<?php

include_once('../universals/input.php');

function PrintResults($result, $array){
    $number = 1;
    $add = "Add";
    $switch = 0;
    
    if ($result != "" && $result->num_rows > 0){
        
        
        while($row = $result->fetch_assoc()) {
            
            if ($switch === 0){
                echo "<div class='card-deck ml-1 mr-1'>";
                $switch = $switch + 1;
            }
            /*
            $seperator = " ";
            if ($row[$array[3]] != "" && $row[$array[4]] != ""){
                $seperator = "</p><p class='indented'> ";
            }
            */
                        
            echo 
                "<div class='card'>" . 
                "<div class='card-header'>" . 
                "<b>" . $number . "]</b>  " . 
                $row[$array[0]] .
                "</div>" . 
                "<p>" . $row[$array[1]] . "<br>" .
                "" . $row[$array[2]]. "<br>" .
                "" . $row[$array[4]] . "<br>" .
                "$" . $row[$array[5]] . "<br>" .
                "<i>Keywords:</i> </p><p class='indented'>" . $row[$array[3]] ./* $seperator . $row[$array[4]] .*/ "</p><br>" .
                "<form id='form$number' method='post'" .
                " action='../cart/cart.php'" .
                " onsubmit='return validate(true, $number)' class='mt-2 mb-2'>" . 
                Input(TRUE, 'text', 'partNumber', $row[$array[0]], '', '', '') . 
                Input(TRUE, 'text', 'stockNumber', $row[$array[2]], '', '', '') .
                Input(TRUE, 'number', 'price', $row[$array[5]], '', '', '') . 
                Input(TRUE, 'text', 'url', $_SERVER['REQUEST_URI'], '', '', '') .
                "<p>" . 
                Input(FALSE, 'text', 'itemQuant', '', 'form-control', 'width:10rem', 'Amount') . " " . 
                Input(FALSE, 'submit', NULL, 'Add to Cart', 'btn btn-success', '', '') . 
                "</p>" . 
                
                //"<input hidden type='text' name='stockNumber' value=" . $row[$array[2]] . ">" .
                //"<input hidden type='text' id= 'partNumber' name='partNumber' value=" . $row[$array[0]] . ">" . 
                //"<input hidden type='number' name='price' value=" . $row[$array[5]] . ">" .  
                //"<input hidden type='text' name='url' value=" . $_SERVER['REQUEST_URI'] . ">" . 
                //"<input type='number' id='itemQuant' name='itemQuant'>" . 
                //"<input type='submit' value='Add to Cart'>" . 
                
                "</form>" . 
                "</div>";
                 
                //"<br>" . str_repeat("-",50) . "<br>";
            
            $number = $number + 1;
            
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
    
    else{
        echo "<br><br>Zero results.";
    }
    
}

?>