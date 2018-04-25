<?php

session_start();

include_once("../universals/fetch.php");
include_once("../connection/query.php");

$sku = $_POST["SKU"];
$npn = $_POST["NPN"];
$key = $_POST["keywords"];
$desc = $_POST["desc"];
$quant = $_POST["quant"];
$price = $_POST["price"];

$db = "cen4010_s2018g01";
$table = "inventory";

if ($quant <= 0 || $price <= 0){
    $_SESSION["phrase"] = "ERROR <br> Invalid inputs in New Product <br> quantity and/or price fields";
    header('Location: adminForm.php');
    return;    
}


if (FetchOne($table, "SKU", "=", $sku)->num_rows > 0){
    $_SESSION["phrase"] = "Product with Stock Keeping Unit<br><i>" . $sku . "</i><br>already exists";
    header('Location: adminForm.php');
    return;
}
if (FetchOne($table, "NPN", "=", $npn)->num_rows > 0){
    $_SESSION["phrase"] = "Product with Part Number<br><i>" . $npn . "</i><br>already exists";
    header('Location: adminForm.php');
    return;
}

$sql = "INSERT INTO `$db`.`$table` (
        `SKU`, 
        `Description`, 
        `Keyword`, 
        `NPN`, 
        `quantity`, 
        `price`) 
        VALUES (
        '$sku', 
        '$desc', 
        '$key', 
        '$npn', 
        '$quant', 
        '$price')";

SendQuery($sql);

if (FetchOne($table, "SKU", "=", $sku) && FetchOne($table, "NPN", "=", $npn)){
    $_SESSION["phrase"] = "Product with Stock Keeping Unit<br><i>" . $sku . "</i><br>successfully created";
}
else{
    $_SESSION["phrase"] = "Product with Stock Keeping Unit<br><i>" . $sku . "</i><br>creation FAILED";
}

header('Location: adminForm.php');
?>
