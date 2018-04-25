<?php

include_once('../connection/query.php');

$orderNum = $_POST["orderNum"];
$sql = "DELETE FROM `Orders` WHERE `orderNum` = '" . $orderNum . "'; ";
SendQuery($sql);

header("Location: orders.php");

?>