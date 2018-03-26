<?php

function printResults($result, $array){
    
    if ($result != "" && $result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
                
            $seperator = " ";
            if ($row[$array[3]] != "" && $row[$array[4]] != ""){
                $seperator = " | ";
            }
                
                
            echo
                "<br>Newark Part Number: " . $row[$array[0]] .
                "<br>Product Name: " . $row[$array[1]] . 
                "<br>Stock Keeping Unit: " . $row[$array[2]].
                "<br>Keywords: " . $row[$array[3]] . $seperator . $row[$array[4]] .
                "<br>Quantity: " . $row[$array[5]] .  
                "<br>Price: $" . $row[$array[6]] . 
                "<br>";
            }
        }
    
    else{
        echo "<br><br>Zero results.";
    }
    
}


?>