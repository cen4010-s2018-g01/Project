<?php

function Admin(){
    
    if ($_SESSION["admin"] == TRUE){
        echo "<br>";
        echo "<h4>Administrator Functions</h4>";
        echo "<a href='admin/adminForm.php' class='btn btn-info'>ALTER INVENTORY</a>";
    }
    
    else{
        return;
    }
    
}

?>