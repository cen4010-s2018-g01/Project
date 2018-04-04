<?php

function Decode($symbol, $string){
    
    foreach (explode($symbol, $string) as $token){
        $chunk[] = $token;
    }
    
    return $chunk;
}

function DecodeLeft($symbol, $string){
    
    foreach (explode($symbol, $string) as $token){
        $chunk[] = $token;
    }
    
    return $chunk[0];
}

function DecodeRight($symbol, $string){
    
    foreach (explode($symbol, $string) as $token){
        $chunk[] = $token;
    }
    
    return $chunk[1];
}

?>