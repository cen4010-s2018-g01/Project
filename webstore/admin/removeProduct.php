<?php

session_start();

include_once("../universals/fetch.php");
include_once("../connection/query.php");

$sku = $_POST["SKU"];

$db = "cen4010_s2018g01";
$table = "inventory";


if (FetchOne($table, "SKU", "=", $sku)->num_rows <= 0){
    $_SESSION["phrase"] = "Product with Stock Keeping Unit<br><i>" . $sku . "</i><br>does not exist";
    header('Location: adminForm.php');
    return;
}

$sql = "DELETE FROM `$db`.`$table` 
        WHERE
        `SKU` = '$sku';";

SendQuery($sql);

if (FetchOne($table, "SKU", "=", $sku)->num_rows <= 0){
   $_SESSION["phrase"] = "Product with Stock Keeping Unit<br><i>" . $sku . "</i><br>successfully removed"; 
}
header('Location: adminForm.php');

?>