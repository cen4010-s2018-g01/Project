<?php

session_start();

include_once("../universals/fetch.php");
include_once("../connection/query.php");

$sku = $_POST["SKU"];
$quant = $_POST["quant"];

$db = "cen4010_s2018g01";
$table = "inventory";


if (FetchOne($table, "SKU", "=", $sku)->num_rows <= 0){
    $_SESSION["phrase"] = "Product with Stock Keeping Unit<br><i>" . $sku . "</i><br>does not exist";
    header("Location: adminForm.php");
    return;
}

$sql = "UPDATE `$db`.`$table` SET `quantity`= $quant WHERE `SKU` = '$sku'";

SendQuery($sql);

$row = FetchOne($table, "SKU", "=", $sku);
$row = $row -> fetch_assoc();

if ($row["quantity"] === $quant){
    $_SESSION["phrase"] = "Product with Stock Keeping Unit<br><i>" . $sku . "</i><br>stock changed to " . $quant;
}
else{
    $_SESSION["phrase"] = "Product with Stock Keeping Unit<br><i>" . $sku . "</i><br>stock change FAILED";
}
header("Location: adminForm.php");

?>