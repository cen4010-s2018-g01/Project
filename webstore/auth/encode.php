<?php

function Encode($password){
        
    return password_hash($password, PASSWORD_DEFAULT);
    
}

?>