<?php

function CheckSingleEntry($entry){
    
    if ($entry && $entry->num_rows === 1){
        return true;
    }
    
    else{
        return false;
    }
    
}

function CheckEquals($left, $right){
    
    if ($left === $right){
        return true;
    }
    
    else{
        return false;
    }
}

?>