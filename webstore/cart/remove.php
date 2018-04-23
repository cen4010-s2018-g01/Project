<?php

session_start();

include_once('../univerals/allowed.php');

CheckAllowed();

$removeQuant = $_POST['itemQuant'];
$i = $_POST['column'];
$j = $_POST['row'];

$_SESSION["cart"][$i][$j] = $_SESSION["cart"][$i][$j] - $removeQuant;

if ($_SESSION["cart"][$i][$j] <= 0){
    for ($k = $i; $k < (sizeof($_SESSION["cart"]) - 1); $k++){
        $_SESSION["cart"][$k] = $_SESSION["cart"][$k + 1];
    }
    array_pop($_SESSION["cart"]);
}

header("Location: cart.php");

?>