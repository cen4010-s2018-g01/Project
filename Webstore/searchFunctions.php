<?php

function search($conn){
    
    $tableName = "inventory";

    if (isset($_POST['searchParam'])){
    
        $searchParam = $_POST['searchParam'];
        $searchType = $_POST['searchType'];
        $sql = "SELECT * FROM (SELECT `COLUMN_NAME` AS beans FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='test' AND `TABLE_NAME`='inventory') AS tacos WHERE beans LIKE '%$searchType%'";
        $columnName = $conn->query($sql);
        $columnName = $columnName -> fetch_assoc();
        $columnName = $columnName['beans'];
    
        $sql = "SELECT * from $tableName WHERE $columnName LIKE '%$searchParam%'";
        $result = $conn->query($sql);
    
        $array = GetColumnNames($conn);
        
        if ($result != "" && $result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                echo "<br>Stock Keeping Unit: " . $row[$array[0]]. "<br>Product Name: " . $row[$array[1]]. "<br>Newark Part Number: " . $row[$array[2]] . "<br>Quantity: " . $row[$array[3]] .  "<br>Price: $" . $row[$array[4]] . "<br>";
                }
            }
          else{
            echo "Zero results.";
          }
        
    }
}

function getColumnNames($conn){
    
    $keywordPrice = "price";
    $keywordPartNum = "newark";
    $keywordName = "name";
    $keywordSKU = "sku";
    $keywordQuantity = "quant";
    
    $skuColumn = "SELECT * FROM (SELECT `COLUMN_NAME` AS beans FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='test' AND `TABLE_NAME`='inventory') AS tacos WHERE beans LIKE '%$keywordSKU%'";
    $skuColumn = $conn->query($skuColumn);
    $skuColumn = $skuColumn ->fetch_assoc();
    $skuColumn = $skuColumn['beans'];
    
    $nameColumn = "SELECT * FROM (SELECT `COLUMN_NAME` AS beans FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='test' AND `TABLE_NAME`='inventory') AS tacos WHERE beans LIKE '%$keywordName%'";
    $nameColumn = $conn->query($nameColumn);
    $nameColumn = $nameColumn ->fetch_assoc();
    $nameColumn = $nameColumn['beans'];
    
    $partNumColumn = "SELECT * FROM (SELECT `COLUMN_NAME` AS beans FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='test' AND `TABLE_NAME`='inventory') AS tacos WHERE beans LIKE '%$keywordPartNum%'";
    $partNumColumn = $conn->query($partNumColumn);
    $partNumColumn = $partNumColumn ->fetch_assoc();
    $partNumColumn = $partNumColumn['beans'];
    
    $quantityColumn = "SELECT * FROM (SELECT `COLUMN_NAME` AS beans FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='test' AND `TABLE_NAME`='inventory') AS tacos WHERE beans LIKE '%$keywordQuantity%'";
    $quantityColumn = $conn->query($quantityColumn);
    $quantityColumn = $quantityColumn ->fetch_assoc();
    $quantityColumn = $quantityColumn['beans'];
    
    $priceColumn = "SELECT * FROM (SELECT `COLUMN_NAME` AS beans FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='test' AND `TABLE_NAME`='inventory') AS tacos WHERE beans LIKE '%$keywordPrice%'";
    $priceColumn = $conn->query($priceColumn);
    $priceColumn = $priceColumn ->fetch_assoc();
    $priceColumn = $priceColumn['beans'];
    
    $names = array($skuColumn, $nameColumn, $partNumColumn, $quantityColumn, $priceColumn);
    return $names;
}

?>