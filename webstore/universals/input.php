<?php

function Input($hidden, $type, $name, $value, $class, $style, $holder){
    
    if ($hidden === TRUE){
        $hidden = 'hidden';
    }
    else{
        $hidden = '';
    }
    
    return "<input $hidden type='$type' name='$name' id='$name' value='$value' class='$class' style='$style'" .
        "placeholder='$holder''>";
    
}

?>