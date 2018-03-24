<?php

function Search($conn){    
    
    $databaseName = "test";
    $tableName = "inventory";
    $tableAlias1 = "beans";
    $tableAlias2 = "tacos";

    if (isset($_POST['searchParam'])){
    
        $searchParam = $_POST['searchParam'];
        $searchType = $_POST['searchType'];
        $sql = 
            "SELECT * FROM 
                (SELECT `COLUMN_NAME` 
                AS $tableAlias1 
                FROM `INFORMATION_SCHEMA`.`COLUMNS` 
                WHERE `TABLE_SCHEMA`='$databaseName' 
                AND 
                `TABLE_NAME`='$tableName'
                ) 
            AS $tableAlias2  
            WHERE $tableAlias1 LIKE '%" . $searchType . "%'";
        
        $columnName = $conn->query($sql);
        $columnName = $columnName -> fetch_assoc();
        $columnName = $columnName['beans'];
        
        if (strpos(strtoupper($columnName), 'KEY') !== FALSE){
            $sql = "
                (SELECT * 
                FROM `$tableName` 
                 WHERE 
                `Keyword1` 
                LIKE '%$searchParam%'
                ) 
                    UNION
                (SELECT * 
                FROM `$tableName` 
                WHERE 
                `Keyword2` 
                LIKE '%$searchParam%'
                )";
            $columnName = 'keyword';
        }
        
        else{
            $sql = 
                "SELECT * 
                FROM `$tableName` 
                WHERE `$columnName` 
                LIKE '%$searchParam%'";
        }
        
        $result = $conn->query($sql);
    
        $array = GetColumnNames($conn);
        
         echo
            "<br> SEARCH RESULTS <br>
            <br> Search Term: '" . strtoupper($searchParam) . 
             "'<br> Search Category: " . strtoupper($columnName) . 
             "<br>" . str_repeat("-",50) . "<br>";
        
        
        if ($result != "" && $result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                
                $seperator = " ";
                if ($row[$array[3]] != "" && $row[$array[4]] != ""){
                    $seperator = " | ";
                }
                
                
                echo
                    "<br>Newark Part Number: " . $row[$array[0]] .
                    "<br>Product Name: " . $row[$array[1]] . 
                    "<br>Stock Keeping Unit: " . $row[$array[2]].
                    "<br>Keywords: " . $row[$array[3]] . $seperator . $row[$array[4]] .
                    "<br>Quantity: " . $row[$array[5]] .  
                    "<br>Price: $" . $row[$array[6]] . 
                    "<br>";
                }
            }
          else{
            echo "<br><br>Zero results.";
          }
        
    }
}

function getColumnNames($conn){
    
    $databaseName = "test";
    $tableName = "inventory";
    $tableAlias1 = "beans";
    $tableAlias2 = "tacos";
    
    $keywordPrice = "price";
    $keywordPartNum = "newark";
    $keywordName = "name";
    $keywordSKU = "sku";
    $keywordQuantity = "quant";
    $keywordKeywords = "key";
    
    $sql = 
        "SELECT * FROM 
            (SELECT `COLUMN_NAME` 
            AS $tableAlias1 
            FROM `INFORMATION_SCHEMA`.`COLUMNS` 
            WHERE 
                `TABLE_SCHEMA` = '$databaseName' 
                AND 
                `TABLE_NAME` = '$tableName'
            ) 
        AS $tableAlias2 
        WHERE $tableAlias1 
        LIKE '%$keywordSKU%'";
    
    $skuColumn = $conn->query($sql);
    $skuColumn = $skuColumn ->fetch_assoc();
    $skuColumn = $skuColumn['beans'];
    
    $sql = 
        "SELECT * FROM 
            (SELECT `COLUMN_NAME` 
            AS $tableAlias1 
            FROM `INFORMATION_SCHEMA`.`COLUMNS` 
            WHERE 
                `TABLE_SCHEMA` = '$databaseName' 
                AND 
                `TABLE_NAME` = '$tableName'
            ) 
        AS $tableAlias2 
        WHERE $tableAlias1 
        LIKE '%$keywordName%'";
    
    $nameColumn = $conn->query($sql);
    $nameColumn = $nameColumn ->fetch_assoc();
    $nameColumn = $nameColumn['beans'];
    
    $sql = 
        "SELECT * FROM 
            (SELECT `COLUMN_NAME` 
            AS $tableAlias1 
            FROM `INFORMATION_SCHEMA`.`COLUMNS` 
            WHERE 
                `TABLE_SCHEMA` = '$databaseName' 
                AND 
                `TABLE_NAME` = '$tableName'
            ) 
        AS $tableAlias2 
        WHERE $tableAlias1 
        LIKE '%$keywordPartNum%'";
    
    $partNumColumn = $conn->query($sql);
    $partNumColumn = $partNumColumn ->fetch_assoc();
    $partNumColumn = $partNumColumn['beans'];
    
    $sql = 
        "SELECT * FROM 
            (SELECT `COLUMN_NAME` 
            AS $tableAlias1 
            FROM `INFORMATION_SCHEMA`.`COLUMNS` 
            WHERE 
                `TABLE_SCHEMA` = '$databaseName' 
                AND 
                `TABLE_NAME` = '$tableName'
            ) 
        AS $tableAlias2 
        WHERE $tableAlias1 
        LIKE '%$keywordQuantity%'";
    
    $quantityColumn = $conn->query($sql);
    $quantityColumn = $quantityColumn ->fetch_assoc();
    $quantityColumn = $quantityColumn['beans'];
    
    $sql = 
        "SELECT * FROM 
            (SELECT `COLUMN_NAME` 
            AS $tableAlias1 
            FROM `INFORMATION_SCHEMA`.`COLUMNS` 
            WHERE 
                `TABLE_SCHEMA` = '$databaseName' 
                AND 
                `TABLE_NAME` = '$tableName'
            ) 
        AS $tableAlias2 
        WHERE 
        $tableAlias1 
        LIKE '%$keywordPrice%'";
    
    $priceColumn = $conn->query($sql);
    $priceColumn = $priceColumn ->fetch_assoc();
    $priceColumn = $priceColumn['beans'];
    
    $sql = 
        "SELECT * FROM 
            (SELECT `COLUMN_NAME` 
            AS $tableAlias1 
            FROM `INFORMATION_SCHEMA`.`COLUMNS` 
            WHERE 
                `TABLE_SCHEMA` = '$databaseName' 
                AND 
                `TABLE_NAME` = '$tableName'
            ) 
        AS $tableAlias2 
        WHERE $tableAlias1 
        LIKE '%$keywordKeywords%'";
    
    $keywordColumn = $conn->query($sql);
    $keyword1Column = $keywordColumn ->fetch_assoc();
    $keyword1Column = $keyword1Column['beans'];
    $keyword2Column = $keywordColumn ->fetch_assoc();
    $keyword2Column = $keyword2Column['beans'];
    
    $names = array($partNumColumn, 
              $nameColumn, 
              $skuColumn, 
              $keyword1Column, 
              $keyword2Column, 
              $quantityColumn, 
              $priceColumn);
    
    return $names;
}

?>