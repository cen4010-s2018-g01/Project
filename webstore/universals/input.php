<?php

function Input($hidden, $type, $name, $value){
    
    if ($hidden === TRUE){
        $hidden = 'hidden';
    }
    else{
        $hidden = '';
    }
    
    return "<input $hidden type='$type' name='$name' id='$name' value='$value'>";
    
}

?>