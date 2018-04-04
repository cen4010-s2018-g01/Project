<?php

include "connect.php";

function SendQuery($sql){
    
    $conn = Connect();
    
    $result = $conn -> query($sql);
    $conn -> close();
    return $result;    
}

?>